<?php /* Smarty version 3.1.27, created on 2016-11-02 18:53:13
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23916581ad0c90a2af6_29948060%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b0a01ac5b0daace47e61c87b7c8134303b4839a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\index.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23916581ad0c90a2af6_29948060',
  'variables' => 
  array (
    'index' => 0,
    'index_of' => 0,
    'posts' => 0,
    'tag' => 0,
    'category' => 0,
    'post' => 0,
    'url' => 0,
    'fallback_image' => 0,
    'THEME' => 0,
    'total' => 0,
    'limit' => 0,
    'query_string_segment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad0c941c7e0_73091464',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad0c941c7e0_73091464')) {
function content_581ad0c941c7e0_73091464 ($_smarty_tpl) {
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';

$_smarty_tpl->properties['nocache_hash'] = '23916581ad0c90a2af6_29948060';
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
<?php if (theme_option('arewa','post_show_intro')) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['tag']->value) && is_object($_smarty_tpl->tpl_vars['tag']->value)) {?>
        <div class="row">
            <div class="col-md-12 post-index-intro">
                <?php echo $_smarty_tpl->tpl_vars['tag']->value->description;?>

            </div>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['category']->value) && is_object($_smarty_tpl->tpl_vars['category']->value)) {?>
        <div class="row">
            <div class="col-md-12 post-index-intro">
                <?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>

            </div>
        </div>
    <?php }?>
<?php }?>
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
    <div class="post-list-item col-sm-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-md-4 post-list-image-box">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" >
                <?php if ($_smarty_tpl->tpl_vars['post']->value->format == 'video') {?>
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->getVideoTemplate('','100%','200px',false);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'audio') {?>
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->getAudioTemplate('','100%','200px',false);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'gallery') {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg();?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'link') {?>
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='max-height: 200px; width: 100%'",$_smarty_tpl->tpl_vars['fallback_image']->value);?>

                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='max-height: 150px; width: 100%'");?>
</p>
                <?php }?>
            </a>
        </div>
        <div class="col-md-8 post-list-meta">
            <p>
            <span class="post-title text-uppercase">
                <strong><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
 </a></strong>
            </span>
            <span class="pull-right">
                <i class="glyphicon glyphicon-calendar"></i>
                <?php echo $_smarty_tpl->tpl_vars['THEME']->value->formatDate($_smarty_tpl->tpl_vars['post']->value->getCreated());?>
 
            </span>
            </p>
            <?php echo $_smarty_tpl->tpl_vars['post']->value->getSummary();?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="btn btn-default"> more...</a>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>

<div class="center-align"><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value,null,null,$_smarty_tpl->tpl_vars['query_string_segment']->value);?>
</div><?php }
}
?>