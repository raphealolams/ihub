<?php /* Smarty version 3.1.27, created on 2016-12-08 05:13:24
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\view_format_gallery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5699584986a467f203_07270369%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1faf490a9503fb5be486b4664ff4e7dbdf8d3d1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\view_format_gallery.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5699584986a467f203_07270369',
  'variables' => 
  array (
    'post' => 0,
    'gallery_items' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584986a486d7f3_51810105',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584986a486d7f3_51810105')) {
function content_584986a486d7f3_51810105 ($_smarty_tpl) {
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';

$_smarty_tpl->properties['nocache_hash'] = '5699584986a467f203_07270369';
echo $_smarty_tpl->tpl_vars['post']->value->body;?>

<div class="yoxview">
    <div class="col-md-12">
    <?php
$_from = $_smarty_tpl->tpl_vars['gallery_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
        <div class="col-md-4 box">
            <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value->image;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['i']->value->image;?>
"  class="img-polaroid img-responsive" 
                     alt="<?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
" title="<?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
" />
            </a>
        </div>
    <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    </div>
</div>
 <?php echo smarty_function_locate_load(array('file'=>'partials/post_tags_comments'),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    Nyra.util.addCss(  'plugins/featured/css/styles.css');
    Nyra.util.addCss(  'assets/yoxview/yoxview.css');
    Nyra.util.addJs(  'assets/yoxview/yox.js');
    Nyra.util.addJs(  'assets/yoxview/jquery.yoxview-2.21.js' , true , function(){
        $('.yoxview').yoxview({
                autoHideInfo:false,
                renderInfoPin:false,
                backgroundColor:'#ffffff',
                backgroundOpacity:0.8,
                infoBackColor:'#000000',
                infoBackOpacity:1});
            $('.yoxview a img').hover(function(){
                $(this).animate({
                    opacity:0.7
                },300)},function(){
                    $(this).animate({
                        opacity:1
                    },300)
                });
    });
   
<?php echo '</script'; ?>
>

<?php }
}
?>