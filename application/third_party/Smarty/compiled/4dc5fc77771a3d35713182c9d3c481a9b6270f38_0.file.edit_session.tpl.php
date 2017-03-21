<?php /* Smarty version 3.1.27, created on 2017-02-08 23:20:16
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\edit_session.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21409589b99a090bc61_69072093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dc5fc77771a3d35713182c9d3c481a9b6270f38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\edit_session.tpl',
      1 => 1486592414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21409589b99a090bc61_69072093',
  'variables' => 
  array (
    'school_session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b99a09b3c14_22177839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b99a09b3c14_22177839')) {
function content_589b99a09b3c14_22177839 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21409589b99a090bc61_69072093';
?>
 <form class="form-horizontal" role="form" method="POST">
    <div class="form-group">
        <label for="session_name" class="">
            Session Name:   
        </label>
            <input type="text" class="form-control" name="session_name" 
             value="<?php echo $_smarty_tpl->tpl_vars['school_session']->value->session_name;?>
"
            placeholder="Enter Session Name">
        </div>
    </div>

        <div class="checkbox">
        <label for="is_current" class="">
            <input type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['school_session']->value->is_current) {?> checked="" <?php }?>
            name="is_current">Is Current
        </label>
        
    </div>
    <div class="form-group">
            <button type="submit" name="submit" value="submit" class="btn btn-primary">
            Submit</button>
    </div>
    
</form><?php }
}
?>