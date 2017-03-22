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
class Customer_model extends MY_Model {


    public $customer_id;

    public $surname;

    public $other_name;

    public $gender;

    public $dob;

    public $state;
    
    public $address;
    
    public $phone_number;
    
    public $email;
    
    public $image;
    
    public $customer_type;
    
    public $status;

    public $create_time;

    public $edit_time;

    
    protected $table = 'customer';

    protected $primary = 'customer_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'customer_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'surname' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'other_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'gender' => array(
            'type' => 'varchar',
            'constraint' => '10',
            'null' => true
        ),
        
        'dob' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'state' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'address' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true
        ),
        
        'phone_number' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        
        ),

        'email' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'image' => array(
            'type' => 'varchar',
            'constraint' => '200',
            'null' => true
        ),
        
        'customer_type' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'status' => array(
            'type' => 'varchar',
            'constraint' => '50',
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

     public function getData(){
        $query = $this->db->get(customer);
        return $query->result();
     }
    
    public function getCustomerType()
    {
        $this->load->model('customer_type');
        
    }

       public function getPhotoUrl()
    {
        if($this->image)
        {
            $url = base_url('uploads/customer/'.$this->image) ;
        }
        else
        {
            $url = base_url('uploads/default.jpg') ;
        }
        return $url;
    }
}
