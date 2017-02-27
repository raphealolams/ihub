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

class Drop_off extends My_Model {

    public $drop_id;
    
    public $customer_container_id;
    
    public $customer_id;

    public $item_id;

    public $item_name;

    public $customer_type;

    public $quantity;

    public $price;
    
    public $discount;
    
    public $total_price;
    
    public $deposit;
    
    public $balance;
    
    public $comment;
    
    public $status;
    
    public $drop_date;
    
    public $pickup_date;
    
    public $invoice_number;

    public $create_time;

    public $edit_time;

    
    protected $table = 'drop_off';

    protected $primary = 'drop_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'drop_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'customer_container_id' => array(
            'type' => 'int',
            'constraint' => '250',
            'null' => true
        ),
        
        'customer_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'item_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'item_name' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'customer_type' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'quantity' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true
        ),
        
        'price' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        
        ),

        'discount' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'total_price' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'deposit' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'balance' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'comment' => array(
            'type' => 'text',
            'null' => true
        ),
        
        'status' => array(
            'type' => 'int',
            'constraint' => '2',
            'null' => true
        ),
        
        'drop_date' => array(
            'type' => 'datetime',
            'null' => false
        ),
        
        'picked_date' => array(
            'type' => 'datetime',
            'null' => false
        ),
        
        'invoice_number' => array(
            'type' => 'varchar',
            'constraint' => '200',
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


}
