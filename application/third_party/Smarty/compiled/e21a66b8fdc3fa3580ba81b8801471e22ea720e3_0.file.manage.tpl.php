<?php /* Smarty version 3.1.27, created on 2016-12-13 02:51:21
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\menus\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21377584ffcd9d43491_53665517%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e21a66b8fdc3fa3580ba81b8801471e22ea720e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\menus\\views\\admin\\manage.tpl',
      1 => 1474552762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21377584ffcd9d43491_53665517',
  'variables' => 
  array (
    'errors' => 0,
    'menus' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffcda03ebc9_37570515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffcda03ebc9_37570515')) {
function content_584ffcda03ebc9_37570515 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '21377584ffcd9d43491_53665517';
if (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php echo smarty_function_action_title(array('title'=>'Available Menu'),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo HtmlHelper::button(admin_url('menus/positioning'),'Assign Position');?>

        <?php echo HtmlHelper::addButton(admin_url('menus/add'));?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
    <table class="table table-striped" id="menus-table">
        <thead class="text-danger">
             <th>id </th>
             <th> <?php echo lang('label_title');?>
 </th>
             <th><?php echo lang('label_description');?>
 </th>
             <th><?php echo lang('noun_actions');?>
 </th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['menus']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
                <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['m']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['m']->value->title;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['m']->value->description;?>
</td>
                    <td>
                        <a href="<?php echo admin_url("menus/edit/".((string)$_smarty_tpl->tpl_vars['m']->value->id));?>
" class="btn btn-primary">
                            <i class="glyphicon glyphicon-edit"></i> Edit Group Details
                        </a>
                        <a href="<?php echo admin_url("menus/edit_items/".((string)$_smarty_tpl->tpl_vars['m']->value->id));?>
" class="btn btn-primary">
                           <i class="glyphicon glyphicon-list"></i> Group Item
                        </a>
                    </td>
                </tr>                
             <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>
        </tbody>
    </table>
        <a class='my-auto' data-process-url="/menus/admin/test/test_auto" data-focus-action="enable" data-alternate-action="disable"
               data-focus-action-text="<?php echo lang('alert_enable_success');?>
" data-alternate-action-text="<?php echo lang('alert_disenable_success');?>
" ><?php echo lang('action_enabled');?>
 </a>
    <?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-datatables'),$_smarty_tpl);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#menus-table' ).DataTable();
                    });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
<?php }
}
}
?>