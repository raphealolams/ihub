<?php /* Smarty version 3.1.27, created on 2016-12-08 20:56:17
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\search_result.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31911584a63a1039595_77254563%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7a8c6781632b85e537339c5e3f89fabdb9db29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\search_result.tpl',
      1 => 1474552766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31911584a63a1039595_77254563',
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'total' => 0,
    'limit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584a63a20a7768_52330269',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584a63a20a7768_52330269')) {
function content_584a63a20a7768_52330269 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31911584a63a1039595_77254563';
$_smarty_tpl->tpl_vars['is_operamini'] = new Smarty_Variable(browser_is_operamini(), null, 0);?>
   
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
        <div class="row posts-result">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a></h3>
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getSummary();?>
... <?php echo $_smarty_tpl->tpl_vars['post']->value->created;?>
</p>
            </div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
    <div class="center-align"><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value);?>
</div>
<?php }
}
?>