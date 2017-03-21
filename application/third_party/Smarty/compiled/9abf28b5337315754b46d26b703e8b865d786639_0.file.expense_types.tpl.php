<?php /* Smarty version 3.1.27, created on 2017-02-06 21:22:44
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\expenses\expense_types.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:289925898db1485c1a5_03867714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abf28b5337315754b46d26b703e8b865d786639' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\expenses\\expense_types.tpl',
      1 => 1486412561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289925898db1485c1a5_03867714',
  'variables' => 
  array (
    'expense_types' => 0,
    'ex_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5898db148f85b7_19809525',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5898db148f85b7_19809525')) {
function content_5898db148f85b7_19809525 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '289925898db1485c1a5_03867714';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['expense_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ex_type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ex_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ex_type']->value) {
$_smarty_tpl->tpl_vars['ex_type']->_loop = true;
$foreach_ex_type_Sav = $_smarty_tpl->tpl_vars['ex_type'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['ex_type']->value->expensestype_name;?>
</td>
                        <td>
                            <a href="<?php echo site_url("expenses/edit_type/".((string)$_smarty_tpl->tpl_vars['ex_type']->value->expensestype_id));?>
"
                               class="btn-form-modal btn btn-warning" data-url="<?php echo site_url("expenses/edit_type/".((string)$_smarty_tpl->tpl_vars['ex_type']->value->expensestype_id));?>
">Edit</a>
                               <a href="<?php echo site_url("expenses/delete_expenses_type/".((string)$_smarty_tpl->tpl_vars['ex_type']->value->expensestype_id));?>
"
                                  class="btn-form btn btn-danger" data-url="<?php echo site_url("expenses/delete_expenses_type/".((string)$_smarty_tpl->tpl_vars['ex_type']->value->expensestype_id));?>
">Delete</a>

                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['ex_type'] = $foreach_ex_type_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="expensestype_name" class="form-control" id="expensestype_name">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>