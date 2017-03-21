<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:20
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\deep\partials\slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30347584ffc9cc38592_28951759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e7058c120c1fca1c62aca8028023f9e44648ad9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\deep\\partials\\slider.tpl',
      1 => 1472902061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30347584ffc9cc38592_28951759',
  'variables' => 
  array (
    'THEME' => 0,
    'posts' => 0,
    'index' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc9ced59a6_74143005',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc9ced59a6_74143005')) {
function content_584ffc9ced59a6_74143005 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30347584ffc9cc38592_28951759';
$_smarty_tpl->tpl_vars['posts'] = new Smarty_Variable($_smarty_tpl->tpl_vars['THEME']->value->getSlidePosts(), null, 0);?>
<section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <?php if (count($_smarty_tpl->tpl_vars['posts']->value)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
                     <div class="item <?php if ($_smarty_tpl->tpl_vars['index']->value == 1) {?>active<?php }?>">
                        <div class="container">
                            <div class="carousel-content">
                                <h4><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getUrl(false);?>
" >
                                    <?php echo $_smarty_tpl->tpl_vars['post']->value->getFeatImg(" style='height: 200px; width: 80%'");?>

                                </a>
                                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['post']->value->getSummary();?>
</p>
                            </div>
                        </div>
                    </div><!--/.item-->
                <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
            <?php } else { ?>
                <div class="item active">
                    <div class="container">
                        <div class="carousel-content">
                            <h1>Free Onepage Theme</h1>
                            <p class="lead">Xeon is the best free onepage responsive theme available arround the globe<br>Download it right now for free</p>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item">
                    <div class="container">
                        <div class="carousel-content">
                            <h1>ShapeBootstrap.net</h1>
                            <p class="lead">Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>from shapebootstrap.net</p>
                        </div>
                    </div>
                </div><!--/.item-->
           
            <?php }?>
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
</section><!--/#main-slider--><?php }
}
?>