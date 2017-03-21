<?php /* Smarty version 3.1.27, created on 2017-02-07 00:41:01
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\account\edit_bank.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:299985899098d62bcb9_85512245%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651a0415ce83590916e24047aa172e4a46cf7e04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\account\\edit_bank.tpl',
      1 => 1486424200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299985899098d62bcb9_85512245',
  'variables' => 
  array (
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5899098d6e29b0_98874664',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5899098d6e29b0_98874664')) {
function content_5899098d6e29b0_98874664 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '299985899098d62bcb9_85512245';
?>
<form>


             <div class="form-group">
                <label for="name">Bank Name:</label>
                <input type="text" name="bank_name" class="form-control" id="bank_name" value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_name;?>
">
            </div>
              <div class="form-group">
                <label for="bank_acc">Bank Account Number:</label>
                <input type="text" name="bank_acc" class="form-control" id="bank_acc"  value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_acc;?>
">
            </div>
            <div class="form-group">
                <label for="bank_dateadded">Date Added:</label>
                <input type="date" name="bank_dateadded" class="form-control" id="bank_dateadded"  value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_dateadded;?>
">

            </div>
            <div class="form-group">
                <label for="bank_accname">Account Name:</label>
                <input type="text" name="bank_accname" class="form-control" id="bank_accname"  value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_accname;?>
">
            </div>

            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
 </form>
<?php }
}
?>