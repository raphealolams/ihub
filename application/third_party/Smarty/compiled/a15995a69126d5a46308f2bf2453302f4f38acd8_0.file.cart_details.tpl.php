<?php /* Smarty version 3.1.27, created on 2016-11-01 06:24:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\cart_details.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:154785818cfdfb70c91_20006500%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a15995a69126d5a46308f2bf2453302f4f38acd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\cart_details.tpl',
      1 => 1478020806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154785818cfdfb70c91_20006500',
  'variables' => 
  array (
    'update_cart_url' => 0,
    'cart_products' => 0,
    'cp' => 0,
    'total_amout' => 0,
    'saved_products' => 0,
    'sp' => 0,
    'continue_shopping_url' => 0,
    'checkout_url' => 0,
    'cart_recommendations' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818cfdfc4dff0_68783053',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818cfdfc4dff0_68783053')) {
function content_5818cfdfc4dff0_68783053 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154785818cfdfb70c91_20006500';
?>
 <div class="col-md-12 table-responsive" >
    <h2>Cart Summary</h2>
        <?php echo form_open($_smarty_tpl->tpl_vars['update_cart_url']->value);?>

            <table class="table table-hover" id="cart-items-table">
            <thead>
                <tr class="text-danger text-uppercase">
                    <th> Item Name </th> 
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Subtotal </th>
                    <th>&nbsp</th> 
                </tr>
             </thead>
        <tbody>
           <?php
$_from = $_smarty_tpl->tpl_vars['cart_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cp']->value) {
$_smarty_tpl->tpl_vars['cp']->_loop = true;
$foreach_cp_Sav = $_smarty_tpl->tpl_vars['cp'];
?>
               <tr>
                   <td><?php echo $_smarty_tpl->tpl_vars['cp']->value->product_name;?>
 
                       <small><?php echo $_smarty_tpl->tpl_vars['cp']->value->attributes;?>
  </small></td>
                   <td class="tr-cart-item-price"> <?php echo $_smarty_tpl->tpl_vars['cp']->value->product_price;?>
 </td>
                   <td class="tr-cart-item-price">
                       <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['cp']->value->quantity;?>
" 
                              name="data[<?php echo $_smarty_tpl->tpl_vars['cp']->value->item_id;?>
]"
                              class="input-cart-item-quantiy"
                              /> 
                   </td>
                   <td class="tr-cart-item-subtotal"> <?php echo $_smarty_tpl->tpl_vars['cp']->value->subtotal;?>
 </td>
                   <td> 
                       <a href="<?php echo $_smarty_tpl->tpl_vars['cp']->value->saveForLaterUrl();?>
" class="btn btn-default">
                          Whishlist 
                       </a>
                       <a href="<?php echo $_smarty_tpl->tpl_vars['cp']->value->removeFromCartUrl();?>
" class="btn btn-default">
                           <i class="glyphicon glyphicon-remove"></i> Remove 
                       </a>
                   </td>
               </tr>
           <?php
$_smarty_tpl->tpl_vars['cp'] = $foreach_cp_Sav;
}
?>
           <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>
                   <input type="submit" name="update_cart" value="Update"
                          class="item-update-cart-btn btn btn-default btn-block"/>
               </td>
           </tr>
        </tbody>
    </table>
        <?php echo form_close();?>

</div>
<div class="col-md-12 clearfix">
    Total  <span class="tr-cart-item-total text-danger"><?php echo $_smarty_tpl->tpl_vars['total_amout']->value;?>
</span>
</div>

<?php if (count($_smarty_tpl->tpl_vars['saved_products']->value)) {?>
<div class="col-md-12" >
     <h2>Whish List</h2>
        <div class="table-responsive">
            <table class="table table-hover" id="cart-saved-items-table">
                <thead>
                    <tr class="text-danger">
                        <th> </th> 
                        <th> Item Name </th> 
                        <th> Price </th>
                        <th>&nbsp</th> 
                    </tr>
                 </thead>
                 <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['saved_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>
                        <tr>
                            <td><input type="checkbox" name="saved-item-checkbox" /></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->product_name;?>
 </td>
                            <td class="tr-cart-item-price"> <?php echo $_smarty_tpl->tpl_vars['sp']->value->product_price;?>
 </td>
                            <td class="tr-cart-item-actions"> 
                                <a href="<?php echo $_smarty_tpl->tpl_vars['sp']->value->moveToCartUrl();?>
" class="btn btn-default">Move To Cart</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['sp']->value->removeFromCartUrl();?>
" class="btn btn-default">Remove</a>
                            </td>
                            <td> </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>
                 </tbody>
            </table>
        </div>
    </div> 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['continue_shopping_url']->value) {?>
    <p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['continue_shopping_url']->value;?>
" class="btn btn-default pull-left">
            <i class="glyphicon glyphicon-arrow-left"></i> Continue Shopping
        </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['checkout_url']->value;?>
" class="btn btn-default pull-right ">
        <i class="glyphicon glyphicon-arrow-right"></i> Checkout</a>
    </p>
<?php }?>
<div id="cart-recommendations-block" class="col-md-12" >
    <?php
$_from = $_smarty_tpl->tpl_vars['cart_recommendations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
        <p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value->viewUrl();?>
">  <?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</a>
        <?php echo $_smarty_tpl->tpl_vars['p']->value->description;?>

        </p>
    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</div><?php }
}
?>