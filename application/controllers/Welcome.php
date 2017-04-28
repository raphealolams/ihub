<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
    
     /*
     * Secure all pages
     */
        public function __construct() {
        parent::__construct();
       
            $this->load->model(array(
            'priveledge',
            'user_model',
            'staff_model',
            'customer_model',
            'customer_container',
            'sent_mail',
            'setup_model'
        ));
       $this->_secure();
    }
    
    public $statusno = 0;
    
	public function index()
	{
		$day = date('Y-m-d');
        
        
        if(!$this->current_user->is(array('Admin' , 'Semi-admin' , 'Operator', 'Others')))
        {
            show_error('You do not have permission to visit this page!');
        }
        
        
        if($this->input->post('send'))
        {
            $from = $this->input->post('sender');
            $email = $this->input->post('to');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            
            
           $hello = $this->_sendEmail($from , $email , $subject , $message);
            
            
            $data = array(
                'sentmail_sender' => $from,
                'sentmail_reciever' => $email,
                'sentmail_subject' => $subject,
                'sentmail_message' => $message,
                'sentmail_status' => $hello,
                'user_id' => $this->current_user->user_id
            );
                $this->sent_mail->insert($data);
        }
            
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav' , [
            'users' => $this->user_model->getOne(),
            'set_up' => $this->setup_model->getOne()

        ]);
        $this->load->view('dashboard' , [
            'staffs' => $this->staff_model->count(),
            'staff_birthday' => $this->staff_model->count(array('staff_dob' => $day)),
            'customer' => $this->customer_model->count(),
            'customer_birthday' => $this->customer_model->count(array('dob' => $day)),
            'customer_pickup' => $this->customer_container->getAll('' , array('picked_date' => $day , 'status' =>$this->statusno)),
            'message' => $this->session->flashdata('mssg')
        ]);
        $this->load->view('layout/footer');
	}
    
    
     /*
     *@params $email returns the Email Address sending the message to
     *@params $message returns the conten of the email.
     */
     protected function _sendEmail($from , $email , $subject , $message)
     {

       $ci = & get_instance();
       $ci->load->library('email');



      $ci->email->from($from);
      $ci->email->to($email);
      $ci->email->subject($subject);

      $ci->email->message( $message );

      if($ci->email->send())
      {
          $this->session->set_flashdata('mssg', "Email sent successfully.");
      }
      else
      {
          $this->session->set_flashdata('mssg' , "Error in sending Email.");
      }

     }

}
