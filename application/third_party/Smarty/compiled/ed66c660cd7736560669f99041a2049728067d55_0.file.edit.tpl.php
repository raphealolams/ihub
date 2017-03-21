<?php /* Smarty version 3.1.27, created on 2017-01-23 07:00:29
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\salaries\views\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10773588644bd4f0953_22652919%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed66c660cd7736560669f99041a2049728067d55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\salaries\\views\\edit.tpl',
      1 => 1485194424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10773588644bd4f0953_22652919',
  'variables' => 
  array (
    'form' => 0,
    'employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588644bd550af5_88700338',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588644bd550af5_88700338')) {
function content_588644bd550af5_88700338 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10773588644bd4f0953_22652919';
?>
<h1>Add Employees</h1>
<div class="col-md-12">
 
    <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['employee']->value);?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>


</div><?php }
}
?>