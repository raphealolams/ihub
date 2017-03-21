<?php /* Smarty version 3.1.27, created on 2016-12-08 06:58:09
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\crystalhills\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:548458499f3141c539_01297780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2bd84dac1cccf7e09b9bd8755e36751a31ca76b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\crystalhills\\views\\index.tpl',
      1 => 1481219879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '548458499f3141c539_01297780',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58499f31790fa7_62815025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58499f31790fa7_62815025')) {
function content_58499f31790fa7_62815025 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '548458499f3141c539_01297780';
?>


<p>Hello World!!

    Add any thin  <a href="/crystalhills/index">Index </a> </p>

<p  class="alert-success"> We are using bootsrap </p>
<?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>


    <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();

}
}
?>