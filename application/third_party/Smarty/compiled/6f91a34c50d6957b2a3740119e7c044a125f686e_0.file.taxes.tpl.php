<?php /* Smarty version 3.1.27, created on 2016-11-09 00:02:44
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\taxes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24677582302541d1fd8_99533611%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f91a34c50d6957b2a3740119e7c044a125f686e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\taxes.tpl',
      1 => 1478689261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24677582302541d1fd8_99533611',
  'variables' => 
  array (
    'form' => 0,
    'taxes' => 0,
    'tax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582302542ee480_97967139',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582302542ee480_97967139')) {
function content_582302542ee480_97967139 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24677582302541d1fd8_99533611';
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
$_from = $_smarty_tpl->tpl_vars['taxes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tax']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
$foreach_tax_Sav = $_smarty_tpl->tpl_vars['tax'];
?>
                <li class="list-group-item clearfix"><strong><?php echo $_smarty_tpl->tpl_vars['tax']->value->type;?>
 </strong>
                <span class="pull-right">
                    <a href="<?php echo admin_url("shop/enbale_shippin/".((string)$_smarty_tpl->tpl_vars['tax']->value->id));?>
"
                       class="btn btn-default"
                       >Enable </a>
                    <a href="<?php echo admin_url("shop/disable_tax/".((string)$_smarty_tpl->tpl_vars['tax']->value->id));?>
"
                       class="btn btn-default"
                       >Disable </a>
                    <a href="<?php echo admin_url("shop/edit_tax/".((string)$_smarty_tpl->tpl_vars['tax']->value->id));?>
"
                       class="btn btn-default"
                       >Edit </a>
                </span>
                </li>
            <?php
$_smarty_tpl->tpl_vars['tax'] = $foreach_tax_Sav;
}
?>
        </ul>
    </div>
</div><?php }
}
?>