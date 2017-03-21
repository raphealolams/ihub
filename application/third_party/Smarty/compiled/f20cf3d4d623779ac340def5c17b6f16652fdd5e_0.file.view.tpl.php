<?php /* Smarty version 3.1.27, created on 2016-12-13 02:48:40
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14619584ffc380f7730_00908190%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20cf3d4d623779ac340def5c17b6f16652fdd5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\view.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14619584ffc380f7730_00908190',
  'variables' => 
  array (
    'post' => 0,
    'THEME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc393eae94_44417258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc393eae94_44417258')) {
function content_584ffc393eae94_44417258 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';

$_smarty_tpl->properties['nocache_hash'] = '14619584ffc380f7730_00908190';
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
                <i class="glyphicon glyphicon-calendar"></i> <?php echo $_smarty_tpl->tpl_vars['THEME']->value->formatDate($_smarty_tpl->tpl_vars['post']->value->getCreated());?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getCatUrl();?>
" class="text-capitalize">
                    <i class="glyphicon glyphicon-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->cat_title;?>

                </a>|
                <i class="glyphicon glyphicon-user"></i><?php echo $_smarty_tpl->tpl_vars['post']->value->getAuthorLink();?>

            </p>
            <span class="pull-right">
                <a href="#comments">
                    <i class="glyphicon glyphicon-comment"></i> 
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->getCommentTotal();?>
</a>
            </span>
        </div>
        <?php echo share_buttons();?>

         <div class="col-md-12 post-body clearfix">
            
             <?php echo $_smarty_tpl->tpl_vars['post']->value->getBody();?>

         </div>
        
    <?php }?>
     <?php echo smarty_function_locate_load(array('file'=>'partials/post_tags_comments'),$_smarty_tpl);?>

    </div>
  </div>
    <?php }
}
?>