<?php /* Smarty version 3.1.27, created on 2017-02-09 00:04:09
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\account\school_fees_payment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29644589ba3e9403859_99137480%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1925ed7de0147a06b7e271e5532cacaff541e7cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\account\\school_fees_payment.tpl',
      1 => 1486595046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29644589ba3e9403859_99137480',
  'variables' => 
  array (
    'school_fees_payment' => 0,
    'acc' => 0,
    'students' => 0,
    'student' => 0,
    'sessions' => 0,
    'session' => 0,
    'terms' => 0,
    'term' => 0,
    'payment_modes' => 0,
    'mode' => 0,
    'banks' => 0,
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589ba3e9583210_72914629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589ba3e9583210_72914629')) {
function content_589ba3e9583210_72914629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29644589ba3e9403859_99137480';
?>


<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Student's ID</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Session ID</th>
                    <th>Term ID</th>
                    <th>Payment Mode ID</th>
                    <th>Teller No</th>
                    <th>Teller Name</th>
                    <th>Bank ID</th>
                    <th>Collected By</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['school_fees_payment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['acc'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['acc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['acc']->value) {
$_smarty_tpl->tpl_vars['acc']->_loop = true;
$foreach_acc_Sav = $_smarty_tpl->tpl_vars['acc'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->getStudentName();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->schoolfeespayment_datetime;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->amount;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->session_id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->term_id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->paymentmode_id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->tellerno;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->tellername;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->getBankName();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->schoolfeespayment_collectedby;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['acc']->value->note;?>
</td>
                        <td>
                            <a href="<?php echo site_url("account/edit_school_fees_payment/".((string)$_smarty_tpl->tpl_vars['acc']->value->schoolfeespayment_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit</a>
                            <a href="<?php echo site_url("account/delete_school_fees_payment/".((string)$_smarty_tpl->tpl_vars['acc']->value->schoolfeespayment_id));?>
" class=" btn btn-danger"
                              >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['acc'] = $foreach_acc_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
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
"><?php echo $_smarty_tpl->tpl_vars['student']->value->getName();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['student'] = $foreach_student_Sav;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="schoolfeespayment_datetime">Date:</label>
                <input type="date" name="schoolfeespayment_datetime" class="form-control" id="schoolfeespayment_datetime">
            </div>

            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" name="amount" class="form-control" id="schoolfeespayment_amount">
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
$_smarty_tpl->tpl_vars['session'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['session']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->_loop = true;
$foreach_session_Sav = $_smarty_tpl->tpl_vars['session'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['session']->value->session_id;?>
"><?php echo $_smarty_tpl->tpl_vars['session']->value->session_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['session'] = $foreach_session_Sav;
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
"><?php echo $_smarty_tpl->tpl_vars['term']->value->term_id;?>
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
"><?php echo $_smarty_tpl->tpl_vars['mode']->value->paymentmode_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['mode'] = $foreach_mode_Sav;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="tellerno">Teller Number:</label>
                <input type="text" name="tellerno" class="form-control" id="schoolfeespayment_tellerno">
            </div>

            <div class="form-group">
                <label for="tellername">Teller Name:</label>
                <input type="text" name="tellername" class="form-control" id="schoolfeespayment_tellername">
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
"><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['bank'] = $foreach_bank_Sav;
}
?>
                </select>
            </div>

            <div class="form-group">
                <label for="schoolfeespayment_collectedby">Collected BY:</label>
                <input type="text" name="schoolfeespayment_collectedby" class="form-control" id="schoolfeespayment_collectedby">
            </div>

            <div class="form-group">
                <label for="note">Note:</label>
                <textarea cols="50" rows="5" name="note" class="form-control" id="schoolfeespayment_note"></textarea>
            </div>


            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>