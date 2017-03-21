<?php /* Smarty version 3.1.27, created on 2016-11-02 19:15:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\view_category_docs.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31308581ad61fcf0698_66688302%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59bead911aa9f1efb80ba771dab88462086ac850' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\view_category_docs.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31308581ad61fcf0698_66688302',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad61fd94282_40952232',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad61fd94282_40952232')) {
function content_581ad61fd94282_40952232 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';

$_smarty_tpl->properties['nocache_hash'] = '31308581ad61fcf0698_66688302';
?>

<?php echo smarty_function_action_title(array('title'=>$_smarty_tpl->tpl_vars['post']->value->title),$_smarty_tpl);?>

<div class="col-md-12">
    <?php echo $_smarty_tpl->tpl_vars['post']->value->getBody();?>

</div>
<div class="col-md-12 post-body clearfix">
    <?php echo share_buttons();?>

 </div>
<?php echo smarty_function_locate_load(array('file'=>'partials/post_tags_comments'),$_smarty_tpl);?>

    <?php }
}
?>