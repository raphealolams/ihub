<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\search\views\widgets\search_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1292958179f982d4736_35335608%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31e82d34812109b621a3960be251abbf7e5b49b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\search\\views\\widgets\\search_form.tpl',
      1 => 1474552767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1292958179f982d4736_35335608',
  'variables' => 
  array (
    'url' => 0,
    'q' => 0,
    'button_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179f982f13c4_10441918',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179f982f13c4_10441918')) {
function content_58179f982f13c4_10441918 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1292958179f982d4736_35335608';
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="get" role="form" class="">
    <div class="input-group">
        <input type="text"  name="q" value="<?php echo $_smarty_tpl->tpl_vars['q']->value;?>
" placeholder="search..." class="form-control">
        <span class='input-group-btn'>
            <button class='btn btn-default' type='submit'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['button_text']->value)===null||$tmp==='' ? "GO" : $tmp);?>
</button>
        </span>
    </div>
</form><?php }
}
?>