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
    
    public $collected_by;

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
        
        'collected_by' => array(
            'type' => 'INT',
            'constraint' => 11,
            'null' => true
        ),
        
        'expenses_status' => array(
            'type' => 'varchar',
            'constraint' => 50,
            'default'=> 'null'
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
 
    /*
    *@params
    */
    public function getExpenseType()
    {
    
        $this->load->model('expenses_type' , 'expenses_type');
        $status = $this->expenses_type->getOne($this->expenses_type_id);
        
        if($status) return $status->expenses_type_name;
    }
    
    /*
    *@params
    */
    public function getStaffName()
    {
    
        $this->load->model('staff_model' , 'staff_model');
        $status = $this->staff_model->getOne($this->collected_by);
        
        if($status) return $status->staff_surname .' '. $status->staff_othername;
    }
    
  
}