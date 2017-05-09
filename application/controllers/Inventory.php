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
class Inventory extends MY_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
    
        $this->_secure();
        
        $this->load->model(array(
            'inventory_type',
            'inventory_model',
            'user_model',
            'setup_model'
        ));
       
    }
    
    public function index()
    {
        
        
      if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
        
        
        if($this->input->post('submit'))
        {
            $data = array(
                    'inventory_type_name' => $this->input->post('inventory_type')
            );
            
            $this->inventory_type->insert($data);
            $this->session->set_flashdata('mssg' , "Inventory Type Added");
        }
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()
        ]);
        $this->load->view('inventory/add_type' , [
            'title' => "Inventory Page",
            'title2' => "Manage Company Inventory",
            'inventory_types' => $this->inventory_type->getAll(),
            'message' => $this->session->flashdata('mssg'),
        ]);
        $this->load->view('layout/footer');
        
    }
    
    
    /*
    *@params $id primary key value (int)
    */
    public function edit_inventory($id = '')
    {
       
      if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
        
        $item = $this->inventory_type->getOne($id);
        
        
        if(!$item->inventory_type_id)
        {
            show_error("Record Not Found");
        }
        
        
        if($this->input->post('submit'))
        {
            $data = array (
                 'inventory_type_name' => $this->input->post('inventory_type')
            );
            
            $this->inventory_type->update($data,$id);
            $this->session->set_flashdata('mssg' , "Inventory Type Updated");
            redirect('inventory');
        }
        
        
        $this->load->view('layout/header');
        $this->load->view('inventory/edit_type' , [
            'inventory_type' => $this->inventory_type->getOne($id)
        ]);
        $this->load->view('layout/footer');
          
    }
    
    /*
    *@params $id primary key value (int)
    */
    public function delete_inventory($id = '')
    {
      
      if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
        
        $item = $this->inventory_type->getOne($id);
        
        if(!$item->inventory_type_id)
        {
            show_error("Record Not Found");
        }
        
        $this->inventory_type->delete($id);
        $this->session->set_flashdata('mssg' , "Inventory Type Deleted");
        redirect('inventory');
    }
    
    /*
    *@params
    */
    public function inventory()
    {
    
      if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
        
        
        if($this->input->post('submit'))
        {
            $data = array (
                'inventory_name' => $this->input->post('inventory_name'),
                'inventory_type_id' => $this->input->post('inventory_type'),
                'inventory_amount' => $this->input->post('inventory_amount')
            );
            
            $this->inventory_model->insert($data);
            $this->session->set_flashdata('mssg' , "Inventory Added Successfully");
        }
        
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()
        ]);
        $this->load->view('inventory/add_inventory' , [
            'title' => "Inventory Page",
            'title2' => "Manage Inventory",
            'inventory_types' => $this->inventory_type->getAll(),
            'inventorys' => $this->inventory_model->getAll(),
            'message' => $this->session->flashdata('mssg')
        ]);
        $this->load->view('layout/footer');
    }
    
    
    /*
    *@params
    */
    public function edit($id = '')
    {
        
     if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
      
        $item = $this->inventory_model->getOne($id);
        
        
        if(!$item->inventory_id)
        {
            show_error('Record Not Found');
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'inventory_name' => $this->input->post('inventory_name'),
                'inventory_type_id' => $this->input->post('inventory_type'),
                'inventory_amount' => $this->input->post('inventory_amount')      
            );
            
            
            $this->inventory_model->update($data,$id);
            $this->session->set_flashdata('mssg' , "Inventory Successfully Updated");
            redirect('inventory/inventory');
        }
        
        $this->load->view('layout/header');
        $this->load->view('inventory/edit_inventory' , [
        'inventory' => $this->inventory_model->getOne($id),
        'inventory_types' => $this->inventory_type->getAll(),
        'mssg' => $this->session->flashdata('mssg' , 'record updated')
            
        ]);
        $this->load->view('layout/footer');
        
    }
    
       /*
    *@params $id primary key value (int)
    */
    public function delete($id = '')
    {
      
      if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
        
        $item = $this->inventory_model->getOne($id);
        
        if(!$item->inventory_id)
        {
            show_error("Record Not Found");
        }
        
        $this->inventory_model->delete($id);
        $this->session->set_flashdata('mssg' , "Inventory Deleted");
        redirect('inventory');
    }
}
