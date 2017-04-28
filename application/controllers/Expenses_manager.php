<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Ajilore Raphael
 */

class Expenses_manager extends MY_Controller {
    
    
        public function __construct() {
        parent::__construct();
       
            $this->load->model(array(
            'expenses_type',
            'expenses_model',
            'staff_model',
            'user_model',
            'setup_model'
        ));
            
        $this->_secure();
        
       
    }
    
    
    /*
    *@params
    */
    public function index()
    {   
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $title = "Expense Manager";
        $expenses_type = $this->expenses_type->getAll();
        
        if($this->input->post('submit'))
        {
            $data = array(
                'expenses_type_name' => $this->input->post('expenses_type_name'),
            );
            
            $this->expenses_type->insert($data);
            $this->session->set_flashdata('mssg', 'Expense Type Successfully Added');
            redirect('expenses_manager/index');
        }
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('expenses_manager/add_expenses_type', [
            'message' => $this->session->flashdata('mssg'),
            'title' => $title,
            'expenses_type' => $expenses_type,
        ]);
        $this->load->view('layout/footer');
    }
    
    
    /*
    *@params
    */
    public function edit_expense($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $expenses_type = $this->expenses_type->getOne($id);
        
        if($this->input->post('submit'))
        {
            $data = array (
                'expenses_type_name' => $this->input->post('expenses_type_name'),
            );
            
            $this->expenses_type->update($data,$id);
            $this->session->set_flashdata('mssg', 'Expense Type Successfully Updated');
            redirect('expenses_manager/index');
           
        }
        $this->load->view('layout/header');
        $this->load->view('expenses_manager/edit_expenses_type', [
            'expenses_type' => $expenses_type,
        ]);
    }
    
    /*
    *@params
    */
    public function delete_expense_type($expenses_type_id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        $expenses = $this->expenses_type->getOne($expenses_type_id);

        if(!$expenses->expenses_type_id)
        {
            show_error("Expense does not exist!");
        }

        $expenses->delete($expenses_type_id);
        $this->session->set_flashdata('mssg', 'Expense Type Deleted');

        redirect('expenses_manager/index');
    }
    
    /*
    *@params
    */
    public function expenses()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $title = "Expenses manager";
        $expenses_type = $this->expenses_type->getAll();
        $staffs = $this->staff_model->getAll();

        if($this->input->post('submit'))
        {
            $data = array(
                'expenses_reason' => $this->input->post('expenses_reason'),
                'expenses_amount' => $this->input->post('expenses_amount'),
                'expenses_date' => $this->input->post('expenses_date'),
                'expenses_type_id' => $this->input->post('expenses_type'),
                'collected_by' => $this->input->post('collected_by'),
                'expenses_status' => $this->input->post('expenses_status')
            );
                $this->expenses_model->insert($data);
                $this->session->set_flashdata('mssg' , 'Expenses Successfully Added');
        }
        

        if($this->input->post('search'))
        {
            $from = $this->input->post('date_from');
            $to = $this->input->post('date_to');
            $expenses_type = $this->input->post('expenses_type');
            $where = array( );

            if($from)
            {
                $where['expenses_date >='] = $from;
            }
            if($to)
            {
                $where['expenses_date <='] = $to;
            }
           
            if($expenses_type)
            {
                $where['expenses_type_id'] = $expenses_type;
            }
            
            $expenses = $this->expenses_model->getAll(' ', $where);
        }
        else
        {
              // get expenses registerd for current month and yea
             $expenses =  $this->expenses_model->getAll('', array(
                    'YEAR(expenses_date)' => date('Y'),
                    'MONTH(expenses_date)' => date('m')
             ));
            
        }
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('expenses_manager/add_expenses' , [
            'message' => $this->session->flashdata('mssg'),
            'title' => $title,
            'expenses_type' => $expenses_type,
            'expenses' => $expenses,
            'staffs' => $staffs
            
        ]);
        $this->load->view('layout/footer');
        
    }
    
    /*
    *@params
    */
    public function edit_expenses($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $expenses = $this->expenses_model->getOne($id);
        
        $expenses_type = $this->expenses_type->getAll();
        $staffs = $this->staff_model->getAll();
        
        
        if($this->input->post('submit'))
        {
            $data = array(
                'expenses_reason' => $this->input->post('expenses_reason'),
                'expenses_amount' => $this->input->post('expenses_amount'),
                'expenses_date' => $this->input->post('expenses_date'),
                'expenses_type_id' => $this->input->post('expenses_type'),
                'collected_by' => $this->input->post('collected_by'),
                'expenses_status' => $this->input->post('expenses_status')
            );
                $this->expenses_model->update($data, $id);
                $this->session->set_flashdata('mssg' , 'Expenses Successfully Updated');
                redirect('expenses_manager/expenses');
        }
        
        $this->load->view('layout/header');
        $this->load->view('expenses_manager/edit_expenses' , [
            'expenses_type' => $expenses_type,
            'staffs' => $staffs,
            'expenses' => $expenses
        ]);
        $this->load->view('layout/footer');
        
    }
    
    /*
    *@params
    */
    public function delete_expenses($expenses_id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        $expenses = $this->expenses_model->getOne($expenses_id);
        
        if(!$expenses->expenses_id)
        {
            show_error("Record Does not exist");
        }
        
        $expenses->delete($expenses_id);
        $this->session->set_flashdata('mssg', 'Expenses Successfully Deleted');
        redirect('expenses_manager/expenses');
    }
    
    
    
    
}