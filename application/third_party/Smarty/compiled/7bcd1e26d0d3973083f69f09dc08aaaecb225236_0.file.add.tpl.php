<?php /* Smarty version 3.1.27, created on 2017-01-31 14:59:15
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\classes\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:849758909833b565d6_09286631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bcd1e26d0d3973083f69f09dc08aaaecb225236' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\classes\\add.tpl',
      1 => 1485870109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849758909833b565d6_09286631',
  'variables' => 
  array (
    'classes' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58909833d228f1_05769029',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58909833d228f1_05769029')) {
function content_58909833d228f1_05769029 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '849758909833b565d6_09286631';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
        <h3>HOME</h3>
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
            <?php echo $_smarty_tpl->tpl_vars['class']->value->name;?>

        <?php
$_smarty_tpl->tpl_vars['class'] = $foreach_class_Sav;
}
?>
    </div>
    <div id="add" class="tab-pane fade">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
               
            </div>
           
            <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
        </form>
    </div>

</div><?php }
}
?>