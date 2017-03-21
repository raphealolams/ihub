<?php /* Smarty version 3.1.27, created on 2016-11-01 23:03:31
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\categories\views\admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:42445819b9f369c304_26746867%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126e0678d14a1b19c4695d35e82af696d33141a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\categories\\views\\admin\\add.tpl',
      1 => 1475918181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42445819b9f369c304_26746867',
  'variables' => 
  array (
    'errors' => 0,
    'entity' => 0,
    'form' => 0,
    'success' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819b9f3c71cd2_52324790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819b9f3c71cd2_52324790')) {
function content_5819b9f3c71cd2_52324790 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '42445819b9f369c304_26746867';
if ($_smarty_tpl->tpl_vars['errors']->value) {?> 
    <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group pull-left">
             <?php echo HtmlHelper::listButton(admin_url("categories/manage/".((string)$_smarty_tpl->tpl_vars['entity']->value)));?>

             <?php echo HtmlHelper::backButton();?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('category-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

             <?php echo HtmlHelper::helpButton('plugins-categories');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {
echo nyra_alert(lang('alert_create_success'),'success');
}?>
     <?php echo $_smarty_tpl->tpl_vars['form']->value->open('',array('id'=>'category-form'));?>

        <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render('',array('id'=>'category-form'),true), null, 0);?>                  
    <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

    <?php echo form_close();?>

        
    
<?php }?>
    
<?php }
}
?>