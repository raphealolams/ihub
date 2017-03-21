<?php /* Smarty version 3.1.27, created on 2016-12-08 05:18:05
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\simple_pricing\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15077584987bd4135e7_47179662%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b92c87a540c7c5a84eb4b8d0c444a22956c496ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\simple_pricing\\views\\admin\\manage.tpl',
      1 => 1475272582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15077584987bd4135e7_47179662',
  'variables' => 
  array (
    'success' => 0,
    'package_form' => 0,
    'packages' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584987bd6537c6_63802552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584987bd6537c6_63802552')) {
function content_584987bd6537c6_63802552 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15077584987bd4135e7_47179662';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert("Added Successfully");?>

<?php }?>

<div class="row">
    
    <div class="col-md-5">
        <h4>Add Package</h4>

        <?php echo $_smarty_tpl->tpl_vars['package_form']->value->open();?>

            <?php echo $_smarty_tpl->tpl_vars['package_form']->value->render();?>

            <?php echo $_smarty_tpl->tpl_vars['package_form']->value->submitButton('class="btn btn-success btn-block"');?>

        <?php echo $_smarty_tpl->tpl_vars['package_form']->value->close();?>

    </div>
</div>

<div class="row" style="margin-top: 20px ">
    <?php
$_from = $_smarty_tpl->tpl_vars['packages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-6">
                             <i class="glyphicon glyphicon-star"></i>
                             <span class="group-name">
                                 <?php echo $_smarty_tpl->tpl_vars['package']->value->name;?>
 
                             </span>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo admin_url("simple_pricing/edit_package/".((string)$_smarty_tpl->tpl_vars['package']->value->id));?>
"
                               class="btn btn-default"
                               >
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['package']->value->live) {?>
                                <a href="<?php echo admin_url("simple_pricing/disable_package/".((string)$_smarty_tpl->tpl_vars['package']->value->id));?>
"
                                   class="btn btn-danger"
                                   >
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                </a>
                            <?php } else { ?>
                                 <a href="<?php echo admin_url("simple_pricing/enable_package/".((string)$_smarty_tpl->tpl_vars['package']->value->id));?>
"
                                    class="btn btn-success"
                                    >
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
    
</div><?php }
}
?>