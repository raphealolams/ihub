<?php /* Smarty version 3.1.27, created on 2016-11-03 09:58:30
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\partials\home_clients.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32473581ba4f6d10697_72174493%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd886ce4c1e9386034ad733573c0cf8c4cb4df8e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\partials\\home_clients.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32473581ba4f6d10697_72174493',
  'variables' => 
  array (
    'THEME' => 0,
    'featured_items' => 0,
    'item' => 0,
    'theme_public_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ba4f6d70804_66324031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ba4f6d70804_66324031')) {
function content_581ba4f6d70804_66324031 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32473581ba4f6d10697_72174493';
$_smarty_tpl->tpl_vars['featured_items'] = new Smarty_Variable($_smarty_tpl->tpl_vars['THEME']->value->getHomeClients(), null, 0);?>
<div class="row centered">
        <h4>OUR AWESOME CLIENTS</h4>
         <?php if ($_smarty_tpl->tpl_vars['featured_items']->value) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['featured_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                 <div class="col-lg-2 col-lg-offset-1">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
" alt="">
                </div>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        <?php } elseif (theme_option('arewa','default_as_backup')) {?>
            
            <?php if (current_user_can('edit_appearance')) {?>
                <?php echo BootstrapHelper::alert("danger","Assign a featured item to overide the default !!!");?>

            <?php }?>
        
            <div class="col-lg-2 col-lg-offset-1">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
img/c01.gif" alt="">
            </div>
            <div class="col-lg-2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
img/c02.gif" alt="">
            </div>
            <div class="col-lg-2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
img/c03.gif" alt="">
            </div>
            <div class="col-lg-2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
img/c04.gif" alt="">
            </div>
            <div class="col-lg-2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['theme_public_url']->value;?>
img/c05.gif" alt="">
            </div>
        <?php }?>
</div><!-- row --><?php }
}
?>