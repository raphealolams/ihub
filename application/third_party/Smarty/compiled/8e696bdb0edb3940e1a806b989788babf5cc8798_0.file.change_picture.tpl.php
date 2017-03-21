<?php /* Smarty version 3.1.27, created on 2016-11-02 05:30:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\change_picture.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28789581a14a80366e8_14981758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e696bdb0edb3940e1a806b989788babf5cc8798' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\change_picture.tpl',
      1 => 1475148118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28789581a14a80366e8_14981758',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'form' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a14a81183b4_07796878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a14a81183b4_07796878')) {
function content_581a14a81183b4_07796878 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '28789581a14a80366e8_14981758';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_upload_success'),'success');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo smarty_function_loop_errors(array('error'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php }?>
<?php echo smarty_function_action_title(array('title'=>'Profile Picture'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['user']->value);?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

<?php }
}
?>