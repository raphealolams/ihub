<?php /* Smarty version 3.1.27, created on 2016-12-08 05:55:50
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\nyra_developer\views\admin\add_project.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:152958499096e74cd8_08632525%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84c3265467da006231b030103499fd18a4453cdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\nyra_developer\\views\\admin\\add_project.tpl',
      1 => 1475148118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152958499096e74cd8_08632525',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58499097073a19_33138987',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58499097073a19_33138987')) {
function content_58499097073a19_33138987 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';

$_smarty_tpl->properties['nocache_hash'] = '152958499096e74cd8_08632525';
echo smarty_function_action_title(array('title'=>'Add Project'),$_smarty_tpl);?>

<?php echo smarty_function_loop_errors(array('error'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?> 
    <?php echo nyra_alert(lang('alert_create_success'),'success');?>

 <?php } else { ?>
     <div class="col-md-6">
        <?php echo nyra_form_open();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

           <?php echo $_smarty_tpl->tpl_vars['form']->value->SubmitButton('Add Project','btn btn-primary btn-block');?>

        <?php echo form_close();?>

     </div>
    <?php }
}
}
?>