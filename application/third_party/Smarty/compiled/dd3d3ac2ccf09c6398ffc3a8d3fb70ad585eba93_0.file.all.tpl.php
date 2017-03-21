<?php /* Smarty version 3.1.27, created on 2017-02-08 21:54:59
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\users\all.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4175589b85a3aae7a4_50761945%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3d3ac2ccf09c6398ffc3a8d3fb70ad585eba93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\users\\all.tpl',
      1 => 1486587297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4175589b85a3aae7a4_50761945',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'priveledges' => 0,
    'priviledge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b85a3c1fa17_14359108',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b85a3c1fa17_14359108')) {
function content_589b85a3c1fa17_14359108 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4175589b85a3aae7a4_50761945';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#Add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>user Name</th>
                    <th>priveledge</th>
                    <th>action</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</td>                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_priveledge;?>
</td>
                       <td>
                       <?php if (!$_smarty_tpl->tpl_vars['user']->value->isSuperAdmin()) {?>
                            <a href="<?php echo site_url("users/edit/".((string)$_smarty_tpl->tpl_vars['user']->value->user_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit </a>
                            <a href="<?php echo site_url("users/delete/".((string)$_smarty_tpl->tpl_vars['user']->value->user_id));?>
" class="btn btn-danger"
                              >Delete</a>
                        <?php }?>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>
            </tbody>
        </table>
    </div>


    <div id="Add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" name="user_name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input type="password" name="user_password" class="form-control" id="password">
            </div>
             <div class="form-group">
                <label for="user_password_confirm">Password Confirm:</label>
                <input type="password" name="user_password_confirm" class="form-control" id="user_password_confirm">
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
                            <input type="radio" name="user_priviledge" value="<?php echo $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_name;?>
">
                             (<?php echo $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_name;?>
) <?php echo $_smarty_tpl->tpl_vars['priviledge']->value->priveledge_info;?>
 
                        </label>
                 </div>
             <?php
$_smarty_tpl->tpl_vars['priviledge'] = $foreach_priviledge_Sav;
}
?>
            
              <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
         </form>
     </div>
 </div>
           
                <?php }
}
?>