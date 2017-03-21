<?php /* Smarty version 3.1.27, created on 2016-11-01 07:21:05
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\catalogue.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157235818dd11312de6_53128055%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4edddd156defd52fc06be2f9336b5316e20640db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\catalogue.tpl',
      1 => 1475995707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157235818dd11312de6_53128055',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818dd115365c6_66030266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818dd115365c6_66030266')) {
function content_5818dd115365c6_66030266 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '157235818dd11312de6_53128055';
$_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <span class="pull-right"><?php echo nyra_help_link('shortcodes');?>
 </span>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="col-lg-12" >
        <div class="table-responsive">
            <table class="table table-hover" id="files-table">
                <thead>
                    <tr class="text-danger">
                        <th>id </th> 
                        <th> name </th> 
                        <th> Thumbnail </th> 
                        <th>Actions </th> 
                    </tr>
                 </thead>
                 <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
                            <tr>
                                <td> <span class="label label-primary" ><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</span> </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 </td>
                                <td> <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->getThumbnailUrl();?>
" 
                                          style="height: 100px;width: 100px"
                                          class="img img-thumbnail"/> </td>
                                <td> 
                                    <a href="<?php echo admin_url("products/edit/".((string)$_smarty_tpl->tpl_vars['product']->value->id));?>
"
                                       class="btn btn-default">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-default">
                                        <i class="glyphicon glyphicon-check"></i>
                                    </a>
                                    <a href="#" class="btn btn-default">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                 </td>
                            </tr>
                    <?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
                 </tbody>
            </table>
        </div>
    </div> 
<?php }
}
?>