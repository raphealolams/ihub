<?php /* Smarty version 3.1.27, created on 2016-10-31 15:36:38
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96045817ffb67007f7_29005784%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '010f124d0b960696452221ecc3e15a353fc83919' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\admin\\manage.tpl',
      1 => 1474552769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96045817ffb67007f7_29005784',
  'variables' => 
  array (
    'errors' => 0,
    'total' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817ffb685ab75_18247512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817ffb685ab75_18247512')) {
function content_5817ffb685ab75_18247512 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '96045817ffb67007f7_29005784';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
        <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
<?php echo smarty_function_action_title(array('title'=>'Users'),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        <div class="btn-group pull-left">
             <?php echo HtmlHelper::backButton();?>

             <?php echo HtmlHelper::addButton(admin_url('users/add'));?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::helpButton('plugins-nyra_users');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php ob_start();
echo lang('record_total');
$_tmp1=ob_get_clean();
echo BootStrapHelper::alert('info',((string)$_smarty_tpl->tpl_vars['total']->value)."  ".$_tmp1);?>

    <div class="col-sm-12 col-md-12 col-lg-12" >
        <div class="table-responsive">
             <table class="table table-hover" id="data-table">
                <thead>
                    <tr>
                        <th><i class="glyphicon glyphicon-ice-lolly"></i></th>	
                        <th><i class="glyphicon glyphicon-user"></i></th>	
                        <th> <i class="glyphicon glyphicon-lock"></i> </th> 
                        <th><i class="glyphicon glyphicon-envelope"></i></th> 
                        <th><i class="glyphicon glyphicon-add"></i></th>
                        <th> <?php echo lang('plugin_nyra_users_online');?>
 </th>
                        <th><i class="glyphicon glyphicon-edit"></i> </th>
                        <th><i class="glyphicon glyphicon-move"></i> </th>
                        <th><i class="glyphicon glyphicon-check"></i></th>
                        <th ></th>
                       
                    </tr>
                </thead>
                <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$foreach_user_Sav = $_smarty_tpl->tpl_vars['user'];
?>
                            <tr>
                                <td> <?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
 </td> 
                                <td> <?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
 </td> 
                                <td> <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
 </td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['user']->value->created;?>
 </td>
                                <td> <span class="user-circle-online btn btn-<?php if ($_smarty_tpl->tpl_vars['user']->value->isOnline()) {?>success<?php } else { ?>danger<?php }?> btn-circle "></span> </td>
                                <td>  <?php echo $_smarty_tpl->tpl_vars['user']->value->modified;?>
</td> 
                                <td>  <?php echo $_smarty_tpl->tpl_vars['user']->value->getProfile()->getData('last_activity_time');?>
</td> 
                                <td>  <?php if ($_smarty_tpl->tpl_vars['user']->value->live) {?>Active<?php } else { ?>Disabled<?php }?> </td>
                                <td> <?php if ($_smarty_tpl->tpl_vars['user']->value->live) {?> 
                                            <?php echo anchor("admin/users/disable/".((string)$_smarty_tpl->tpl_vars['user']->value->id),'Diable');?>

                                     <?php } else { ?>
                                            <?php echo anchor("admin/users/enable/".((string)$_smarty_tpl->tpl_vars['user']->value->id),'Enable');?>

                                     <?php }?>   
                                       <?php echo anchor("admin/users/edit/".((string)$_smarty_tpl->tpl_vars['user']->value->id),'Edit');?>

                                       <?php echo anchor("admin/users/delete/".((string)$_smarty_tpl->tpl_vars['user']->value->id),'Delete',array('onclick'=>"return confirm('Are you sure? Action can not be undone')"));?>

                                       <?php echo anchor("admin/users/change_password/".((string)$_smarty_tpl->tpl_vars['user']->value->id),'Change Password');?>

                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>
                </tbody>
            </table>
        </div>
    </div>
   <?php echo smarty_function_theme_plugin(array('p'=>'bootstrap-datatables'),$_smarty_tpl);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#data-table' ).DataTable();
                    });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }
}
?>