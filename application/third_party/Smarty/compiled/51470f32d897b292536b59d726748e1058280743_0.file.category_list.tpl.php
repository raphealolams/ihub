<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\categories\views\widgets\category_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3255058179f983dd240_32002794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51470f32d897b292536b59d726748e1058280743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\categories\\views\\widgets\\category_list.tpl',
      1 => 1474552708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3255058179f983dd240_32002794',
  'variables' => 
  array (
    'categories' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179f983ff792_92657025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179f983ff792_92657025')) {
function content_58179f983ff792_92657025 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3255058179f983dd240_32002794';
?>
<ul class="category-list list-group list-unstyled">
<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
    <li > <a  href="<?php echo site_url($_smarty_tpl->tpl_vars['cat']->value->url);?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['cat']->value->title;?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
</ul>


<?php }
}
?>