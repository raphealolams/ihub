<?php /* Smarty version 3.1.27, created on 2017-02-07 02:02:43
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\account\manage_banks.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:40658991cb3aa7d64_47502738%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827d7d13b87a701fedbcbee34d43be0650e8f365' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\account\\manage_banks.tpl',
      1 => 1486425883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40658991cb3aa7d64_47502738',
  'variables' => 
  array (
    'banks' => 0,
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58991cb3ba9aa8_04395773',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58991cb3ba9aa8_04395773')) {
function content_58991cb3ba9aa8_04395773 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '40658991cb3aa7d64_47502738';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#edit">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Bank Name</th>
                    <th>Bank Account Number</th>
                    <th> Bank Account Name
                    <th> Bank date added</th>
                    <th> Action </th>

                </tr>
            </thead>
            <tbody>
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
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_acc;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_accname;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_dateadded;?>
</td>

                        <td>
                            <a href="<?php echo site_url("account/edit_bank/".((string)$_smarty_tpl->tpl_vars['bank']->value->bank_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit Bank</a>
                            <a href="<?php echo site_url("account/delete_bank/".((string)$_smarty_tpl->tpl_vars['bank']->value->bank_id));?>
" class=" btn btn-danger"
                              >Delete Bank</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['bank'] = $foreach_bank_Sav;
}
?>
            </tbody>
        </table>
    </div>


    <div id="edit" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">Bank Name:</label>
                <input type="text" name="bank_name" class="form-control" id="bank_name">
            </div>
              <div class="form-group">
                <label for="bank_acc">Bank Account Number:</label>
                <input type="text" name="bank_acc" class="form-control" id="bank_acc">
            </div>
            <div class="form-group">
                <label for="bank_dateadded">Date Added:</label>
                <input type="date" name="bank_dateadded" class="form-control" id="bank_dateadded">

            </div>
            <div class="form-group">
                <label for="bank_accname">Account Name:</label>
                <input type="text" name="bank_accname" class="form-control" id="bank_accname">
            </div>

            <div class="form-group">
                <label for="user_id">user id:</label>
                <input type="text" name="user_id" class="form-control" id="user_id">
            </div>

            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>