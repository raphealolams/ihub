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
class Category extends MY_Model {


    public $category_id;

    public $category_name;
    
    public $comment;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'category';

    protected $primary = 'category_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'category_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'category_name' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
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
    
     public function getCat()
    {
        return;
    }


}
