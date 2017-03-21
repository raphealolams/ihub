<?php /* Smarty version 3.1.27, created on 2017-02-08 21:52:09
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\users\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16158589b84f9c103a6_23652672%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef09f05a2e6590d52edc9b1da349b94834bca18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\users\\edit.tpl',
      1 => 1486587125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16158589b84f9c103a6_23652672',
  'variables' => 
  array (
    'user_edit' => 0,
    'priveledges' => 0,
    'priviledge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b84f9d19db0_45854476',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b84f9d19db0_45854476')) {
function content_589b84f9d19db0_45854476 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16158589b84f9c103a6_23652672';
?>
 <form method="POST">
    <div class="form-group">
        <label for="username">User Name:</label>
        <input type="text" name="user_name" class="form-control" id="name"
         value="<?php echo $_smarty_tpl->tpl_vars['user_edit']->value->user_name;?>
"
        >
    </div>
    <div class="form-group">
        <label for="password">password:</label>
        <input type="passwoed" name="user_password" class="form-control" id="password">
    </div>
        <div class="form-group">
        <label for="user_password_confirm">Password Confirm:</label>
        <input type="passwoed" name="user_password_confirm" class="form-control" id="user_password_confirm">
    </div>
    <label for="">Priveledge:</label>
        <?php
$_from = $_smarty_tpl->tpl_vars['priveledges']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['priviledge'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['priviledge']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['priviledge']->value) {
$_smarty_tpl->tpl_vars['priviledge']->_loop = true;
$foreach_priviledge_Sav = $_smarty_tpl->tpl_vars['priviledge'];
?>
            <div class="radio">
                <label>
                    <input type="radio" name="user_priveledge" value="<?php echo $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_name;?>
"
                     <?php if ($_smarty_tpl->tpl_vars['user_edit']->value->user_priveledge == $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_name) {?> checked="" <?php }?>
                    >
                        (<?php echo $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_name;?>
) <?php echo $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_info;?>
 
                </label>
            </div>
        <?php
$_smarty_tpl->tpl_vars['priviledge'] = $foreach_priviledge_Sav;
}
?>
    
        <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
    </form><?php }
}
?>