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
class Login extends CI_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    
    //
    public function index()
    {
        $this->load->view('login');
    }
    
    
}