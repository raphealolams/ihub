<?php /* Smarty version 3.1.27, created on 2017-02-09 02:10:08
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\payroll\payroll_types.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21964589bc170d734c0_83703319%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7509d4d8ab554ad716710b9d55b13bdaee31848b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\payroll\\payroll_types.tpl',
      1 => 1486602601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21964589bc170d734c0_83703319',
  'variables' => 
  array (
    'payroll_types' => 0,
    'payroll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589bc170e59c72_05759272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589bc170e59c72_05759272')) {
function content_589bc170e59c72_05759272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21964589bc170d734c0_83703319';
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
                    <th>Payroll Type Name</th>
                    <th>Payroll Status</th>
                    <th>Payroll Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['payroll_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['payroll'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['payroll']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['payroll']->value) {
$_smarty_tpl->tpl_vars['payroll']->_loop = true;
$foreach_payroll_Sav = $_smarty_tpl->tpl_vars['payroll'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['payroll']->value->payrolltype_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['payroll']->value->payrolltype_status;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['payroll']->value->payrolltype_descr;?>
</td>
                       <td>
                            <a href="<?php echo site_url("payroll/edit_payroll_type/".((string)$_smarty_tpl->tpl_vars['payroll']->value->payrolltype_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit </a>
                            <a href="<?php echo site_url("payroll/delete_payrolltype/".((string)$_smarty_tpl->tpl_vars['payroll']->value->payrolltype_id));?>
" class="btn btn-danger"
                              >Delete</a>

                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['payroll'] = $foreach_payroll_Sav;
}
?>
            </tbody>
        </table>
    </div>


    <div id="Add" class="tab-pane fade">
      <form method="post">
      	<div class="container col-md-12">

      	<div class="form-group ">
      		<label>Payroll Type Name:</label>
      		<input type="text" name="payrolltype_name" class="form-control">
      	</div>

      	<div class="form-group">
      		<label>Payroll Type Status:</label>
      		<input type="text" name="payrolltype_status" class="form-control">
      	</div>

      	<div class="form-group">
      		<label>Description:</label>
      		<textarea type="text" name="payrolltype_descr" class="form-control"></textarea>
      	</div>

        <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />

      </form>
     </div>
 </div>
 </div>
<?php }
}
?>