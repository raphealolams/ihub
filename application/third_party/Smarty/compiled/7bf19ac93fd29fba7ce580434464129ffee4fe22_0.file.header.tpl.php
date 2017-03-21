<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\themes\deal\includes\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:516158179fa78d1358_08044948%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf19ac93fd29fba7ce580434464129ffee4fe22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\themes\\deal\\includes\\header.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516158179fa78d1358_08044948',
  'variables' => 
  array (
    'public_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa78f90b0_16094310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa78f90b0_16094310')) {
function content_58179fa78f90b0_16094310 ($_smarty_tpl) {
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '516158179fa78d1358_08044948';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo smarty_function_page_title(array(),$_smarty_tpl);?>
</title>
    <!-- Core CSS - Include with every page -->
    <?php echo smarty_function_header_style_hooks(array(),$_smarty_tpl);?>
  
    <link href="<?php echo $_smarty_tpl->tpl_vars['public_uri']->value;?>
plugins/dashboard/css/main-style.css" rel="stylesheet" />

    
    <?php echo smarty_function_header_script_hooks(array(),$_smarty_tpl);?>
     
    <style>
        .alert {
            padding: 20px !important;
            border-left: red solid !important;
            border-radius: 0px !important;
        }
    </style><?php }
}
?>