<?php /* Smarty version 3.1.27, created on 2017-02-07 02:18:38
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\edit_bank.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:283975899206eed9cb6_70449068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adb551161dd3971409d5576c8420afe168d8f95d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\edit_bank.tpl',
      1 => 1486430217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283975899206eed9cb6_70449068',
  'variables' => 
  array (
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5899206f051170_73467804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5899206f051170_73467804')) {
function content_5899206f051170_73467804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '283975899206eed9cb6_70449068';
?>

		 <form method="POST">
				<div class="form-group">
						<label for="name">Bank Name:</label>
						<input type="text" name="bank_Name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_Name;?>
" id="bank_name">
				</div>
					<div class="form-group">
						<label for="bank_acc">Bank Account Number:</label>
						<input type="text" name="bank_Accno" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_Accno;?>
" id="bank_acc">
				</div>
				<div class="form-group">
						<label for="bank_accname">Account Name:</label>
						<input type="text" name="bank_Acc" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_Acc;?>
" id="bank_accname">
				</div>
				<input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
		</form>
<?php }
}
?>