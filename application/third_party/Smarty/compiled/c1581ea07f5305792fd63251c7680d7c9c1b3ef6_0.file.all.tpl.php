<?php /* Smarty version 3.1.27, created on 2017-02-06 22:40:19
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\classes\all.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:73455898ed439fe418_27382200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1581ea07f5305792fd63251c7680d7c9c1b3ef6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\classes\\all.tpl',
      1 => 1486414121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73455898ed439fe418_27382200',
  'variables' => 
  array (
    'classes' => 0,
    'class' => 0,
    'school_arms' => 0,
    'arm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5898ed43ab5112_39580636',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5898ed43ab5112_39580636')) {
function content_5898ed43ab5112_39580636 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '73455898ed439fe418_27382200';
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
                    <th>School Arm</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$foreach_class_Sav = $_smarty_tpl->tpl_vars['class'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['class']->value->name;?>
 </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['class']->value->getArmName();?>
</td>
                         <td>
                            <a href="<?php echo site_url("school/edit_class/".((string)$_smarty_tpl->tpl_vars['class']->value->id));?>
"class="btn-form-modal btn btn-warning"
                               >Edit</a>
                            <a href="<?php echo site_url("school/delete_class/".((string)$_smarty_tpl->tpl_vars['class']->value->id));?>
"class="btn-form-modal btn btn-danger"
                               >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['class'] = $foreach_class_Sav;
}
?>
            </tbody>
         </table>
    </div>
    <div id="add" class="tab-pane fade">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
               <label for="name">School Arm</label>
                <select name="SCHOOLARM_ID">
                    <option>Select</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['school_arms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['arm'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['arm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arm']->value) {
$_smarty_tpl->tpl_vars['arm']->_loop = true;
$foreach_arm_Sav = $_smarty_tpl->tpl_vars['arm'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['arm']->value->schoolarm_id;?>
"><?php echo $_smarty_tpl->tpl_vars['arm']->value->name;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['arm'] = $foreach_arm_Sav;
}
?>
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
        </form>
    </div>

</div>
<?php }
}
?>