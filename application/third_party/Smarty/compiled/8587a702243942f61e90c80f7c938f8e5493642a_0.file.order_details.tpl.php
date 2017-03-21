<?php /* Smarty version 3.1.27, created on 2016-11-09 23:05:44
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\order_details.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2908558244678809710_20104851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8587a702243942f61e90c80f7c938f8e5493642a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\order_details.tpl',
      1 => 1478772342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2908558244678809710_20104851',
  'variables' => 
  array (
    'order' => 0,
    'tax' => 0,
    'total_cost' => 0,
    'form' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582446788f1143_91561439',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582446788f1143_91561439')) {
function content_582446788f1143_91561439 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2908558244678809710_20104851';
?>

<div class="row">
    <div class="col-md-6">
        <?php echo form_open();?>

        <p><strong>Order ID: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</p>
        <p><strong>Order Reference: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</p>
        <p><strong>Date Created: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->created_on;?>
</p>
        <p><strong>Amount: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->amount;?>
</p>
        
        <p><strong>Tax: </strong> <?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</p>
        <p><strong>Shipping: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->shipping_type;?>
</p>
        <p><strong>Total Cost </strong> <?php echo $_smarty_tpl->tpl_vars['total_cost']->value;?>
</p>
        <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

    </div>
    <div class="col-md-6">
        Customer info here
    </div>
</div>
<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12" >
    <h3>Items In Order</h3>
        <div class="table-responsive">
             <table class="table table-hover table-bordered table-striped" id="orders-table">
                 <thead class="bg-primary">
                    <tr>
                        <th> <?php echo lang('label_id');?>
  </th> 
                        <th> Product</th>
                        <th> Unit Cost </th>
                        <th> Quantity </th> 
                        <th> Attributes </th>
                        <th> Subtotal </th>
                    </tr>
                 </thead>
                 <tbody>
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
                        <tr>
                            <td><a href="<?php echo site_url("shop/".((string)$_smarty_tpl->tpl_vars['item']->value->item_id));?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
</a> </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['item']->value->product_name;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['item']->value->unit_cost;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['item']->value->quantity;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['item']->value->attributes;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['item']->value->subtotal;?>
 </td>
                          
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </tbody>
            </table>
        </div>
    </div><?php }
}
?>