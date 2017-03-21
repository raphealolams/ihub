<?php /* Smarty version 3.1.27, created on 2016-11-23 11:22:39
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18349583616af530a36_11808624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16dd5f658cc76249e7bbc9602ee1de0a485cf853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\register.tpl',
      1 => 1475148118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18349583616af530a36_11808624',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'redirect' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583616b0391ec7_24055404',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583616b0391ec7_24055404')) {
function content_583616b0391ec7_24055404 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '18349583616af530a36_11808624';
?>

 <?php echo smarty_function_action_title(array('title'=>'Register'),$_smarty_tpl);?>

   <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
        <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php ob_start();
echo (($tmp = @lang('account_create_success'))===null||$tmp==='' ? 'Registration Successful' : $tmp);
$_tmp1=ob_get_clean();
echo BootStrapHelper::alert('success',$_tmp1);?>

        <a href="<?php echo site_url('login');
if ($_smarty_tpl->tpl_vars['redirect']->value) {?>?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;
}?>" ><?php echo lang('action_login');?>
</a>
    <?php } else { ?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>
  
             <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

             <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton("class='btn btn-primary pull-right'");?>

        <?php echo form_close();?>

    <?php }?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo country_list_js('#input-country_code','#input-state');?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
?>