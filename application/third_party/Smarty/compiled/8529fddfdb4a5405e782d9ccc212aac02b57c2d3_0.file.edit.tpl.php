<?php /* Smarty version 3.1.27, created on 2016-12-08 05:15:46
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1137858498732319267_25211088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8529fddfdb4a5405e782d9ccc212aac02b57c2d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\admin\\edit.tpl',
      1 => 1479997533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1137858498732319267_25211088',
  'variables' => 
  array (
    'post' => 0,
    'success' => 0,
    'form' => 0,
    'errors' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584987325bc4f1_68140965',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584987325bc4f1_68140965')) {
function content_584987325bc4f1_68140965 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '1137858498732319267_25211088';
?>
    <?php echo smarty_function_action_title(array('title'=>"Edit Post :: ".((string)$_smarty_tpl->tpl_vars['post']->value->title)),$_smarty_tpl);?>

    
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>	
        <?php echo nyra_alert((($tmp = @lang('alert_update_success'))===null||$tmp==='' ? 'Upated Succesfully' : $tmp),'success');?>

    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group pull-left">
             <?php echo HtmlHelper::listButton(admin_url('posts/manage'));?>

             <?php echo HtmlHelper::backButton();?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('post-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

             <a class="btn btn-default btn-lg" target="_blank" href="<?php echo site_url(((string)$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
?preview=1" >
                 <i class="glyphicon glyphicon-eye-open"></i>Preview
             </a>
             <?php echo HtmlHelper::deleteButton(admin_url("posts/delete/".((string)$_smarty_tpl->tpl_vars['post']->value->id)));?>

             <?php echo HtmlHelper::helpButton('plugins-nyra_posts');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    
    <?php echo Tools::activateThemePlugin('bootstrap-tags','#post-tag-list');?>

     
    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?> 
        <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

    <?php }?>	
    <?php echo $_smarty_tpl->tpl_vars['form']->value->open('',array('id'=>'post-form'));?>
   

        <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['post']->value,array(),true), null, 0);?> 
        <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value);?>

        
    <?php echo form_close();?>

   
   <div class="row">
       <h4> Posts Comments </h4>
        <?php echo Comments\Helpers\CommentHelper::getCommentManageHtml('post',$_smarty_tpl->tpl_vars['post']->value->id);?>

   </div>
   
   <?php echo $_smarty_tpl->getSubTemplate ('admin/input_map_js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   <?php echo '<script'; ?>
>
       
       
       $("body").on('nyra.revision.request', function(e){
            e.requestData['post-id'] = <?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
;
        });
        
    <?php echo '</script'; ?>
>
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo bootstrap_tag_edit_js('#input-tags','post',$_smarty_tpl->tpl_vars['post']->value->id);?>

   <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }
}
?>