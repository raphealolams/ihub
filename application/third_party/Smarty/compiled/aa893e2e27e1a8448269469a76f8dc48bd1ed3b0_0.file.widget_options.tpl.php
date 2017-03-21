<?php /* Smarty version 3.1.27, created on 2016-11-21 10:10:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\admin\widget_options.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3230583362d7564559_34290401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa893e2e27e1a8448269469a76f8dc48bd1ed3b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\admin\\widget_options.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3230583362d7564559_34290401',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'widget_options' => 0,
    'user_data' => 0,
    'i_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583362d768a452_34348192',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583362d768a452_34348192')) {
function content_583362d768a452_34348192 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '3230583362d7564559_34290401';
if (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php echo smarty_function_action_title(array('title'=>'Widget Options'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <div class="alert alert-success"> <?php echo lang('alert_update_success');?>
</div>
    <?php }?>
    <div class="col-md-6">
        <?php echo nyra_form_open();?>

        <?php $_smarty_tpl->tpl_vars['i_options'] = new Smarty_Variable(array('input_type_text_class'=>'form-control'), null, 0);?>
        <?php echo FormHelper::loopInputs($_smarty_tpl->tpl_vars['widget_options']->value,$_smarty_tpl->tpl_vars['user_data']->value,$_smarty_tpl->tpl_vars['i_options']->value);?>


        <input type="submit" name="update" value="<?php echo lang('verb_submit');?>
" class="btn btn-success" />
        <?php echo form_close();?>

    </div>
<?php }
}
}
?>