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

class Staff_type extends MY_Model {


    public $staff_type_id;
    
    public $staff_type;
    
    public $create_time;

    public $edit_time;
    
    
    protected $table = 'staff_type';

    protected $primary = 'staff_type_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'staff_type_id' => array(
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

        'create_time' => array(
            'type' => 'datetime',
            'null' => true
        ),
        
        'edit_time' => array(
            'type' => 'datetime',
            'null' => true
        ),

    );
    
        public function getType()
    {
        return;
    }

}
