<?php /* Smarty version 3.1.27, created on 2017-01-25 18:25:58
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:33985888dfa6a20128_82893659%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f1fd63c0d285765186a22e2c9c11594124c5fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\login.tpl',
      1 => 1485365030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33985888dfa6a20128_82893659',
  'variables' => 
  array (
    'id' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5888dfa6a86ea2_09933279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5888dfa6a86ea2_09933279')) {
function content_5888dfa6a86ea2_09933279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33985888dfa6a20128_82893659';
?>
<h2>Using Smarty Template Tag</h2>

<a href="/user/view/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">User</a>
<a href="/user/view/<?php echo '<?php ';?>echo $id <?php echo '?>';?>">User</a>
<a href="/user/view/<?php echo '<? ';?>id <?php echo '?>';?>">User</a>

<table class="table table-responsive">
    <thead>
    <th>Name</th>
    <th>Age</th>
    </thead>
    <tbody>
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
           <tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
</td></tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>
    </tbody>
</table>
<?php }
}
?>