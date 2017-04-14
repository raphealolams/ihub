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


class Expenses_model extends My_Model {


    public $expenses_id;

    public $expenses_reason;

    public $expenses_amount;

    public $expenses_date;

    public $expenses_type_id;

    public $expenses_status;

    public $create_time;
    
    public $edit_time;


    protected $table = 'expenses';

    protected $primary = 'expenses_id';

     /*
     * Column definition
     * @var array
     */
    
    public $columns = array(
        
        'expenses_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        
        'expenses_reason' => array(
            'type' => 'varchar',
            'constraint' => 120,
            'null'=>true,
        ),
        
        'expenses_amount' => array(
            'type' => 'INT',
            'constraint' => 11,
        ),
        
        'expenses_date' => array(
            'type' => 'date',
        ),
        
        'expenses_type_id' => array(
            'type' => 'INT',
            'constraint' => 11,
        ),
        
        'expenses_status' => array(
            'type' => 'INT',
            'constraint' => 2,
            'default'=>0
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