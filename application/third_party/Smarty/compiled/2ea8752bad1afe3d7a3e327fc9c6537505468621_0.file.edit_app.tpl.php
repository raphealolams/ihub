<?php /* Smarty version 3.1.27, created on 2016-11-21 10:09:00
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\api\views\admin\edit_app.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:41205833626cc4a8c7_66217167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea8752bad1afe3d7a3e327fc9c6537505468621' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\api\\views\\admin\\edit_app.tpl',
      1 => 1475272360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41205833626cc4a8c7_66217167',
  'variables' => 
  array (
    'success' => 0,
    'is_admin' => 0,
    'app' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5833626ce3dfa3_00720470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5833626ce3dfa3_00720470')) {
function content_5833626ce3dfa3_00720470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '41205833626cc4a8c7_66217167';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert('Updated Success Fully','success');?>

<?php }?>
<div class="row" style="margin-bottom: 10px">
    <div class="pull-right clearfix" >
        <?php if (isset($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
            <a href="<?php echo admin_url("api/manage_apps");?>
" class="btn btn-default" >
                <span class="glyphicon glyphicon-arrow-left"></span> Apps
            </a>
        <?php } else { ?>
            <a href="<?php echo site_url("api/manage_apps");?>
" class="btn btn-default" >
                <span class="glyphicon glyphicon-arrow-left"></span>Back My Apps
            </a>
        <?php }?>
    </div>
</div>
<div class="page-header">
  <h1><?php echo $_smarty_tpl->tpl_vars['app']->value->getAppTitle();?>
</small></h1>
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->getLogoUri();?>
" alt="App Logo">
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['app']->value);?>

    
    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>



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
<!--  modal for user password -->
<?php }
}
?>