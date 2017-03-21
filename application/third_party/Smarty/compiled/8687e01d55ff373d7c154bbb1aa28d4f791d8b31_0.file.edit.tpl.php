<?php /* Smarty version 3.1.27, created on 2016-11-01 12:25:06
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\categories\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2996058192452746101_82343669%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8687e01d55ff373d7c154bbb1aa28d4f791d8b31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\categories\\views\\admin\\edit.tpl',
      1 => 1475918181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2996058192452746101_82343669',
  'variables' => 
  array (
    'success' => 0,
    'category' => 0,
    'form' => 0,
    'errors' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58192452a232a0_48620932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58192452a232a0_48620932')) {
function content_58192452a232a0_48620932 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';

$_smarty_tpl->properties['nocache_hash'] = '2996058192452746101_82343669';
?>

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo nyra_alert(lang('alert_update_success'),'success');?>

    <?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="btn-group pull-left">
         <?php echo HtmlHelper::listButton(admin_url("categories/manage/".((string)$_smarty_tpl->tpl_vars['category']->value->entity)));?>

         <?php echo HtmlHelper::backButton();?>

    </div>
    <div class="btn-group pull-right">
         <?php echo HtmlHelper::submitButton('category-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

         <?php echo HtmlHelper::deleteButton(admin_url("posts/delete/".((string)$_smarty_tpl->tpl_vars['category']->value->id)));?>

         <?php echo HtmlHelper::helpButton('plugins-category');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo smarty_function_loop_errors(array('errors'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>
    
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->open('',array('id'=>'category-form'));?>
   
        <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['category']->value,array(),true), null, 0);?> 
        <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

    <?php echo form_close();?>

<?php }?>      
        	
    
    
<?php }
}
?>