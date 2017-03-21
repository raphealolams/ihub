<?php /* Smarty version 3.1.27, created on 2017-01-23 05:09:08
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\salaries\views\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:323458862aa49e9fa6_08472487%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc7cc6f358b6eef07a8eb3f37d273f28b139777' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\salaries\\views\\view.tpl',
      1 => 1485187746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323458862aa49e9fa6_08472487',
  'variables' => 
  array (
    'error' => 0,
    'employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58862aa4a5b8a6_68065928',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58862aa4a5b8a6_68065928')) {
function content_58862aa4a5b8a6_68065928 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '323458862aa49e9fa6_08472487';
?>
<h1>Employee Data </h1>
<p><a href="<?php ob_start();
echo site_url('salaries/index');
$_tmp1=ob_get_clean();
echo $_tmp1;?>
" class="btn btn-primary">
        <i class="glyphicon glyphicon-arrow-left"></i> Back To List</a>
</p>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_tmp2=ob_get_clean();
echo $_tmp2;?>
 </div>
<?php } else { ?>
    <p><span class="label label-default">Name</span>  <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value->name;
$_tmp3=ob_get_clean();
echo $_tmp3;?>
</p>
    <p><span class="label label-default">Age</span>  <?php ob_start();
echo $_smarty_tpl->tpl_vars['employee']->value->age;
$_tmp4=ob_get_clean();
echo $_tmp4;?>
</p>
<?php }

}
}
?>