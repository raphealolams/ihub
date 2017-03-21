<?php /* Smarty version 3.1.27, created on 2016-11-01 06:25:40
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:266695818d0145efa44_34489427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8380872942e7a9e8783197a9b9c8cdfb8758f23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\index.tpl',
      1 => 1478021130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266695818d0145efa44_34489427',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818d0146a3bb0_51475172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818d0146a3bb0_51475172')) {
function content_5818d0146a3bb0_51475172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '266695818d0145efa44_34489427';
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
    <div class="col-md-4 product-list-item">
        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->viewUrl();?>
">
            <div class="col-md-12">
                <p><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</p>
                <img class="img img-responsive" style="height: 150px;width: 100%" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" />
            </div>
            <div class="col-md-12">
                
                <?php if ($_smarty_tpl->tpl_vars['product']->value->discounted_price) {?>
                    <span class="" style="text-decoration: line-through; "> <?php echo $_smarty_tpl->tpl_vars['product']->value->currency;
echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</span>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value->currency;
echo $_smarty_tpl->tpl_vars['product']->value->discounted_price;?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value->currency;
echo $_smarty_tpl->tpl_vars['product']->value->price;?>

                <?php }?>
                
            </div>
        </a>
        <div class="col-md-12 product-list-item-hidden" style="display: none">
            <a  href="<?php echo site_url($_smarty_tpl->tpl_vars['product']->value->addToCartUrl());?>
" class="btn btn-default">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    Add To Cart 
            </a>
            <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
                    <i class="glyphicon glyphicon-eye-open"></i>
                    Preview
            </button>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>

<style>
    .product-list-item:hover div.product-list-item-hidden{
        display: block !important;
    }
    .product-list-item-hidden{
        position: absolute;
        bottom: 10%;
        transition: all 5s;
    }
</style>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          This will be item quick preview
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div> <?php }
}
?>