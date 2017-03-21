<?php /* Smarty version 3.1.27, created on 2016-12-08 05:33:19
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\roles\views\admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:441358498b4f5983e2_06698956%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '281823b32a0ba0f7a9813d4d2a9f7170936410b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\roles\\views\\admin\\add.tpl',
      1 => 1479997564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '441358498b4f5983e2_06698956',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58498b4f660e94_38563140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58498b4f660e94_38563140')) {
function content_58498b4f660e94_38563140 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '441358498b4f5983e2_06698956';
?>

<?php ob_start();
echo lang('action_create_new','role');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_create_success'),'success');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
     <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
<section id="role-form" class="col-lg-6" >
    <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-success btn-justified"');?>

    <?php echo form_close();?>

</section><?php }
}
?>