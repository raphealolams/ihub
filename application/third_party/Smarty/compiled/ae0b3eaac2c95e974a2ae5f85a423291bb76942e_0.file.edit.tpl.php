<?php /* Smarty version 3.1.27, created on 2017-02-08 03:32:00
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\students\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4188589a83203bda53_89609821%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae0b3eaac2c95e974a2ae5f85a423291bb76942e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\students\\edit.tpl',
      1 => 1486518457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4188589a83203bda53_89609821',
  'variables' => 
  array (
    'student' => 0,
    'classes' => 0,
    'class' => 0,
    'status_options' => 0,
    'status_num' => 0,
    'title' => 0,
    'parents' => 0,
    'parent' => 0,
    'states' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a83204cb306_92056593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a83204cb306_92056593')) {
function content_589a83204cb306_92056593 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4188589a83203bda53_89609821';
?>
 <form method="POST">
<div class="container col-md-12">

<div class="form-group ">
    <label>First Name:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_fname;?>
" name="student_fname" class="form-control">
</div>

<div class="form-group">
    <label>Middle Name:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_mname;?>
"  name="student_mname" class="form-control">
</div>

<div class="form-group">
    <label>Surname:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_sname;?>
" name="student_lname" class="form-control">
</div>

<div class="form-group">
    <label >Sex:</label>
    <br>

    <input type="radio" name="student_sex" <?php if ($_smarty_tpl->tpl_vars['student']->value->student_sex == 'male') {?> checked="" <?php }?> value="male" >Male
    <input type="radio" name="student_sex"  <?php if ($_smarty_tpl->tpl_vars['student']->value->student_sex == 'female') {?> checked="" <?php }?> value="female" >Female
</div>

<div class="form-group">
    <label>Class:</label>
    <select name="class_id" class="form-control">
        <option value="" class="form-control">Select</option>
          <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$foreach_class_Sav = $_smarty_tpl->tpl_vars['class'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['class']->value->id == $_smarty_tpl->tpl_vars['student']->value->class_id) {?> selected="" <?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['class']->value->name;?>
</option>
         <?php
$_smarty_tpl->tpl_vars['class'] = $foreach_class_Sav;
}
?>
    </select>
</div>

 <div class="form-group">
    <label>Status:</label>
    <select name="status_id" class="form-control">
        <option value="" class="form-control">Select</option>
          <?php
$_from = $_smarty_tpl->tpl_vars['status_options']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['title']->_loop = false;
$_smarty_tpl->tpl_vars['status_num'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['status_num']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
$foreach_title_Sav = $_smarty_tpl->tpl_vars['title'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['status_num']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['status_num']->value == $_smarty_tpl->tpl_vars['student']->value->status_id) {?> selected="" <?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
         <?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>
    </select>
</div>

 <div class="form-group">
    <label>Parent:</label>
    <select name="parent_id" class="form-control">
        <option value="" class="form-control">Select</option>
          <?php
$_from = $_smarty_tpl->tpl_vars['parents']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['parent']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
$foreach_parent_Sav = $_smarty_tpl->tpl_vars['parent'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['parent']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value->getName();?>
</option>
         <?php
$_smarty_tpl->tpl_vars['parent'] = $foreach_parent_Sav;
}
?>
    </select>
</div>

<div class="form-group">
    <label>Nationality:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->nationality;?>
" name="nationality" class="form-control">
</div>

<div class="form-group">
    <label>State of Origin:</label>
    <select name="Student_state" class="form-control">
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
    <label>Student LGA:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_lga;?>
" name="student_lga" class="form-control">
</div>

<div class="form-group">
    <label>Date of Birth:</label>
    <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_dob;?>
" name="student_dob" class="form-control">
</div>

<div class="form-group">
    <label>birth place:</label>
    <textarea name="birth_place" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->birth_place;?>
" class="form-control"></textarea>
</div>

<div class="form-group">
    <label>Mother Tongue:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->mother_tongue;?>
" name="mother_tongue" class="form-control">
</div>

<div class="form-group">
    <label>Student Address:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->studuent_address;?>
" name="studuent_address" class="form-control">
</div>

<div class="form-group">
    <label>City:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->city;?>
" name="city" class="form-control">
</div>

<div class="form-group">
    <label>Religion:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_religion;?>
" name="student_religion" class="form-control">
</div>

<div class="form-group">
    <label>Phone Number:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->phone;?>
" name="phone" class="form-control">
</div>

 <div class="form-group">
    <label>Mobile Number:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->mobile;?>
" name="mobile" class="form-control">
</div>

 <div class="form-group">
    <label>Email:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->email;?>
" name="email" class="form-control">
</div>

<div class="form-group">
    <label>Student Bloodgroup:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_bloodgroup;?>
" name="student_bloodgroup" class="form-control">
</div>

<div class="form-group">
    <label>Student Genotype</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_genotype;?>
" name="student_genotype" class="form-control">
</div>

<div class="form-group">
    <label>Image:</label>
    <input type="file" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_img;?>
" name="student_img" class="form-control">
</div>

<div class="form-group">
    <label>File no:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->file_no;?>
" name="file_no" class="form-control">
</div>

<div class="form-group">
    <label>Boarder:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->boarder;?>
" name="boarder" class="form-control">
</div>

<div class="form-group">
    <label>Admission Date:</label>
    <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->adm_date;?>
" name="adm_date" class="form-control">
</div>

 <div class="form-group">
    <label>Left Notes</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->left_notes;?>
" name="left_notes" class="form-control">
</div>

 <div class="form-group">
    <label>User Id</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->user_id;?>
" name="user_id" class="form-control">
</div>

<div class="form-group">
    <label>Student Commmonaliment</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_commmonaliment;?>
" name="student_commmonaliment" class="form-control">
</div>


  <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</div>
</form>
<?php }
}
?>