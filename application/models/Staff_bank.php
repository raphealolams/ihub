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
class Staff_bank extends MY_Model {


    public $staff_bank_id;

    public $staff_name;
    
    public $staff_acc_name;
    
    public $staff_acc_number;
    
    public $staff_bank;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'staff_bank';

    protected $primary = 'staff_bank_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'staff_bank_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'staff_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_acc_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_acc_number' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'staff_bank' => array(
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
