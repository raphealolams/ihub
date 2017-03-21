<?php /* Smarty version 3.1.27, created on 2017-02-07 02:17:24
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\banks.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32184589920247b8e20_65443940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8148487ec461e5ea97a643f5a93159f6e1685fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\banks.tpl',
      1 => 1486430242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32184589920247b8e20_65443940',
  'variables' => 
  array (
    'banks' => 0,
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589920248aca25_91171914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589920248aca25_91171914')) {
function content_589920248aca25_91171914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32184589920247b8e20_65443940';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New Staff Bank</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Bank Name</th>
                    <th>Bank Account Number</th>
                    <th>Bank Account Name</th>
                    <th>Date Edited </th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_Name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_Acc;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->bank_Accno;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bank']->value->edit_time;?>
</td>
                        <td>
                            <a href="<?php echo site_url("staffs/edit_bank/".((string)$_smarty_tpl->tpl_vars['bank']->value->staffbank_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit bank</a>
                            <a href="<?php echo site_url("staffs/delete_bank/".((string)$_smarty_tpl->tpl_vars['bank']->value->staffbank_id));?>
" class=" btn btn-danger"
                              >Delete bank</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['bank'] = $foreach_bank_Sav;
}
?>
            </tbody>
        </table>
    </div>


    <div id="add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">Bank Name:</label>
                <input type="text" name="bank_Name" class="form-control" id="bank_name">
            </div>
              <div class="form-group">
                <label for="bank_acc">Bank Account Number:</label>
                <input type="text" name="bank_Accno" class="form-control" id="bank_acc">
            </div>
            <div class="form-group">
                <label for="bank_accname">Account Name:</label>
                <input type="text" name="bank_Acc" class="form-control" id="bank_accname">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>