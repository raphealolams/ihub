<?php /* Smarty version 3.1.27, created on 2016-11-03 05:30:24
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\roles\views\admin\editor_plugins.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29010581b6620421895_12671460%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '248e56de7cdd2850280d1fda83c6834b81c5bd5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\roles\\views\\admin\\editor_plugins.tpl',
      1 => 1475271902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29010581b6620421895_12671460',
  'variables' => 
  array (
    'role' => 0,
    'success' => 0,
    'plugins' => 0,
    'data' => 0,
    'p' => 0,
    'role_plugins' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581b662067af48_13858595',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581b662067af48_13858595')) {
function content_581b662067af48_13858595 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '29010581b6620421895_12671460';
?>

<?php echo smarty_function_action_title(array('title'=>((string)$_smarty_tpl->tpl_vars['role']->value->title)." Editor Plugins"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo HtmlHelper::backButton();?>

    <a href="<?php echo admin_url("roles/editor_toolbar/".((string)$_smarty_tpl->tpl_vars['role']->value->id));?>
" class="btn btn-lg btn-default" >
            <span class="glyphicon glyphicon-briefcase"></span> <?php echo $_smarty_tpl->tpl_vars['role']->value->title;?>
 <?php echo lang('plugin_roles_toolbars');?>

    </a>
    <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('editor-plugins-form');?>

             <?php echo HtmlHelper::helpButton('plugins-nyra_posts');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_update_success'),'success');?>

<?php }?>

<?php echo form_open('',array('id'=>'editor-plugins-form'));?>

    <table class="table table-responsive">
        <thead>
            <th>Plugin</th>
            <th><?php echo lang('label_description');?>
</th>   
            <th>Activate</th>   
            
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['plugins']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?> 
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['data']->value['desc'];?>
</td>
                    <td>
                        <input type="checkbox" name="plugins[<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
]" 
                            <?php if (in_array($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['role_plugins']->value)) {?> 
                                     checked="checked"
                            <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" 
                        />
                    </td>
                    
                </tr>
            <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
        </tbody>
    </table>
</section><?php }
}
?>