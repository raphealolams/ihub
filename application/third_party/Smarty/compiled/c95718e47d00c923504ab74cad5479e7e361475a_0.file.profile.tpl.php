<?php /* Smarty version 3.1.27, created on 2017-02-08 02:18:39
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\users\profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14913589a71ef04a840_61612071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c95718e47d00c923504ab74cad5479e7e361475a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\users\\profile.tpl',
      1 => 1486516716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14913589a71ef04a840_61612071',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a71ef0d7262_04928576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a71ef0d7262_04928576')) {
function content_589a71ef0d7262_04928576 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14913589a71ef04a840_61612071';
if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div  class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div  class="alert alert-success">Profile Update Successfully</div>
<?php }?>
<p><i class="glyphicon glyphicon-user"></i><strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
</strong></p>
<?php echo form_open_multipart();?>

<fieldset>
    <Legend><span class="label label-default text-lg">Personal Details </span></legend>
        <div class="form-group">
          <label for="user_name">Name</label>
          <input type="text" name="user_name" class="form-control" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
">
          <?php echo form_error('user_name');?>

        </div>
        <div class="form-group">
          <label for="name">Photo</label>
          <input type="file" name="photo" class="form-control" id="email" value="">
        </div>
       
</fieldset>

<input type="submit" name="submit" class="btn btn-default" value="Update" />
<?php echo form_close();

}
}
?>