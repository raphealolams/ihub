<?php /* Smarty version 3.1.27, created on 2016-12-22 02:23:00
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\files\views\admin\entity_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6816585bd3b454c115_30820283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c0e193d0265ba972948b64585c6bbf5b87d5156' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\files\\views\\admin\\entity_settings.tpl',
      1 => 1474552758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6816585bd3b454c115_30820283',
  'variables' => 
  array (
    'entities' => 0,
    'entity' => 0,
    'data' => 0,
    'input' => 0,
    'current_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585bd3b46651e2_18090596',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585bd3b46651e2_18090596')) {
function content_585bd3b46651e2_18090596 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6816585bd3b454c115_30820283';
?>

<?php
$_from = $_smarty_tpl->tpl_vars['entities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['entity'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['entity']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entity']->value) {
$_smarty_tpl->tpl_vars['entity']->_loop = true;
$foreach_entity_Sav = $_smarty_tpl->tpl_vars['entity'];
?>
    <?php $_smarty_tpl->tpl_vars['current_value'] = new Smarty_Variable(element($_smarty_tpl->tpl_vars['entity']->value->name,$_smarty_tpl->tpl_vars['data']->value), null, 0);?>
    <div class="form-group">
        <label class=""><?php echo $_smarty_tpl->tpl_vars['entity']->value->title;?>
</label>
        <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value->name;?>
[<?php echo $_smarty_tpl->tpl_vars['entity']->value->name;?>
]">
            <option value="local" <?php if ($_smarty_tpl->tpl_vars['current_value']->value == 'local') {?>selected=""<?php }?>>Local</option>
            <option value="amazons3" <?php if ($_smarty_tpl->tpl_vars['current_value']->value == 'amazons3') {?>selected=""<?php }?>>Amazon</option>
        </select>
    </div>
<?php
$_smarty_tpl->tpl_vars['entity'] = $foreach_entity_Sav;
}
}
}
?>