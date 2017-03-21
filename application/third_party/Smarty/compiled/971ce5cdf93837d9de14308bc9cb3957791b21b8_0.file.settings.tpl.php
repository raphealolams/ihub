<?php /* Smarty version 3.1.27, created on 2017-01-17 04:11:13
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\social_auth\views\admin\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12156587e34112edac4_31088162%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '971ce5cdf93837d9de14308bc9cb3957791b21b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\social_auth\\views\\admin\\settings.tpl',
      1 => 1475148118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12156587e34112edac4_31088162',
  'variables' => 
  array (
    'config' => 0,
    'provider' => 0,
    'settings' => 0,
    'form' => 0,
    'fields_data' => 0,
    'count' => 0,
    'multitab' => 0,
    'form_name' => 0,
    'fields_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587e341372c030_26127777',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e341372c030_26127777')) {
function content_587e341372c030_26127777 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '12156587e34112edac4_31088162';
echo smarty_function_action_title(array('title'=>'Social Login Settings'),$_smarty_tpl);?>

<ul class="nav nav-tabs">
     <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(1, null, 0);?>
          <?php $_smarty_tpl->tpl_vars['multitab'] = new Smarty_Variable('', null, 0);?>

    <?php
$_from = $_smarty_tpl->tpl_vars['config']->value['providers'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['provider'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
        <?php $_smarty_tpl->tpl_vars['fields_data'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form']->value->render(element($_smarty_tpl->tpl_vars['provider']->value,$_smarty_tpl->tpl_vars['settings']->value),array(),true), null, 0);?>
        <?php ob_start();
echo element($_smarty_tpl->tpl_vars['provider']->value,$_smarty_tpl->tpl_vars['fields_data']->value);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['fields_html'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['fields_data']->value['main']).$_tmp1, null, 0);?>
        
        <?php $_smarty_tpl->tpl_vars['form_name'] = new Smarty_Variable("form-provider-".((string)$_smarty_tpl->tpl_vars['provider']->value), null, 0);?>
        <li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['count']->value == 1) {?> active <?php }?>" ><a href="#auth_<?php echo $_smarty_tpl->tpl_vars['provider']->value;?>
" data-toggle="tab" ><?php echo $_smarty_tpl->tpl_vars['provider']->value;?>
 </a>  </li>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['count']->value == 1) {
echo " active ";
}
$_tmp2=ob_get_clean();
ob_start();
echo form_open('',array('name'=>$_smarty_tpl->tpl_vars['form_name']->value));
$_tmp3=ob_get_clean();
ob_start();
echo form_close();
$_tmp4=ob_get_clean();
$_smarty_tpl->tpl_vars['multitab'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['multitab']->value)."<div id='auth_".((string)$_smarty_tpl->tpl_vars['provider']->value)."' class='tab-pane fade in ".$_tmp2."' >
                 ".$_tmp3."
                <input type='hidden' name='current_provider' value='".((string)$_smarty_tpl->tpl_vars['provider']->value)."' />
                ".((string)$_smarty_tpl->tpl_vars['fields_html']->value)."
                 ".((string)$_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-success btn-block"'))."
                 ".$_tmp4."
        </div>", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
    <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
</ul>
<div class="tab-content">
    
    <?php echo $_smarty_tpl->tpl_vars['multitab']->value;?>

  
</div>

    <?php }
}
?>