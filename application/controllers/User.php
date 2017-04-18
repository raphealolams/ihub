<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Lecturer
 *
 * @author Ajilore Raphael
 */
class User extends MY_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        
    }
    
    //
    public function index()
    {
        
        
        
        
        
        
        
        
        
        
        
        $this->load->view('layout/header');
        $this->load->view('user/login' , [
            'message' => $this->session->set_flashdata('mssg')
        ]);
        //$this->load->view('layout/footer');
        
    }
    
    
}