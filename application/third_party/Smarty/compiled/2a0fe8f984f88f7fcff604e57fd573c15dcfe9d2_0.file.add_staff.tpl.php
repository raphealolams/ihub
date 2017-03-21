<?php /* Smarty version 3.1.27, created on 2017-01-30 18:46:22
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\add_staff.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2055588f7bee6f7746_75073792%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0fe8f984f88f7fcff604e57fd573c15dcfe9d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\add_staff.tpl',
      1 => 1485798378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2055588f7bee6f7746_75073792',
  'variables' => 
  array (
    'departments' => 0,
    'dept' => 0,
    'states' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588f7bee75ad65_87684998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588f7bee75ad65_87684998')) {
function content_588f7bee75ad65_87684998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2055588f7bee6f7746_75073792';
?>


<form>
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
		<input type="radio" name="staff_dept" value="male" >Male
		<input type="radio" name="staff_dept" value="female" >Female
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
                    <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value->id;?>
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
</form>
<?php }
}
?>