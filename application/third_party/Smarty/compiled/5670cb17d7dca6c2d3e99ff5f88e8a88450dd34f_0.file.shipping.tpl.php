<?php /* Smarty version 3.1.27, created on 2016-11-08 23:32:38
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\shipping.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:259485822fb46a34133_53636166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5670cb17d7dca6c2d3e99ff5f88e8a88450dd34f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\shipping.tpl',
      1 => 1478687555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259485822fb46a34133_53636166',
  'variables' => 
  array (
    'form' => 0,
    'shipping' => 0,
    'method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5822fb46af3f11_20831153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5822fb46af3f11_20831153')) {
function content_5822fb46af3f11_20831153 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '259485822fb46a34133_53636166';
?>
<div class="row">
    <div class="col-md-6">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

    </div>
</div>
 <hr>
<div class="row space-top">
    <div class="list col-md-6">
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->tpl_vars['shipping']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['method'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['method']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->_loop = true;
$foreach_method_Sav = $_smarty_tpl->tpl_vars['method'];
?>
                <li class="list-group-item clearfix"><strong><?php echo $_smarty_tpl->tpl_vars['method']->value->name;?>
 </strong>
                <span class="pull-right">
                    <a href="<?php echo admin_url("shop/enbale_shippin/".((string)$_smarty_tpl->tpl_vars['method']->value->id));?>
"
                       class="btn btn-default"
                       >Enable </a>
                    <a href="<?php echo admin_url("shop/disable_shipping/".((string)$_smarty_tpl->tpl_vars['method']->value->id));?>
"
                       class="btn btn-default"
                       >Disable </a>
                    <a href="<?php echo admin_url("shop/edit_shipping/".((string)$_smarty_tpl->tpl_vars['method']->value->id));?>
"
                       class="btn btn-default"
                       >Edit </a>
                </span>
                </li>
            <?php
$_smarty_tpl->tpl_vars['method'] = $foreach_method_Sav;
}
?>
        </ul>
    </div>
</div><?php }
}
?>