<?php /* Smarty version 3.1.27, created on 2016-11-08 23:52:27
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\shipping_regions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:271005822ffeb9d4f56_62916250%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff1022afe6c4e45593d395b530a78900e502eb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\shipping_regions.tpl',
      1 => 1478688643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271005822ffeb9d4f56_62916250',
  'variables' => 
  array (
    'form' => 0,
    'regions' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5822ffebaac902_29925169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5822ffebaac902_29925169')) {
function content_5822ffebaac902_29925169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '271005822ffeb9d4f56_62916250';
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
$_from = $_smarty_tpl->tpl_vars['regions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['region'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['region']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
$foreach_region_Sav = $_smarty_tpl->tpl_vars['region'];
?>
                <li class="list-group-item clearfix"><strong><?php echo $_smarty_tpl->tpl_vars['region']->value->name;?>
 </strong>
                <span class="pull-right">
                    <a href="<?php echo admin_url("shop/enbale_shippin/".((string)$_smarty_tpl->tpl_vars['region']->value->id));?>
"
                       class="btn btn-default"
                       >Enable </a>
                    <a href="<?php echo admin_url("shop/disable_region/".((string)$_smarty_tpl->tpl_vars['region']->value->id));?>
"
                       class="btn btn-default"
                       >Disable </a>
                    <a href="<?php echo admin_url("shop/edit_region/".((string)$_smarty_tpl->tpl_vars['region']->value->id));?>
"
                       class="btn btn-default"
                       >Edit </a>
                </span>
                </li>
            <?php
$_smarty_tpl->tpl_vars['region'] = $foreach_region_Sav;
}
?>
        </ul>
    </div>
</div><?php }
}
?>