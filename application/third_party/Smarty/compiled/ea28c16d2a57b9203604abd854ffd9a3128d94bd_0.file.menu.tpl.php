<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:49
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\notifications\views\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:642058179fa9688759_49767942%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea28c16d2a57b9203604abd854ffd9a3128d94bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\notifications\\views\\menu.tpl',
      1 => 1474552763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '642058179fa9688759_49767942',
  'variables' => 
  array (
    'activities' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa9702029_29794188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa9702029_29794188')) {
function content_58179fa9702029_29794188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '642058179fa9688759_49767942';
$_from = $_smarty_tpl->tpl_vars['activities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
">
            <div>
                <i class="<?php echo $_smarty_tpl->tpl_vars['a']->value['icon'];?>
 fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>

                <span class="pull-right text-muted small"><?php echo $_smarty_tpl->tpl_vars['a']->value['timespan'];?>
</span>
            </div>
        </a>
    </li>
    <li class="divider"></li>
<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
<li>
    <a class="text-center" href="<?php echo site_url('notifications');?>
" >
        <strong><?php echo lang('view_all');?>
</strong>
        <i class="fa fa-angle-right"></i>
    </a>
</li><?php }
}
?>