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
class Drop_off extends MY_Controller{
    
  
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'customer_model',
            'customer_type',
            'customer_status',
            'category',
            'items',
            'customer_container',
            'drop_off_model', 
            'user_model',
            'setup_model'
        ));
        $this->_secure();
        
       
    }
    
        public $yes = 1;
        public $no = 0;
        public $status_yes = 1;
        public $status_no = 0;
       
    
    /*
    *@params
    */
    public function manage_category()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $title = "Category Home Page";
        $title2 = "Manage Items Category";
        $category = $this->category->getAll();
        
            $this->load->view('layout/header');
            $this->load->view('layout/nav' , [
                'users' => $this->user_model->getOne(),
                'set_up' => $this->setup_model->getOne()

            ]);
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
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
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
          
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $data = $this->category->getOne($id);
       
        
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
         $this->load->view('drop_off/edit_category', [
            'category' => $data
        ]);
    }
    
    
    public function delete_category($id = '')
    {
       if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        $item_cat = $this->category->getOne($category_id);
        
        if(!$item_cat->category_id)
        {
            show_error('Category Not found');
        }
        
        $item_cat->delete($id);
        $this->session->set_flashdata('mssg' , 'Category Deleted');
        redirect('drop_off/manage_category');
    }
    
    /*
    *@params
    */
    public function manage_items()
    {
     
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
            $title = "Items Home Page";
            $title2 = "Manage Items Category";
            $items = $this->items->getAll();
            $category = $this->category->getAll();
        
            $this->load->view('layout/header');
            $this->load->view('layout/nav' , [
                'users' => $this->user_model->getOne(),
                'set_up' => $this->setup_model->getOne()

            ]);
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
          
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
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
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        $item = $this->items->getOne($id);
        $category = $this->category->getAll();
       
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
         $this->load->view('drop_off/edit_item', [
            'item' => $item,
            'message' => $this->session->flashdata('mssg'),
            'category' => $category
        ]);
    }
    
    
    /*
    @params deletes Items from the Item Table
    */
    public function delete_item($id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $items = $this->items->getOne($item_id);
        
        if(!$items->item_id)
        {
            show_error('Item Not found');
        }
        
        $items->delete($id);
        $this->session->set_flashdata('mssg' , 'Item Deleted');
        redirect('drop_off/manage_items');
    }
    
    
    /*
    *@params
    */
    public function drop_items($customer_id='' )
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $title = "Add Droped Item";
        $title2 = "Select Items ";
        $title3 = "View All Items";
        $categorys = array();
        $items = array();
        $customers = $this->customer_model->getAll();
        $day = date('Y-m-d');

        
        
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
                'in_basket' => $this->yes
            );
                
            $this->drop_off_model->insert($data);
            $this->session->set_flashdata('mssg', 'Item Successfully Added');
            redirect('drop_off/drop_items/'.$customer_id); 
            }
        }
        
         $droped = $this->drop_off_model->getAll('', array('customer_id'=>$customer_id, 'in_basket'=>$this->yes));
          
        
        //Save Data to the customer_container
         if($this->input->post('save'))
        {
            $this->load->helper('String_helper');
            $randomString=generateRandomString(5);
            $date = $this->input->post('pick_date');
            $invoice_number = $randomString;
            if($date === $day)
            {
                redirect('drop_off/drop_items/'.$customer_id , [$this->session->set_flashdata('mssg' , 'Cant Pick Up Items Today')]);
            }
            
            $data = array(
                'customer_id' => $customer_id,
                'status' => $this->status_yes,
                'invoice_number' => $invoice_number,
                'total' => $this->input->post('total'),
                'deposit' => $this->input->post('deposit'),
                'balance' => $this->input->post('balance'),
                'picked_date' => $date
                
            );
            
           foreach ($droped as $drop_item)
          {
               $drop_item->in_basket = $this->no;
               $drop_item->invoice_number = $randomString;
               $update_data = [
                   'invoice_number' => $randomString,
                   'in_basket' => $this->no,
                   'customer_id' => $customer_id
               ];
               $drop_item->update($update_data, $drop_item->drop_id);
           }
            
            $this->customer_container->insert($data);
            redirect('drop_off/print_recipt/'.$invoice_number); 
            
        }
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
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
        
    }
    
    /*
    *@params deletes items on the cart
    */
    public function delete_items($drop_id='' , $customer_id = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        $items = $this->drop_off_model->getOne($drop_id);

        if(!$items->drop_id)
        {
            show_error("Item does not exist!");
        }

        $items->delete($drop_id);

        redirect(site_url('drop_off/drop_items/'.$customer_id , [$this->session->set_flashdata('mssg' , 'One Item Removed')]));
    }
    
    /*
    *@params
    */
    public function search_drop($invoice_number = '')
    {
       
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }
    
        
        if($this->input->post('search'))
        {
            $invoice_number = $this->input->post('invoice_number');
            redirect(site_url('drop_off/search_drop/'.$invoice_number));  
        }
        
        $droped = $this->drop_off_model->getAll('' , array(  'invoice_number'=>$invoice_number, 'in_basket'=>$this->no));
        
        if($this->input->post('save'))
        {
                   
             $where = array();
            if($invoice_number)
            {
                
                $where['invoice_number'] = $invoice_number;
            
                $container = $this->customer_container->getOne('' ,$where);
                $data = array(
                    'deposit' =>$this->input->post('deposit'),
                    'balance' =>$this->input->post('balance'),
                    'status' =>$this->status_no,
                );

                $this->customer_container->update($data, $container->customer_container_id);
                redirect(site_url('drop_off/print_recipt'.'/'.$invoice_number));
            }
        }
        
        if($this->input->post('reprint'))
        {
            $invoice_number = $this->input->post('invoice_number');
            redirect(site_url('drop_off/print_recipt/'.$invoice_number));
        }
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('drop_off/search_drop' , [
            'droped' => $droped,
            'search' => $this->customer_container->getOne('' , array('invoice_number'=>$invoice_number)),
        ]);
        $this->load->view('layout/footer');
    }
    
    /*
    *@params Prints Recipt 
    */
       public function print_recipt($invoice_number = '')
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator')))
        {
            show_error('You do not have permission to visit this page!');
        }  
        
        $invoice_numb = $this->customer_container->getAll('', array('invoice_number'=>$invoice_number, 'status'=>$this->status_no));
        $droped = $this->drop_off_model->getAll('',  array('invoice_number'=>$invoice_number, 'in_basket'=>$this->no));
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('drop_off/print_recipt', [
            
            'invoice_number' => $invoice_numb,
            'droped' => $droped,
            
        ]);
        $this->load->view('layout/footer');
    }
    
}
