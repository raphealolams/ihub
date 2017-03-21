<?php /* Smarty version 3.1.27, created on 2017-01-03 08:33:08
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\partials\post_tags_comments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31309586bfc747e8e51_24324205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014bc65280c0c1bd9ab36daa8becf785a1b9541c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\partials\\post_tags_comments.tpl',
      1 => 1483471986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31309586bfc747e8e51_24324205',
  'variables' => 
  array (
    'post_tags' => 0,
    'tag' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_586bfc75adc5f5_23043310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_586bfc75adc5f5_23043310')) {
function content_586bfc75adc5f5_23043310 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31309586bfc747e8e51_24324205';
if (count($_smarty_tpl->tpl_vars['post_tags']->value) > 0) {?>
        <div class="tag">
            <i class="glyphicon glyphicon-tags"></i>
                <?php
$_from = $_smarty_tpl->tpl_vars['post_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$foreach_tag_Sav = $_smarty_tpl->tpl_vars['tag'];
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getTagUrl($_smarty_tpl->tpl_vars['tag']->value->name,$_smarty_tpl->tpl_vars['tag']->value->group);?>
">
                        <span class='label label-success'><?php echo StringHelper::title($_smarty_tpl->tpl_vars['tag']->value->name);?>
</span>
                    </a>
                 <?php
$_smarty_tpl->tpl_vars['tag'] = $foreach_tag_Sav;
}
?> 
        </div> 
    <?php }?>
    
    
    <p>&nbsp;</p>
     <?php if ($_smarty_tpl->tpl_vars['post']->value->comment) {?>
         <div id="comments">
            <?php echo get_comment_list('post',$_smarty_tpl->tpl_vars['post']->value->id,'',site_url("posts/".((string)$_smarty_tpl->tpl_vars['post']->value->id)));?>

         </div>
<?php }
}
}
?>