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
class Staff extends MY_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
          'staff_model',
          'staff_dept',
          'staff_level',
          'staff_status',
          'staff_bank',
          'staff_type',
          'user_model',
          'setup_model'
        ));
        $this->_secure();
    }
       
    /*
    *
    *@params this loads the index page for the staff
    */
    public function index()
    {

    if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
         $title = "Staff Home";
         $title2 = "Manage Staff Details";
         $staffs = $this->staff_model->getAll();
         $staff_dept = $this->staff_dept->getAll();
         $staff_level = $this->staff_level->getAll();
         $staff_status = $this->staff_status->getAll();
         $employment_type = $this->staff_type->getAll();
        
         $this->load->view('layout/header'); 
         $this->load->view('layout/nav' , [
             'users' => $this->user_model->getOne(),
             'set_up' => $this->setup_model->getOne()

         ]);
         $this->load->view('staff/all_staff', [
         'staffs' => $staffs,
         'staff_dept' => $staff_dept,
         'staff_level' => $staff_level,
         'staff_status' => $staff_status,
         'employment_type' => $employment_type,
         'title' => $title,
         'title2' => $title2,
         'message' => $this->session->flashdata('mssg')
         ]);
        $this->load->view('layout/footer');   
    }
    
    /*
    *
    *@params This add staffs 
    */
    public function add_staff()
    {    
        
     if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        if ($this->input->post('submit')) 
        {
            
             // upload image
             $this->load->helper('upload');
             // upload photo
            $folder = '/uploads/staff/';
            $file_name =  'staff-'.'-'.time();
           
            $upload = upload_file('staff_image' , $file_name , $folder  );

            if($upload != -1 && !is_object($upload))
            {
                $error = $upload;
            }
            else if(is_object($upload))
            {
                
                $data->staff_image =  $upload->data('file_name');
            }
            
              $data = array(
                
                'staff_surname' => $this->input->post('staff_surname'),
                'staff_othername' => $this->input->post('staff_othername'),
                'staff_gender' => $this->input->post('staff_gender'),
                'staff_dob' => $this->input->post('staff_dob'),
                'staff_phone_number' => $this->input->post('staff_phone_number'),
                'staff_email' => $this->input->post('staff_email'),
                'staff_state' => $this->input->post('staff_state'),
                'staff_address' => $this->input->post('staff_address'),
                'highest_qualification' => $this->input->post('highest_qualification'),
                'staff_employment_type' => $this->input->post('staff_employment_type'),
                'staff_dept' => $this->input->post('staff_dept'),
                'staff_level' => $this->input->post('staff_level'),
                'staff_status' => $this->input->post('staff_status'),
                'create_time' => $this->input->post('date'),
                //'staff_image' => $data->staff_image =  $upload->data('file_name'),
                );
            
            $this->staff_model->insert($data);
            $this->session->set_flashdata('mssg', 'Staff Added Successfully');
            redirect('customer/index', [
            'title' => $title   
            ]);
           
        }
    }
    /*
    *@params this Loads the edit staff Modal and performs the logic
    */
    public function edit_staff($id = "")
    {   

         if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
         $staff = $this->staff_model->getOne($id);
         $staff_dept = $this->staff_dept->getAll();
         $staff_level = $this->staff_level->getAll();
         $staff_status = $this->staff_status->getAll();
         $employment_type = $this->staff_type->getAll();
         $this->load->view('staff/edit_staff', [
             'staff' => $staff,
             'message' => $this->session->flashdata('mssg', 'Staff Successfully Updated'),
             'staff_dept' => $staff_dept,
             'staff_status' => $staff_status,
             'employment_type' => $employment_type,
             'staff_level' => $staff_level
         ]);
        
        
        if(!$staff || !$staff->staff_id)
        { 
            show_error("Staff does not exist");
        }
        
          if ($this->input->post('submit')) {
              $data = array(
                'staff_surname' => $this->input->post('staff_surname'),
                'staff_othername' => $this->input->post('staff_othername'),
                'staff_gender' => $this->input->post('staff_gender'),
                'staff_dob' => $this->input->post('staff_dob'),
                'staff_phone_number' => $this->input->post('staff_phone_number'),
                'staff_email' => $this->input->post('staff_email'),
                'staff_state' => $this->input->post('staff_state'),
                'staff_address' => $this->input->post('staff_address'),
                'highest_qualification' => $this->input->post('highest_qualification'),
                'staff_employment_type' => $this->input->post('staff_employment_type'),
                'staff_dept' => $this->input->post('staff_dept'),
                'staff_level' => $this->input->post('staff_level'),
                'staff_status' => $this->input->post('staff_status'),
                //'staff_image' => $data->staff_image =  $upload->data('file_name'),
                'edit_time' => $this->input->post('date')
                );
              
           $this->staff_model->update($data, $id);
           $this->session->set_flashdata('mssg', 'Customer Successfully Updated');
            redirect('staff/index', array(
            'staff' => $staff
        ));
    }
}
    /*
    *@params This loads the modal to view Staff details
    */
    public function view($id = "")
    {
        
         if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
         $staff = $this->staff_model->getOne( $id);
        
            if(!$staff->staff_id)
            {
                show_error("Staff doest not exist!");
            }
        
        $this->load->view('staff/view' , array(
            'staff' => $staff
        ));
    }
    
    
    public function delete_staff($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $staff = $this->staff_model->getOne($staff_id);
        
        if(!$staff->staff_id)
        {
            show_error("Staff Record Not Found");
        }
        
        $staff->delete($id);
            
        $this->session->set_flashdata('mssg' , "Staff Deleted");
        
        redirect('staff/index');
    }
    
    /*
    *@params this loads the staff dept under the config
    */
    public function manage_dept()
    {
        
         if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
         $title = "Staff Configuration";
         $title2 = "Manage Staff Department";
         $data = $this->staff_dept->getAll();
        
         $this->load->view('layout/header');
         $this->load->view('layout/nav' , [
             'users' => $this->user_model->getOne(),
             'set_up' => $this->setup_model->getOne()

         ]);
         $this->load->view('staff/staff_dept', [
         'query' => $data,
         'title' => $title,
         'title2' => $title2,
         'message' => $this->session->flashdata('mssg')
         ]);
        $this->load->view('layout/footer'); 
    }
    
    /*
    *@params This Adds Department
    */
    public function add_dept()
    {
        
         if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        if ($this->input->post('submit')) {
            
            $data = array(
              'staff_dept' => $this->input->post('staff_dept'),
              'create_time' => $this->input->post('date')
            );
            
            $this->staff_dept->insert($data);
            $this->session->set_flashdata('mssg', 'Staff Department Added Successfully');
            redirect('staff/manage_dept', [
            'title' => $title,
            'title2' => $title2
            ]);
        }
    }
    
    /*
    *@params This Edit Department for Staff
    */
    
    public function edit_dept($id = "")
    {
       
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        $data = $this->staff_dept->getOne($id);
        $this->load->view('staff/edit_staff_dept', [
            'dept' => $data
        ]);
        
        if(!$data || !$data->staff_dept_id)
        { 
            show_error("Department does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_dept' => $this->input->post('staff_dept'),
                'edit_time' => $this->input->post('date')
            );
            
            $this->staff_dept->update($data, $id);
           $this->session->set_flashdata('mssg', 'Department Successfully Updated');
            redirect('staff/manage_dept', array(
            'dept' => $dept
        ));
        }   
    }
    
    
    /*
    *@params Deletes Staff Department
    */
    public function delete_dept($id = '')
    {
       
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        $staff_dept = $this->staff_dept->getOne($staff_dept_id);
        
        
        if(!$staff_dept->staff_dept_id)
        {
            show_error("Department Not Found");
        }
        
        $staff_dept->delete($id);
        $this->session->set_flashdata('mssg' , 'Department Deleted');
        redirect('staff/manage_dept');
    }
    
    /*
    *@params Staff Status
    */
    public function manage_status()
    {
      
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
         $title = "Staff Configuration";
         $title2 = "Manage Staff Status";
         $data = $this->staff_status->getAll();
        
         $this->load->view('layout/header');
         $this->load->view('layout/nav' , [
             'users' => $this->user_model->getOne(),
             'set_up' => $this->setup_model->getOne()

         ]);
         $this->load->view('staff/staff_status', [
         'query' => $data,
         'title' => $title,
         'title2' => $title2,
         'message' => $this->session->flashdata('mssg')
         ]);
        $this->load->view('layout/footer');
    }
    
    /*
    *@params Add Staff Status
    */
    public function add_status()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_status' => $this->input->post('staff_status'),
                'create_time' => $this->input->post('date')
            );
            $this->staff_status->insert($data);
            $this->session->set_flashdata('mssg', "Staff Status Successfully Added");
            redirect('staff/manage_status');
        }
    }
    
    /*
    *@params Edit Staff Status
    */
    public function edit_status($id = "")
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        $data = $this->staff_status->getOne($id);
        $this->load->view('staff/edit_status', [
            'status' => $data
        ]);
        
        if(!$data || !$data->staff_status_id)
        { 
            show_error("Status does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_status' => $this->input->post('staff_status'),
                'edit_time' => $this->input->post('date')
            );
            
           $this->staff_status->update($data, $id);
           $this->session->set_flashdata('mssg', 'Status Successfully Updated');
            redirect('staff/manage_status');
        }
    }
    
    
    
    /*
    @params Deletes The Staff Status
    */
    public function delete_status($id = '')
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        $staff_status = $this->staff_status->getOne($staff_status_id);
        
        if(!$staff_status->staff_status_id)
        {
            show_error('Staff Status Not Found');
        }
        
        $staff_status->delete($id);
        $this->session->set_flashdata('mssg' , 'Staff Status Deleted');
        redirect('staff/manage_status');
    }
    
    
    
    /*
    *@params Manage Employment Type
    */
    public function manage_employment()
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        $title = "Staff Configuration";
        $title2 = "Manage Staff Employment Type";
        
        $type = $this->staff_type->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('staff/employ_type' , [
        'types' => $type, 
        'title' => $title,
        'title2' => $title2,
        'message' => $this->session->flashdata('mssg')
        ]);
        $this->load->view('layout/footer');
    }
    
    /*
    *@params Add Employment Type
    */

    public function add_type()
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_type' => $this->input->post('staff_type'),
                'create_time' => $this->input->post('date')
            );
            $this->staff_type->insert($data);
            $this->session->set_flashdata('mssg', "Staff Employment Type Successfully Added");
            redirect('staff/manage_employment');
        }
    }
    
    /*
    *@params Edit Employment Types
    */
    public function edit_type($id = " ")
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        $data = $this->staff_type->getOne($id);
        $this->load->view('staff/edit_employ_type', [
            'type' => $data
        ]);
        
        if(!$data || !$data->staff_type_id)
        { 
            show_error("Employment type does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_type' => $this->input->post('staff_type'),
                'edit_time' => $this->input->post('date')
            );
            
           $this->staff_type->update($data, $id);
           $this->session->set_flashdata('mssg', 'Employment Type Successfully Updated');
            redirect('staff/manage_employment');
        }
    }
    
    /*
    *@params Deletes the Staff Employment Type
    */
    public function delete_type($id = '')
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        $staff_type = $this->staff_type->getOne($staff_type_id);
        
        if(!$staff_type->staff_type_id)
        {
            show_error('Staff Employment Type Not Found');
        }
        
        $staff_type->delete($id);
        $this->session->set_flashdata('mssg' , 'Employment Type Deleted');
        redirect('staff/manage_employment');
    }
    
    
       /*
    *@params Manage Staff Level
    */
    public function manage_level()
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        $title = "Staff Configuration";
        $title2 = "Manage Staff Level";
        
        $levels = $this->staff_level->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('staff/staff_level' , [
        'levels' => $levels, 
        'title' => $title,
        'title2' => $title2,
        'message' => $this->session->flashdata('mssg')
        ]);
        $this->load->view('layout/footer');
    }
    
    /*
    *@params Add Staff Level
    */

    public function add_level()
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_level' => $this->input->post('staff_level'),
                'create_time' => $this->input->post('date')
            );
            $this->staff_level->insert($data);
            $this->session->set_flashdata('mssg', "Staff Level Successfully Added");
            redirect('staff/manage_level');
        }
    }
    
    /*
    *@params Edit Staff Level
    */
    public function edit_level($id = " ")
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        $data = $this->staff_level->getOne($id);
       
        
        if(!$data || !$data->staff_level_id)
        { 
            show_error("Staff Level does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'staff_level' => $this->input->post('staff_level'),
                'edit_time' => $this->input->post('date')
            );
            
           $this->staff_level->update($data, $id);
           $this->session->set_flashdata('mssg', 'Staff Level Successfully Updated');
            redirect('staff/manage_level');
        }
         $this->load->view('staff/edit_level', [
            'level' => $data
        ]);
    }
    
    
      
    /*
    *@params Deletes the Staff Level
    */
    public function delete_level($id = '')
    {
    
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Sub-operator' , 'Account')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $staff_level = $this->staff_level->getOne($staff_level_id);
        
        if(!$staff_level->staff_level_id)
        {
            show_error('Staff Level Not Found');
        }
        
        $staff_level->delete($id);
        $this->session->set_flashdata('mssg' , 'Staff Level Deleted');
        redirect('staff/manage_level');
    }
}
