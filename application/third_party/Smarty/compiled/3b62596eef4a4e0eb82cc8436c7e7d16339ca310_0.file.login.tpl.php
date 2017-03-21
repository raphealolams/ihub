<?php /* Smarty version 3.1.27, created on 2017-02-02 16:19:00
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\users\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2731958934de4346335_86395573%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b62596eef4a4e0eb82cc8436c7e7d16339ca310' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\users\\login.tpl',
      1 => 1486048662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2731958934de4346335_86395573',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58934de45316f3_62658894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58934de45316f3_62658894')) {
function content_58934de45316f3_62658894 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2731958934de4346335_86395573';
?>

<?php echo form_open();?>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div  class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <div class="form-group">
        <label><i class="glyphicon glyphicon-user"></i> Username</label>
        <input type="text"class="form-control" name="username" value="<?php echo set_value('username');?>
" />
        <?php echo form_error('username');?>

    </div>
    <div class="form-group">
        <label> <i class="glyphicon glyphicon-lock"></i> Password</label>
        <input type="password" name="password" class="form-control" />
        <?php echo form_error('password');?>

    </div>
    <input type="submit" name="login" value="Login" class="btn btn-default" />
    <div class="btn-group pull-right">
        <a class="" 
           href="<?php echo site_url("users/register");?>
"> Register</a> &nbsp;
        <a class="" 
            href="<?php echo site_url("users/forgot_password");?>
"> Forgot Password?</a>
    </div>
<?php echo form_close();

}
}
?>