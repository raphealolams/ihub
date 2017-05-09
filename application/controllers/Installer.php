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

            
            
        //Add Category Table
        $this->load->model('category');
        $this->dbforge->add_field($this->category->columns);
        $this->dbforge->add_key('category_id', TRUE);
        $this->dbforge->create_table('category', TRUE);
        
        //Add customer Table
        $this->load->model('customer_model');
        $this->dbforge->add_field($this->customer_model->columns);
        $this->dbforge->add_key('customer_id', TRUE);
        $this->dbforge->create_table('Customer', TRUE);
        
        //Add Customer_Type Table
        $this->load->model('customer_type');
        $this->dbforge->add_field($this->customer_type->columns);
        $this->dbforge->add_key('customer_type_id', TRUE);
        $this->dbforge->create_table('customer_type', TRUE);
        
        //Add Customer Status Table
        $this->load->model('customer_status');
        $this->dbforge->add_field($this->customer_status->columns);
        $this->dbforge->add_key('customer_status_id', TRUE);
        $this->dbforge->create_table('customer_status', TRUE);
        
        //Add Customer Container Table
        $this->load->model('customer_container');
        $this->dbforge->add_field($this->customer_container->columns);
        $this->dbforge->add_key('customer_container_id', TRUE);
        $this->dbforge->create_table('customer_container', TRUE);
        
        //Add Drop Off Table
        $this->load->model('drop_off_model');
        $this->dbforge->add_field($this->drop_off_model->columns);
        $this->dbforge->add_key('drop_id', TRUE);
        $this->dbforge->create_table('drop_off', TRUE);
        
        //Add Expenses Type Table
        $this->load->model('expenses_type');
        $this->dbforge->add_field($this->expenses_type->columns);
        $this->dbforge->add_key('expenses_type_id', TRUE);
        $this->dbforge->create_table('expenses_type', TRUE);
        
        //Add Expenses Table
        $this->load->model('expenses_model');
        $this->dbforge->add_field($this->expenses_model->columns);
        $this->dbforge->add_key('expenses_id', TRUE);
        $this->dbforge->create_table('expenses', TRUE);
        
        //Add Inentory Type Table
        $this->load->model('inventory_type');
        $this->dbforge->add_field($this->inventory_type->columns);
        $this->dbforge->add_key('inventory_type_id', TRUE);
        $this->dbforge->create_table('inventory_type', TRUE);
        
        //Add Inentory Table
        $this->load->model('inventory_model');
        $this->dbforge->add_field($this->inventory_model->columns);
        $this->dbforge->add_key('inventory_id', TRUE);
        $this->dbforge->create_table('inventory', TRUE);
        
        //Add Items Table
        $this->load->model('items');
        $this->dbforge->add_field($this->items->columns);
        $this->dbforge->add_key('item_id', TRUE);
        $this->dbforge->create_table('items', TRUE);
        
        //Add Payroll Approved Table
        $this->load->model('payroll_approved');
        $this->dbforge->add_field($this->payroll_approved->columns);
        $this->dbforge->add_key('payroll_approved_id', TRUE);
        $this->dbforge->create_table('payroll_approved', TRUE);
        
        //Add Payroll Others Table
        $this->load->model('payroll_others');
        $this->dbforge->add_field($this->payroll_others->columns);
        $this->dbforge->add_key('payroll_others_id', TRUE);
        $this->dbforge->create_table('payroll_others', TRUE);
        
        //Add Payroll Type Table
        $this->load->model('payroll_type');
        $this->dbforge->add_field($this->payroll_type->columns);
        $this->dbforge->add_key('payroll_type_id', TRUE);
        $this->dbforge->create_table('payroll_type', TRUE);
        
        //Add Priveledge Type Table
        $this->load->model('priveledge');
        $this->dbforge->add_field($this->priveledge->columns);
        $this->dbforge->add_key('priveledge_id', TRUE);
        $this->dbforge->create_table('priveledge', TRUE);
        
        //Add Setup Table
        $this->load->model('setup_model');
        $this->dbforge->add_field($this->setup_model->columns);
        $this->dbforge->add_key('setup_id' , TRUE);
        $this->dbforge->create_table('setup', TRUE);
        
          //Add Sms Table
        $this->load->model('sentsms');
        $this->dbforge->add_field($this->sentsms->columns);
        $this->dbforge->add_key('sentsms_id', TRUE);
        $this->dbforge->create_table('sentsms', TRUE);
        
          //Add Sent Emial Table
        $this->load->model('sent_mail');
        $this->dbforge->add_field($this->sent_mail->columns);
        $this->dbforge->add_key('sentmail_id', TRUE);
        $this->dbforge->create_table('sent_mail', TRUE);
        
          //Add Staff Items
        $this->load->model('staff_status');
        $this->dbforge->add_field($this->staff_status->columns);
        $this->dbforge->add_key('staff_status_id', TRUE);
        $this->dbforge->create_table('staff_status', TRUE);
        
        //Add Staff Bank Table
        $this->load->model('staff_bank');
        $this->dbforge->add_field($this->staff_bank->columns);
        $this->dbforge->add_key('staff_bank_id', TRUE);
        $this->dbforge->create_table('staff_bank', TRUE);
        
         //Add Staff Level
        $this->load->model('staff_level');
        $this->dbforge->add_field($this->staff_level->columns);
        $this->dbforge->add_key('staff_level_id', TRUE);
        $this->dbforge->create_table('staff_level', TRUE);
        
         //Add Staff Dept
        $this->load->model('staff_dept');
        $this->dbforge->add_field($this->staff_dept->columns);
        $this->dbforge->add_key('staff_dept_id', TRUE);
        $this->dbforge->create_table('staff_dept', TRUE);
        
         //Add Staff Type
        $this->load->model('staff_type');
        $this->dbforge->add_field($this->staff_type->columns);
        $this->dbforge->add_key('staff_type_id', TRUE);
        $this->dbforge->create_table('staff_type', TRUE);
        
         //Add Staff Items
        $this->load->model('staff_status');
        $this->dbforge->add_field($this->staff_status->columns);
        $this->dbforge->add_key('staff_status_id', TRUE);
        $this->dbforge->create_table('staff_status', TRUE);
        
        //Add User Table
        $this->load->model('user_model');
        $this->dbforge->add_field($this->user_model->columns);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('user', TRUE);
        
    
        
     // create default user
       $user_data =array(
           'user_name' => 'Admin',
           'user_password' => 'admin',
           'user_fullname' => 'Super Admin',
           'user_priveledge' => 1,
           'create_time' => date('Y m d h:m:s'),
           'user_lastloggedin' => '',
           'edit_time' => '',
           //'user_fullname' => 'Admin',
           'super_admin' => true,
           'user_priveledge' => 'Admin'
       );
       $admin = $this->user_model->getOne(' ' , array('user_name' => 'Admin'));

       if(!$admin->user_id)
       {
           $admin->insert($user_data);
           $admin->hashPassword();

       }


       $this->_createPriveledges();
    
        echo 'Insalled Successfully';
	}
    
    protected function _createPriveledges()
    {
        $priveledges = array(
                array('priveledge_name' => 'Admin' , 'mutable' => false  ,'priveledge_info' => 'Full Access and Control, Can Edit and Delete account'),
                array('priveledge_name' => 'Semi-admin' , 'mutable' => false  ,'priveledge_info' => 'Full Access but Can\'t Edit Other Users Information'),
                array('priveledge_name' => 'Operator' , 'mutable' => false  ,'priveledge_info' => 'Restricted from Users Info  and Administrative Setup Editing'),
                array('priveledge_name' => 'Sub-operator' ,'mutable' => false  , 'priveledge_info' => 'Can not Edit Or Delete Any Information but Can Add Expenses'),
                array('priveledge_name' => 'Account' , 'mutable' => false  ,'priveledge_info' => 'The Finance Department'),
                array('priveledge_name' => 'Others' , 'mutable' => false  , 'priveledge_info' => 'Have Minimum Access as a Staff Member(non-academic staff')
        );

        foreach($priveledges as $p)
        {
            $privelege = $this->priveledge->getOne('' , array( 'priveledge_name' => $p['priveledge_name']));
            $privelege->insert($p);

        }

    }



    public function _createNewColumns()
    {
        // user column
        $this->db->query("ALTER TABLE `user` CHANGE `user_password` `user_password` VARCHAR(300)");
        $this->db->query("ALTER TABLE user ADD user_fullname varchar(100)");
        $this->db->query("ALTER TABLE user ADD photo varchar(1000)");
        $this->db->query("ALTER TABLE user ADD password_hashed tinyint(1)");
        $this->db->query("ALTER TABLE user ADD super_admin tinyint(1)");

    }

}

