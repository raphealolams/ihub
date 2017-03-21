<?php /* Smarty version 3.1.27, created on 2016-11-08 22:55:12
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\carts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96825822f28008bc36_00661554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bdb6a4f8b5c4b18aa74ea024f51bb11e3771468' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\carts.tpl',
      1 => 1476969568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96825822f28008bc36_00661554',
  'variables' => 
  array (
    'success' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5822f28014b5f5_07109507',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5822f28014b5f5_07109507')) {
function content_5822f28014b5f5_07109507 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '96825822f28008bc36_00661554';
?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo BootstrapHelper::alert('success',"Carts Deleted");?>
 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['count']->value) {?>
    <?php echo BootstrapHelper::alert('info',"Found ".((string)$_smarty_tpl->tpl_vars['count']->value)." carts");?>

<?php }?>
<?php echo form_open();?>

    <div class="form-group">
        <label >In Days</label>
        <select class="form-control" name="days">
            <option value="1">Last One Day</option>
            <option value="7">Last One Week</option>
            <option value="30">Last 30 Days</option>
            <option value="60">Last 60 Days</option>
            <option value="90">Last 90 Days</option>
        </select>
    </div>
    <input name="count_old_carts" type="submit" value="Count" class="btn btn-default"/>
    <input name="delete_old_carts" type="submit" value="Delete" class="btn btn-default"/>
<?php echo form_open();

}
}
?>