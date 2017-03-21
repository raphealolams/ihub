<?php /* Smarty version 3.1.27, created on 2016-11-03 09:58:30
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\partials\home_featured.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25888581ba4f67773d3_85638780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '743348d335e201a3d6f2d92f14441e7544da3d67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\partials\\home_featured.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25888581ba4f67773d3_85638780',
  'variables' => 
  array (
    'THEME' => 0,
    'featured_items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ba4f686afa3_29730828',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ba4f686afa3_29730828')) {
function content_581ba4f686afa3_29730828 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25888581ba4f67773d3_85638780';
$_smarty_tpl->tpl_vars['featured_items'] = new Smarty_Variable($_smarty_tpl->tpl_vars['THEME']->value->getHomeFeatured(), null, 0);?>
<div class="row centered">
        <br><br>
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
                <div class="col-lg-4">
                    <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->icon_class, ENT_QUOTES, 'UTF-8', true);?>
"></i>
                    <h4><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</h4>
                    <div><?php echo $_smarty_tpl->tpl_vars['item']->value->body;?>
</div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        <?php } elseif (theme_option('arewa','default_as_backup')) {?>
            
             <?php if (current_user_can('edit_appearance')) {?>
                 
                <?php echo BootstrapHelper::alert("danger","Assign a featured item to overide the default !!!");?>

            <?php }?>
            <div class="col-lg-4">
                    <i class="fa fa-heart"></i>
                    <h4>DESIGN</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable.</p>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4">
                    <i class="fa fa-laptop"></i>
                    <h4>BOOTSTRAP</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable.</p>
            </div><!-- col-lg-4 -->

            <div class="col-lg-4">
                    <i class="fa fa-trophy"></i>
                    <h4>SUPPORT</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even believable.</p>
            </div><!-- col-lg-4 -->
             <?php }?>
</div><!-- row -->
<br>
<br><?php }
}
?>