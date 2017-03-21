<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:45
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\favour\partials\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23542584ffcb5d2fa86_14945568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65f93f3c22f8001b54193845aa70cf19ce088c3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\favour\\partials\\header.tpl',
      1 => 1471967722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23542584ffcb5d2fa86_14945568',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffcb5d66059_86155132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffcb5d66059_86155132')) {
function content_584ffcb5d66059_86155132 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '23542584ffcb5d2fa86_14945568';
ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'favour'),$_smarty_tpl);
$_tmp3=ob_get_clean();
$_smarty_tpl->tpl_vars['theme_public_url'] = new Smarty_Variable($_tmp3, null, 0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo smarty_function_meta_tags(array(),$_smarty_tpl);?>

    <?php echo smarty_function_link_tags(array(),$_smarty_tpl);?>

    <title> <?php echo smarty_function_page_title(array(),$_smarty_tpl);?>
</title> 
    <?php echo smarty_function_header_style_hooks(array(),$_smarty_tpl);?>
 
    
    <?php echo smarty_function_header_script_hooks(array(),$_smarty_tpl);?>
  
   
    
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
   <?php }
}
?>