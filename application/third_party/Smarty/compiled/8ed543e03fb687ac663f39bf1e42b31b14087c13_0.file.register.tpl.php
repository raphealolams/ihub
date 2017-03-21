<?php /* Smarty version 3.1.27, created on 2016-11-08 03:36:17
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\api\views\register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:226215821e2e1c0db67_99759914%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed543e03fb687ac663f39bf1e42b31b14087c13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\api\\views\\register.tpl',
      1 => 1475272360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226215821e2e1c0db67_99759914',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'client' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821e2e1dc6c66_36248988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821e2e1dc6c66_36248988')) {
function content_5821e2e1dc6c66_36248988 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';

$_smarty_tpl->properties['nocache_hash'] = '226215821e2e1c0db67_99759914';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success"> Created <?php echo $_smarty_tpl->tpl_vars['client']->value->app_name;?>
 successfully </div>
    <p>Save the following</p>
    <p><strong> Key </strong> <?php echo $_smarty_tpl->tpl_vars['client']->value->client_id;?>
</p>
    <p><strong> Secret </strong> <?php echo $_smarty_tpl->tpl_vars['client']->value->client_secret;?>
</p>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

<?php }?>

<?php echo '<script'; ?>
>
    $('#input-app_title').keyup(function(){
        var inputName = $('#input-app_name');
        
        var suggestion = $(this).val().replace(/\s/g , '_').toLowerCase();
        inputName.val(suggestion);
        
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var logoInput =  $('#input-logo_uri');
    logoInput.parent().append("<div><img id='logo-preview'/></div>");
    $('#input-logo_uri').focusout(function(){
        previewLogo();
    })

    function previewLogo(input){
        var src = logoInput.val();
        $('#logo-preview').attr('src' , src );
    }
    previewLogo();
    
    
   
<?php echo '</script'; ?>
>
    
    <?php }
}
?>