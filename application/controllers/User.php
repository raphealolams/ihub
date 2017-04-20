<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Base class for lecturers and student s
 *
 * @author Mario
 */
class User extends My_Controller{
   
    
    public $login_title = 'User Login';
    public $login_view = 'users/login';
    public $profile_view = 'users/profile';
    public $default_redirect_url = '';

    
    public $ignore_fields = array(
        'super_admin'
    );
    
      /**
     * Secure all pages
     */
        public function __construct() {
        parent::__construct();
       
            $this->load->model(array(
            'priveledge',
            'user_model'
         
        ));
        $this->output->enable_profiler(true);
       
    }
    

    public function index()
    {
        $title = 'Users ';
        
        //$this->_current_user();
        

        if($this->current_user && $this->current_user->user_id)
        {
            redirect(site_url($this->default_redirect_url));
        }

        $login = $this->input->post('login');
        
        if( $login && $this->form_validation->run('login'))
        {
            
            $user = $this->user_model->getOne('' , array(
                'user.user_name' => $this->input->post('username'),
                //'user.live' => true
            ));
            
            if(!$user->validatePassword($this->input->post('password')))
            {
                $error = lang('invalid_cred');
            }
            else
            {
                $this->session->set_userdata("user_id" , $user->user_id);
                
                redirect('staff/index');
                echo ($user_id);
            }
        }  
        $this->load->view('layout/header');
        $this->load->view('user/login' , array(
                'title' => $title,
                'message' => $this->session->flashdata('mssg')
        ));
        $this->load->view('layout/footer');
    }
    
    


    public function profile()
    {
        //$this->_secure();
        
        
        $title = 'Profile Page' ;
        $title2 = 'Edit Profile' ;
        $error = '';
        
        
        $prev_pass = $this->current_user->user_password;
        $prev_username = $this->current_user->user_name;
        
        
        if($this->input->post('submit') && $this->form_validation->run('profile'))
        {
            $this->load->helper('upload');
           
            $this->current_user->setProperties($this->input->post(), $this->ignore_fields);
            $new_password = $this->input->post('password');
            $new_username =  $this->input->post('user_name');

            if($new_username != $prev_username)
            {
                $other_user = $this->user_model->getOne('' , array('user_name' => $new_username));

                if($other_user->user_id)
                {
                    $error =  "Another user exists with username: " .$new_username;
                     $this->current_user->user_name = $prev_username;
                }
            }
            // upload photo
            $folder = '/uploads/users/';
            $file_name =  'user-'.$this->current_user->user_id.'-'.time();
           
            $upload = upload_file('photo' , $file_name , $folder  );

            if ( $upload != -1 && !is_object($upload))
            {
                $error = $upload;
                $this->_alert($error , 'error' );
            }
            else if (is_object($upload))
            {
                $this->current_user->deletePhoto();
                $this->current_user->photo =  $upload->data('file_name');
            }
            
            if(!$new_password)
            {
                $this->current_user->user_password = $prev_pass;
            }
            else if($this->input->post('password') != $this->input->post('password-confirm'))
            {
                $error = 'Password not match';
            }
            else if(!$error)
            {
                $this->current_user->user_password = $new_password;
                $this->current_user->password_hashed = false;
                $this->current_user->hashPassword();
            }
            if($error) $this->session->set_flashdata('mssg', $error) ; 
            else {
                $this->current_user->insert();
                $this->session->set_flashdata('mssg' , 'Profile Updated') ; 
            }
        }
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('user/profile', array(
            'user' => $this->current_user,
            'error' => $error,
            'title' => $title,
            'title2' => $title2,
            'message' => $this->session->flashdata('mssg'),
            'user' => $this->current_user
        ));
        $this->load->view('layout/footer');
    }
    
    
    public function logout()
    {
        $this->session->unset_userdata ("user_id");
        
        redirect($this->_get_login_page());
        
    }
    
   
    
    public function forgot_password()
    {
        
        $this->_current_user();
        $success = false ;
        $error = '' ; 
        $message = '' ;
        
        if($this->current_user && $this->current_user->id)
        {
            redirect($this->_get_profile_page());
        }
        
        
        if($this->input->post('submit'))
        {
            $email = $this->input->post('email');
            
            $this->load->model('user');      
            $user = $this->user->getOne(array(
                'email' => $email
            ));
            
            if(!$user->id)
            {
                $error = "Invalid email";
            }
            else
            {
                $this->load->helper('string');
                $this->load->library('email');
                $this->config->load('email');
                
                $user->password_retrieve_code = random_string('sha1' , 20 );
                $encoded_email = urlencode($email);

                $message = "You requested to reset you password. Click the link to reset you password " . ' ';
                $message .= site_url( "users/reset_password/{$encoded_email}/{$user->password_retrieve_code}" ) ;
                    
                $this->email->from(config_item('email_from'));
                $this->email->to($user->email );
                $this->email->subject( 'Password Reset');
                //$template =  $this->load->view( 'emails/send' , array( 'title' => $this->title , 'message' => $this->message ) , true ) ; 
                $this->email->message( $message );
                    
                if(  $this->email->send( ))
                {
                    $success = true;
                }
                else
                {
                    $error = 'Unable to process request now';
                    
                    //print_r($this->email->print_debugger() );
                    log_message( 'debug', $this->email->print_debugger() );
                }
                
                $user->password_retrieve_created = time();
                $user->save();
                $message = 'View your email' ;
            }
           
        }
        $this->_view('users/forgot_password', array(
            'error' => $error,
            'success' => $success
        ));
    }

    public function reset_password($email = '', $code = '')
    {
        $error = '';
        $success = '';
        $code = urldecode($code);
        $email = urldecode($email);
        
        $this->load->model('user'); 
        
        $user = $this->user->getOne(array(
                'email' => $email
        ));
        
        if(!$user->id)
        {
            log_message('debug', "User tried to reset password for invalid email: ".$email);
            show_404();
        }
        if($user->password_retrieve_code != $code)
        {
            log_message('debug', "User tried to reset password with invalid code: ".$code);
            show_404();
        }
        
        if($this->input->post('submit')  && $this->form_validation->run('reset_password'))
        {
            $user->password_retrieve_code = null ;
            $user->password = $this->input->post('password');
            $user->hashPassword();
            $user->save();
            $success = true;
        }
        $form_action = current_url();
        
        
         $this->_view('users/reset_password', array(
            'error' => $error,
            'success' => $success,
            'form_action' => $form_action
        ));
    }
    
    
    public function confirm_email($email = '', $code = '')
    {
        
        $code = urldecode($code);
        $email = urldecode($email);
        
         $this->load->model('user'); 
        
        $user = $this->user->getOne(array(
                'email' => $email
        ));
        
        if(!$user->id)
        {
            log_message('debug', "User tried to confirm invalid email: ".$email);
            show_404();
        }
        if($user->validation_code != $code)
        {
            log_message('debug', "User tried to validate email with invalid code: ".$code);
            show_404();
        }
        
        $user->validated = true ;
        $user->save();
        $success = true;
        redirect(site_url($this->default_redirect_url));
    }

     
    
   public function send_confirmation_mail($id = '')
    {
       if ($id)
        {
            $this->_adminOnly();
            $user = $this->user->getOne(array('user.id' => $id));
        }
         else
         {
            $this->_secure();
            $user = $this->current_user;
         }
        
     
        
        if( !$user->id )
        {
            
            show_404();
        }
        
        if($user->sendConfirmationMail())
        {

        }
         
        if($user->isSuperAdmin())
        {
            redirect(site_url('admin/users'));
        }
        else 
        {
            redirect(site_url('competitions'));
        }
    }
    



    /**
     * 
     * @return string
     */
    protected function _get_login_page()
    {
        
        return site_url('users/login');
    }
    /**
     * 
     * @return string
     */
    protected function _get_profile_page()
    {
        return 'user/profile';
    }



    public function all()
    {
        
        //$this->_secure();

        $title = 'Users';
        $title2 = 'Add New Users and Edit Existing user';
 
        if($this->input->post('submit'))
        {
            $user_password = $this->input->post('user_password');
            $this->user_model->hashPassword($user_password);
            $data = array(
            'user_name' => $this->input->post('user_name'),
            'user_password' => $user_password ,
            'user_priveledge' => $this->input->post('user_priveledge'),
            'password_hashed' => true
            );
           
            $this->user_model->insert($data);
           
            $this->session->set_flashdata('mssg' , "User added successfully!");
        }

        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('user/all' , array(
            'users' => $this->user_model->getAll(),
            'priveledges' =>  $this->priveledge->getAll(),
            'title' => $title,
            'title2' => $title2,
            'message' => $this->session->flashdata('mssg')
        ));
        $this->load->view('layout/footer');

    }

    public function edit($user_id='')
    {
         //$this->_secure();
         
//        if(!$this->current_user->is(array('Admin' , 'Semi-admin')))
//        {
//            show_error('You do not have permission to visit this page!');
//        }
//       
        $error = '';
        $user = $this->user_model->getOne($user_id);
        
        $previous_password = $user->user_password ;
        $prev_username = $user->user_name; 
        

        if($this->input->post('submit') && $this->form_validation->run('profile'))
        {
            $new_password = $this->input->post('user_password');
            $new_username =  $this->input->post('user_name');

           
            // if user did not explicitly change password 

            if($new_username != $prev_username)
            {
                $other_user = $this->user_model->getOne(' ' , array('user_name' => $new_username));

                if($other_user->user_id)
                {
                    $this->session->set_flashdata('mssg' , "Another user exists with username: " .$new_username);
                    $user->user_name = $prev_username;
                    redirect('user/all');
                }
            }

            
            if(!$new_password)
            {
                $user->user_password = $previous_password;
            }
            else if($new_password != $this->input->post('user_password_confirm'))
            {
                 $this->session->set_flashdata('mssg' , "Password confirmation does not match password field");
                 redirect('user/all');
            }
            else
            {
                $user->user_password = $new_password;
                $user->password_hashed = false;
                $user->hashPassword($new_password);
            }
            
             $data = array(
                'user_name' => $new_username,
                'user_password' => $new_password,
                'user_priveledge' => $this->input->post('user_priveledge')
                    );


            if($error) 
            {
                $this->session->set_flashdata('mssg' , "Password confirmation does not match password field" );
                redirect('user/all');
            }
            else{ 
                $user->update($data, $user_id);
                $this->session->set_flashdata('mssg' , "User Successfully Updated");
                redirect('user/all');

            }
        }
        $this->load->view('layout/header');
    	$this->load->view('user/edit' , array(
               'user_edit' => $user,
               'priveledges' =>  $this->priveledge->getAll()
        ));
    }


    /**
    *Delete user
    *
    */
    public function delete($user_id='')
    {
     
        
        //$this->_secure();

//        if(!$this->current_user->is(array('Admin' , 'Semi-admin')))
//        {
//            show_error('You do not have permission to visit this page!');
//        }

        $user = $this->user_model->getOne('' , array(
            'user_id' => $user_id
        ));

        if(!$user->user_id)
        {
            show_error("user not found!");
        }

        $user->delete($user_id);
        $this->session->set_flashdata('message' , 'User deleted!');

        redirect(site_url('user/all'));


    }
}
