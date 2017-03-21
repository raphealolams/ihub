<?php /* Smarty version 3.1.27, created on 2017-02-08 03:03:21
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\account\payment_modes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3981589a7c694c7101_25821101%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bbe4f0fbc34a589ea66e15353b37fc33dc006c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\account\\payment_modes.tpl',
      1 => 1486519399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3981589a7c694c7101_25821101',
  'variables' => 
  array (
    'payment_modes' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a7c69573b89_08622468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a7c69573b89_08622468')) {
function content_589a7c69573b89_08622468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3981589a7c694c7101_25821101';
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
                    <th>Name</th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
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
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['mode']->value->paymentmode_name;?>
</td>
                        <td>
                            <a href="<?php echo site_url("account/edit_payment_mode/".((string)$_smarty_tpl->tpl_vars['mode']->value->paymentmode_id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit</a>
                            <a href="<?php echo site_url("account/delete_payment_mode/".((string)$_smarty_tpl->tpl_vars['mode']->value->paymentmode_id));?>
" class=" btn btn-danger"
                              >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['mode'] = $foreach_mode_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="paymentmode_name" class="form-control" id="paymentmode_name">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>