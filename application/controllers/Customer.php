<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Customer
 *
 * @author Ajilore Raphael
 */
class Customer extends MY_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->model('customer_type');
        $this->load->model('customer_status');
        $this->load->model('setup_model');
        $this->load->model('user_model');
        
        $this->_secure();
       
    }
       
    
    public function index()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
         
         $title = "Customer Home";
         $types = $this->customer_type->getAll();
         $status = $this->customer_status->getAll();
         $customers = $this->customer_model->getAll();
        
         $this->load->view('layout/header'); 
         $this->load->view('layout/nav' , [
             'users' => $this->user_model->getOne(),
             'set_up' => $this->setup_model->getOne()

         ]); 
         $this->load->view('customer/all_customer', [
         'customers' => $customers,
         'types' => $types,
         'status' => $status,
         'title' => $title,
         'message' => $this->session->flashdata('mssg')]);
         
        $this->load->view('layout/footer');   
    }
    
    public function save()
    {    
       if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        if ($this->input->post('submit')) {
            
             // upload image
             $this->load->helper('upload');
             // upload photo
            $folder = '/uploads/customer/';
            $file_name =  'customer-'.'-'.time();
           
            $upload = upload_file('image' , $file_name , $folder  );

            if($upload != -1 && !is_object($upload))
            {
                $error = $upload;
            }
            else if(is_object($upload))
            {
                
                $data->image =  $upload->data('file_name');
            }
            
              $data = array(
                
                'surname' => $this->input->post('surname'),
                'other_name' => $this->input->post('other_name'),
                'gender' => $this->input->post('gender'),
                'dob' => $this->input->post('dob'),
                'state' => $this->input->post('state'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'email' => $this->input->post('email'),
                'image' => $this->input->post('image'),
                'customer_type' => $this->input->post('customer_type'),
                'status' => $this->input->post('status'),
                'create_time' => $this->input->post('date'),
                'image' =>  $data->image =  $upload->data('file_name')
                );
            
            $this->customer_model->insert($data);
            $this->session->set_flashdata('mssg', 'Customer Added Successfully');
            redirect('customer/index', [
            'title' => $title   
            ]);
           
        }
    }
    
    public function edit_customer($id = "")
    {   

        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
         $customer = $this->customer_model->getOne($id);
         $types = $this->customer_type->getAll();
         $status = $this->customer_status->getAll();
         $this->load->view('customer/edit_customer', [
             'customer' => $customer,
             'message' => $this->session->flashdata('mssg'),
             'types' => $types,
             'status' => $status
         ]);
        
        
        if(!$customer || !$customer->customer_id)
        { 
            show_error("Customer does not exist");
        }
        
          if ($this->input->post('submit')) {
              $data = array(
                
                'surname' => $this->input->post('surname'),
                'other_name' => $this->input->post('other_name'),
                'gender' => $this->input->post('gender'),
                'dob' => $this->input->post('dob'),
                'state' => $this->input->post('state'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'email' => $this->input->post('email'),
                'image' => $this->input->post('image'),
                'customer_type' => $this->input->post('customer_type'),
                'status' => $this->input->post('status'),
                'edit_time' => $this->input->post('date')
                );
              
           $this->customer_model->update($data, $id);
           $this->session->set_flashdata('mssg', 'Customer Successfully Updated');
            redirect('customer/index', array(
            'customer' => $customer
        ));
    }
}
    
    public function view($id = "")
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $customer = $this->customer_model->getOne( $id);
            if(!$customer->customer_id)
            {
                show_error("Customer doest not exist!");
            }
        
        $this->load->view('customer/view' , array(
            'customer' => $customer
        ));
    }
    
    public function delete_customer($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $customer = $this->customer_model->getOne($id);

        if(!$customer->$customer_id)
        {
            show_error("Customer does not exist!");
        }

        $customer->delete($id);
        $this->session->set_flashdata('mssg', 'Customer Deleted');

        redirect('customer/index');
    }
    
    public function manage_type()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
         $title = "Customer Type";
         $data = $this->customer_type->getAll();
        
         $this->load->view('layout/header');
         $this->load->view('layout/nav' , [
             'users' => $this->user_model->getOne(),
             'set_up' => $this->setup_model->getOne()

         ]); 
         $this->load->view('customer/manage_type', [
         'query' => $data,
         'title' => $title,
         'message' => $this->session->flashdata('mssg')
         ]);
        $this->load->view('layout/footer'); 
    }
    
    public function add_type()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        if ($this->input->post('submit')) {
            
            $data = array(
              'customer_type_name' => $this->input->post('customer_type_name'),
              'create_time' => $this->input->post('date')
            );
            
            $this->customer_type->insert($data);
            $this->session->set_flashdata('mssg', 'Customer Type Added Successfully');
            redirect('customer/manage_type', [
            'title' => $title   
            ]);
        }
    }
    
    public function edit_type($id = "")
    {
        
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        
        $data = $this->customer_type->getOne($id);
        $this->load->view('customer/edit_type', [
            'type' => $data
        ]);
        
        if(!$data || !$data->customer_type_id)
        { 
            show_error("Customer does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'customer_type_name' => $this->input->post('customer_type_name'),
                'edit_time' => $this->input->post('date')
            );
            
            $this->customer_type->update($data, $id);
           $this->session->set_flashdata('mssg', 'Customer Type Successfully Updated');
            redirect('customer/manage_type', array(
            'customer' => $customer
        ));
        }   
    }
    
    public function delete_type($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $customer_type = $this->customer_type->getOne($customer_type_id);
        
        if(!$customer_type->customer_type_id)
        {
            show_error("Customer Type Does not Exist");
        }
        
        $customer_type->delete($id);
        $this->session->set_flashdata('mssg' , 'Customer Type Deleted');
        redirect('customer/manage_type');
    }
    
    public function manage_status()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
         $title = "Customer Status";
         $title2 = "Manage Customer Status";
         $data = $this->customer_status->getAll();
        
         $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
         $this->load->view('customer/customer_status', [
         'query' => $data,
         'title' => $title,
         'title2' => $title2,
         'message' => $this->session->flashdata('mssg')
         ]);
        $this->load->view('layout/footer');
    }
    
    public function add_status()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        if($this->input->post('submit'))
        {
            $data = array(
                'customer_status_name' => $this->input->post('customer_status_name'),
                'create_time' => $this->input->post('date')
            );
            $this->customer_status->insert($data);
            $this->session->set_flashdata('mssg', "Customer Status Successfully Added");
            redirect('customer/manage_status');
        }
    }
    
    public function edit_status($id = "")
    {
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $data = $this->customer_status->getOne($id);
        $this->load->view('customer/edit_status', [
            'type' => $data
        ]);
        
        if(!$data || !$data->customer_status_id)
        { 
            show_error("Customer does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'customer_status_name' => $this->input->post('customer_status_name'),
                'edit_time' => $this->input->post('date')
            );
            
           $this->customer_status->update($data, $id);
           $this->session->set_flashdata('mssg', 'Customer Status Successfully Updated');
            redirect('customer/manage_status');
        }
    }
    
    
    
    
    public function delete_status($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $customer_status = $this->customer_status->getOne($customer_status_id);
        
        if(!$customer_status->customer_status_id)
        {
            show_error('Status Not Found');
        }
        
        $customer_status->delete($id);
        redirect('customer/manage_status');
    }

}
