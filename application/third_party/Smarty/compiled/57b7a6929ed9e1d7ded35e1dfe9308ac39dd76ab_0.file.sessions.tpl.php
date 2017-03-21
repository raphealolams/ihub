<?php /* Smarty version 3.1.27, created on 2017-02-08 23:14:56
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\sessions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14330589b98602d9526_60647692%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b7a6929ed9e1d7ded35e1dfe9308ac39dd76ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\sessions.tpl',
      1 => 1486559678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14330589b98602d9526_60647692',
  'variables' => 
  array (
    'sessions' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b9860402366_80588249',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b9860402366_80588249')) {
function content_589b9860402366_80588249 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14330589b98602d9526_60647692';
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
                    <th>Is Current</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
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
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['session']->value->session_name;?>
  
                        </td>
                        <td><?php if ($_smarty_tpl->tpl_vars['session']->value->is_current) {?>yes<?php } else { ?>no<?php }?> </td>
                        <td>
                            <a href="<?php echo site_url("school/edit_session/".((string)$_smarty_tpl->tpl_vars['session']->value->session_id));?>
"
                             class="btn btn-primary btn-form-modal"
                            >Edit</a>
                            <a href="<?php echo site_url("school/delete_session/".((string)$_smarty_tpl->tpl_vars['session']->value->session_id));?>
"
                               class="btn btn-danger"
                            >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['session'] = $foreach_session_Sav;
}
?>
            </tbody>
        </table>
    </div>

    <div id="add" class="tab-pane fade">
        <div class="col-xs-12 col-sm-9">
            <form class="form-horizontal" role="form" method="POST">
            
                <div class="form-group">
                    <label for="session_name" class="2 control-label">
                     Session Name:   
                    </label>
                    <input type="text" class="form-control" name="session_name" placeholder="Enter Session Name">
                </div>

                 <div class="checkbox">
			        <label for="is_current" class=" control-label">
			          <input type="checkbox"
			            name="is_current">Is Current
			        </label>
					
			    </div>
                <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">
                        Submit</button>
                </div>
                
            </form>
        </div>
    </div>

</div>
<?php }
}
?>