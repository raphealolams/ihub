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

class Staff_dept extends MY_Model {


    public $staff_dept_id;
    
    public $staff_dept;
    
    public $create_time;

    public $edit_time;
    
    
    protected $table = 'staff_dept';

    protected $primary = 'staff_dept_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'staff_dept_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'staff_dept' => array(
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

    public function getDept()
    {
        return;
    }

}
