<?php /* Smarty version 3.1.27, created on 2016-12-13 02:52:21
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28180584ffd1567ba58_64064029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5350004f696260fe7101111ebdf05f9d6bb5f73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\view.tpl',
      1 => 1475568003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28180584ffd1567ba58_64064029',
  'variables' => 
  array (
    'post' => 0,
    'post_tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffd1589bf20_79414995',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffd1589bf20_79414995')) {
function content_584ffd1589bf20_79414995 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '28180584ffd1567ba58_64064029';
?>

<?php echo smarty_function_action_title(array('title'=>$_smarty_tpl->tpl_vars['post']->value->title),$_smarty_tpl);?>


  <div class="blog">
    <div class="blog-item">
    <?php if ($_smarty_tpl->tpl_vars['post']->value->format == 'link') {?>
        <p> You will be redirected to <?php echo $_smarty_tpl->tpl_vars['post']->value->getData('link_url');?>
in <span id="redirect-count">15</span> seconds </p>
       
    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'video') {?>
        
        <?php echo $_smarty_tpl->getSubTemplate ('view_format_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'audio') {?>
        <?php echo $_smarty_tpl->getSubTemplate ('view_format_audio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->format == 'gallery') {?>
        <?php echo $_smarty_tpl->getSubTemplate ('view_format_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php } else { ?>
        <div class="blog-meta clearfix">
            <p class="pull-left">
              <i class="icon-user"></i> by <?php echo $_smarty_tpl->tpl_vars['post']->value->getAuthorLink();?>
| 
              <?php if ($_smarty_tpl->tpl_vars['post']->value->cat_id) {?><i class="icon-folder-close"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->getCatlink();?>
 | <?php }?>
              <i class="icon-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->created;?>
 
            </p>
            <p class="pull-right"><i class="icon-comment pull"></i> <a href="#comments"><?php echo $_smarty_tpl->tpl_vars['post']->value->getCommentTotal();?>
 Comments</a></p>
        </div>
        <?php echo share_buttons();?>

        <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg("style='max-height: 200px;width: 100%'",'/public/assets/img/news.jpg');?>
</p>
        
        <?php echo $_smarty_tpl->tpl_vars['post']->value->body;?>

    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['post_tags']->value) > 0) {?>
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getTagUrl($_smarty_tpl->tpl_vars['tag']->value->name);?>
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
    <?php }?>
    </div>
  </div>
    <?php }
}
?>