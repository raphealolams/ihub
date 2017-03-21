<?php /* Smarty version 3.1.27, created on 2017-02-08 23:12:16
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\terms.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26200589b97c0bb4eb1_80013888%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b86de78c15003b92296755b8f9c1dd140c06d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\terms.tpl',
      1 => 1486591934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26200589b97c0bb4eb1_80013888',
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
    'sessions' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b97c0ce1b76_15582599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b97c0ce1b76_15582599')) {
function content_589b97c0ce1b76_15582599 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26200589b97c0bb4eb1_80013888';
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
					<th>Session</th>
					<th>Start</th>
					<th>End</th>
					<th>Current </th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
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
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['term']->value->term_name;?>
 </td>
						<td><?php echo $_smarty_tpl->tpl_vars['term']->value->getSesonName();?>
 </td>
						<td><?php echo $_smarty_tpl->tpl_vars['term']->value->term_start;?>
 </td>
						<td><?php echo $_smarty_tpl->tpl_vars['term']->value->term_end;?>
 </td>
						<td><?php if ($_smarty_tpl->tpl_vars['term']->value->is_current) {?>yes<?php } else { ?>no<?php }?> </td>
						
                        <td>
                            <a href="<?php echo site_url("school/edit_term/".((string)$_smarty_tpl->tpl_vars['term']->value->term_id));?>
"
                               class="btn-form-modal btn btn-warning"
                               data-url="<?php echo site_url("school/delete_term/".((string)$_smarty_tpl->tpl_vars['term']->value->term_id));?>
"

                               >Edit</a>
                            <a href="<?php echo site_url("school/delete_arm/".((string)$_smarty_tpl->tpl_vars['term']->value->term_id));?>
"
                               class="btn btn-danger"
                               >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['term'] = $foreach_term_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
	<div class="col-md-6">
        <form class="" role="form" method="POST">
                <div class="form-group">
                    <select name="session_id" class="form-control">
                        <option value="" class="form-control">Select</option>
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
"><?php echo $_smarty_tpl->tpl_vars['s']->value->session_name;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
                    </select>
                </div>
			    <div class="form-group">
			        <label for="term_name" class=" control-label">
			         Term Name:   
			        </label>
			            <input type="text" class="form-control" 
			            name="term_name" placeholder="Enter Term Name">
			    </div>

			    <div class="checkbox">
			        <label for="is_current" class=" control-label">
			          <input type="checkbox"
			            name="is_current">Is Current
			        </label>
					
			    </div>

			    <div class="form-group">
			        <label for="term_start" class=" control-label">
			         Term Start:   
			        </label>
						<input type="date" class="form-control" id = date name="term_start">
			    </div>
			    <div class="form-group">
			        <label for="term_end" class=" control-label">
			          Term End:   
			        </label>
					<input type="date" class="form-control" id = date name="term_end">
			    </div>
			    <div class="form-group">
					<button type="submit"  name="submit" value="submit" class="btn btn-primary">
			            Submit</button>
	        	</div>
			</form>
		</div>
    </div>
</div>
<?php }
}
?>