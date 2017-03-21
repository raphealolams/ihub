<?php /* Smarty version 3.1.27, created on 2016-12-08 05:59:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\install.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:259205849917426a0d4_68672062%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb31b43f57913ba12873a8297d5f2f9122ee7380' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\install.tpl',
      1 => 1474552765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259205849917426a0d4_68672062',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'update' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58499174502d85_90255504',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58499174502d85_90255504')) {
function content_58499174502d85_90255504 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '259205849917426a0d4_68672062';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_upload_success'),'success');?>

<?php }?>
<?php if (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php ob_start();
echo lang('upload_cms_plugin_zip');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>
       
    <?php echo form_open_multipart('');?>

        <?php echo form_hidden('update',$_smarty_tpl->tpl_vars['update']->value);?>

        <div class="form-group">
            <label for="photo"> <?php echo lang('noun_file');?>
 </label>  
            <input type="file" name="module"   />
        </div>
        <input type="submit" value="<?php echo (($tmp = @lang('verb_upload'))===null||$tmp==='' ? 'Upload' : $tmp);?>
" name="install" />
    <?php echo form_close();?>

<?php }?>
            <?php }
}
?>