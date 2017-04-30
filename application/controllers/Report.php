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
            'expenses_model',
            'staff_model',
            'customer_container',
            'expenses_model',
            'user_model',
            'setup_model'
           
        ));
        $this->_secure();
       
    }
    
    public function index()
    {
        
        
        if($this->input->post('search'))
        {
            $month = $this->input->post('month');
            $year = $this->input->post('year');
            redirect('report/print_report/'.$month.'/'.$year);
        }
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()
            
        ]);
        $this->load->view('report/profit_loss' , [
            'message' => $this->session->flashdata('mssg'),
            'title' => 'Generate Report',
            'title2' => 'Profit And Loss Report',
            'months' => $this->months,
            'years' =>  range(date('Y') - 3 , date('Y') + 2 )
        ]);
        $this->load->view('layout/footer');
    }
    
    public function print_report($month = '' , $year = '')
    {
        
        
        $expenses = $this->expenses_model->getExpense($month, $year);
        $income = $this->customer_container->getTotalIncome($month, $year);
        $payables = $this->payroll_others->getTotalPayables($month, $year);
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()   
        ]);
        $this->load->view('report/print_report' , [
            'message' => $this->session->flashdata('mssg'),
            'title' => 'Generated Report',
            'title2' => 'Print Profit and Loss Report',
            'expenses' => $expenses,
            'income' => $income,
            'payables' => $payables,
            'month' => $month,
            'year' => $year
        ]);
        $this->load->view('layout/footer');
    }
    
    public function tax()
    {
        
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()   
        ]);
        $this->load->view('report/tax' , [
            'message' => $this->session->flashdata('mssg'),
            'title' => 'Taxation',
            'title2' => 'Manage Company Taxation',
            'months' => $this->months,
            'years' =>  range(date('Y') - 3 , date('Y') + 2 )
        ]);
        $this->load->view('layout/footer');
    }

}
