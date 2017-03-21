<?php /* Smarty version 3.1.27, created on 2016-11-01 06:26:54
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\widgets\simple_commerce_cart_summary.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:167385818d05eeb05e6_52194968%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '856c2efaa30dd274f4c66ea9d2454fad993ce1a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\widgets\\simple_commerce_cart_summary.tpl',
      1 => 1478021211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167385818d05eeb05e6_52194968',
  'variables' => 
  array (
    'instance_position' => 0,
    'instance_index_num' => 0,
    'items_count' => 0,
    'drop_down_id' => 0,
    'items' => 0,
    'item' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818d05ef32ed5_81059407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818d05ef32ed5_81059407')) {
function content_5818d05ef32ed5_81059407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167385818d05eeb05e6_52194968';
$_smarty_tpl->tpl_vars['drop_down_id'] = new Smarty_Variable("widget-summary-body-".((string)$_smarty_tpl->tpl_vars['instance_position']->value)."-".((string)$_smarty_tpl->tpl_vars['instance_index_num']->value), null, 0);?>
<div class="cart-summary-panel panel panel-default" >
    <div class="panel-heading clearfix">
        <a href="/shop/cart_details">
            <i class="glyphicon glyphicon-shopping-cart"  ></i>
            <?php echo $_smarty_tpl->tpl_vars['items_count']->value;?>
 Item<?php if ($_smarty_tpl->tpl_vars['items_count']->value > 1) {?>s<?php }?>
        </a>
        <a data-toggle="collapse" 
            data-target="#<?php echo $_smarty_tpl->tpl_vars['drop_down_id']->value;?>
" href="#">
            <span class="pull-right cart-caret">
                <span class="glyphicon glyphicon-collapse-down"></span>
            </span>
        </a>
    </div>
    <div id="<?php echo $_smarty_tpl->tpl_vars['drop_down_id']->value;?>
" class="panel-collapse collapse cart-summary-dropdown">
        <div class="panel-body">
            <div class="">
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                  <div class=""><?php echo $_smarty_tpl->tpl_vars['item']->value->product_name;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->attributes;?>
  X <?php echo $_smarty_tpl->tpl_vars['item']->value->quantity;?>
</div>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </div>
        </div>
        <div class="panel-footer">
            Total <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

        </div>
    </div>
</div>
<style>
   .cart-summary-panel {
       background-color:  #000000;
       color: #ffffff;
       opacity: 3;
    }
    .cart-summary-pannel panel-footer{
         background-color:  #000000;
       color: #ffffff;
       opacity: 3;
    }
</style>   
<?php echo '<script'; ?>
>
    $("#<?php echo $_smarty_tpl->tpl_vars['drop_down_id']->value;?>
").on("hide.bs.collapse", function(){
        $(".cart-caret").html('<span class="glyphicon glyphicon-collapse-down"></span>');
    });
    $("#<?php echo $_smarty_tpl->tpl_vars['drop_down_id']->value;?>
").on("show.bs.collapse", function(){
        $(".cart-caret").html('<span class="glyphicon glyphicon-collapse-up"></span>');
    });
<?php echo '</script'; ?>
><?php }
}
?>