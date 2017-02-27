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

class Staff_items extends My_Model {


    public $staff_item_id;

    public $staff_type;
    
    public $staff_dept;
    
    public $staff_level;
    
    public $staff_status;
    
    public $create_time;

    public $edit_time;
    
    
    protected $table = 'staff_items';

    protected $primary = 'staff_items_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'staff_items_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'staff_type' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_dept' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_level' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_status' => array(
            'type' => 'varchar',
            'constraint' => '100'
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
