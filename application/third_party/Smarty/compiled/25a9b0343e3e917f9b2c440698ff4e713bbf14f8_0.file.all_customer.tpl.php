<?php /* Smarty version 3.1.27, created on 2017-03-05 16:16:01
         compiled from "C:\wamp\www\ihub\application\views\customer\all_customer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2600658bc39c1505bb4_15635685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a9b0343e3e917f9b2c440698ff4e713bbf14f8' => 
    array (
      0 => 'C:\\wamp\\www\\ihub\\application\\views\\customer\\all_customer.tpl',
      1 => 1488730558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2600658bc39c1505bb4_15635685',
  'variables' => 
  array (
    'data' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58bc39c158a413_03200789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58bc39c158a413_03200789')) {
function content_58bc39c158a413_03200789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2600658bc39c1505bb4_15635685';
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$foreach_user_Sav = $_smarty_tpl->tpl_vars['user'];
?>

<?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>

<?php echo $_smarty_tpl->tpl_vars['user']->value->other_name;?>



<?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>


<?php }
}
?>