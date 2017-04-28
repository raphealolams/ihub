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
class Payroll_others extends My_Model{

    public $payroll_others_id;

    public $staff_id;

    public $payroll_others_amount;

    public $payroll_others_type;

    public $payroll_type_id;

    public $payroll_others_month;

    public $payroll_others_year;

    public $payroll_others_default;

    public $create_time;

    public $edit_time;


     /**
    * Used for the payrol
    *
    */
    public $total_addition;


    public $staff_surname;
    public $staff_othername;
    public $payroll_type_status;

    /**
    *@var Payrolltype
    *
    */
    private $item;

    protected $table  = 'payroll_others';

    protected $primary = 'Payroll_others_id';

    public $columns = array(
        'payroll_others_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

         'staff_id' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

         'payroll_others_amount' => array(
                'type' => 'int',
                'constraint' => '11',
        ),

        'payroll_others_type' => array(
                   'type' => 'int',
                   'constraint' => '11',
        ),

        'payroll_type_id' => array(
                   'type' => 'int',
                   'constraint' => '11'
        ),

        'payroll_others_month' => array(
                  'type' => 'int',
                  'constraint' => '11',
        ),

        'payroll_others_year' => array(
                    'type' => 'int',
                    'constraint' => '11',
        ),

        'payroll_others_default' => array(
                    'type' => 'int',
                    'constraint' => '4',
                    'default' => '2',
        ),

        'create_time' => array(
                    'type' => 'datetime',
        ),

        'edit_time' => array(
                    'type' => 'datetime',
                    'null' => true,
        )

    );

    public function getItem()
    {
        if($this->item)
        {
            return $this->item;
        }
        $CI = get_instance();
        $this->item = $this->payroll_types->getOne('' , array(
            'payroll_type_id' => $this->payroll_type_id
        )) ;

        return $this->item ;
    }
    
    
    public function getItemName()
    {
        $item = $this->getItem();
        return $item->payroll_type_name ;
    }

    
    
    public function getAmount()
    {
         return $this->payroll_others_amount;
    }

    
    
    public function getItemDescription()
    {
        $item = $this->getItem();
        return $item->payroll_type_descr ;
    }


    public function isAddition()
    {
        $CI = get_instance();
        $type = $this->payroll_type->getOne(' ' , array(
            'payroll_type_id' => $this->payroll_type_id
        )) ;
        return $type->isAddition();
    }

    
    
    
    public function isDeduction()
    {
        $CI = get_instance();
        $type = $this->payroll_type->getOne(' ' , array(
            'payroll_type_id' => $this->payroll_type_id
        )) ;
        return $type->isDeduction();
    }

    
    
    
     public function getParollDeductionAmount( $month , $year)
    {

         $fields = array(
                'SUM(payroll_others_amount) as total_addition'
        );

        $this->db->select($fields);
        $this->db->join('payroll_type' , 'payroll_type.payroll_type_id = payroll_others.payroll_type_id' );
         $this->db->where(array(
            'payroll_others.payroll_others_month' => $month,
            'payroll_others.payroll_others_year' => $year,
            'payroll_type.payroll_type_status' => 1
        ));
        $total_addition = $this->db->get('payroll_others')->result()[0]->total_addition;
        return $total_addition;
    }

    
    
    
    
    public function getParollAdditionAmount($month , $year)
    {

        $this->db->join('payroll_type' , 'payroll_type.payroll_type_id = payroll_others.payroll_type_id' );
         $this->db->where(array(
            'payroll_others.payroll_others_month' => $month,
            'payroll_others.payroll_others_year' => $year,
            'payroll_type.payroll_type_status' => 2,
        ));

        $fields = array(
                'SUM(payroll_others_amount) as total_deduction'
        );

        $this->db->select($fields);
        $total_deduction = $this->db->get('payroll_others')->result()[0]->total_deduction;
        return  $total_deduction;
    }
    
    
    /*
    *@params returns Int
    *@params gets the Total Payment for the month
    */
    public function getTotalPayables($month , $year)
    {
         $fields = array(
                'SUM(payroll_others_amount) as total_payables'
        );

        $this->db->select($fields);
         $this->db->where(array(
            'YEAR(payroll_others_year)' => date($year),
            'MONTH(payroll_others_month)' => date($month),
        ));
        $total_payables = $this->db->get('payroll_others')->result()[0]->total_payables;
        return $total_payables;
    }


}
