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




class Sentsms extends My_Model{
	
    public $sentsms_id; 

	public $sentsms_message;

	public $sentsms_status;

	public $sentsms_sender;
    
    public $sentsms_reciever;
    
    public $sentsms_datetime;
    
    public $sms_code;
    
    public $create_time;
    
    public $edit_time;

	public $user_id;

    
	protected $table = 'sentsms';

    protected $primary = 'sentsms_id';


	public $columns = array(

		'sentsms_id'=> array(
			'type' => 'INT',
			'constraint' => 11,
			'unsigned' => TRUE,
			'auto_increment'=> TRUE,
			),

		'sentsms_message' =>array(
			'type' => 'TEXT',
			'null' => FALSE,
			),

		'sentsms_status' =>array(
			'type' => 'INT',
            'constraint' => 11,
			'null' => FALSE,
			),
        
        'sentsms_sender' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
            'null' => FALSE,
            ),
        
        'sentsms_reciever' => array(
            'type' => 'TEXT',
            'null' => FALSE,
            ),
        
        'sentsms_datetime' => array(
            'type' => 'DATETIME',
            'null' => FALSE,
            ),
        
        'create_time' => array(
            'type' => 'DATETIME',
            'null' => true,
            ),
        
        'edit_time' => array(
            'type' => 'DATETIME',
            'null' => true,
            ),

		'user_id' =>array(

			'type' => 'INT',
			'constraint'=> 11,
			'null' => FALSE,
			)
		);



}