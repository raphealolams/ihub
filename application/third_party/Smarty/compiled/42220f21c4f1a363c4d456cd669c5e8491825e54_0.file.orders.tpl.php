<?php /* Smarty version 3.1.27, created on 2016-11-01 10:26:00
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\orders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1055581908680f4c72_15657406%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42220f21c4f1a363c4d456cd669c5e8491825e54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\orders.tpl',
      1 => 1478035556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055581908680f4c72_15657406',
  'variables' => 
  array (
    'form' => 0,
    'orders' => 0,
    'order' => 0,
    'total' => 0,
    'limit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819086828d4c5_82907208',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819086828d4c5_82907208')) {
function content_5819086828d4c5_82907208 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '1055581908680f4c72_15657406';
?>
<div class="row">
    <div class="col-md-6">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-deafault"','Search');?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

    </div>
</div>
<div class="row">
<div class="col-xm-12 col-sm-12 col-md-12 col-lg-12" >
    <?php if (!$_smarty_tpl->tpl_vars['orders']->value) {?>
        No record!!
    <?php } else { ?>
        <div class="table-responsive">
             <table class="table table-hover" id="orders-table">
                <thead class="bg-primary">
                    <tr>
                        <th> <?php echo lang('label_id');?>
  </th> 
                        <th> <?php echo lang('adjective_created');?>
  </th>
                        <th> User </th>
                        <th> Status </th> 
                        <th><?php echo lang('noun_actions');?>
  </th>
                    </tr>
                 </thead>
                 <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$foreach_order_Sav = $_smarty_tpl->tpl_vars['order'];
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->created_on;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->getUserName();?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['order']->value->getStatus();?>
 </td>
                            <td> <!--chack wether order is ebabled-->
                              
                                 <a class="btn btn-default" 
                                    href="<?php echo admin_url("shop/order_details/".((string)$_smarty_tpl->tpl_vars['order']->value->id));?>
" 
				 >
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                Details</a>
                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['order'] = $foreach_order_Sav;
}
?>
                </tbody>
            </table>
        </div>
        <div class="center-align"><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value,null,null);?>
</div>
    </div>
</div>                       
    <?php echo smarty_function_theme_plugin(array('p'=>'bootstrap-datatables'),$_smarty_tpl);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#orders-table' ).DataTable({
                         'order'  : [[ 1 , 'desc']] 
                    });
                });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
}
?>