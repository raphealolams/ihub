<?php /* Smarty version 3.1.27, created on 2017-02-08 23:00:21
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\index\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5931589b94f5651182_02594485%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e193a95d5869314b4d64da3eea34715e84ce09a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\index\\index.tpl',
      1 => 1486591207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5931589b94f5651182_02594485',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b94f56b5180_62179297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b94f56b5180_62179297')) {
function content_589b94f56b5180_62179297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5931589b94f5651182_02594485';
?>
<form method="POST">
   <div class="form-group">
       <label for="School_name">School Name:</label>
       <input type="text" name="school_name" class="form-control">
   </div>
     <div class="form-group">
       <label for="school_address">School Address:</label>
       <input type="text" name="school_address" class="form-control">
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
</div>

   <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</form>
<?php }
}
?>