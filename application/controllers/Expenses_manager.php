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
            'expenses_model'
        ));
        $this->output->enable_profiler(true);
       
    }
    
    
    /*
    *@params
    */
    public function index()
    {   
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
        $this->load->view('layout/nav');
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
            'message' => $this->session->flashdata('mssg'),
            'expenses_type' => $expenses_type,
        ]);
    }
    
    /*
    *@params
    */
    public function delete_expense_type($id = '')
    {
        $bank = $this->bank->getOne(array(
            'bank_id' => $id
        ));

        if(!$bank->bank_id)
        {
            show_error("Bank does not exist!");
        }

        $bank->delete();

        redirect(site_url('account/manage_banks'));
    }
    
    /*
    *@params
    */
    public function expenses()
    {
        
    }
    
    
    
    
}
















