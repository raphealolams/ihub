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

    public $item_id;

    public $customer_id;

    public $picked;
    
    public $invoice_number;
    
    public $picked_date;

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
        
        'item_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'customer_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'picked' => array(
            'type' => 'varchar',
            'constraint' => '10',
            'null' => true
        ),
        
        'invoice_number' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'picked_date' => array(
            'type' => 'datetime',
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
