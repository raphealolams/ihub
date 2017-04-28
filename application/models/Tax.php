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

class Tax extends MY_Model {


    public $tax_id;
    
    public $tax_amount;
    
    public $tax_month;
    
    public $tax_year;
    
    public $user_id;
    
    public $create_time;

    public $edit_time;
    
    
    protected $table = 'tax';

    protected $primary = 'tax_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'tax_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        
        'tax_amount' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
         'tax_month' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
         'tax_year' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
         'user_id' => array(
            'type' => 'int',
            'constraint' => 11,
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
