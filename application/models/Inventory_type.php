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

class Inventory_type extends MY_Model {


    public $inventory_type_id;
    
    public $inventory_type_name;
    
    public $create_time;

    public $edit_time;
    
    
    protected $table = 'inventory_type';

    protected $primary = 'inventory_type_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'inventory_type_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        
        'inventory_type_name' => array(
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
