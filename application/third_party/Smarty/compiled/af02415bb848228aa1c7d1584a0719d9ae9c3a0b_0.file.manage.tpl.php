<?php /* Smarty version 3.1.27, created on 2016-11-21 10:11:17
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\comments\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13183583362f57a09a9_90095902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af02415bb848228aa1c7d1584a0719d9ae9c3a0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\comments\\views\\admin\\manage.tpl',
      1 => 1475572160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13183583362f57a09a9_90095902',
  'variables' => 
  array (
    'errors' => 0,
    'comments_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583362f580a884_30805371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583362f580a884_30805371')) {
function content_583362f580a884_30805371 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '13183583362f57a09a9_90095902';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

 <?php } else { ?>
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Manage Comments <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo $_smarty_tpl->tpl_vars['comments_html']->value;?>

<?php }?>

 
<?php }
}
?>