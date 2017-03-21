<?php /* Smarty version 3.1.27, created on 2017-02-01 14:05:27
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\partials\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:318035891dd173b67f1_98238491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edc3b292b37dbb775e182b81e0a55f3134f229d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\partials\\header.tpl',
      1 => 1485954323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318035891dd173b67f1_98238491',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891dd17418030_90646304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891dd17418030_90646304')) {
function content_5891dd17418030_90646304 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '318035891dd173b67f1_98238491';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Metis</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?php echo base_url("assets/dashboard/img/metis-tile.png");?>
" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/lib/bootstrap/css/bootstrap.css");?>
">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/assets/font-awesome/css/font-awesome.css");?>
">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/css/main.css");?>
">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/lib/metismenu/metisMenu.css");?>
">

    <!-- animate.css")} stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/lib/animate.css/animate.css");?>
">



<!-- HTML5 shim and Respond.js")} for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js")} doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

    <!--For Development Only. Not required -->
    <?php echo '<script'; ?>
>
        less = {
            env: "development",
            relativeUrls: false,
                rootpath: "<?php echo base_url("assets/dashboard/");?>
"
        };
    <?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo base_url("assets/dashboard/css/style-switcher.css");?>
">
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url("assets/dashboard/less/theme.less");?>
">
    <link href="<?php echo base_url("assets/datatables/css/jquery.dataTables.min.css");?>
" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"><?php echo '</script'; ?>
>
    <!--jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/lib/jquery/jquery.js");?>
"><?php echo '</script'; ?>
>
            
    <?php echo '<script'; ?>
 src="<?php echo base_url("assets/datatables/js/jquery.dataTables.min.js");?>
" type="text/javascript"><?php echo '</script'; ?>
>
        <style>
            .tab-content{
                padding: 20px 10px;
            }   
            #formModal .modal-body{
                height: 450px;
            }
        </style>
        
    <?php }
}
?>