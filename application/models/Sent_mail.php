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




class Sent_mail extends My_Model{
	
    public $sentmail_id; 
    
    public $sentmail_sender;
    
    public $sentmail_reciever;
    
    public $sentmail_subject;

	public $sentmail_message;

	public $sentmail_status;
    
    public $create_time;
    
    public $edit_time;

	public $user_id;

    
	protected $table = 'sent_mail';

    protected $primary = 'sentmail_id';


	public $columns = array(

		'sentmail_id'=> array(
			'type' => 'INT',
			'constraint' => 11,
			'unsigned' => TRUE,
			'auto_increment'=> TRUE,
			),

		'sentmail_sender' => array(
			'type' => 'varchar',
            'constraint' => 250,
			'null' => true
			),

		'sentmail_reciever' => array(
			'type' => 'varchar',
            'constraint' => 300 ,
			'null' => true
			),
        
        'sentmail_subject' => array(
			'type' => 'varchar',
            'constraint' => 300 ,
			'null' => true
			),
        
        'sentmail_message' => array(
            'type' => 'text',
            'null' => true
        ),
        
        'sentmail_status' => array(
            'type' => 'varchar',
            'constraint' => 300,
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
        
        'user_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'null' => true
        )
        
        );

}