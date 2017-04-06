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
class Drop_off extends CI_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'customer_model',
            'customer_type',
            'customer_status',
            'category',
            'items',
            'customer_container',
            'drop_off_model'
        ));
        $this->output->enable_profiler(true);
       
    }
       
    
    public function index()
    {
         
         $title = "Customer Home";
         $types = $this->customer_type->getAll();
         $status = $this->customer_status->getAll();
         $customers = $this->customer_model->getAll();
        
         $this->load->view('layout/header'); 
         $this->load->view('layout/nav'); 
         $this->load->view('customer/all_customer', [
         'customers' => $customers,
         'types' => $types,
         'status' => $status,
         'title' => $title,
         'message' => $this->session->flashdata('mssg')]);
         
        $this->load->view('layout/footer');   
    }
    
    /*
    *@params
    */
    public function manage_category()
    {
        $title = "Category Home Page";
        $title2 = "Manage Items Category";
        $category = $this->category->getAll();
        
            $this->load->view('layout/header');
            $this->load->view('layout/nav');
            $this->load->view('drop_off/category', [
            'title' => $title,
            'title2' => $title2,
            'category' => $category,
            'message' => $this->session->flashdata('mssg')
            ]);
            $this->load->view('layout/footer');
    }
    
    /*
    *@params
    */
    public function add_category()
    {
          if($this->input->post('submit'))
        {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'comment' => $this->input->post('comment'),
                'create_time' => $this->input->post('date')
            );
            
            $this->category->insert($data);
            $this->session->set_flashdata('mssg', 'Category Successfully Added');
           redirect('drop_off/manage_category');
        }
    }
    
    /*
    *@params
    */
    public function edit_category($id = '')
    {
          $data = $this->category->getOne($id);
        $this->load->view('drop_off/edit_category', [
            'category' => $data
        ]);
        
        if(!$data || !$data->category_id)
        { 
            show_error("Category does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'comment' => $this->input->post('comment'),
                'edit_time' => $this->input->post('date')
            );
            
            $this->category->update($data, $id);
           $this->session->set_flashdata('mssg', 'Category Successfully Updated');
            redirect('drop_off/manage_category');
        }  
    }
    
    /*
    *@params
    */
    public function manage_items()
    {
        $title = "Items Home Page";
        $title2 = "Manage Items Category";
        $items = $this->items->getAll();
        $category = $this->category->getAll();
        
            $this->load->view('layout/header');
            $this->load->view('layout/nav');
            $this->load->view('drop_off/items', [
            'title' => $title,
            'title2' => $title2,
            'items' => $items,
            'category' => $category,
            'message' => $this->session->flashdata('mssg')
            ]);
            $this->load->view('layout/footer');
    }
    
    /*
    *@params
    */
    public function add_items()
    {
          if($this->input->post('submit'))
        {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'item_name' => $this->input->post('item_name'),
                'price' => $this->input->post('price'),
                'comment' => $this->input->post('comment'),
                'create_time' => $this->input->post('date')
            );

            $this->items->insert($data);
            $this->session->set_flashdata('mssg', 'Item Successfully Added');
            redirect('drop_off/manage_items');
           
        }
    }
    
    /*
    *@params
    */
    public function edit_items($id = '')
    {
        $item = $this->items->getOne($id);
        $category = $this->category->getAll();
        $this->load->view('drop_off/edit_item', [
            'item' => $item,
            'message' => $this->session->flashdata('mssg'),
            'category' => $category
        ]);
        
        if(!$item || !$item->item_id)
        { 
            show_error("Item does not exist");
        }
        
        if($this->input->post('submit'))
        {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'item_name' => $this->input->post('item_name'),
                'price' => $this->input->post('price'),
                'comment' => $this->input->post('comment'),
                'edit_time' => $this->input->post('date')
            );
            
            $this->items->update($data, $id);
           $this->session->set_flashdata('mssg', 'Item Successfully Updated');
            redirect('drop_off/manage_items');
        }  
    }
    
    /*
    *@params
    */
    public function drop_items($customer_id='' )
    {
        $title = "Add Droped Item";
        $title2 = "Select Items ";
        $title3 = "View All Items";
        $categorys = array();
        $items = array();
        $customers = $this->customer_model->getAll();
        
//        $this->load->helper('String_helper');
//        $randomString=generateRandomString(5);
        
        
        if($this->input->post('select'))
        {
            $customer_id = $this->input->post('customer_id');
            redirect(site_url('drop_off/drop_items/'.$customer_id));
        }
        
        if($customer_id)
        {
            $items = $this->items->getAll();
        }
        
        if($customer_id)
        {
            $categorys = $this->category->getAll();
        }
        
         $day = date('Y-m-d');
        if($this->input->post('Add'))
        {  
            $item_id = $this->input->post('item_id');
            $item_data = $this->items->getOne($item_id);
            $items_quantity = $this->input->post('quantity');
               
            if($item_data)
            {
                
                $data = array(
                'customer_id' =>  $customer_id,
                'category_name' => $this->input->post('category_name'),
                'item_id' => $item_id ,
                'quantity' => $items_quantity,
                'price' => $item_data->price,
                'total_price' => $item_data->price * $items_quantity,
                'drop_date' => $day
            );
                
            $this->drop_off_model->insert($data);
            $this->session->set_flashdata('mssg', 'Item Successfully Added');
            redirect('drop_off/drop_items/'.$customer_id); 
            }
        }
        
         $droped = $this->drop_off_model->getAll('', array('customer_id'=>$customer_id, 'drop_date'=>$day));
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('drop_off/drop_item', [
            'title' => $title,
            'title2' => $title2,
            'title3' => $title3,
            'categorys' => $categorys,
            'items' => $items,
            'customers' => $customers,
            'droped' => $droped,
            'message' => $this->session->flashdata('mssg'),
            'customer_id' => $customer_id
        ]);
        $this->load->view('layout/footer');
        
        if($this->input->post('Save'))
        {
            
        }
    }
    
    /*
    *@params
    */
    public function delete_items($drop_id='' , $customer_id = '')
    {
        $items = $this->drop_off_model->getOne($drop_id);

        if(!$items->drop_id)
        {
            show_error("Item does not exist!");
        }

        $items->delete($drop_id);

        redirect(site_url('drop_off/drop_items/'.$customer_id));
    }
    
}
