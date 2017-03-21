<?php /* Smarty version 3.1.27, created on 2016-12-13 02:49:33
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\destiny\partials\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3284584ffc6d3a58b4_38679204%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '597a4313d625020049d307e23cd3b0abab87b0b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\destiny\\partials\\header.tpl',
      1 => 1474546521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3284584ffc6d3a58b4_38679204',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc6d433a65_84643853',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc6d433a65_84643853')) {
function content_584ffc6d433a65_84643853 ($_smarty_tpl) {
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '3284584ffc6d3a58b4_38679204';
?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php echo smarty_function_meta_tags(array(),$_smarty_tpl);?>

    <?php echo smarty_function_link_tags(array(),$_smarty_tpl);?>

    <title> <?php echo smarty_function_page_title(array(),$_smarty_tpl);?>
</title> 
    
    <?php echo smarty_function_header_style_hooks(array(),$_smarty_tpl);?>
  
    <?php echo smarty_function_header_script_hooks(array(),$_smarty_tpl);?>
  	 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if  lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif ]-->

    <style>
        body{
            padding-top: 110px;
        }
        .shadow{
              box-shadow: 5px 7px 5px #888888;
              position: absolute;
              bottom: 0px;
              height: 10px;
              z-index: -20;
              width: 98%;
              
        }
        #main-nav{
            min-height: 70px;
            margin: 0px 15px 3px;
          
        }
        
        #main-nav .navbar-toggle{
            padding: 12px 10px;
        }
        .navbar-nav > li > a{
            font-family: Georgia, serif;
            word-spacing: 2px;
            text-transform: uppercase;
            font-size: medium;
        }
        #main-nav > .container{
                padding: 20px 10px;
        }
        .sidebar .widget-heading h4,.sidebar .widget-heading h3 ,.sidebar .widget-heading h4 {
            border-bottom: red solid;
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
        .home-feeds .widget-heading {
            text-align: left
        }
        .home-feeds span.widget-title {
             border-bottom: red solid;
        }
        #home-page-slides{
            min-height: 200px
        }
        
        .post-list-item img, .post-list-item{
            transition: all 2s;
        }
        .post-list-item a:hover img{
            opacity: 0.4;
            //width: 100%;
        }
        .post-list-item a:hover .post-item-meta{
            top: 50%;
            //width: 100%;
        }
        .post-item-meta{
            //position : absolute;
        }
        ol.breadcrumb {
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
        .breadcrumb>li+li:before{
                padding: 0 5px;
                color: #824a22;
                content: "\2192";
        }
        // any title
        h1 .title {
            font-family: "Comic Sans MS", cursive, sans-serif !important;
        }
        .action-block{
            font-family: Verdana, Geneva, sans-serif;
        }
        .action-block h2{
            font-size: 20px;
        }
        
        .widget{
            margin-bottom: 5px;
        }
        #footer .footer-menu a {
            color: #f2dede; 
        }
        #footer .footer-menu a:hover {
            color: #212725;
            font-weight: bold;
        }
    </style><?php }
}
?>