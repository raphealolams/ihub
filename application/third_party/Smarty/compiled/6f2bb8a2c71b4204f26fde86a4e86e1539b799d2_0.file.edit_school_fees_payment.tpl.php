<?php /* Smarty version 3.1.27, created on 2017-02-08 23:42:03
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\account\edit_school_fees_payment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28200589b9ebb91e395_91057183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f2bb8a2c71b4204f26fde86a4e86e1539b799d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\account\\edit_school_fees_payment.tpl',
      1 => 1486593715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28200589b9ebb91e395_91057183',
  'variables' => 
  array (
    'students' => 0,
    'student' => 0,
    'payment' => 0,
    'sessions' => 0,
    's' => 0,
    'terms' => 0,
    'term' => 0,
    'payment_modes' => 0,
    'mode' => 0,
    'banks' => 0,
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b9ebba93aa0_21263166',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b9ebba93aa0_21263166')) {
function content_589b9ebba93aa0_21263166 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28200589b9ebb91e395_91057183';
?>


<form method="POST">

            <div>
            <label>Student's ID</label>
                <select name="student_id">
                    <option>Select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['students']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['student']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
$foreach_student_Sav = $_smarty_tpl->tpl_vars['student'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['student']->value->student_id;?>
"
                        <?php if ($_smarty_tpl->tpl_vars['student']->value->student_id == $_smarty_tpl->tpl_vars['payment']->value->student_id) {?> selected="" <?php }?>
                        ><?php echo $_smarty_tpl->tpl_vars['student']->value->getName();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['student'] = $foreach_student_Sav;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="schoolfeespayment_datetime">Date:</label>
                <input type="date" name="schoolfeespayment_datetime" class="form-control" 
                id="schoolfeespayment_datetime"  value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->schoolfeespayment_datetime;?>
">
            </div>

            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" class="form-control" id="schoolfeespayment_amount"
                  value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->amount;?>
">
            </div>

            <div>
            <label>Session ID</label>
                <select name="session_id">
                    <option>Select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['sessions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->session_id;?>
"
                           <?php if ($_smarty_tpl->tpl_vars['s']->value->session_id == $_smarty_tpl->tpl_vars['payment']->value->session_id) {?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value->session_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
                </select>
            </div>

            <div>
            <label>Term ID</label>
                <select name="term_id">
                    <option>Select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['terms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['term'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['term']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->_loop = true;
$foreach_term_Sav = $_smarty_tpl->tpl_vars['term'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['term']->value->term_id;?>
"
                        <?php if ($_smarty_tpl->tpl_vars['term']->value->term_id == $_smarty_tpl->tpl_vars['payment']->value->term_id) {?> selected="" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['term']->value->term_id;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['term'] = $foreach_term_Sav;
}
?>
                </select>
            </div>

            <div>
            <label>Payment Mode ID</label>
                <select name="paymentmode_id">
                    <option>Select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['payment_modes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mode'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mode']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mode']->value) {
$_smarty_tpl->tpl_vars['mode']->_loop = true;
$foreach_mode_Sav = $_smarty_tpl->tpl_vars['mode'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['mode']->value->paymentmode_id;?>
"
                        <?php if ($_smarty_tpl->tpl_vars['payment']->value->paymentmode_id == $_smarty_tpl->tpl_vars['mode']->value->paymentmode_id) {?> selected="" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['mode']->value->paymentmode_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['mode'] = $foreach_mode_Sav;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="tellerno">Teller Number:</label>
                <input type="text" name="tellerno" class="form-control" id="schoolfeespayment_tellerno"
                value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->tellerno;?>
">
            </div>

            <div class="form-group">
                <label for="tellername">Teller Name:</label>
                <input type="text" name="tellername" class="form-control" id="schoolfeespayment_tellername"
                value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->tellername;?>
">
            </div>
            

            <div>
            <label>Bank ID</label>
                <select name="bank_id">
                    <option>Select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['banks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['bank'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['bank']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->_loop = true;
$foreach_bank_Sav = $_smarty_tpl->tpl_vars['bank'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_id;?>
" 
                          <?php if ($_smarty_tpl->tpl_vars['bank']->value->bank_id == $_smarty_tpl->tpl_vars['payment']->value->bank_id) {?> selected="" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['bank'] = $foreach_bank_Sav;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="schoolfeespayment_collectedby">Collected BY:</label>
                <input type="text" name="schoolfeespayment_collectedby" class="form-control" id="schoolfeespayment_collectedby"
                value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->schoolfeespayment_collectedby;?>
">
            </div>

            <div class="form-group">
                <label for="note">Note:</label>
                <textarea cols="50" rows="5" name="note" class="form-control" id="schoolfeespayment_note"
                value="<?php echo $_smarty_tpl->tpl_vars['payment']->value->note;?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value->note;?>
</textarea>
            </div>


            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />

</form><?php }
}
?>