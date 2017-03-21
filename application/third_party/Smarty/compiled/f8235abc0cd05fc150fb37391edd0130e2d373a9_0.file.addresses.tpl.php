<?php /* Smarty version 3.1.27, created on 2016-10-31 15:34:07
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\customers\addresses.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:88875817ff1f0fa877_76236522%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8235abc0cd05fc150fb37391edd0130e2d373a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\customers\\addresses.tpl',
      1 => 1477144568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88875817ff1f0fa877_76236522',
  'variables' => 
  array (
    'address' => 0,
    'form' => 0,
    'addresses' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817ff1f420b24_54713439',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817ff1f420b24_54713439')) {
function content_5817ff1f420b24_54713439 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88875817ff1f0fa877_76236522';
?>

<?php if (!$_smarty_tpl->tpl_vars['address']->value) {?>
    <p> 
        <a id="add-new-address-btn" href="/" class="btn btn-default">
            Add New
        </a>
    </p>
<?php } else { ?>
    <p> 
        <a  href="<?php echo current_url();?>
?tab=customer_addresses" class="btn btn-default" >
            All Address
        </a>
    </p>
    <h4>Update Address</h4>
<?php }?>
<div id="sc-customer-add-address-container" class="row">
    <div class="col-md-5">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

    </div>
</div>
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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><?php echo $_smarty_tpl->tpl_vars['a']->value->title;?>
</h4>
        </div>
        <div class="panel-body">
            <p><?php echo $_smarty_tpl->tpl_vars['a']->value->address_1;?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value->address_2;?>
  </p>
            <p> <?php echo $_smarty_tpl->tpl_vars['a']->value->city;?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value->state;?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value->country;?>
 </p>
        </div>
        <div class="panel-footer">
            <a href="<?php echo current_full_url(true);?>
&address_id=<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
" class="btn btn-default">Edit</a>
            
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>

<?php if (!$_smarty_tpl->tpl_vars['address']->value) {?>
    <style>
        #sc-customer-add-address-container{
            display:none;
        }
    </style>
<?php }?>
 <?php echo country_list_js('#input-country_code','#input-state');?>

<?php echo '<script'; ?>
>
    
    $('#add-new-address-btn').click(function(e){
        e.preventDefault();
     $('#sc-customer-add-address-container').toggle();   
    })
<?php echo '</script'; ?>
><?php }
}
?>