<?php /* Smarty version 3.1.27, created on 2016-12-13 02:54:51
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\favour\partials\slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18438584ffdabe52fb3_10294963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154b49ded2f36e261a949f383f2d14f029dc0ff3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\favour\\partials\\slider.tpl',
      1 => 1472000413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18438584ffdabe52fb3_10294963',
  'variables' => 
  array (
    'THEME' => 0,
    'items' => 0,
    'index' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffdabec0120_47008578',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffdabec0120_47008578')) {
function content_584ffdabec0120_47008578 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18438584ffdabe52fb3_10294963';
$_smarty_tpl->tpl_vars['items'] = new Smarty_Variable($_smarty_tpl->tpl_vars['THEME']->value->getSlideData(), null, 0);?>
<section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                     <div class="item <?php if ($_smarty_tpl->tpl_vars['index']->value == 1) {?>active<?php }?>">
                        <div class="container">
                            <div class="carousel-content">
                                <h1><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</h1>
                                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBody();?>
</p>
                            </div>
                        </div>
                    </div><!--/.item-->
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
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