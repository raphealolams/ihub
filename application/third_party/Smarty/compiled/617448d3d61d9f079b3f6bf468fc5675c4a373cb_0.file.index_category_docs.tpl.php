<?php /* Smarty version 3.1.27, created on 2017-01-17 02:06:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\index_category_docs.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26745587e16f38a8a22_93526610%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617448d3d61d9f079b3f6bf468fc5675c4a373cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\index_category_docs.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26745587e16f38a8a22_93526610',
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'url' => 0,
    'total' => 0,
    'limit' => 0,
    'query_string_segment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587e16f392d083_24559986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e16f392d083_24559986')) {
function content_587e16f392d083_24559986 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26745587e16f38a8a22_93526610';
?>

<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable($_smarty_tpl->tpl_vars['post']->value->getUrl(false), null, 0);?>
        <p>
            <span class="post-title text-uppercase">
                <strong><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
 </a></strong>
            </span>
           
        <?php echo $_smarty_tpl->tpl_vars['post']->value->getSummary();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="btn btn-default">Read</a>
         </p>
<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
<div class="center-align"><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value,null,null,$_smarty_tpl->tpl_vars['query_string_segment']->value);?>
</div><?php }
}
?>