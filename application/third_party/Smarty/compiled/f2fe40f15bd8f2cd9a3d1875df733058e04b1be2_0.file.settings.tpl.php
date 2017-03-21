<?php /* Smarty version 3.1.27, created on 2017-01-14 05:06:34
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\tags\views\admin\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25576587a4c8ac7fd89_45062015%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2fe40f15bd8f2cd9a3d1875df733058e04b1be2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\tags\\views\\admin\\settings.tpl',
      1 => 1474552768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25576587a4c8ac7fd89_45062015',
  'variables' => 
  array (
    'success' => 0,
    'entities' => 0,
    'entity' => 0,
    'entity_config_obj' => 0,
    'form' => 0,
    'current_entity' => 0,
    'count' => 0,
    'multitab' => 0,
    'form_name' => 0,
    'fields_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587a4c8ad545c9_52368526',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587a4c8ad545c9_52368526')) {
function content_587a4c8ad545c9_52368526 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '25576587a4c8ac7fd89_45062015';
?>

<?php echo smarty_function_action_title(array('title'=>'Tags Settings'),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['multitab'] = new Smarty_Variable('', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['success']->value) {
echo nyra_alert(lang('alert_update_success'),'success');?>
 <?php }?>
<ul class="nav nav-tabs">
     <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(1, null, 0);?>
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
        <?php $_smarty_tpl->tpl_vars['entity_config_obj'] = new Smarty_Variable(get_entity_tag_config($_smarty_tpl->tpl_vars['entity']->value->name), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['fields_html'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['entity_config_obj']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['form_name'] = new Smarty_Variable("form-entity-".((string)$_smarty_tpl->tpl_vars['entity']->value->name), null, 0);?>
        <li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['entity']->value->name == $_smarty_tpl->tpl_vars['current_entity']->value || (!$_smarty_tpl->tpl_vars['current_entity']->value && $_smarty_tpl->tpl_vars['count']->value == 1)) {?> active <?php }?>" ><a href="#<?php echo $_smarty_tpl->tpl_vars['entity']->value->name;?>
" data-toggle="tab" ><?php echo $_smarty_tpl->tpl_vars['entity']->value->title;?>
 </a>  </li>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['entity']->value->name == $_smarty_tpl->tpl_vars['current_entity']->value || (!$_smarty_tpl->tpl_vars['current_entity']->value && $_smarty_tpl->tpl_vars['count']->value == 1)) {
echo "active ";
}
$_tmp1=ob_get_clean();
ob_start();
echo form_open('',array('name'=>$_smarty_tpl->tpl_vars['form_name']->value));
$_tmp2=ob_get_clean();
$_smarty_tpl->tpl_vars['multitab'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['multitab']->value)."<div id='".((string)$_smarty_tpl->tpl_vars['entity']->value->name)."' class='tab-pane fade in ".$_tmp1."' >
            ".$_tmp2."
                <input type='hidden' name='current_entity' value='".((string)$_smarty_tpl->tpl_vars['entity']->value->name)."' />
                ".((string)$_smarty_tpl->tpl_vars['fields_html']->value)."
                ".((string)$_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-success"'))."
            </form>
        </div>", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    <?php
$_smarty_tpl->tpl_vars['entity'] = $foreach_entity_Sav;
}
?>
</ul>
<div class="tab-content">
     <?php echo $_smarty_tpl->tpl_vars['multitab']->value;?>

</div><?php }
}
?>