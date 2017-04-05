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

class Staff_model extends MY_Model {

    public $staff_id;
    
    public $staff_surname;
    
    public $staff_othername;

    public $staff_gender;

    public $staff_dob;

    public $staff_phone_number;

    public $staff_email;

    public $nationality;
    
    public $staff_state;
    
    public $staff_address;
    
    public $highest_qualification;
    
    public $staff_employment_type;
    
    public $staff_dept;
    
    public $staff_level;
    
    public $staff_status;
    
    public $staff_image;

    public $create_time;

    public $edit_time;

    
    protected $table = 'staff';

    protected $primary = 'staff_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'staff_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'staff_surname' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_othername' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_gender' => array(
            'type' => 'varchar',
            'constraint' => '10',
            'null' => true
        ),
        
        'staff_dob' => array(
            'type' => 'date',
            'null' => true
        ),
        
        'staff_phone_number' => array(
            'type' => 'varchar',
            'constraint' => '12',
            'null' => true
        ),
        
        'staff_email' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true
        ),
        
        'staff_nationality' => array(
            'type' => 'varchar',
            'constraint' => '100',
            'null' => true
        
        ),

        'staff_state' => array(
            'type' => 'varchar',
            'constraint' => '100',
            'null' => true
        ),
        
        'staff_address' => array(
            'type' => 'text',
            'null' => true
        ),
        
          'highest_qualification' => array(
            'type' => 'varchar',
            'constraint' => '100',
            'null' => false
        ),
        
        'staff_employment_type' => array(
            'type' => 'INT',
            'constraint' => 11,
            'null' => true
        ),
        
        'staff_dept' => array(
            'type' => 'INT',
            'constraint' => 11,
            'null' => true
        ),
        
        'staff_level' => array(
            'type' => 'InT',
            'constraint' => 11,
            'null' => true
        ),
        
        'staff_status' => array(
            'type' => 'INT',
            'constraint' => 11,
            'null' => true
        ),
        
        'staff_image' => array(
            'type' => 'varchar',
            'constraint' => '100',
            'null' => false
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

     /*
    *@params
    */
    public function getName()
    {
            return $this->staff_surname . ' ' . $this->staff_othername;
    }
    
    /*
    *@params
    */
   public function getDeptName()
    {
        $this->load->model('staff_dept' , 'staff_dept_model');
        $dept = $this->staff_dept_model->getOne($this->staff_dept);
        
        if($dept) return $dept->staff_dept;
    }
    
    /*
    *@params
    */
     public function getLevel()
    {
        $this->load->model('staff_level' , 'staff_level_model');
        $level = $this->staff_level_model->getOne($this->staff_level);
        
        if($level) return $level->staff_level;
    }
    
    
     /*
    *@params
    */
     public function getEmploy()
    {
        $this->load->model('staff_type' , 'staff_type_model');
        $dept = $this->staff_type_model->getOne($this->staff_employment_type);
        
        if($dept) return $dept->staff_type;
    }
    
    
    /*
    *@params
    */
    public function getStatus()
    {
        $this->load->model('staff_status' , 'staff_status_model');
        $status = $this->staff_status_model->getOne($this->staff_status);
        
        if($status) return $status->staff_status;
    }
    
    /*
    *@params
    */
    public function getPhotoUrl()
    {
        if($this->staff_image)
        {
            $url = base_url('uploads/staff/'.$this->staff_image) ;
        }
        else
        {
            $url = base_url('uploads/default.jpg') ;
        }
        return $url;
    }
    
}
