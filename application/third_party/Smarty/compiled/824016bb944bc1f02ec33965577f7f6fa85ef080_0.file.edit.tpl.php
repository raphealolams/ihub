<?php /* Smarty version 3.1.27, created on 2016-12-22 02:22:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\options\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1955585bd3b39193a6_98518422%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '824016bb944bc1f02ec33965577f7f6fa85ef080' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\options\\views\\admin\\edit.tpl',
      1 => 1475918181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1955585bd3b39193a6_98518422',
  'variables' => 
  array (
    'errors' => 0,
    'form' => 0,
    'saved_options' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585bd3b3e5c1f3_66495051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585bd3b3e5c1f3_66495051')) {
function content_585bd3b3e5c1f3_66495051 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '1955585bd3b39193a6_98518422';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group pull-left">
        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('options-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

             <?php echo HtmlHelper::helpButton('plugins-nyra_posts');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php ob_start();
echo lang('edit_options');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('',array('id'=>'options-form'));?>
  
        <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['saved_options']->value,array(),true), null, 0);?> 
         <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-success"');?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>


<?php }
}
?>