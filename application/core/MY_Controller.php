<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_Model
 *
 * @author Ajilore Raphael
 */
class MY_Controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        
        $this->output->enable_profiler(true);
    }
    
    
    public $current_user;
    
        /**
     *  Make a controller acton secure
     * 
     * @return void
     */
    protected function _secure()
    {
        // user already logged in?
        if($this->current_user && $this->current_user->user_id)  
        {
            return;
        }
        
        $this->_current_user();
        
        if(!$this->current_user || !$this->current_user->user_id)
        {
            redirect('user');
        }
        // user is logged in 
        //$this->current_user_role = $this->current_user->role ;
        
        
    }
    
    /**
     * Get crrent logged in user
     * @return User
     */
    protected function _current_user()
    {
        $user_id = $this->session->userdata("user_id");
        
        if($user_id)
        {
            $this->load->model('user_model');
            $this->current_user = $this->user_model->getOne('' , ['user.user_id' => $user_id]);
        }
        
        return $this->current_user;
    }
}
