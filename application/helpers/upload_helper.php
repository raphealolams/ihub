<?php


/**
*
*@return CI_Upload|string|int
*returns CI_Upload if the upload is successful 
*returns string if the upload has error 
*returns -1 if no file was submitted for upload
*/
function upload_file( $input_name = '', $filename = '' , $folder = '' )
{
    $CI = get_instance();

    $CI->load->helper('directory');
    
     $config['allowed_types']        = 'png|gif|jpeg|jpg';
    $config['max_size']             = 2000;
    // upload photo
    $folder = $folder;
        
    $config['upload_path']   =  dirname(BASEPATH).$folder;
    $config['file_name']   =  $filename;
        
    $CI->load->library('upload', $config);

    create_directory(  $config['upload_path']);
        
    if ( !empty($_FILES[$input_name]['name']))
    {
        if(!$CI->upload->do_upload($input_name))
        {
            return $CI->upload->display_errors();
        }
        else
        {
            return $CI->upload;
        }
    }
    // no upload ocured
    return -1;
}