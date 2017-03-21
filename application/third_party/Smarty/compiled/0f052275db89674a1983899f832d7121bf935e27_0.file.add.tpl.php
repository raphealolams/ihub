<?php /* Smarty version 3.1.27, created on 2017-01-23 07:11:28
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\salaries\views\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1676258864750348622_22387285%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f052275db89674a1983899f832d7121bf935e27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\salaries\\views\\add.tpl',
      1 => 1485195019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1676258864750348622_22387285',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5886475039b697_76232775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5886475039b697_76232775')) {
function content_5886475039b697_76232775 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1676258864750348622_22387285';
?>
<h1>Add Employees</h1>
<div class="col-md-12">

    <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        
        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>


</div><?php }
}
?>