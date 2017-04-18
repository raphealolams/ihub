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
class Payroll_approved extends My_Model{

    public $payroll_approved_id;

    public $payroll_approved_month;

    public $payroll_approved_year;

    public $payroll_approved_amtpaid;

    public $create_time;

    public $edit_time;


    protected $table  = 'payroll_approved';

    protected $primary = 'payroll_approved_id';

    public $columns = array(
        'payroll_approved_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

         'payroll_approved_month' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

         'payroll_approved_year' => array(
                'type' => 'int',
                'constraint' => '11',
        ),

        'payroll_approved_amtpaid' => array(
                   'type' => 'int',
                   'constraint' => '11',
        ),

        'create_time' => array(
                  'type' => 'datetime',
        ),

        'edit_time' => array(
                    'type' => 'datetime',
                    'null' => true,
        )

    );
}
