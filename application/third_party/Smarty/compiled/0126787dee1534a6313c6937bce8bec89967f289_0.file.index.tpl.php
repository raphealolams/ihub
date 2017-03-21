<?php /* Smarty version 3.1.27, created on 2017-02-09 01:04:03
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\settings\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12903589bb1f3559994_51747718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0126787dee1534a6313c6937bce8bec89967f289' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\settings\\index.tpl',
      1 => 1486598641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12903589bb1f3559994_51747718',
  'variables' => 
  array (
    'CI' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589bb1f3628a40_54651839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589bb1f3628a40_54651839')) {
function content_589bb1f3628a40_54651839 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12903589bb1f3559994_51747718';
echo form_open_multipart();?>

   <div class="form-group">
       <label for="School_name">School Name:</label>
       <input type="text" name="school_name" class="form-control" 
       value="<?php echo $_smarty_tpl->tpl_vars['CI']->value->setup->getOption('school_name');?>
">
   </div>
     <div class="form-group">
       <label for="school_address">School Address:</label>
       <textarea name="school_address" class="form-control"><?php echo $_smarty_tpl->tpl_vars['CI']->value->setup->getOption('school_address');?>
</textarea>
   </div>
   <div class="form-group">
     <label for="school_email">School Email:</label>
     <input type="text" name="school_email" class="form-control">
 </div>
 <div class="form-group">
   <label for="school_motto">School Motto:</label>
   <input type="text" name="school_motto" class="form-control">
</div>
<div class="form-group">
  <label for="phone_number">Phone Number:</label>
  <input type="text" name="phone_number"  class="form-control">
</div>
<div class="form-group">
  <label for="school_website">School Website:</label>
  <input type="text" name="school_website" class="form-control">
</div>
<div class="form-group">
  <label for="school_logo">School Logo:</label>
  <input type="file" name="school_logo" class="form-control">
   <div class="">
        <img src="<?php echo option_get_logo();?>
"  alt="Metis Logo">
    </div>
</div>

   <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</form>
<?php }
}
?>