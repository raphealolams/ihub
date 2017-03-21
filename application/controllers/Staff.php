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
class Staff extends CI_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
          'staff_model',
          'staff_dept',
          'staff_level',
          'staff_status',
          'staff_bank',
          'staff_type'
        ));
        $this->output->enable_profiler(true);
       
    }
       
    /*
    *
    *@params this loads the index page for the staff
    */
    public function index()
    {
         
         $title = "Staff Home";
         $title2 = "Manage Staff Details";
         $staffs = $this->staff_model->getAll();
         $staff_dept = $this->staff_dept->getAll();
         $staff_level = $this->staff_level->getAll();
         $staff_status = $this->staff_status->getAll();
         $employment_type = $this->staff_type->getAll();
        
         $this->load->view('layout/header'); 
         $this->load->view('staff/all_staff', [
         'staffs' => $this->db->get('staff'),
         'staff_dept' => $this->db->get('staff_dept'),
         'staff_level' => $this->db->get('staff_level'),
         'staff_status' => $this->db->get('staff_status'),
         'employment_type' => $this->db->get('staff_type'),
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
    public function edit_staff($id = " ")
    {   

         $staff = $this->staff_model->getOne($id);
         $staff_dept = $this->staff_dept->getAll();
         $staff_level = $this->staff_level->getAll();
         $staff_status = $this->staff_status->getAll();
         $employment_type = $this->staff_type->getAll();
         $this->load->view('staff/edit_staff', [
             'staff' => $staff,
             'message' => $this->session->flashdata('mssg', 'Staff Successfully Updated'),
             'staff_dept' => $this->db->get('staff_dept'),
             'staff_status' => $this->db->get('staff_status'),
             'employment_type' => $this->db->get('staff_type'),
             'staff_level' => $this->db->get('staff_level')
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
        $staff = $this->staff_model->getOne( $id);
        
            if(!$staff->staff_id)
            {
                show_error("Staff doest not exist!");
            }
        
        $this->load->view('staff/view' , array(
            'staff' => $staff
        ));
    }
    
    /*
    *@params this loads the staff dept under the config
    */
    public function manage_dept()
    {
         $title = "Staff Configuration";
         $title2 = "Manage Staff Department";
         $data = $this->staff_dept->getAll();
        
         $this->load->view('layout/header');
         $this->load->view('staff/staff_dept', [
         'query' => $this->db->get('staff_dept'),
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
    *@params Staff Status
    */
    public function manage_status()
    {
         $title = "Staff Configuration";
         $title2 = "Manage Staff Status";
         $data = $this->staff_status->getAll();
        
         $this->load->view('layout/header');
         $this->load->view('staff/staff_status', [
         'query' => $this->db->get('staff_status'),
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
    *@params Manage Employment Type
    */
    public function manage_employment()
    {
        $title = "Staff Configuration";
        $title2 = "Manage Staff Employment Type";
        
        $type = $this->staff_type->getAll();
        $this->load->view('layout/header');
        $this->load->view('staff/employ_type' , [
        'types' => $this->db->get('staff_type'), 
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
    *@params Manage Staff Level
    */
    public function manage_level()
    {
        $title = "Staff Configuration";
        $title2 = "Manage Staff Level";
        
        $type = $this->staff_level->getAll();
        $this->load->view('layout/header');
        $this->load->view('staff/staff_level' , [
        'levels' => $this->db->get('staff_level'), 
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
        $data = $this->staff_level->getOne($id);
        $this->load->view('staff/edit_level', [
            'level' => $data
        ]);
        
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
    }
}
