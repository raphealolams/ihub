<?php /* Smarty version 3.1.27, created on 2017-02-06 20:49:21
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\expenses\edit_expenses.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:156815898d341bff9c3_27576190%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e21de268f02881d45afb22a657a7f50d08360a0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\expenses\\edit_expenses.tpl',
      1 => 1486410535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156815898d341bff9c3_27576190',
  'variables' => 
  array (
    'expense' => 0,
    'expense_types' => 0,
    'ex_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5898d341c9bdd7_05321627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5898d341c9bdd7_05321627')) {
function content_5898d341c9bdd7_05321627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '156815898d341bff9c3_27576190';
?>

<form method="POST">
            <div class="form-group">
                <label for="name">Reasons:</label>
                <input type="text" name="expenses_reason" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['expense']->value->expenses_reason;?>
" id="manageexpenses_reason">
            </div>
              <div class="form-group">
                <label for="expenses_amount">Amount:</label>
                <input type="text" name="expenses_amount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['expense']->value->expenses_amount;?>
" id="manageexpenses_amount">
            </div>
            <div>
            <label>Select Expenses Type</label>
                <select name="expensestype_id">
                    <option>select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['expense_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ex_type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ex_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ex_type']->value) {
$_smarty_tpl->tpl_vars['ex_type']->_loop = true;
$foreach_ex_type_Sav = $_smarty_tpl->tpl_vars['ex_type'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ex_type']->value->expensestype_id;?>
"
                                <?php if ($_smarty_tpl->tpl_vars['ex_type']->value->expensestype_id == $_smarty_tpl->tpl_vars['expense']->value->expensestype_id) {?>
                                    selected=""
                                <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['ex_type']->value->expensestype_name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['ex_type'] = $foreach_ex_type_Sav;
}
?>
                </select>
            </div>
             <div class="form-group">
                <label for="expenses_datetime">Date:</label>
                <input type="date" name="expenses_datetime"  value="<?php echo $_smarty_tpl->tpl_vars['expense']->value->expenses_datetime;?>
" class="form-control" id="expenses_datetime">
            </div>
            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
<?php }
}
?>