<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    
    /**
     * 
     * Create directory if not exisrts
     * We use this for tne uploads
     * @param string $dir
     * @param int $mode
     * @param boolean $recursive
     */
    function create_directory($dir, $mode= 0777 , $recursive = true)
    {
        if(!is_dir($dir))
        {
            mkdir($dir, $mode , $recursive);
        }
    }

