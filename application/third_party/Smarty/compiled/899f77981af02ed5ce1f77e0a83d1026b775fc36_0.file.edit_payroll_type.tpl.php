<?php /* Smarty version 3.1.27, created on 2017-02-09 02:16:57
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\payroll\edit_payroll_type.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1229589bc309132fa6_96685294%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899f77981af02ed5ce1f77e0a83d1026b775fc36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\payroll\\edit_payroll_type.tpl',
      1 => 1486603008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229589bc309132fa6_96685294',
  'variables' => 
  array (
    'payroll_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589bc3091cf3a8_61499532',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589bc3091cf3a8_61499532')) {
function content_589bc3091cf3a8_61499532 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1229589bc309132fa6_96685294';
?>
<form method="post">
  <div class="container col-md-12">

  <div class="form-group ">
    <label>Payroll Type Name:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['payroll_type']->value->payrolltype_name;?>
" name="payrolltype_name"  class="form-control">
  </div>

  <div class="form-group">
    <label>Payroll Type Status:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['payroll_type']->value->payrolltype_status;?>
" name="payrolltype_status" class="form-control">
  </div>

  <div class="form-group">
    <label>Description:</label>
    <textarea type="text" value="<?php echo $_smarty_tpl->tpl_vars['payroll_type']->value->payrolltype_descr;?>
" name="payrolltype_descr"  class="form-control"> </textarea>
  </div>

  <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</div>
</form>
<?php }
}
?>