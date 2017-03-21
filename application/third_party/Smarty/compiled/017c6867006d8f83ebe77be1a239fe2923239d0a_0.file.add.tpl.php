<?php /* Smarty version 3.1.27, created on 2016-11-17 10:33:43
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30946582e2237b30c90_83605182%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017c6867006d8f83ebe77be1a239fe2923239d0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\admin\\add.tpl',
      1 => 1479418285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30946582e2237b30c90_83605182',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582e2238839e23_84869218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582e2238839e23_84869218')) {
function content_582e2238839e23_84869218 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '30946582e2237b30c90_83605182';
?>
	
<?php if (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    	 <?php echo nyra_alert(lang('alert_create_success'),'success');?>

    <?php } else { ?>
        <?php ob_start();
echo lang('action_create_new');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
            <div class="btn-group pull-left">
                 <?php echo HtmlHelper::listButton(admin_url('users/manage'));?>

            </div>
            <div class="btn-group pull-right">
                 <?php echo HtmlHelper::submitButton('user-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

                 <?php echo HtmlHelper::helpButton('plugins-nyra_users');?>

            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <div class="col-md-6" >
            <?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="user-form"');?>
  
               <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

               <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

        </div>
    <?php }?>
<?php }?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo country_list_js('#input-country_code','#input-state');?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>