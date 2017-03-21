<?php /* Smarty version 3.1.27, created on 2017-02-08 03:06:00
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\account\edit_payment_mode.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7751589a7d08874763_07481617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b18f7550a50bf88bbd2d5e1b958aaebdb872b74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\account\\edit_payment_mode.tpl',
      1 => 1486519556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7751589a7d08874763_07481617',
  'variables' => 
  array (
    'payment_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a7d08901de5_67245240',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a7d08901de5_67245240')) {
function content_589a7d08901de5_67245240 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7751589a7d08874763_07481617';
?>
 <form method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="paymentmode_name" class="form-control"
             value="<?php echo $_smarty_tpl->tpl_vars['payment_mode']->value->paymentmode_name;?>
" id="paymentmode_name">
        </div>
        <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
    </form><?php }
}
?>