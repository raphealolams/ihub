<?php /* Smarty version 3.1.27, created on 2016-11-01 06:13:16
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:131395818cd2c87e314_30968665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1643d620b838491a14a1f8a6bf5a833ed34bf02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\login.tpl',
      1 => 1475148118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131395818cd2c87e314_30968665',
  'variables' => 
  array (
    'errors' => 0,
    'form' => 0,
    'redirect' => 0,
    'login_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818cd2cefa552_37417711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818cd2cefa552_37417711')) {
function content_5818cd2cefa552_37417711 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';

$_smarty_tpl->properties['nocache_hash'] = '131395818cd2c87e314_30968665';
if ($_smarty_tpl->tpl_vars['errors']->value) {?> 
    <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

     
            <?php echo '<script'; ?>
 >
                    $( '#users-login-block' ).effect( "shake" );
            <?php echo '</script'; ?>
>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php ob_start();
echo lang('action_login');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

<?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['login_options'] = new Smarty_Variable(get_login_options(), null, 0);?>
<div id="users-login-form-block">
    <div class="col-sm-12 col-md-12 clearfix">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-default "',lang('action_login'));?>

        <div class="btn-group pull-right">
            <?php if (user_can_register()) {?>
                <a href="<?php echo site_url('register');
if ($_smarty_tpl->tpl_vars['redirect']->value) {?>?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;
}?>" >Register</a> 
                &nbsp; &nbsp;
            <?php }?>
            <a href="<?php echo site_url('forgot_password');
if ($_smarty_tpl->tpl_vars['redirect']->value) {?>?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;
}?>" >Forgot Password</a>
            
        </div>
        <?php echo form_close();?>

    </div>
    <div class="section col-md-12" >
        
        <?php if ($_smarty_tpl->tpl_vars['login_options']->value && $_smarty_tpl->tpl_vars['login_options']->value != '') {?>
            <div class="alternate-divider section clearfix">
                <hr class="pull-left" />
                   OR 
                <hr class="pull-right" />
                <?php echo $_smarty_tpl->tpl_vars['login_options']->value;?>

            </div>
        <?php }?>
    </div>
</div>

       
 
<?php }
}
?>