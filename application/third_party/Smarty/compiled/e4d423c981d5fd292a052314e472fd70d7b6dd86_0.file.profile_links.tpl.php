<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\widgets\profile_links.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3236058179f981a7626_67864224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d423c981d5fd292a052314e472fd70d7b6dd86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\widgets\\profile_links.tpl',
      1 => 1474552770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236058179f981a7626_67864224',
  'variables' => 
  array (
    'options' => 0,
    'user' => 0,
    'class' => 0,
    'links' => 0,
    'u' => 0,
    'is_logged_in' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179f981fcb27_09309910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179f981fcb27_09309910')) {
function content_58179f981fcb27_09309910 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3236058179f981a7626_67864224';
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable('col-xm-12 col-lg-12 col-md-12 col-sm-12', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['options']->value['show_image']) && $_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable('col-xm-6 col-lg-6 col-md-6 col-sm-6', null, 0);?>
    <div class="col-xm-6 col-lg-6 col-md-6 col-sm-6">
        <img class="img img-thumbnail" width="100px" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getImage();?>
" />
    </div>
<?php }?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
    <ul class="list-unstyled list-group center-align">
    <?php
$_from = $_smarty_tpl->tpl_vars['links']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['u'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['u']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
$foreach_u_Sav = $_smarty_tpl->tpl_vars['u'];
?>        
        <li><a href="<?php echo site_url($_smarty_tpl->tpl_vars['u']->value['url']);?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['u']->value['label'];?>
</a></li>
     <?php
$_smarty_tpl->tpl_vars['u'] = $foreach_u_Sav;
}
?>
    </ul>
    <?php if (!$_smarty_tpl->tpl_vars['is_logged_in']->value) {?>
    <?php echo get_login_options();?>

<?php }?>
</div>
<div class="clearfix"></div>
<?php }
}
?>