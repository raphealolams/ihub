<?php /* Smarty version 3.1.27, created on 2016-11-05 08:09:36
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\index_category_projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31284581e2e709f8678_13665861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a1bab287e225af288f35d44324d3b0ab876becf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\index_category_projects.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31284581e2e709f8678_13665861',
  'variables' => 
  array (
    'posts' => 0,
    'tag' => 0,
    'category' => 0,
    'post' => 0,
    'url' => 0,
    'total' => 0,
    'limit' => 0,
    'query_string_segment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581e2e71c35e37_46074157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581e2e71c35e37_46074157')) {
function content_581e2e71c35e37_46074157 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';

$_smarty_tpl->properties['nocache_hash'] = '31284581e2e709f8678_13665861';
echo smarty_function_action_title(array('title'=>"Projects"),$_smarty_tpl);?>


<?php if (!count($_smarty_tpl->tpl_vars['posts']->value)) {?>
    <div>No ongoing project now!</div>
    <?php echo smarty_function_HOOK(array('event'=>'nyra_posts.index.no_record'),$_smarty_tpl);?>

<?php }?>
<?php $_smarty_tpl->tpl_vars['is_operamini'] = new Smarty_Variable(browser_is_operamini(), null, 0);?>
<?php if (theme_option('arewa','post_show_intro')) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['tag']->value) && $_smarty_tpl->tpl_vars['tag']->value->id) {?>
        <div class="row">
            <div class="col-md-12 post-index-intro">
                <?php echo $_smarty_tpl->tpl_vars['tag']->value->description;?>

            </div>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value->id) {?>
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
                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='max-height: 150px; width: 100%'");?>
</p>
            </a>
        </div>
        <div class="col-md-8 post-list-meta">
            <p>
            <span class="post-title text-uppercase">
                <strong><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
 </a></strong>
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