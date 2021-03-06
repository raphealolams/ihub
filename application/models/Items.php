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
class Items extends MY_Model {


    public $item_id;

    public $category_name;
    
    public $item_name;
    
    public $price;
    
    public $comment;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'items';

    protected $primary = 'item_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'item_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'category_name' => array(
            'type' => 'INT',
            'constraint' => 11,
            'null' => true
        ),
        
        'item_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'price' => array(
            'type' => 'varchar',
            'constraint' => '100'
        ),
        
        'comment' => array(
            'type' => 'text',
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
    
      /*
    *@params
    */
    public function getCatName()
    {
        $this->load->model('category' , 'category_name_model');
        $status = $this->category_name_model->getOne($this->category_name);
        
        if($status) return $status->category_name;
    }
  


}
