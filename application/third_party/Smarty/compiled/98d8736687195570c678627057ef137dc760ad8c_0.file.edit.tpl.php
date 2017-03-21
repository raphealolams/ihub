<?php /* Smarty version 3.1.27, created on 2016-11-01 12:26:24
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\pages\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29980581924a0c74f24_10860102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d8736687195570c678627057ef137dc760ad8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\pages\\views\\admin\\edit.tpl',
      1 => 1475918182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29980581924a0c74f24_10860102',
  'variables' => 
  array (
    'errors' => 0,
    'form' => 0,
    'page' => 0,
    'success' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581924a0ee9fb6_04430289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581924a0ee9fb6_04430289')) {
function content_581924a0ee9fb6_04430289 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '29980581924a0c74f24_10860102';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>    
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group pull-left">
             <?php echo HtmlHelper::listButton(admin_url('pages/manage'));?>

             <?php echo HtmlHelper::backButton();?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('page-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

             <a class="btn btn-default btn-lg" target="_blank" href="<?php echo site_url(((string)$_smarty_tpl->tpl_vars['page']->value->slug));?>
?preview=1" >
                 <i class="glyphicon glyphicon-eye-open"></i>Preview
             </a>
             <?php echo HtmlHelper::deleteButton(admin_url("pages/delete/".((string)$_smarty_tpl->tpl_vars['page']->value->id)));?>

             <?php echo HtmlHelper::helpButton('plugins-nyra_pages');?>

             
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
	<?php echo nyra_alert(lang('alert_update_success'),'success');?>

    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="page-form"');?>
 
        <!-- end tab control-->
        
        <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['page']->value,array(),true), null, 0);?> 
        <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>


    
     <div class="row">
       <h4>Comments </h4>
      <?php echo Comments\Helpers\CommentHelper::getCommentManageHtml('page',$_smarty_tpl->tpl_vars['page']->value->id);?>

     </div>
 <?php }?>


 
            
            
            
            
<?php }
}
?>