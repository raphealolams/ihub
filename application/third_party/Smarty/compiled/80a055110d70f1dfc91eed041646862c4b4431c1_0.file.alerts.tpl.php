<?php /* Smarty version 3.1.27, created on 2017-02-01 14:20:13
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\partials\alerts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:289625891e08d1194f9_31632130%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80a055110d70f1dfc91eed041646862c4b4431c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\partials\\alerts.tpl',
      1 => 1485955208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289625891e08d1194f9_31632130',
  'variables' => 
  array (
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891e08d1844a6_30597861',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891e08d1844a6_30597861')) {
function content_5891e08d1844a6_30597861 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '289625891e08d1194f9_31632130';
if (is_array($_smarty_tpl->tpl_vars['alerts']->value)) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['alerts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['alert']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
$foreach_alert_Sav = $_smarty_tpl->tpl_vars['alert'];
?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value['type'];?>
 fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value['message'];?>

        </div>
    <?php
$_smarty_tpl->tpl_vars['alert'] = $foreach_alert_Sav;
}
?>
<?php }
}
}
?>