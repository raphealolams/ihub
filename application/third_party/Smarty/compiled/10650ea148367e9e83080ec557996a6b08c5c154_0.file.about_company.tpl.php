<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\featured\views\widgets\about_company.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2647158179f984df519_15568603%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10650ea148367e9e83080ec557996a6b08c5c154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\featured\\views\\widgets\\about_company.tpl',
      1 => 1474552722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2647158179f984df519_15568603',
  'variables' => 
  array (
    'page' => 0,
    'menu_items' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179f98504bf6_20503490',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179f98504bf6_20503490')) {
function content_58179f98504bf6_20503490 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2647158179f984df519_15568603';
?>

<p><?php echo $_smarty_tpl->tpl_vars['page']->value->getBody();?>
 </p>
<p>
    <?php if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['menu_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value->getUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->label;?>
</a><br />
        <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    <?php }?>
</p><?php }
}
?>