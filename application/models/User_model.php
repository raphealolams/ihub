<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Crystalhills
 */
class User_model extends My_Model {


    /**
     * User id's
     * @var int
     */
    public $user_id;

    public $staff_id;

    public $setup_id;

    /**
     * Dates
     * @var date/timestamp
     */

    public $create_time;

    public $edit_time;

    public $user_lastloggedin = '';

    public $super_admin = false;
    /**
     * Other infos
     * @var string
     */

    public $user_name;

    public $user_password;

    public $user_fullname;

    public $user_priveledge = 'Others';
    
    public $password_hashed = false;


    public $photo;

    protected $table = 'user';

    protected $primary = 'user_id';

    
     protected $_recycle = true;
    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'user_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        'user_name' => array(
            'type' => 'varchar',
            'constraint' => 30
        ),
        'user_fullname' => array(
            'type' => 'varchar',
            'constraint' => 100
        ),
        'user_password' => array(
            'type' => 'varchar',
            'constraint' => 300
        ),
        'user_lastloggedin' => array(
            'type' => 'datetime',
            'null' => true
        ),
        'user_priveledge' => array(
            'type' => 'varchar',
            'constraint' => 20
        ),
        'staff_id' => array(
            'type' => 'int',
            'null' => true, 
            'constraint' => 11
        ),
        'setup_id' => array(
            'type' => 'int',
            'default' => '1', 
            'constraint' => 11,
            
        ),
         'create_time' => array(
             'type' => 'datetime',
             //'default' => 'CURRENT_TIMESTAMP'
         ),
      
         'edit_time' => array(
             'type' => 'datetime',
              'null' => true
         ),
          'password_hashed' => array(
            'type' => 'tinyint',
             'default' => 0
        ),
          'photo' => array(
            'type' => 'varchar',
            'constraint' => 1000,
            'null' => true
        ),
        'super_admin' => array(
                'type' => 'tinyint',
                'constraint' => 1             
            ),
        

    );
    
    
     
    public function hashPassword($password= '')
    {
        // leave for now
        if( $this->password_hashed ) return ;
        

        $this->load->helper('security');
        
        $this->user_password = do_hash($password);
        
        $this->password_hashed = true ;
        
        return $this->user_password;
    }
    
    
    /**
     * 
     * @param string $password
     * @return bool
     */
    public function validatePassword($password = '')
    {
         $this->load->helper('security');
        
         if($this->password_hashed)
         {
             echo  $this->user_password ;
             echo '<br>';
             echo do_hash($password);
             
             return ($this->user_password == do_hash($password));
         }
         
         return ($this->user_password == $password);
    }
    

    public function getName()
    {
        return $this->user_fullname;
    }


    public function getPhotoUrl()
    {
        if($this->photo)
        {
            $url = base_url('uploads/users/'.$this->photo) ;
        }
        else
        {
            $url = base_url('uploads/default.jpg');
        }
        return $url;
    }
    
    public function deletePhoto()
    {
        $path = dirname(BASEPATH).'/uploads/users/'.$this->photo;
        
        if($this->photo && file_exists($path)) unlink ($path);
    }

    public function isSuperAdmin()
    {
        return (bool) $this->super_admin;
    }

    public function isAdmin()
    {
        return $this->user_priveledge == 'Admin';
    }

    public function isSemiAdmin()
    {
        return $this->user_priveledge == 'Semi-admin';
    }

    public function isOperator()
    {
        return $this->user_priveledge == 'Operator';
    }

    /**
    * Check for user permission
    */
    public function is($priveledge ='')
    {
        if(is_array($priveledge))
        {
           return in_array($this->user_priveledge  , $priveledge); 
        }

        $roles = func_get_args();

        return in_array($this->user_priveledge  , $roles);
    }
}
