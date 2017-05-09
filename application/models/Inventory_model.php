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

class Inventory_model extends MY_Model {


    public $inventory_id;
    
    public $inventory_name;
    
    public $inventory_type_id;
    
    public $inventory_amount;
    
    public $create_time;

    public $edit_time;
    
    
    protected $table = 'inventory';

    protected $primary = 'inventory_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'inventory_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        
        'inventory_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
         'inventory_type_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
         'inventory_amount' => array(
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
        $this->load->model('inventory_type' , 'inventory_type');
        $status = $this->inventory_type->getOne($this->inventory_type_id);
        
        if($status) return $status->inventory_type_name;
    }

}
