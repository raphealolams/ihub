<?php /* Smarty version 3.1.27, created on 2016-12-08 05:33:56
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\options\views\admin\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:531258498b7431e486_91187731%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa427b8e9f23358129458cacb58d16725e45b986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\options\\views\\admin\\settings.tpl',
      1 => 1475918181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '531258498b7431e486_91187731',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'form' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58498b743f7786_14860482',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58498b743f7786_14860482')) {
function content_58498b743f7786_14860482 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '531258498b7431e486_91187731';
?>

<?php ob_start();
echo lang('edit_main_options');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['success']->value) {?> 
    <?php echo nyra_alert(lang('alert_update_success'),'success');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
<?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="settings-form"');?>
 
     <!-- end tab control-->
    
    <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render('',array(),true), null, 0);?> 
    <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-success btn-block"');?>

<?php echo form_close();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo country_list_js('#input-countryCode','#input-state');?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      <?php }
}
?>