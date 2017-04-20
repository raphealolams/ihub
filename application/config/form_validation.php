<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$config = array(
       
        'profile' => array(
                array(
                        'field' => 'user_name',
                        'label' => 'Username',
                        'rules' => 'required|min_length[3]|max_length[50]'
                )
        ),
        'login' =>  array(
              array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required'
                ),
              array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'

                )
        ),
    'reset_password' =>  array(
              array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[3]|max_length[100]'
                ),
                array(
                        'field' => 'password-confirm',
                        'label' => 'Password Confirmation',
                        'rules' => 'required|matches[password]'
                ),
        ),
    
    ''
  

    
    
);
$config['error_prefix'] = '<div class="alert alert-danger">';
$config['error_suffix'] = '</div>';
