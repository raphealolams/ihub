<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Ajilore Raphael
 */
class Setup_model extends MY_Model {


    public $setup_id;

    public $setup_name;
    
    public $setup_address;
    
    public $setup_phonenumber;
    
    public $setup_image;
    
    public $sms_username;
    
    public $sms_password;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'setup';

    protected $primary = 'setup_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'setup_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'setup_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'setup_address' => array(
            'type' => 'varchar',
            'constraint' => '500',
            'null' => true
        ),
        
        'setup_phonenumber' => array(
            'type' => 'varchar',
            'constraint' => '20',
            'null' => true
        ),
        
        'setup_image' => array(
            'type' => 'varchar',
            'constraint' => '250'
        ),
        
        'sms_username' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'sms_password' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'create_time' => array(
            'type' => 'datetime',
            'null' => true
        ),
        
        'edit_time' => array(
            'type' => 'datetime',
            'null' => true
        ),

    );
    
     public function getPhotoUrl()
    {
        if($this->photo)
        {
            $url = base_url('uploads/'.$this->photo) ;
        }
        else
        {
            $url = base_url('uploads/default.jpg');
        }
        return $url;
    }
    
    public function deletePhoto()
    {
        $path = dirname(BASEPATH).'/uploads/'.$this->photo;
        
        if($this->photo && file_exists($path)) unlink ($path);
    }

}
