<?php /* Smarty version 3.1.27, created on 2017-02-09 04:54:39
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\payroll\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30813589be7ffcb82f8_65297258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a5f7f1c7b97217cafd7329657390da07438ca7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\payroll\\manage.tpl',
      1 => 1486612473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30813589be7ffcb82f8_65297258',
  'variables' => 
  array (
    'staffs' => 0,
    'staff' => 0,
    'staff_id' => 0,
    'months' => 0,
    'month_index' => 0,
    'month' => 0,
    'title' => 0,
    'years' => 0,
    'y' => 0,
    'year' => 0,
    'payroll_types' => 0,
    'type' => 0,
    'payroll_others' => 0,
    'payroll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589be7ffe043a5_34006953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589be7ffe043a5_34006953')) {
function content_589be7ffe043a5_34006953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30813589be7ffcb82f8_65297258';
echo form_open();?>
  
  
  <table class="table table-responsive table-borderd table-condensed">
    <thead>
            <tr>
                <th>Staff ID</th>
                <th>Month</th>
                <th>Year</th>
                 <td></td>
            </tr>
    </thead>
            <tbody>
                    <tr>
                        <td>
                             <select name="staff_id" class="form-control">
                                <option value="" class="form-control" >Select</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['staffs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['staff'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['staff']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->_loop = true;
$foreach_staff_Sav = $_smarty_tpl->tpl_vars['staff'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_id;?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['staff_id']->value == $_smarty_tpl->tpl_vars['staff']->value->staff_id) {?> selected="" <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['staff']->value->getName();?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['staff'] = $foreach_staff_Sav;
}
?>
                            </select>
                        </td>
                        <td>
                             <select name="Payrollothers_month" class="form-control">
                                <option value="" class="form-control">Select</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['months']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['title']->_loop = false;
$_smarty_tpl->tpl_vars['month_index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['month_index']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
$foreach_title_Sav = $_smarty_tpl->tpl_vars['title'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['month_index']->value;?>
"
                                         <?php if ($_smarty_tpl->tpl_vars['month']->value == $_smarty_tpl->tpl_vars['month_index']->value) {?> selected="" <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>
                            </select>
                        </td>
                         <td>
                             <select name="Payrollothers_year" class="form-control">
                                <option value="" class="form-control">Select</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['years']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
"
                                         <?php if ($_smarty_tpl->tpl_vars['year']->value == $_smarty_tpl->tpl_vars['y']->value) {?> selected="" <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>
                            </select>
                        </td>
                     
                          <td>
                            <input type="submit" name="fetch" class="btn btn-success" value="Submit" >
                        </td>
                    </tr>
            </tbody>
        </table>

    <table class="table table-responsive table-borderd table-condensed">
    <thead>
            <tr>
                <th>Payrol Item</th>
                 <th>Amount</th>
                 <td></td>
            </tr>
        </thead>
            <tbody>
                    <tr>
                        
                        <td>
                             <select name="Payrolltype_id" class="form-control">
                                <option value="" class="form-control">Select</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['payroll_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
$foreach_type_Sav = $_smarty_tpl->tpl_vars['type'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->payrolltype_id;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value->payrolltype_name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['type'] = $foreach_type_Sav;
}
?>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="Payrollothers_amount" class="form-control" id="Payrollothers_amount">
                        </td>
                          <td>
                            <input type="submit" name="submit" class="btn btn-success" value="Add" >
                        </td>
                    </tr>
            </tbody>
        </table>
<?php echo form_close();?>
  

<table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
        <tr>
            <th>Amount</th>
            <th>month</th>
            <th>year</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['payroll_others']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['payroll']->value->Payrollothers_amount;?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['payroll']->value->Payrollothers_month;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['payroll']->value->Payrollothers_year;?>
</td>
                <td>
                    
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['payroll'] = $foreach_payroll_Sav;
}
?>
    </tbody>
</table><?php }
}
?>