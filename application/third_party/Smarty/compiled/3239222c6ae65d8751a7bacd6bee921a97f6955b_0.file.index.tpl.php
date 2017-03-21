<?php /* Smarty version 3.1.27, created on 2016-12-13 05:11:42
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1560458501dbedf46c4_50229725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3239222c6ae65d8751a7bacd6bee921a97f6955b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\index.tpl',
      1 => 1474552766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560458501dbedf46c4_50229725',
  'variables' => 
  array (
    'index' => 0,
    'index_of' => 0,
    'posts' => 0,
    'post' => 0,
    'fallback_image' => 0,
    'total' => 0,
    'limit' => 0,
    'query_string_segment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58501dbf305ff1_81619888',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58501dbf305ff1_81619888')) {
function content_58501dbf305ff1_81619888 ($_smarty_tpl) {
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';

$_smarty_tpl->properties['nocache_hash'] = '1560458501dbedf46c4_50229725';
?>

<?php $_smarty_tpl->tpl_vars['posts_in'] = new Smarty_Variable('', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['index']->value == 'tagged') {?>
   <?php $_smarty_tpl->tpl_vars['posts_in'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['index_of']->value)." ARCHIEVE ", null, 0);?> 
<?php } elseif ($_smarty_tpl->tpl_vars['index']->value == 'category') {?>
<?php } elseif ($_smarty_tpl->tpl_vars['index']->value == 'author') {?>
<?php }?>

<?php if (!count($_smarty_tpl->tpl_vars['posts']->value)) {?>
    <?php echo BootstrapHelper::alert("danger",lang('record_non_found'));?>

    <?php echo smarty_function_HOOK(array('event'=>'nyra_posts.index.no_record'),$_smarty_tpl);?>

<?php }?>
<?php $_smarty_tpl->tpl_vars['is_operamini'] = new Smarty_Variable(browser_is_operamini(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['fallback_image'] = new Smarty_Variable(UrlHelper::baseUrl('/public/assets/img/news.jpg'), null, 0);?>
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
    <div class="post-list-item col-sm-12 col-sm-12 col-md-12 col-lg-12">
        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getUrl(false);?>
" >
            <?php if ($_smarty_tpl->tpl_vars['post']->value->format == 'video') {?>
                <?php echo $_smarty_tpl->tpl_vars['post']->value->getVideoTemplate();?>

            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'audio') {?>
                <?php echo $_smarty_tpl->tpl_vars['post']->value->getAudioTemplate();?>

            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'gallery') {?>
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='max-height: 200px; width: 100%'",$_smarty_tpl->tpl_vars['fallback_image']->value);?>
</p>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'link') {?>
                <?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='max-height: 200px; width: 100%'",$_smarty_tpl->tpl_vars['fallback_image']->value);?>

            <?php } else { ?>
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='max-height: 200px; width: 100%'");?>
</p>
            
            <?php }?>
            <p class="post-item-meta">
                <span class="label label-default post-format pull-left"><?php echo $_smarty_tpl->tpl_vars['post']->value->getFormat();?>
</span> 
                &nbsp;<span class="post-title text-uppercase"><strong><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
 </strong></span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['post']->value->getCreated();?>
 </span>
            <p/>
        </a>
    </div>
<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>

<div class="center-align"><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value,null,null,$_smarty_tpl->tpl_vars['query_string_segment']->value);?>
</div><?php }
}
?>