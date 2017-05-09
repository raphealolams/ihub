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
                )
        ),
  'customers/add' => array(
            array(
                    'field' => 'surname',
                    'label' => 'Surname',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'other_name',
                    'label' => 'Other Names',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'gender',
                    'label' => 'Gender',
                    'rules' => 'required'
            ),
           array(
                        'field' => 'phone_number',
                        'label' => 'Phone Number',
                        'rules' => 'required|max_length[11]'
                ),
           array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'valid email'
                ),
           array(
                        'field' => 'customer_type',
                        'label' => 'Customer Type',
                        'rules' => 'required'
                ),
           array(
                        'field' => 'status',
                        'label' => 'Customer Status',
                        'rules' => 'required'
                )

      ),
  'customers_status/add' => array(
            array(
                    'field' => 'customer_status_name',
                    'label' => 'Customer Status',
                    'rules' => 'required'
            )
    ),
    'customers_type/add' => array(
              array(
                      'field' => 'customer_type_name',
                      'label' => 'Customer Type',
                      'rules' => 'required'
              )
      ),
      'expenses_type/add' => array(
                array(
                        'field' => 'expenses_type_name',
                        'label' => 'Expense Type',
                        'rules' => 'required'
                )
        ),
        'payroll_types/add' => array(
                  array(
                          'field' => 'payroll_type_name',
                          'label' => 'Payroll Type Name',
                          'rules' => 'required'
                  ),
                  array(
                          'field' => 'payroll_type_status',
                          'label' => 'Payroll Type',
                          'rules' => 'required'
                  )
          ),
          'Expenses/add' => array(
                    array(
                            'field' => 'expenses_reason',
                            'label' => 'Expense Reason',
                            'rules' => 'required'
                    ),
                    array(
                            'field' => 'expenses_amount',
                            'label' => 'Expense Amount',
                            'rules' => 'required'
                    ),
                    array(
                            'field' => 'expenses_date',
                            'label' => 'Expense Date',
                            'rules' => 'required'
                    ),
                   array(
                              'field' => 'expenses_type',
                              'label' => 'Expense Type',
                              'rules' => 'required'
                        ),
                   array(
                              'field' => 'collected_by',
                              'label' => 'Collected By',
                              'rules' => 'required'
                        ),
                   array(
                              'field' => 'expenses_status',
                              'label' => 'Expense Status',
                              'rules' => 'required'
                        )

              ),
              'setup/add' => array(
                        array(
                                'field' => 'setup_name',
                                'label' => 'Company Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'setup_phonenumber',
                                'label' => 'EPhone Number',
                                'rules' => 'required|max_length[11]'
                        ),
                        array(
                                'field' => 'setup_address',
                                'label' => 'Company Address',
                                'rules' => 'required'
                        ),
                       array(
                                  'field' => 'sms_username',
                                  'label' => 'Sms Username',
                                  'rules' => 'required'
                            ),
                       array(
                                  'field' => 'sms_password',
                                  'label' => 'Sms Password',
                                  'rules' => 'required'
                            ),
                       array(
                                  'field' => 'setup_image',
                                  'label' => 'Image',
                                  'rules' => 'required'
                            )

                  ),
        'staff/add' => array(
                        array(
                                'field' => 'staff_surname',
                                'label' => 'Surname',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'staff_othername',
                                'label' => 'Other Names',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'staff_gender',
                                'label' => 'Gender',
                                'rules' => 'required'
                        ),
                       array(
                                  'field' => 'staff_phone_number',
                                  'label' => 'Phone Number',
                                  'rules' => 'required'
                            ),
                       array(
                                  'field' => 'staff_address',
                                  'label' => 'Address',
                                  'rules' => 'required'
                            ),
                      array(
                                  'field' => 'highest_qualification',
                                  'label' => 'Highest Qualification',
                                  'rules' => 'required'
                            ),
                       array(
                                  'field' => 'staff_employment_type',
                                  'label' => 'Employment Type',
                                  'rules' => 'required'
                            ),
                       array(
                                  'field' => 'staff_dept',
                                  'label' => 'Staff Department',
                                  'rules' => 'required'
                            ),
                      array(
                                'field' => 'staff_level',
                                'label' => 'Staff Level',
                                'rules' => 'required'
                        ),
                       array(
                              'field' => 'staff_status',
                              'label' => 'Staff Status',
                              'rules' => 'required'
                            )
                  ),
        'staff_department/add' => array(
                    array(
                            'field' => 'staff_dept',
                            'label' => 'Department Name',
                            'rules' => 'required'
            )
            ),
            'staff_level/add' => array(
                    array(
                            'field' => 'staff_level',
                            'label' => 'Staff Level',
                            'rules' => 'required'
            )
                ),
                'customers_status/add' => array(
                    array(
                            'field' => 'staff_status',
                            'label' => 'Staff Status',
                            'rules' => 'required'
            )
    ),
                'employment_type/add' => array(
                    array(
                            'field' => 'staff_type',
                            'label' => 'Employment Type',
                            'rules' => 'required'
            )
    ),
    'sms' =>  array(
              array(
                        'field' => 'sender',
                        'label' => 'Sender',
                        'rules' => 'required'
                ),
        array(
                        'field' => 'to',
                        'label' => 'To',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'subject',
                        'label' => 'Subject',
                        'rules' => 'required'
                )
        ),
                      
);
$config['error_prefix'] = '<div class="alert alert-danger">';
$config['error_suffix'] = '</div>';
