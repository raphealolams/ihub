<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author Ajilore Raphael
 */
class Payroll_type extends My_Model{

    public $payroll_type_id;

    public $payroll_type_name;

    public $payroll_type_status;

    public $payroll_type_descr;

    public $staff_id;

    public $create_time;

    public $edit_time;


    protected $table  = 'payroll_type';

    protected $primary = 'payroll_type_id';

    public $columns = array(
        'payroll_type_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

         'payroll_type_name' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),

         'payroll_type_status' => array(
                'type' => 'int',
                'constraint' => '3',
        ),

        'payroll_type_descr' => array(
                   'type' => 'text',
        ),

        'staff_id' => array(
                  'type' => 'int',
                  'constraint' => '11',
                  'null' => true
        ),

        'create_time' => array(
                    'type' => 'datetime',
        ),

        'edit_time' => array(
                    'type' => 'datetime',
                    'null' => true,
        )

    );

    public function isAddition()
    {
        return ((int)$this->payroll_type_status === 2);
    }

    public function isDeduction()
    {
        return ((int)$this->payroll_type_status === 1);
    }
    
}