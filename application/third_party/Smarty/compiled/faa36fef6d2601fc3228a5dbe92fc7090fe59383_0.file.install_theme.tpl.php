<?php /* Smarty version 3.1.27, created on 2016-11-02 06:12:36
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\appearance\views\admin\install_theme.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5283581a1e84641851_44507736%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa36fef6d2601fc3228a5dbe92fc7090fe59383' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\appearance\\views\\admin\\install_theme.tpl',
      1 => 1474552708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5283581a1e84641851_44507736',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a1e85641fb2_45977385',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a1e85641fb2_45977385')) {
function content_581a1e85641fb2_45977385 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '5283581a1e84641851_44507736';
?>
  

     <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo nyra_alert(lang('alert_install_success'),'success');?>

    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo HtmlHelper::listButton(admin_url('appearance/themes'));?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
     <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

    <?php }?>
    <div class="col-md-6">
        <?php ob_start();
echo lang('upload_cms_theme_zip');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>
      
        <?php echo nyra_form_open('',true);?>

            <div class="form-group">
                <label for="theme">  <?php echo lang('label_file');?>
 </label>  
                <input type="file" name="theme" class="form-control"   />
                <p class="help-block centered"> Zip </p>
            </div>
            <input type="submit" class="btn btn-justified btn-primary" value="<?php echo (($tmp = @lang('action_upload'))===null||$tmp==='' ? 'Upload' : $tmp);?>
" name="install" />
        <?php echo form_close();?>

    </div>
            <?php }
}
?>