<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Installer extends CI_Controller{

	/**
	 * Index Page for this controller.
	 *
t	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    
	public function index()
	{
        $this->load->dbforge();

            
            
        //Add customer Table
        $this->load->model('customer_model');
        $this->dbforge->add_field($this->customer_model->columns);
        $this->dbforge->add_key('customer_id', TRUE);
        $this->dbforge->create_table('Customer', TRUE);
        
        //Add Customer_Type Table
        $this->load->model('customer_type');
        $this->dbforge->add_field($this->customer_type->columns);
        $this->dbforge->add_key('customer_type_id');
        $this->dbforge->create_table('customer_type', TRUE);
        
        //Add Customer Status Table
        $this->load->model('customer_status');
        $this->dbforge->add_field($this->customer_status->columns);
        $this->dbforge->add_key('customer_status_id');
        $this->dbforge->create_table('customer_status', TRUE);
        
        //Add Customer Container Table
        $this->load->model('customer_container');
        $this->dbforge->add_field($this->customer_container->columns);
        $this->dbforge->add_key('customer_container_id');
        $this->dbforge->create_table('customer_container', TRUE);
        
        //Add Drop Off Table
        $this->load->model('drop_off');
        $this->dbforge->add_field($this->drop_off->columns);
        $this->dbforge->add_key('drop_id');
        $this->dbforge->create_table('drop_off', TRUE);
        
        
        //Add Items Table
        $this->load->model('items');
        $this->dbforge->add_field($this->items->columns);
        $this->dbforge->add_key('items_id');
        $this->dbforge->create_table('items', TRUE);
        
        //Add Staff Table
        $this->load->model('staff_model');
        $this->dbforge->add_field($this->staff_model->columns);
        $this->dbforge->add_key('staff_id');
        $this->dbforge->create_table('staff', TRUE);
        
        //Add Staff Bank Table
        $this->load->model('staff_bank');
        $this->dbforge->add_field($this->staff_bank->columns);
        $this->dbforge->add_key('staff_bank_id');
        $this->dbforge->create_table('staff_bank', TRUE);
        
         //Add Staff Level
        $this->load->model('staff_level');
        $this->dbforge->add_field($this->staff_level->columns);
        $this->dbforge->add_key('staff_level_id');
        $this->dbforge->create_table('staff_level', TRUE);
        
         //Add Staff Dept
        $this->load->model('staff_dept');
        $this->dbforge->add_field($this->staff_dept->columns);
        $this->dbforge->add_key('staff_dept_id');
        $this->dbforge->create_table('staff_dept', TRUE);
        
         //Add Staff Type
        $this->load->model('staff_type');
        $this->dbforge->add_field($this->staff_type->columns);
        $this->dbforge->add_key('staff_type_id');
        $this->dbforge->create_table('staff_type', TRUE);
        
         //Add Staff Items
        $this->load->model('staff_status');
        $this->dbforge->add_field($this->staff_status->columns);
        $this->dbforge->add_key('staff_status_id');
        $this->dbforge->create_table('staff_status', TRUE);
        
        //Add User Table
        $this->load->model('user');
        $this->dbforge->add_field($this->user->columns);
        $this->dbforge->add_key('user_id');
        $this->dbforge->create_table('user', TRUE);
    

        
        
        echo 'Insalled Successfully';
	}


}
