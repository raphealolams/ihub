<?php /* Smarty version 3.1.27, created on 2016-12-22 03:21:25
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\test\views\amazonws\batch_upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28777585be16529a1f6_04605407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d203db1e212bdd96c5a1ed1b98f25f4c5dfd05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\amazonws\\batch_upload.tpl',
      1 => 1482416479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28777585be16529a1f6_04605407',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585be1652ec395_39079247',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585be1652ec395_39079247')) {
function content_585be1652ec395_39079247 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28777585be16529a1f6_04605407';
echo $_smarty_tpl->tpl_vars['form']->value->openMultipart();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();

}
}
?>