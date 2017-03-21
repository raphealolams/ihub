<?php /* Smarty version 3.1.27, created on 2017-02-07 01:41:46
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\staff\view_staff.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25065589917caae7a10_93474337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911cfd97a554b11fb7a499b7b8f1df9f7667dd4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\staff\\view_staff.tpl',
      1 => 1486428045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25065589917caae7a10_93474337',
  'variables' => 
  array (
    'staff' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589917cab7a1e6_20969830',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589917cab7a1e6_20969830')) {
function content_589917cab7a1e6_20969830 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25065589917caae7a10_93474337';
?>
<table>
    <tbody>
      <tr>
        <td>First Name </td>
        <td><?php echo $_smarty_tpl->tpl_vars['staff']->value->fname;?>
 </td>
      </tr>
        <tr>
        <td>Last Name </td>
        <td><?php echo $_smarty_tpl->tpl_vars['staff']->value->sname;?>
 </td>
      </tr>
    </tbody>
</table><?php }
}
?>