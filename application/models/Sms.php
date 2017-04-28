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




class Sms extends My_Model{
	
    public $sms_id; 

	public $user_creditbalance;

	public $user_lastcreditadd;

	public $user_lastcreditadddate;

	public $user_id;

    
	protected $table = 'sms';

    protected $primary = 'sms_id';


	public $columns = array(

		'sms_id'=> array(
			'type' => 'INT',
			'constraint' => 11,
			'unsigned' => TRUE,
			'auto_increment'=> TRUE,
			),

		'user_creditbalance' =>array(

			'type' => 'INT',
			'constraint'=> 20,
			'null' => FALSE,
			),

		'user_lastcreditadd' =>array(
			'type' => 'INT',
            'constraint' => 20,
			'null' => FALSE,
			),
        
        'user_lastcreditadddate' => array(
            'type' => 'DATETIME',
            'null' => FALSE,
            ),

		'user_id' =>array(

			'type' => 'INT',
			'constraint'=> 11,
			'null' => FALSE,
			)
		);




}