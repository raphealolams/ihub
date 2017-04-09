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
class Customer_container extends MY_Model {
    
    public $customer_container_id;

    public $customer_id;

    public $status;
    
    public $invoice_number;
    
    public $total;
    
    public $deposit;
    
    public $balance;
    
    public $picked_date;
    
    public $drop_date;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'customer_container';

    protected $primary = 'customer_container_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'customer_container_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'customer_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'status' => array(
            'type' => 'varchar',
            'constraint' => '10',
            'null' => true
        ),
        
        'invoice_number' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        
        'total' => array(
            'type' => 'varchar',
            'constraint' => '20',
            'null' => true
        ),
        
        'deposit' => array(
            'type' => 'varchar',
            'constraint' => '20',
            'null' => true
        ),
        
        'balance' => array(
            'type' => 'varchar',
            'constraint' => '20',
            'null' => true
        ),
       
        'picked_date' => array(
            'type' => 'date',
            'null' => true
        ),
        
        'drop_date' => array(
            'type' => 'date',
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
