<?php /* Smarty version 3.1.27, created on 2016-12-08 05:11:34
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28658584986363249b1_84015232%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae772b3799a2c160daed310a523ecfb5e2b5e3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\admin\\add.tpl',
      1 => 1479997427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28658584986363249b1_84015232',
  'variables' => 
  array (
    'form' => 0,
    'errors' => 0,
    'success' => 0,
    'inputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58498637447a12_43418795',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58498637447a12_43418795')) {
function content_58498637447a12_43418795 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '28658584986363249b1_84015232';
?>

    
    <?php echo Tools::activateThemePlugin('bootstrap-tags','#post-tag-list');?>
  
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group pull-left">
             <?php echo HtmlHelper::listButton(admin_url('posts/manage'));?>

             <?php echo HtmlHelper::backButton();?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('post-form',$_smarty_tpl->tpl_vars['form']->value->submit_button_name);?>

             <?php echo HtmlHelper::helpButton('plugins-nyra_posts');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?> 
        <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['success']->value) {?>	
         <?php echo nyra_alert((($tmp = @lang('alert_create_success'))===null||$tmp==='' ? 'Added Succesfully' : $tmp),'success');?>

        <?php echo HtmlHelper::addButton(admin_url('posts/add'));?>

    <?php } else { ?>
        
        <?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('','id="post-form"');?>
                 
            <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render('',array(),true), null, 0);?> 
            <?php echo BootstrapHelper::tabs($_smarty_tpl->tpl_vars['inputs']->value,'','');?>

           
        <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

        <?php echo $_smarty_tpl->getSubTemplate ('admin/input_map_js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

     <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   
    
        <?php echo bootstrap_tag_edit_js('#input-tags','post');?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }
}
?>