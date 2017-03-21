<?php /* Smarty version 3.1.27, created on 2017-02-07 03:20:03
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\all.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:279458992ed3a1b2a1_84642096%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85c58fa3e98884b2c3acc7afb579e1ad23081ff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\all.tpl',
      1 => 1486434001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279458992ed3a1b2a1_84642096',
  'variables' => 
  array (
    'staffs' => 0,
    'schstaff' => 0,
    'departments' => 0,
    'dept' => 0,
    'states' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58992ed3bc1108_66390555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58992ed3bc1108_66390555')) {
function content_58992ed3bc1108_66390555 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '279458992ed3a1b2a1_84642096';
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
                    <th>Staff SurName</th>
                    <th>Staff Middle Name</th>
                    <th>Staff Lastname</th>
                    <th>Staff Telephone Number</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['staffs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['schstaff'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['schstaff']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['schstaff']->value) {
$_smarty_tpl->tpl_vars['schstaff']->_loop = true;
$foreach_schstaff_Sav = $_smarty_tpl->tpl_vars['schstaff'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['schstaff']->value->staff_fname;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['schstaff']->value->staff_mname;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['schstaff']->value->staff_sname;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['schstaff']->value->staff_tel;?>
</td>
                        <td>
                          <a href="<?php echo site_url("staffs/banks/".((string)$_smarty_tpl->tpl_vars['schstaff']->value->staff_id));?>
" class="btn-form btn btn-info"
                             >Staff Bank</a>
                          <a href="<?php echo site_url("staffs/view_staff/".((string)$_smarty_tpl->tpl_vars['schstaff']->value->staff_id));?>
" class="btn-form-modal btn btn-success"
                             >View</a>
                            <a href="<?php echo site_url("staffs/edit_staff/".((string)$_smarty_tpl->tpl_vars['schstaff']->value->staff_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit</a>
                            <a href="<?php echo site_url("staffs/delete_staff/".((string)$_smarty_tpl->tpl_vars['schstaff']->value->staff_id));?>
" class="btn-form btn btn-danger"
                              >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['schstaff'] = $foreach_schstaff_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
         <form method="POST">
    <div class="container col-md-12">

    <div class="form-group ">
        <label>First Name:</label>
        <input type="text" name="staff_fname" class="form-control">
    </div>

    <div class="form-group">
        <label>Middle Name:</label>
        <input type="text" name="staff_mname" class="form-control">
    </div>

    <div class="form-group">
        <label>Surname:</label>
        <input type="text" name="staff_sname" class="form-control">
    </div>

    <div class="form-group">
        <label >Sex:</label>
        <br>

        <input type="radio" name="staff_sex" value="male" >Male
        <input type="radio" name="staff_sex" value="female" >Female
    </div>

    <div class="form-group">
        <label>Department:</label>
        <select name="staff_dept" class="form-control">
            <option value="" class="form-control">Select</option>
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
                    <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value->department_id;?>
"><?php echo $_smarty_tpl->tpl_vars['dept']->value->name;?>
</option>
             <?php
$_smarty_tpl->tpl_vars['dept'] = $foreach_dept_Sav;
}
?>
        </select>
    </div>

    <div class="form-group">
        <label>Telephone Number:</label>
        <input type="text" name="staff_tel" class="form-control">
    </div>

    <div class="form-group">
        <label>Date of Birth:</label>
        <input type="date" name="staff_dob" class="form-control">
    </div>

    <div class="form-group">
        <label>State:</label>
        <select name="staff_state" class="form-control">
        <option value="" class="form-control">state</option>
        <?php
$_from = $_smarty_tpl->tpl_vars['states']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['state'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['state']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
$foreach_state_Sav = $_smarty_tpl->tpl_vars['state'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['state']->value;?>
</option>
             <?php
$_smarty_tpl->tpl_vars['state'] = $foreach_state_Sav;
}
?>
        </select>
    </div>

    <div class="form-group">
        <label>Local Government:</label>
        <input type="text" name="staff_lga" class="form-control">
    </div>

    <div class="form-group">
        <label>Nationality:</label>
        <input type="text" name="staff_nationality" class="form-control">
    </div>

    <div class="form-group">
        <label>Image:</label>
        <input type="file" name="staff_image" class="form-control">
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="staff_email" class="form-control">
    </div>

    <div class="form-group">
        <label>Address:</label>
        <textarea name="Staff_address" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Best Food:</label>
        <input type="text" name="best_food" class="form-control">
    </div>

    <div class="form-group">
        <label>Hobbies:</label>
        <input type="text" name="hobby" class="form-control">
    </div>

    <div class="form-group">
        <label>University Certificate:</label>
        <input type="text" name="university_certificate" class="form-control">
    </div>

    <div class="form-group">
        <label>Staff Salary:</label>
        <input type="text" name="staff_salary" class="form-control">
    </div>

    <div class="form-group">
        <label>Year Joined:</label>
        <input type="date" name="staff_Year_Joined_Establishment" class="form-control">
    </div>

    <div class="form-group">
        <label>Bank Id:</label>
        <input type="text" name="bank_id" class="form-control">
    </div>

    <div class="form-group">
        <label>Staff Bank No:</label>
        <input type="text" name="staff_bankno" class="form-control">
    </div>

    <div class="form-group">
        <label>Staff bank Name:</label>
        <input type="text" name="staff_bankname" class="form-control">
    </div>
    </div>
      <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</form>



    </div>
</div>
<?php }
}
?>