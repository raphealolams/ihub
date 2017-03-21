<?php /* Smarty version 3.1.27, created on 2016-11-01 07:19:09
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\add_product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7325818dc9d417bd1_30221943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4fd39aa0d792ac844ea6e1acd7fdcf9e3eb4b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\add_product.tpl',
      1 => 1477242140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7325818dc9d417bd1_30221943',
  'variables' => 
  array (
    'form' => 0,
    'tabs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818dc9d71a224_94672898',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818dc9d71a224_94672898')) {
function content_5818dc9d71a224_94672898 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '7325818dc9d417bd1_30221943';
$_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="btn-group pull-left">
         <?php echo HtmlHelper::listButton(admin_url('shop/catalogue'),'Products');?>

    </div>
    <div class="btn-group pull-right">
         <?php echo HtmlHelper::submitButton('product-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

         <?php echo HtmlHelper::helpButton('plugins-nyra_posts');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="product-form"');?>
         
<?php $_smarty_tpl->tpl_vars['tabs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render('',array(),true), null, 0);?>

    <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['tabs']->value);?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

<?php }
}
?>