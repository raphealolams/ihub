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
class Customer_type extends MY_Model {


    public $customer_type_id;

    public $customer_type_name;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'customer_type';

    protected $primary = 'customer_type_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'customer_type_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'customer_type_name' => array(
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


}
