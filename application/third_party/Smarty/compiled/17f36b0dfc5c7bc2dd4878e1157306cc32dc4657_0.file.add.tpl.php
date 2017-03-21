<?php /* Smarty version 3.1.27, created on 2016-12-13 02:57:50
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\pages\views\admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11975584ffe5eba0d95_76245106%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f36b0dfc5c7bc2dd4878e1157306cc32dc4657' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\pages\\views\\admin\\add.tpl',
      1 => 1481459767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11975584ffe5eba0d95_76245106',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'form' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffe5ec91be5_66286210',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffe5ec91be5_66286210')) {
function content_584ffe5ec91be5_66286210 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '11975584ffe5eba0d95_76245106';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_create_success'),'success');?>

<?php }?>    
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>    
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="btn-group pull-left">
         <?php echo HtmlHelper::listButton(admin_url('pages/manage'));?>

         <?php echo HtmlHelper::backButton();?>

    </div>
    <div class="btn-group pull-right">
        <?php echo HtmlHelper::submitButton('page-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

        <?php echo HtmlHelper::helpButton('plugins-nyra_pages');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="page-form"');?>
 
    
    <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render('',array(),true), null, 0);?> 
    <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>





            
            
            
            
<?php }
}
?>