<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:51
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\appearance\views\admin\theme_options.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2048658179fab4cebc4_35328283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d72604730480870c85ba62c944dae452c23018' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\appearance\\views\\admin\\theme_options.tpl',
      1 => 1475918181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2048658179fab4cebc4_35328283',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'form' => 0,
    'current_theme_options' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fab5dd1a2_90332485',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fab5dd1a2_90332485')) {
function content_58179fab5dd1a2_90332485 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '2048658179fab4cebc4_35328283';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
     <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php } else { ?>
     <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo nyra_alert(lang('alert_update_success'),'success');?>

    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        <div class="btn-group pull-left">
             <?php echo HtmlHelper::listButton(admin_url('appearance/themes'));?>

        </div>
        <div class="btn-group pull-right">
            <?php echo HtmlHelper::submitButton('theme-options-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

             <?php echo HtmlHelper::helpButton('plugins-appearance-themes');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php ob_start();
echo lang('pronoun_options');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('name'=>"Theme ".$_tmp1),$_smarty_tpl);?>

    <div class="col-md-10" >
            <?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="theme-options-form"');?>

                <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['current_theme_options']->value,array(),true), null, 0);?> 
                <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

            <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

    </div>
<?php }?>

<?php }
}
?>