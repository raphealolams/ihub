<?php /* Smarty version 3.1.27, created on 2016-10-31 09:19:20
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\pages\views\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65555817a748bd3dd5_59512535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf83ac03d6581c6e319b35ecbb71d5a76f43a04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\pages\\views\\view.tpl',
      1 => 1475704157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65555817a748bd3dd5_59512535',
  'variables' => 
  array (
    'errors' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817a748f21678_96005680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817a748f21678_96005680')) {
function content_5817a748f21678_96005680 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '65555817a748bd3dd5_59512535';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?>
   <?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-social-buttons'),$_smarty_tpl);?>

    <?php echo smarty_function_action_title(array('title'=>((string)$_smarty_tpl->tpl_vars['page']->value->getTitle())),$_smarty_tpl);?>

    
        <?php echo $_smarty_tpl->tpl_vars['page']->value->getBody();?>

    
    
        <div class="col-sm-12 col-md-12 share-buttons">
            <?php echo share_buttons();?>

        </div>
    
    
    <p>&nbsp;</p>
     <?php if ($_smarty_tpl->tpl_vars['page']->value->comment) {?>
         
         <div id="comment-total">
         </div>
         <div id="comments">
            <?php echo get_comment_list('page',$_smarty_tpl->tpl_vars['page']->value->id,'',site_url(((string)$_smarty_tpl->tpl_vars['page']->value->slug)));?>

         </div>
    <?php }?>
    
     
<?php }?>

<?php }
}
?>