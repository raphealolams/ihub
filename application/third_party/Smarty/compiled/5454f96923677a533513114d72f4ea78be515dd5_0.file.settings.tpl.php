<?php /* Smarty version 3.1.27, created on 2016-10-31 15:33:36
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172015817ff00248023_90419784%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5454f96923677a533513114d72f4ea78be515dd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\settings.tpl',
      1 => 1475148119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172015817ff00248023_90419784',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'form' => 0,
    'user' => 0,
    'inputs' => 0,
    'section' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817ff00449a76_53083206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817ff00449a76_53083206')) {
function content_5817ff00449a76_53083206 ($_smarty_tpl) {
if (!is_callable('smarty_function_multitab_link')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.multitab_link.php';
if (!is_callable('smarty_block_multitab_content')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.multitab_content.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '172015817ff00248023_90419784';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_update_success'),'success');?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?>
    <div class="profile-settings-content" id=""> 
        
        <?php if (OptionHelper::get('userUploadImage')) {?>
            <p class="clearfix">
                <a href="<?php echo site_url('users/change_picture');?>
" class="btn btn-default pull-right">
                    <i class="glyphicon glyphicon-upload"></i> Change Profile Picture</a>
            </p>
        <?php }?>
            <?php echo smarty_function_multitab_link(array('hook'=>'users.settings.tab','link_open'=>'<ul class="nav nav-pills multitab-nav">','item_template'=>' <li role="presentation" class="[[active_class]]"><a href="[[url]]">[[title]]</a></li>','add_default_tab'=>true),$_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('multitab_content', array('hook'=>'users.settings.tab')); $_block_repeat=true; echo smarty_block_multitab_content(array('hook'=>'users.settings.tab'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                
                <?php echo $_smarty_tpl->tpl_vars['form']->value->open('',true);?>

                    <?php $_smarty_tpl->tpl_vars['inputs'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['user']->value,array(),true), null, 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['inputs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['content'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['content']->_loop = false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
$foreach_content_Sav = $_smarty_tpl->tpl_vars['content'];
?>
                        <fieldset>
                            <legend> 
                                <span class="label label-default">
                                    <?php echo StringHelper::title($_smarty_tpl->tpl_vars['section']->value);?>

                                </span>
                            </legend>
                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                        </fieldset>
                    <?php
$_smarty_tpl->tpl_vars['content'] = $foreach_content_Sav;
}
?>
                     <div class="form-group">
                       <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-success btn-block"');?>

                    </div>
                <?php echo form_close();?>

             <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_multitab_content(array('hook'=>'users.settings.tab'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo country_list_js('#input-country_code','#input-state');?>

            <?php echo country_list_js('#input-current_country_code','#input-current_state');?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
}
?>