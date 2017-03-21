<?php /* Smarty version 3.1.27, created on 2017-02-08 00:51:03
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\departments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31388589a5d67f1c254_28368453%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c6e130d04e01181f53c27b4dd186f11824417f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\departments.tpl',
      1 => 1486506254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31388589a5d67f1c254_28368453',
  'variables' => 
  array (
    'departments' => 0,
    'dept' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a5d68053c56_14648472',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a5d68053c56_14648472')) {
function content_589a5d68053c56_14648472 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31388589a5d67f1c254_28368453';
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
                    <th>Department Name</th>
                    <th> Action </th>

                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['departments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dept'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dept']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->_loop = true;
$foreach_dept_Sav = $_smarty_tpl->tpl_vars['dept'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['dept']->value->name;?>
</td>

                        <td>
                            <a href="<?php echo site_url("staffs/edit_department/".((string)$_smarty_tpl->tpl_vars['dept']->value->department_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit Department</a>
                            <a href="<?php echo site_url("staffs/delete_department/".((string)$_smarty_tpl->tpl_vars['dept']->value->department_id));?>
" class="btn btn-danger"
                              >Delete Department</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['dept'] = $foreach_dept_Sav;
}
?>
            </tbody>
        </table>
    </div>


    <div id="Add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">Department Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>