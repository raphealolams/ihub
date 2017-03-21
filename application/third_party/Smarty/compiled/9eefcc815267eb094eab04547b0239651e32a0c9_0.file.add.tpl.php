<?php /* Smarty version 3.1.27, created on 2017-01-30 13:53:29
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25444588f3749da2331_87027081%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eefcc815267eb094eab04547b0239651e32a0c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\add.tpl',
      1 => 1485779844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25444588f3749da2331_87027081',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588f3749df9bd4_44731480',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588f3749df9bd4_44731480')) {
function content_588f3749df9bd4_44731480 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25444588f3749da2331_87027081';
?>
<form>
	Name: <input type="text" name="name" required>
	Comment: <input type="text" name="comment">
	Email Address: <input type="email" name="email" required placeholder="Enter a valid email address">


</form><?php }
}
?>