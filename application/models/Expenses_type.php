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

class Expenses_type extends My_Model {

    
    public $expenses_type_id;

    public $expenses_type_name;
    
    public $create_time;
    
    public $edit_time;

    
    
    protected $table = 'expenses_type';

    protected $primary = 'expenses_type_id';


    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        
        'expenses_type_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'expenses_type_name' => array(
            'type' => 'varchar',
            'constraint' => 225,
            'null' => true
        ),
        
         'create_time' => array(
             'type' => 'datetime',
             'null' => true
         ),
        
         'edit_time' => array(
             'type' => 'datetime',
             'null' => true
         )


    );


}