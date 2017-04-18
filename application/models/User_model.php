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
class User_model extends MY_Model {


    public $user_id;

    public $username;

    public $password;
    
    public $image;
    
    public $role;
    
    public $status;

    public $create_time;

    public $edit_time;
    
    
    protected $table = 'user';

    protected $primary = 'user_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'user_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        
        'username' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'password' => array(
            'type' => 'varchar',
            'constraint' => '200',
            'null' => true
        ),
        
        'image' => array(
            'type' => 'varchar',
            'constraint' => '250',
            'null' => true
        ),
        
        'role' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true
        ),
        
        'status' => array(
            'type' => 'varchar',
            'constraint' => '100',
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
    
    


}
