<?php /* Smarty version 3.1.27, created on 2017-02-08 22:39:01
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\edit_term.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8820589b8ff535b318_83488804%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'defff40ea041aa79fb622034282bf7681ef6a860' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\edit_term.tpl',
      1 => 1486589899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8820589b8ff535b318_83488804',
  'variables' => 
  array (
    'sessions' => 0,
    's' => 0,
    'term' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b8ff544ef21_90146862',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b8ff544ef21_90146862')) {
function content_589b8ff544ef21_90146862 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8820589b8ff535b318_83488804';
?>
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
"
                            <?php if ($_smarty_tpl->tpl_vars['s']->value->session_id == $_smarty_tpl->tpl_vars['term']->value->term_id) {?>  Selected=""<?php }?>
                            ><?php echo $_smarty_tpl->tpl_vars['s']->value->session_name;?>
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
			            name="term_name" value="<?php echo $_smarty_tpl->tpl_vars['term']->value->term_name;?>
" >
			    </div>

			    <div class="checkbox">
			        <label for="def" class=" control-label">
			          <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['term']->value->def) {?> checked="" <?php }?>
			            name="def">Is Current
			        </label>
					
			    </div>

			    <div class="form-group">
			        <label for="term_start" class=" control-label">
			         Term Start:   
			        </label>
						<input type="date" class="form-control" id = date name="term_start" value="<?php echo $_smarty_tpl->tpl_vars['term']->value->term_start;?>
">
			    </div>
			    <div class="form-group">
			        <label for="term_end" class=" control-label">
			          Term End:   
			        </label>
					<input type="date" class="form-control" id = date name="term_end" value="<?php echo $_smarty_tpl->tpl_vars['term']->value->term_end;?>
">
			    </div>
			    <div class="form-group">
					<button type="submit"  name="submit" value="submit" class="btn btn-primary" value="submit">
			            Submit</button>
	        	</div>
			</form><?php }
}
?>