<?php /* Smarty version 3.1.27, created on 2016-12-08 06:53:07
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\crystalhills\views\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2317158499e03e48566_84914424%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7e892451dda6c153e7086f3bf341577dcbef41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\crystalhills\\views\\add.tpl',
      1 => 1481219585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2317158499e03e48566_84914424',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58499e03e96564_85809753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58499e03e96564_85809753')) {
function content_58499e03e96564_85809753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2317158499e03e48566_84914424';
echo $_smarty_tpl->tpl_vars['form']->value->open();?>


    <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();

}
}
?>