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

class Drop_off_model extends MY_Model {

    public $drop_id;
    
    public $customer_id;
    
    public $category_name;

    public $item_id;

    public $quantity;

    public $price;
    
    public $total_price;
    
    public $in_basket;
    
    public $invoice_number;

    public $create_time;

    public $edit_time;

    
    protected $table = 'drop_off';

    protected $primary = 'drop_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'drop_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'customer_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'category_name' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'item_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
        ),
        
        'quantity' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true
        ),
        
        'price' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        
        ),
        
        'total_price' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'in_basket' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true
            
        ),
        
        'invoice_number' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => 'null'
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

       /*
    *@params
    */
    public function getCatName()
    {
        $this->load->model('category' , 'category_name_model');
        $status = $this->category_name_model->getOne($this->category_name);
        
        if($status) return $status->category_name;
    }
    
    /*
    *@params
    */
    public function getItemName()
    {
        $this->load->model('items' , 'items_name_model');
        $item = $this->items_name_model->getOne($this->item_id);
        
        if($item) return $item->item_name;
    }
    
    
}
