<?php /* Smarty version 3.1.27, created on 2017-02-07 23:27:07
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\parent\all.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30783589a49bbba8fe1_79651149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92729cc6d0b68403296ed8819200f63c6910fe05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\parent\\all.tpl',
      1 => 1486506065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30783589a49bbba8fe1_79651149',
  'variables' => 
  array (
    'parents' => 0,
    'pat' => 0,
    'states' => 0,
    'index' => 0,
    'title' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a49bbc9cbe2_47830990',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a49bbc9cbe2_47830990')) {
function content_589a49bbc9cbe2_47830990 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30783589a49bbba8fe1_79651149';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#Add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th> Surname </th>
                    <th> Phone Number </th>
                    <th> Email </th>
                    <th> Address </th>
                    <th> Action </th>

                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['parents']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pat']->value) {
$_smarty_tpl->tpl_vars['pat']->_loop = true;
$foreach_pat_Sav = $_smarty_tpl->tpl_vars['pat'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['pat']->value->first_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pat']->value->mid_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pat']->value->parent_fullname;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pat']->value->parent_phone;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pat']->value->parent_email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['pat']->value->parent_address;?>
</td>
                        <td>
                            <a href="<?php echo site_url("parents/edit".((string)$_smarty_tpl->tpl_vars['pat']->value->id));?>
" class="btn-form-modal btn btn-warning"
                               >Edit Department</a>
                            <a href="<?php echo site_url("staffs/delete/".((string)$_smarty_tpl->tpl_vars['pat']->value->id));?>
" class="btn btn-danger"
                              >Delete Department</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['pat'] = $foreach_pat_Sav;
}
?>
            </tbody>
        </table>
    </div>


    <div id="Add" class="tab-pane fade">
         <form method="POST">
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" name="first_name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="name">Middle Name:</label>
                <input type="text" name="mid_name" class="form-control" id="name">
            </div>
            <div class="form-group">
                  <label for="name">SurName:</label>
                  <input type="text" name="parent_fullname" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Father's Occupation:</label>
                    <input type="text" name="parent_fathersocc" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Address:</label>
                    <input type="text" name="parent_address" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Optional address:</label>
                    <input type="text" name="address2" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">City:</label>
                    <input type="text" name="city" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label>State:</label>
                <select name="state" class="form-control">
                    <option value="" class="form-control">Select</option>
                      <?php
$_from = $_smarty_tpl->tpl_vars['states']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['title']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
$foreach_title_Sav = $_smarty_tpl->tpl_vars['title'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
                     <?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>
                </select>
            </div>
            <div class="form-group">
                    <label for="name">Country:</label>
                    <input type="text" name="country" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name"> Father's Phone Number:</label>
                    <input type="text" name="parent_phone" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Father's Mobile Number:</label>
                    <input type="text" name="parent_phone2" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Father's Date of Birth:</label>
                    <input type="date" name="parent_fdob" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Parent Alias:</label>
                    <input type="text" name="parent_alias" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Mother's Occupation:</label>
                    <input type="text" name="parent_mothersocc" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Mother's Email:</label>
                    <input type="text" name="parent_motheremail" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Mother's Phone Number:</label>
                    <input type="text" name="parent_mothersphone" class="form-control" id="name">
            </div>
            <div class="form-group">
                    <label for="name">Mother's Date of Birth:</label>
                    <input type="date" name="parent_mdob" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label>User Id:</label>
                <select name="user_id" class="form-control">
                    <option value="" class="form-control">Select</option>
                      <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$foreach_user_Sav = $_smarty_tpl->tpl_vars['user'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</option>
                     <?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
        </form>
    </div>
</div>
<?php }
}
?>