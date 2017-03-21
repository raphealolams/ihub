<?php /* Smarty version 3.1.27, created on 2016-10-31 15:40:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\featured\views\widgets\carousel_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27021581800bb7caf42_85585614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3ac428b1af23bc18e808604464a9a65d0a993b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\featured\\views\\widgets\\carousel_slider.tpl',
      1 => 1477748763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27021581800bb7caf42_85585614',
  'variables' => 
  array (
    'instance_position' => 0,
    'instance_index_num' => 0,
    'items' => 0,
    'id' => 0,
    'active' => 0,
    'slides' => 0,
    'i' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581800bb92bd60_13102658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581800bb92bd60_13102658')) {
function content_581800bb92bd60_13102658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27021581800bb7caf42_85585614';
?>


<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable("carousel-".((string)$_smarty_tpl->tpl_vars['instance_position']->value)."-".((string)$_smarty_tpl->tpl_vars['instance_index_num']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $_smarty_tpl->tpl_vars['slides'] = new Smarty_Variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_Variable(true, null, 0);?>
        <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
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
            <?php if ($_smarty_tpl->tpl_vars['active']->value) {
$_smarty_tpl->tpl_vars['active'] = new Smarty_Variable('active', null, 0);
}?>
            <?php $_smarty_tpl->tpl_vars['slides'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['slides']->value)."<div class='item ".((string)$_smarty_tpl->tpl_vars['active']->value)."'>
                                <div class='slider-image' >
                                    <img src='".((string)$_smarty_tpl->tpl_vars['i']->value->image)."' />
                                    <div class='carousel-caption'>
                                      ".((string)$_smarty_tpl->tpl_vars['i']->value->summary)."
                                    </div>
                                </div>
                              </div>", null, 0);?>
            <li class="<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
" data-target="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"></li>
             <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_Variable(0, null, 0);?>
        <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
  <!-- Indicators -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <?php echo $_smarty_tpl->tpl_vars['slides']->value;?>

  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<?php echo '<script'; ?>
>
    Nyra.util.addCss(  'plugins/featured/css/styles.css');
<?php echo '</script'; ?>
>
<?php }?>
  
<?php }
}
?>