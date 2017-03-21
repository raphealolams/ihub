<?php /* Smarty version 3.1.27, created on 2017-02-01 13:46:57
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\edit_arm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:124465891d8c1308379_67556434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8644ca9c3c3763f66d15d482a92268c70b96a8a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\edit_arm.tpl',
      1 => 1485953214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124465891d8c1308379_67556434',
  'variables' => 
  array (
    'arm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891d8c1380766_67138312',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891d8c1380766_67138312')) {
function content_5891d8c1380766_67138312 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '124465891d8c1308379_67556434';
?>
 
<form method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['arm']->value->name;?>
">
    </div>
    <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
</form><?php }
}
?>