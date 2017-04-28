<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends My_controller{


   /**
     * Secure all pages
     */
    public function __construct() {
        parent::__construct();
        
        $this->_secure();
        
        $this->load->model(array(
            'setup_model',
            'sentsms',
            'customer_model',
            'staff_model',
            'customer_container',
            'setup_model'
        ));
        
    }



    
    public function index()
    {
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Others')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        $title = 'Sms';
        $title2 = 'Send and Manage Sms';
        
        $code = '+234';
        $day = date('Y-m-d H:i:s');
          
        if($this->input->post('send'))
        {
            $CI = get_instance();
            
            $CI->load->library('bsgateway');
            
            $username = $this->input->post('sms_username');
            $password = $this->input->post('sms_password');
            $sender = $this->input->post('sms_sender');
            $code = $code;
            $myRecipients = $this->input->post('myRecipients');
            $message = $this->input->post('message');
            
           
            $response = $CI->bsgateway->sendMessage($username, $password, $sender, $myRecipients, $message, $flash = 0, $code);
            //print_r($response);
        if($response == 1801)       
        {  
             $data = array(
                'sentsms_message' => $message,
                'sentsms_sender' => $sender,
                'sentsms_reciever' => $myRecipients,
                'sentsms_datetime' => $day,
                'sentsms_status' => $response,
                'user_id' => $this->current_user->user_id
            );
             $this->sentsms->insert($data);
             $this->session->set_flashdata('mssg' , 'Message Successfully Sent');

        }
             
        else{
             $data = array(
                'sentsms_message' => $message,
                'sentsms_sender' => $sender,
                'sentsms_reciever' => $myRecipients,
                'sentsms_datetime' => $day,
                'sentsms_status' => $response,
                'user_id' => $this->current_user->user_id
            );
             $this->sentsms->insert($data);
            $this->session->set_flashdata('mssg' , $this->_getResponseMessage($response));
        }
              
        }
        
        if($this->input->post('check_balance'))
        {
            
         $CI = get_instance();
        
         $CI->load->library('bsgateway');
            
         $myUsername = $this->input->post('sms_username');
         $myPassword = $this->input->post('sms_password');
            
         $response = $CI->bsgateway->checkBalance($myUsername, $myPassword);
         $this->session->set_flashdata('mssg' , 'You Have'. ' '.$response.' '. 'credit Left');

            
        }
        
        
        $numbers  = $this->input->post('numbers');

        if($numbers && is_array( $numbers))
        {
            $numbers = join(',' ,  $numbers );
        }
        else
        {
             $numbers = set_value('myRecipients');
        }
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('sms/send' , [
            'title' => $title,
            'title2' => $title2,
            'message' => $this->session->flashdata('mssg'),
            'sms_details' => $this->setup_model->getOne(),
            'sentsms' => $this->sentsms->getAll(),
            'numbers' => $numbers
        ]);
        $this->load->view('layout/footer');
    }
   
    
    
    public function select()
    {

    if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator' , 'Account')))
      {
          show_error('You do not have permission to visit this page!');
      }
        
        $table = '';

        if($this->input->post('Fetch'))
        {
              $select_type = $this->input->post('select_type');

              if($select_type == 'staff_birthday') 
              {
                    $table = $this->load->view('sms/staff_table' , array('staffs' => $this->staff_model->getAll('' , array(
                        'MONTH(staff_dob)' => date('m'),
                        'DAY(staff_dob)' => date('d')
                    ))) , true);
              }
              if($select_type == 'customer_birthday') 
              {
                    $table = $this->load->view('sms/customer_table' , array('customers' => $this->customer_model->getAll('' , array(
                        'MONTH(dob)' => date('m'),
                        'DAY(dob)' => date('d')
                    ))), true);
              }
              if($select_type == 'staff') $table = $this->load->view('sms/staff_table' , array('staffs' => $this->staff_model->getAll()) , true);
              if($select_type == 'customer') $table = $this->load->view('sms/customer_table' , array('customers' => $this->customer_model->getAll()) , true);
              if($select_type == 'pickup') $table = $this->load->view('sms/customer_table' , array('customers' => $this->customer_container->getAll('' , array(
                        'MONTH(picked_date)' => date('m'),
                        'DAY(picked_date)' => date('d')
              ))) , true);
        }        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
                'users' => $this->user_model->getOne(),
                'set_up' => $this->setup_model->getOne()
        ]);
        $this->load->view('sms/select' , [
            'message' => $this->session->flashdata('mssg'),
            'title' => "Sms Manager",
            'title2' => "Select Categories To Send Sms To ",
            'table' => $table
            
        ]);
        $this->load->view('layout/footer');
    }
    
    
    
    
    
    protected function _getResponseMessage($code)
    {
        switch($code)
        {
            case 1800:
                return 'Request timeout';
            
            case 1801;
                return 'Message successfully sent';
            
            case 1802;
                return 'Invalid username';
                
            case 1803;
                return 'Incorrect password';
                
            case 1804;
                return 'Insufficient credit';
                
            case 1805; 
                return 'Invalid Url Submission';
                
            case 1806;
                return 'Invalid mobile';
            
            case 1807;
                return 'Invalid sender id';
                
            case 1808;
                return 'Message too long';
                
            case 1809;
                return 'Empty Message';
                
            case 1810;
                return 'Invalid Broadcast Time';
                
            case 1901;
                return 'Schedule was successfully saved';
            
            case 1902;
                return 'Scheduled broadcast time cannot be earlier than current time';
                
            case 1903;
                return 'Invalid broadcast time';
                
            case 1904;
                return 'Schedule name is too long. Maximum of 16 alphanumeric characters allowed';
                
            case 1905;
                return 'Invalid value for notify me. 0 or 1 expected';
                
            case 1906;
                return 'Incorrect Schedule Name. Schedule name may contain special character';
        }
    }
    
    public function delete_sms($sentsms_id = '')
    {
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Others')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        $get = $this->sentsms->getOne($sentsms_id);
        
        if(!$get->sentsms_id)
        {
            show_error('Record Not Found');
        }
        
        $this->sentsms->delete($sentsms_id);
        $this->session->set_flashdata('mssg' , 'Sms Deleted');
        redirect('sms/index');
    }

}