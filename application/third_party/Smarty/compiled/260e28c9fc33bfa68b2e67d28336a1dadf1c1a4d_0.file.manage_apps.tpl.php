<?php /* Smarty version 3.1.27, created on 2017-01-17 05:21:03
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\api\views\admin\manage_apps.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27488587e446f2d5f33_16668607%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260e28c9fc33bfa68b2e67d28336a1dadf1c1a4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\api\\views\\admin\\manage_apps.tpl',
      1 => 1484670061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27488587e446f2d5f33_16668607',
  'variables' => 
  array (
    'apps' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587e446fece7e1_21977088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e446fece7e1_21977088')) {
function content_587e446fece7e1_21977088 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '27488587e446f2d5f33_16668607';
echo smarty_function_action_title(array('title'=>'My Apps'),$_smarty_tpl);?>


<div class="row" style="margin-bottom: 10px">
    <div class="pull-right clearfix" >
        <a href="<?php echo site_url("api/register");?>
" class="btn btn-default" >
            <span class="glyphicon glyphicon-plus-sign"></span>Add New
        </a>
    </div>
</div>
<div class="table-responsive">
  <table class="table table-condensed">
      <thead class="text-md">
            <th> App Name</th>
            <th> App Title</th>
            <th> Client ID</th>
            <th> Type</th>
            <th> Status</th>
            <th> Actions</th>
      </thead>
     <?php
$_from = $_smarty_tpl->tpl_vars['apps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['app'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['app']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
$foreach_app_Sav = $_smarty_tpl->tpl_vars['app'];
?>
         <tr class="text-md"> 
             <td ><?php echo $_smarty_tpl->tpl_vars['app']->value->getAppName();?>
</td>
             <td> <?php echo $_smarty_tpl->tpl_vars['app']->value->getAppTitle();?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['app']->value->getAppType();?>
 </td>
             <td><?php echo $_smarty_tpl->tpl_vars['app']->value->client_id;?>
 </td>
             <td><?php echo $_smarty_tpl->tpl_vars['app']->value->getStatus();?>
 </td>
             <td>
                
                <a href="<?php echo admin_url("api/view_app/".((string)$_smarty_tpl->tpl_vars['app']->value->app_name));?>
" class="btn btn-default" >
                    <span class="glyphicon glyphicon-eye-open"></span> View
                 </a>
                <a href="<?php echo admin_url("api/edit_app/".((string)$_smarty_tpl->tpl_vars['app']->value->app_name));?>
" class="btn btn-default" >
                    <span class="glyphicon glyphicon-edit"></span> Edit
                 </a>
                 <a href="<?php echo admin_url("api/disable_app/".((string)$_smarty_tpl->tpl_vars['app']->value->app_name));?>
"  class="btn btn-default" >
                    <span class="glyphicon glyphicon-ban-circle"></span>Disable
                 </a>
             </td>
         </tr>
    <?php
$_smarty_tpl->tpl_vars['app'] = $foreach_app_Sav;
}
?>
  </table>
</div>
<?php }
}
?>