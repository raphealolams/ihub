<?php /* Smarty version 3.1.27, created on 2017-01-23 07:21:04
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\shortcodes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2189658864990342525_48465280%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23e48bfb09f9119680eed2ef1be8210f81bd33d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\shortcodes.tpl',
      1 => 1474552765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189658864990342525_48465280',
  'variables' => 
  array (
    'shortcodes' => 0,
    'plugin_sh' => 0,
    'sh' => 0,
    'plugin_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588649904e3fd5_29148166',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588649904e3fd5_29148166')) {
function content_588649904e3fd5_29148166 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '2189658864990342525_48465280';
?>
 <?php echo smarty_function_action_title(array('title'=>'vailable Plugin Shortcodes'),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <span class="pull-right"><?php echo nyra_help_link('shortcodes');?>
 </span>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="col-lg-12" >
        <div class="table-responsive">
            <table class="table table-hover" id="files-table">
                <thead>
                    <tr class="text-danger">
                        <th> <?php echo lang('noun_name');?>
 </th> 
                        <th> <?php echo lang('noun_title');?>
 </th>
                        <th> <?php echo lang('noun_description');?>
 </th>
                        <th> Plugin </th>
                        <th> <?php echo lang('plugin_plugins_shortcode_usage');?>
 </th> 
                    </tr>
                 </thead>
                 <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['shortcodes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['plugin_sh'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['plugin_sh']->_loop = false;
$_smarty_tpl->tpl_vars['plugin_name'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_name']->value => $_smarty_tpl->tpl_vars['plugin_sh']->value) {
$_smarty_tpl->tpl_vars['plugin_sh']->_loop = true;
$foreach_plugin_sh_Sav = $_smarty_tpl->tpl_vars['plugin_sh'];
?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['plugin_sh']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sh'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sh']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sh']->value) {
$_smarty_tpl->tpl_vars['sh']->_loop = true;
$foreach_sh_Sav = $_smarty_tpl->tpl_vars['sh'];
?>
                            <tr>
                                <td> <span class="label label-primary" ><?php echo $_smarty_tpl->tpl_vars['sh']->value['name'];?>
</span> </td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['sh']->value['title'];?>
 </td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['sh']->value['description'];?>
 </td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
 </td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['sh']->value['usage'];?>
 </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['sh'] = $foreach_sh_Sav;
}
?>
                    <?php
$_smarty_tpl->tpl_vars['plugin_sh'] = $foreach_plugin_sh_Sav;
}
?>
                 </tbody>
            </table>
        </div>
    </div> 
<?php }
}
?>