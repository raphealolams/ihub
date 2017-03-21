<?php /* Smarty version 3.1.27, created on 2016-12-26 06:01:53
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\system\views\admin\update_site.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2080058614d017e8af7_12525312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2781b15a1083936ca07521b68242e6c58490e4a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\system\\views\\admin\\update_site.tpl',
      1 => 1474552768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080058614d017e8af7_12525312',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58614d0189fb77_35995552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58614d0189fb77_35995552')) {
function content_58614d0189fb77_35995552 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '2080058614d017e8af7_12525312';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
	<div class="text-capitalize alert alert-success"> <?php echo lang('alert_update_success_#','Site');?>
   </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?> 
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?> 
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['meta']->value->title;
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>
      
    <div class="col-lg-12" >
        <?php echo nyra_form_open('',true);?>

            <div class="form-group">
                <label class="text-capitalize" for="wocms"><?php echo lang('upload_cms_zip');?>
 </label>  
                <input type="file" name="wocms"   />
           </div>
        <input class="btn btn-success text-capitalize" type="submit" value="<?php echo lang('verb_upload');?>
" name="install" />
        <?php echo form_close();?>

    </div>
       
<?php }?>
            <?php }
}
?>