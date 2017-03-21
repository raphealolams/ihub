<?php /* Smarty version 3.1.27, created on 2016-11-09 05:58:05
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\checkout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74665823559d51fa14_61550024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37b1b156c3c9288c00af4b7d55c25cf55e4cb73c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\checkout.tpl',
      1 => 1478710680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74665823559d51fa14_61550024',
  'variables' => 
  array (
    'place_order_url' => 0,
    'cart_products' => 0,
    'cp' => 0,
    'tax_amount' => 0,
    'total_amount' => 0,
    'shipping_methods' => 0,
    'id' => 0,
    'type' => 0,
    'addresses' => 0,
    'a' => 0,
    'shipping_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5823559d614d78_79578701',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5823559d614d78_79578701')) {
function content_5823559d614d78_79578701 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74665823559d51fa14_61550024';
?>
 <div class="col-md-12 table-responsive" >
    <h2 style="font-family: Impact, Charcoal, sans-serif">Cart Summary</h2>
    <?php echo form_open($_smarty_tpl->tpl_vars['place_order_url']->value);?>

        <table class="table table-hover" id="cart-items-table">
            <thead >
                <tr class="text-danger text-uppercase">
                    <th> Item Name </th> 
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Subtotal </th>
                </tr>
             </thead>
             <tbody style="font-family: Verdana, Geneva, sans-seri">
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
                       <?php echo $_smarty_tpl->tpl_vars['cp']->value->quantity;?>

                    <td class="tr-cart-item-subtotal"> <?php echo $_smarty_tpl->tpl_vars['cp']->value->subtotal;?>
 </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['cp'] = $foreach_cp_Sav;
}
?>
            <tr>
                <td> <span class="text-lg"> Tax </span></td>
                <td></td>
                <td></td>
                <td><span class="tr-cart-item-total text-danger"><?php echo $_smarty_tpl->tpl_vars['tax_amount']->value;?>
</span></td>
            </tr>
            <tr>
                <td> <span class="text-lg"> Total </span></td>
                <td></td>
                <td></td>
                <td><span class="tr-cart-item-total text-danger"><?php echo $_smarty_tpl->tpl_vars['total_amount']->value;?>
</span></td>
            </tr>
        </tbody>
    </table>

</div>
<div class="col-md-12 clearfix">
    <input type="submit" name="place_order" value="Place Order"
        class="item-update-cart-btn btn btn-default btn-lg pull-right"/>
</div>
<div class="col-md-12">
    <h3>PAYMENT METHODS GOES HERE</h3>
    <p>Hooks here </p>
</div>
<div class="col-md-12">
    <div id="shipping-methods" class="panel panel-default">
        <div class="panel-heading">
            <h4 class="title">Shipping Methods</h4>
        </div>
        <div class="panel-body">
            <?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['shipping_methods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['type']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
$foreach_type_Sav = $_smarty_tpl->tpl_vars['type'];
?>
                        <div class="radio">
                            <label>
                                <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="shippping_method_id"
                                       class="input-shipping-method"
                                       data-shipping-cost=""
                                       />  <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

                            </label>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['type'] = $foreach_type_Sav;
}
?>
            <?php }?>
        </div>
    </div>
</div>
<div class="col-md-6">
    <label for="shipping-address">Shipping Address </label>
    <select id="shop-customer-shipping-address"
            name="shipping-address"
            class="form-group">
        
        <?php if ($_smarty_tpl->tpl_vars['addresses']->value) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['addresses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value->title;?>
</option>
            <?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
        <?php }?>
    </select>
    <div id="shipping-address-info" class="panel panel-default">
        <div class="panel-heading">
            <h4 class="title"><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->title;?>
</h4>
        </div>
        <div class="panel-body">
            <p><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_1;?>
 <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_2;?>
  </p>
            <p> <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>
 <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>
 <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->country;?>
 </p>
            <input name="address_id" type="hidden" />
        </div>
        <div class="panel-footer">
            <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value->id) {?>
                <a href="<?php echo site_url('shop/customers/addresses');?>
?address_id=<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" 
                   class="btn btn-default">Edit</a>
            <?php }?>
            <a href="<?php echo site_url('shop/customers/addresses');?>
" 
                class="btn btn-default">Add Address
            </a>
        </div>
    </div>
    <?php echo form_close();?>

</div>
<div class="panel panel-default">
    <div class="panel-heading">
        
    </div>
</div>
<?php echo '<script'; ?>
>
    
    $("#shop-customer-shipping-address").change(function(){
        var url = '/shop/customers/address_info';
        var id = $(this).val();
        
        
        Nyra.request.post(url,{ address_id : id } , { done : function(response){
            
            if(response.error_message){
                Nyra.util.alert(response.error_message);
                return;
            }
            var body = '<p>'+response.data.address_1 + response.data.address_2+ '</p>';
            body +=  '<p>'+ response.data.city + ' ' + response.data.state +' '+ response.data.country +'</p>'
                $('#shipping-address-info .title').text(response.data.title);            
                $('#shipping-address-info .panel-body').html(body);            
            
        }});
    })
    $('.input-shipping-method').change(function(){
         var cost = $(this).data('data-shipping-cost');
    });
<?php echo '</script'; ?>
><?php }
}
?>