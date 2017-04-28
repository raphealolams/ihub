<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends MY_Controller {

	
    
     /*
     * Secure all pages
     */
        public function __construct() {
        parent::__construct();
       
            $this->load->model(array(
            'setup_model',
           
        ));
       $this->_secure();
    }
    
    
	public function index()
	{
                
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Others')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
       
        
        if($this->input->post('submit'))
        {
           
            
           // upload image
             $this->load->helper('upload');
             // upload photo
            $folder = '/uploads/';
            $file_name =  'default';
           
            $upload = upload_file('setup_image' , $file_name , $folder  );

            if($upload && is_object($upload))
            {
                $error = $upload;
            }
            else if(is_object($upload))
            {
                
                $this->setup_model->deletePhoto();
                $this->setup_model->image =  $upload->data('file_name');
            }
            
            $row =  $this->setup_model->getOne();
            
            
            
            if($row->setup_id)
            {
               
                $data = array(
            
                'setup_name' => $this->input->post('setup_name'),
                'setup_address' => $this->input->post('setup_address'),
                'setup_phonenumber' => $this->input->post('setup_phonenumber'),
                'sms_username' => $this->input->post('sms_username'),
                'sms_password' => $this->input->post('sms_password'),
                'setup_image' =>  $file_name

                );
                
                $this->setup_model->update($data , $row->setup_id);
                $this->session->set_flashdata('mssg' , 'Setup Information Added');
            }
            else{
                
                 $data = array(
            
                'setup_name' => $this->input->post('setup_name'),
                'setup_address' => $this->input->post('setup_address'),
                'setup_phonenumber' => $this->input->post('setup_phonenumber'),
                'sms_username' => $this->input->post('sms_username'),
                'sms_password' => $this->input->post('sms_password'),
                'setup_image' =>  $data->image =  $upload->data('file_name')

                );
                
                $this->setup_model->insert($data);
                $this->session->set_flashdata('mssg' , 'Setup Information Added');
            }   
        }
        
        
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()
        
        ]);
        $this->load->view('setup/setup' , [
            'message' => $this->session->flashdata('mssg'),
            'title' => $title = 'Setup',
            'title2' => $title2 = 'Manage Company information'
        ]);
        $this->load->view('layout/footer');
	}
    

}