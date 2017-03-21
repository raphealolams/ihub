<?php /* Smarty version 3.1.27, created on 2017-01-23 06:22:23
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\salaries\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:698958863bcf529732_68922359%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89075cda3fade148f6297e9ae962b87d88870e1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\salaries\\views\\index.tpl',
      1 => 1485192140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698958863bcf529732_68922359',
  'variables' => 
  array (
    'employees' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58863bcf5a8e61_80319588',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58863bcf5a8e61_80319588')) {
function content_58863bcf5a8e61_80319588 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '698958863bcf529732_68922359';
?>
<h1>All Employees </h1>

<table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        
        <?php ob_start();
$_from = $_smarty_tpl->tpl_vars['employees']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['e']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
$foreach_e_Sav = $_smarty_tpl->tpl_vars['e'];
$_tmp1=ob_get_clean();
echo $_tmp1;?>

            <tr>
                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['e']->value->name;
$_tmp2=ob_get_clean();
echo $_tmp2;?>
</td>
                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['e']->value->age;
$_tmp3=ob_get_clean();
echo $_tmp3;?>
</td>
                <td>
                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['e']->value->id;
$_tmp4=ob_get_clean();
ob_start();
echo $_tmp4;
$_tmp5=ob_get_clean();
echo site_url("salaries/view/".$_tmp5);?>
"
                       class="btn btn-success"
                       >View</a>
                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['e']->value->id;
$_tmp6=ob_get_clean();
ob_start();
echo $_tmp6;
$_tmp7=ob_get_clean();
echo site_url("salaries/edit/".$_tmp7);?>
"
                       class="btn btn-primary"
                       >Edit</a>
                       
                   
                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['e']->value->id;
$_tmp8=ob_get_clean();
ob_start();
echo $_tmp8;
$_tmp9=ob_get_clean();
echo site_url("salaries/delete/".$_tmp9);?>
"
                       class="btn btn-danger"
                       >Delete</a>
                       
                   
                </td>
            </tr>
        <?php ob_start();
$_smarty_tpl->tpl_vars['e'] = $foreach_e_Sav;
}
$_tmp10=ob_get_clean();
echo $_tmp10;?>

    </tbody>
</table>
<?php }
}
?>