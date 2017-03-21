<?php /* Smarty version 3.1.27, created on 2017-02-07 03:49:04
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\edit_staff.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15102589935a010c749_39540780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55617aa07b8cf3f33bf4e55c6334b546e14bfd4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\edit_staff.tpl',
      1 => 1486435737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15102589935a010c749_39540780',
  'variables' => 
  array (
    'staff' => 0,
    'departments' => 0,
    'dept' => 0,
    'states' => 0,
    'state_id' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589935a039ac31_29440324',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589935a039ac31_29440324')) {
function content_589935a039ac31_29440324 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15102589935a010c749_39540780';
?>
<div class="container col-md-12">
<?php echo form_open();?>



	<div class="form-group ">
		<label>First Name:</label>
		<input type="text" name="staff_fname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_fname;?>
">
	</div>

	<div class="form-group">
		<label>Middle Name:</label>
		<input type="text" name="staff_mname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_mname;?>
">
	</div>

	<div class="form-group">
		<label>Surname:</label>
		<input type="text" name="staff_sname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_sname;?>
">
	</div>

	<div class="form-group">
		<label >Sex:</label>
		<br>

		<input type="radio" name="staff_sex" value="male" <?php if ($_smarty_tpl->tpl_vars['staff']->value->staff_sex == 'male') {?> checked="" <?php }?> >Male
		<input type="radio" name="staff_sex" value="female"  <?php if ($_smarty_tpl->tpl_vars['staff']->value->staff_sex == 'female') {?> checked="" <?php }?>  >Female
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
" 
                    <?php if ($_smarty_tpl->tpl_vars['dept']->value->department_id == $_smarty_tpl->tpl_vars['staff']->value->staff_dept) {?> selected="" <?php }?>
                    ><?php echo $_smarty_tpl->tpl_vars['dept']->value->name;?>
</option>
             <?php
$_smarty_tpl->tpl_vars['dept'] = $foreach_dept_Sav;
}
?>
		</select>
	</div>

	<div class="form-group">
		<label>Telephone Number:</label>
		<input type="text" name="staff_tel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_tel;?>
">
	</div>

	<div class="form-group">
		<label>Date of Birth:</label>
		<input type="date" name="staff_dob" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_dob;?>
">
	</div>

	<div class="form-group">
		<label>State:</label>
		<select name="staff_state" class="form-control">
		<option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_state;?>
" class="form-control">state</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['states']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['title']->_loop = false;
$_smarty_tpl->tpl_vars['state_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['state_id']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
$foreach_title_Sav = $_smarty_tpl->tpl_vars['title'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['state_id']->value;?>
"
                 <?php if ($_smarty_tpl->tpl_vars['state_id']->value == $_smarty_tpl->tpl_vars['staff']->value->staff_state) {?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
             <?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>
		</select>
	</div>

	<div class="form-group">
		<label>Local Government:</label>
		<input type="text" name="staff_lga" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_lga;?>
">
	</div>

	<div class="form-group">
		<label>Nationality:</label>
		<input type="text" name="staff_nationality" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_nationality;?>
">
	</div>

	<div class="form-group">
		<label>Image:</label>
		<input type="file" name="staff_image" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_image;?>
">
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input type="email" name="staff_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_email;?>
">
	</div>

	<div class="form-group">
		<label>Address:</label>
		<textarea name="Staff_address" class="form-control"><?php echo $_smarty_tpl->tpl_vars['staff']->value->Staff_address;?>
</textarea>
	</div>

	<div class="form-group">
		<label>Best Food:</label>
		<input type="text" name="best_food" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->best_food;?>
">
	</div>

	<div class="form-group">
		<label>Hobbies:</label>
		<input type="text" name="hobby" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->hobby;?>
">
	</div>

	<div class="form-group">
		<label>University Certificate:</label>
		<input type="text" name="university_certificate" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->university_certificate;?>
">
	</div>

	<div class="form-group">
		<label>Staff Salary:</label>
		<input type="text" name="staff_salary" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_salary;?>
">
	</div>

	<div class="form-group">
		<label>Year Joined:</label>
		<input type="date" name="staff_Year_Joined_Establishment" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_Year_Joined_Establishment;?>
">
	</div>

	<div class="form-group">
		<label>Bank Id:</label>
		<input type="text" name="bank_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->bank_id;?>
">
	</div>

	<div class="form-group">
		<label>Staff Bank No:</label>
		<input type="text" name="staff_bankno" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_bankno;?>
">
	</div>

	<div class="form-group">
		<label>Staff bank Name:</label>
		<input type="text" name="staff_bankname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->staff_bankname;?>
">
	</div>
	<input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
	
 </form>
</div>
<?php }
}
?>