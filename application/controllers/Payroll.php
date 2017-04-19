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
class Payroll extends MY_Controller {
    
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
    public function index()
    {

         $title = "Payroll Types";

        if($this->input->post('submit'))
        {
            $data = array(
                'payroll_type_name' => $this->input->post('payroll_type_name'),
                'payroll_type_status' => $this->input->post('payroll_type_status'),
                'payroll_type_descr' => $this->input->post('payroll_type_descr')
            );
            
            $this->payroll_type->insert($data);
            $this->session->set_flashdata('mssg', 'Payroll Type Successfully Added');
        }
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('payroll/payroll_types' , [
            'title' => $title,
            'message' => $this->session->flashdata('mssg'),
            'payroll_types' =>  $this->payroll_type->getAll(),
        ]);
        $this->load->view('layout/footer');
    }



     public function edit_payroll_type($payroll_type_id = '')
     {
         
        $payroll_type = $this->payroll_type->getOne($payroll_type_id);

        /*
        @params checks if a record is found for the id
        *@params returns boolean (TRUE OR FALSE)
        */
        if(!$payroll_type->payroll_type_id)
        {
            show_error("Payroll Type does not exist!"); 
        }
         
        /*
        *@params saves the record to be updated
        *@params returns boolean
        */
        if($this->input->post('submit'))
        {
           $data = array(
                'payroll_type_name' => $this->input->post('payroll_type_name'),
                'payroll_type_status' => $this->input->post('payroll_type_status'),
                'payroll_type_descr' => $this->input->post('payroll_type_descr')
           );
            $this->payroll_type->update($data, $payroll_type_id);
            $this->session->set_flashdata('mssg' , 'Payroll Type Updated');
            redirect('payroll/index');
        }

        $this->load->view('layout/header');
        $this->load->view('payroll/edit_payroll_types' , [
            'payroll_type' => $payroll_type,
        ]);
        $this->load->view('layout/footer');
     }


     public function delete_payroll_type($payroll_type_id = '')
     {
        $payroll_type = $this->payroll_type->getOne($payroll_type_id);



        if(!$payroll_type->payroll_type_id)
        {
            show_error("Payroll Type does not exist!");
        }

        $payroll_type->delete($payroll_type_id);
        $this->session->set_flashdata('mssg', 'Payroll Type Deleted');

        redirect('payroll/index');
     }
       
     /**
     *
     *
     *
     */
     public function manage($staff_id = '', $month = '' , $year = '')
     {
         $title = 'Manage Payroll';

         $payroll = '';
         $payroll_others = array();
         $payroll_types = array();
         
         // select staf, year and month 
         if( $this->input->post('search'))
         {
                $staff_id = $this->input->post('staff_id');
                $year =  $this->input->post('payroll_others_year');
                $month =  $this->input->post('payroll_others_month');
                redirect('payroll/manage/'.$staff_id.'/'.$month.'/'.$year);
        } 
         if( $this->input->post('view'))
         {
                $staff_id = $this->input->post('staff_id');
                $year =  $this->input->post('payroll_others_year');
                $month =  $this->input->post('payroll_others_month');
                redirect('payroll/view_staff_payroll/'.$staff_id.'/'.$month.'/'.$year);
        }

        if( $this->input->post('generate') )
         {
                $items = $this->input->post('items');
                $amounts =$this->input->post('amounts');
                $year =  $this->input->post('payrollothers_year');
                $month =  $this->input->post('payrollothers_month');

                foreach($items as $payroll_type_id)
                {
                    $payroll = $this->payroll_others->getOne(array(
                        'staff_id' =>  $staff_id ,
                        'payroll_others_month' => $this->input->post('payroll_others_month'),
                        'payroll_others_year' => $this->input->post('payroll_others_year'),
                        'payroll_type_id' => $payroll_type_id
                    ));
                    
                    $amount = element($payroll_type_id , $amounts );
                    
                    // if amount isnt set and the item hasnt been added before
                    if(!$amount && !$payroll->payroll_type_id)
                    {
                        continue;
                    }
                    $payroll->payroll_others_amount = $amount;
                    $payroll->staff_id = $staff_id;
                    $payroll->Payroll_type_id = $payrolltype_id ;
                    $payroll->Payroll_others_month = $month;
                    $payroll->Payroll_others_year = $year;
                    $payroll->insert();
                   
                }
                $this->session->set_flashdata('mssg' , 'Payroll generated successfully');
         }
          
          
          if($staff_id && $month && $year)
          {
               
                $payroll_types =  $this->payroll_type->getAll();
          }
         
          $this->load->view('layout/header');
          $this->load->view('layout/nav');
          $this->load->view('payroll/manage_payroll' , array(
              'staff_id' => $staff_id,
              'month' => $month ,
              'year' => $year , 
              'payroll' => $payroll ,
              'payroll_others' =>$payroll_others ,
             'staffs'  => $this->staff_model->getAll() , 
             'payroll_types' => $payroll_types,
             'years' => range(date('Y') - 3 , date('Y') + 2 ),
             'months' => $this->months,
             'title' => $title,
             'message' => $this->session->flashdata('mssg'),
         ));
         $this->load->view('layout/footer');
     }


     public function edit_payrollothers($id)
     {
        $this->page_title = 'Edit Payrollothers';
        $item = $this->payrollothers->getOne(array(
            'payrollothers_id' => $id
        ));
         $this->_isDialogue();

         
        if($this->input->post('submit'))
        {
            $item->Payrollothers_amount = $this->input->post('Payrollothers_amount');
            $item->save();
            $this->_alert("Payroll item updated successfully!" , 'success' );
        }
         $this->_view('payroll/edit_payrollothers', array(
            'item' => $item
        )) ;
     }

     public function view_staff_payroll($staff_id = '' , $month = '' , $year = '')
     {  
         $staff = $this->staff_model->getOne('' , array(
            'staff_id' => $staff_id
        ));
          
          $items = $this->payroll_others->getAll('' , array(
                'staff_id' => $staff_id,
                'Payroll_others_month' => $month,
                'Payroll_others_year' => $year 
          ));
          $this->load->view('layout/header');
          $this->load->view('layout/nav');
          $this->load->view('payroll/view_staff_payroll', array(
               'staff' => $staff,
               'items' => $items,
               'month' => $month,
               'months' => $this->months,
               'year' => $year
        )) ;
         
        $this->load->view('layout/footer');
     }


     public function bill()
     {

        $title = 'View Payroll';
        $staffs = array();
        $month = date('M');
        $year = date('Y');
        if($this->input->post('search'))
        {
            $month = $this->input->post('month');
            $year = $this->input->post('year');
            $staffs = $this->staff->getAll();
        }
       
       
           //print_r($staffs);
         $this->load->view('layout/header');
         $this->load->view('layout/nav');
         $this->load->view('payroll/payroll_bill', array(
               'staffs' => $staffs,
               'months' => $this->months,
               'month' => $month ,
               'year'  => $year,
               'message' => $this->session->flashdata('mssg'),
               'title' => $title
        )) ;
         $this->load->view('layout/footer');
     }



}
