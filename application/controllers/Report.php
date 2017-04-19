<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Staff
 *
 * @author Ajilore Raphael
 */
class Report extends MY_Controller {
    
    public $months = array(
        1 => "January",
        2 => "February",
        3 => "March",
        4 => "April",
        5 => "May",
        6 => "June",
        7 => "July",
        8 => "August",
        9 => "September",
        10 => "October",
        11 => "November",
        12 => "December"
    );

     /**
     * Secure all pages
     */
        public function __construct() {
        parent::__construct();
       $this->load->model(array(
            'payroll_type',
            'payroll_others',
            'payroll_approved',
            'staff_model'
           
        ));
        $this->output->enable_profiler(true);
       
    }

}
