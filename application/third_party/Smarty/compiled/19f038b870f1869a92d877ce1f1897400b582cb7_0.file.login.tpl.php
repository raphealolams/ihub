<?php /* Smarty version 3.1.27, created on 2017-01-23 05:34:19
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\salaries\views\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:266765886308b1f8e29_26039767%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f038b870f1869a92d877ce1f1897400b582cb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\salaries\\views\\login.tpl',
      1 => 1485189256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266765886308b1f8e29_26039767',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5886308b244e15_90850152',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5886308b244e15_90850152')) {
function content_5886308b244e15_90850152 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '266765886308b1f8e29_26039767';
?>
<h1>Login</h1>

<?php ob_start();
echo form_open('');
$_tmp1=ob_get_clean();
echo $_tmp1;?>

<label>Email</label>
<input type="text" name="email">

<label>Password</label>
<input type="password" name="password">


<input type="submit" name="login"  value="Login">

</form><?php }
}
?>