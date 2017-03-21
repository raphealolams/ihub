<?php /* Smarty version 3.1.27, created on 2016-11-02 05:33:15
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\widgets\admin\total_users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30301581a154bb78f28_69770590%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ec3892323817cb30abf1f3067a24faa9b74a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\widgets\\admin\\total_users.tpl',
      1 => 1474552770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30301581a154bb78f28_69770590',
  'variables' => 
  array (
    'total_users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a154bb966c6_99464133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a154bb966c6_99464133')) {
function content_581a154bb966c6_99464133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30301581a154bb78f28_69770590';
?>

    <div class="blue">    
        <i class="glyphicon glyphicon-thumbs-up fa-3x"></i>
        <h3><?php echo $_smarty_tpl->tpl_vars['total_users']->value;?>
 </h3>
    </div>
    
    

<?php }
}
?>