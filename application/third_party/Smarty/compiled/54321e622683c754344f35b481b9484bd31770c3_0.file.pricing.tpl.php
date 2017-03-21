<?php /* Smarty version 3.1.27, created on 2016-12-08 05:18:17
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\simple_pricing\views\pricing.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2490584987c9dd0a38_09482595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54321e622683c754344f35b481b9484bd31770c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\simple_pricing\\views\\pricing.tpl',
      1 => 1475698072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2490584987c9dd0a38_09482595',
  'variables' => 
  array (
    'package' => 0,
    'level' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584987c9e98161_21133645',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584987c9e98161_21133645')) {
function content_584987c9e98161_21133645 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2490584987c9dd0a38_09482595';
?>
<div class="row simple-pricing-container">
    <?php
$_from = $_smarty_tpl->tpl_vars['package']->value->getLevels();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
$foreach_level_Sav = $_smarty_tpl->tpl_vars['level'];
?>
        <div class="col-sm-4 col-md-4 col-lg-4 simple-pricing-panel-container" style="margin-bottom: 30px">
            <div class="panel panel-default simple-pricing-panel">
              <div class="panel-heading text-center">
                <h1><?php echo $_smarty_tpl->tpl_vars['level']->value->name;?>
</h1>
              </div>
              <div class="panel-body">
                <?php
$_from = $_smarty_tpl->tpl_vars['level']->value->getFeatures();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['feature']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
$foreach_feature_Sav = $_smarty_tpl->tpl_vars['feature'];
?>
                    <p class="simple-pricing-item">
                        <i class="<?php echo $_smarty_tpl->tpl_vars['feature']->value->feature_icon;?>
 "></i>
                        <span class="simple-pricing-feature-name"><?php echo $_smarty_tpl->tpl_vars['feature']->value->feature_name;?>
</span></p>
                <?php
$_smarty_tpl->tpl_vars['feature'] = $foreach_feature_Sav;
}
?>
              </div>
              <div class="panel-footer text-center">
                <h3><?php echo $_smarty_tpl->tpl_vars['level']->value->getPrice();?>
</h3>
                <?php if ($_smarty_tpl->tpl_vars['level']->value->period) {?><h4><?php echo $_smarty_tpl->tpl_vars['level']->value->period;?>
</h4><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['level']->value->action_url) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['level']->value->action_url;?>
" class="btn btn-default btn-lg"><?php echo $_smarty_tpl->tpl_vars['level']->value->action_title;?>
</a>
                <?php }?>
              </div>
            </div> 
          </div> 
    <?php
$_smarty_tpl->tpl_vars['level'] = $foreach_level_Sav;
}
?>
</div><?php }
}
?>