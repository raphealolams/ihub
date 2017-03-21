<?php /* Smarty version 3.1.27, created on 2016-11-02 05:28:39
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22378581a143731bce7_65555127%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d8ee94a717d31e469064209e210f949b029181a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\forgot_password.tpl',
      1 => 1474552770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22378581a143731bce7_65555127',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'email' => 0,
    'redirect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a143778cb71_36579844',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a143778cb71_36579844')) {
function content_581a143778cb71_36579844 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '22378581a143731bce7_65555127';
if (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
        <?php echo smarty_function_action_title(array('title'=>'Forgot Password'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <div class="alert alert-success">
            <strong><span class="glyphicon glyphicon-ok"></span> FOllow the link sent to  <span class="text-danger">
                <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 </span>! to reset your password
            </strong>
        </div>
    <?php } else { ?>
        <?php echo nyra_form_open();?>

             <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="text" class="form-control"  name="email" placeholder="Enter Email" required>
                 <?php echo form_error("email");?>

             </div>
             <a href="<?php echo site_url('login');
if ($_smarty_tpl->tpl_vars['redirect']->value) {?>?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;
}?>" >Login</a>
             <input type="submit" name="reset" id="submit" value="Send Password" class="btn btn-primary pull-right">
         <?php echo form_close();?>

    <?php }?>
 <?php }?>
  <?php }
}
?>