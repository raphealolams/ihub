<?php /* Smarty version 3.1.27, created on 2017-02-07 03:12:54
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\edit_department.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1940558992d263c8724_87568551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8567543b7d52cf5a08b2203ec7550776b370c43e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\edit_department.tpl',
      1 => 1486433570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940558992d263c8724_87568551',
  'variables' => 
  array (
    'department' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58992d26442526_78921655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58992d26442526_78921655')) {
function content_58992d26442526_78921655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1940558992d263c8724_87568551';
?>
<form method="POST">
   <div class="form-group">
       <label for="name">Department Name:</label>
       <input type="text" name="name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['department']->value->name;?>
">
   </div>
   <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</form>
<?php }
}
?>