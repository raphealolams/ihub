<?php

function option_get_logo()
{
     $CI = get_instance();
     $CI->load->model('setup');
     
     return  $CI->setup->getLogoUrl();
}


function get_option($name = '')
{
      $CI = get_instance();
      $CI->load->model('setup');
    return $CI->setup->getOption($name);
}
