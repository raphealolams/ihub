<?php /* Smarty version 3.1.27, created on 2017-01-27 19:19:17
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\expenses\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4806588b8f25d23ab9_20369171%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5a9c76376d0f28f86e4f44eae73a72f08dc012' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\expenses\\add.tpl',
      1 => 1485541155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4806588b8f25d23ab9_20369171',
  'variables' => 
  array (
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588b8f25d6a209_70200370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588b8f25d6a209_70200370')) {
function content_588b8f25d6a209_70200370 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4806588b8f25d23ab9_20369171';
?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>Successfully saved <?php }?>

<h1>Add Expense</h1>

<?php echo form_open();?>

<label>Reason</label>
<input name="expenses_reason" type="text">
<label>Amount</label>
<input name="expenses_amount" type="text">


<label>Date</label>
<input name="expenses_datetime" type="date" />
<input type="submit" name="submit" value="Save" />
<?php echo form_close();?>

<?php }
}
?>