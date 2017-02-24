<?php


$this->load->dbforge();
//$this->db->query('CREATE TABLE');
$fields = array(
    'id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
    ),
    'full_name' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
            'unique' => TRUE,
    ),
    'email' => array(
            'type' =>'VARCHAR',
            'constraint' => '100',
            'unique' => TRUE,
    ),
    'address' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
    ),
    'sex'  => array(
            'type' => 'VARCHAR',
            'constraint' => '10',
    ),
    'age' => array(
          'type' => 'INT',
          'constraint' => '2',
    ),
    'phone_num' => array(
          'type' => 'INT',
          'constraint' => '14',
    ),
);
$this->dbforge->add_key('id', TRUE);
$this->dbforge->add_field($fields);
$this->dbforge->create_table('user_info');
