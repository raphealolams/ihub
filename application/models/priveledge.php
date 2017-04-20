<?php

class Priveledge extends My_Model {

    public $priveledge_id;

    public $priveledge_name;

    public $priveledge_info;

   // public $permissions = '';

//public $mutable = true;

    public $user_id;


     protected $table = 'priveledge';

    protected $primary = 'priveledge_id';

    /**
     * Column definition
     *
     * @var array
     */
    public $columns = array(
        'priveledge_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'priveledge_name' => array(
                    'type' => 'varchar',
                    'constraint' => 40,
        ),
        'priveledge_info' => array(
                    'type' => 'varchar',
                    'constraint' => 300,
        ),
        // 'permissions' => array(
        //     'type' => 'text',
        // ),
        'user_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'default' =>1,
                ),
         'mutable' => array(
                     'type' => 'tinyint',
                     'constraint' => 1             
                     ),
         'create_time' => array(
                     'type' => 'datetime',           
                     ),
         'edit_time' => array(
                     'type' => 'datetime',
                     'null' => true           
                     ),
            );


    }
