<?php /* Smarty version 3.1.27, created on 2016-12-29 11:52:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\featured\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3483586593b092f3b0_91562535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a64ad06f2074c919328f7d1f12f29789b84fc07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\featured\\views\\admin\\manage.tpl',
      1 => 1474552722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3483586593b092f3b0_91562535',
  'variables' => 
  array (
    'errors' => 0,
    'featured_groups' => 0,
    'g' => 0,
    'action_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_586593b0dfaa51_93075687',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_586593b0dfaa51_93075687')) {
function content_586593b0dfaa51_93075687 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '3483586593b092f3b0_91562535';
if (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php echo smarty_function_action_title(array('title'=>'Available Featured Groups'),$_smarty_tpl);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo HtmlHelper::addButton(admin_url('featured/add'));?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->tpl_vars['action_edit'] = new Smarty_Variable(lang('action_edit_#','items'), null, 0);?>
    <table class="table table-striped" id="featured-table">
        <thead class="text-danger">
             <th>Featured id </th>
             <th> Featured <?php echo lang('noun_title');?>
  </th>
             <th>Menu <?php echo lang('noun_description');?>
  </th>
             <th><?php echo lang('noun_actions');?>
 </th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['featured_groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$foreach_g_Sav = $_smarty_tpl->tpl_vars['g'];
?>
                <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->title;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value->desc;?>
</td>
                    <td><a href="<?php echo admin_url("featured/edit/".((string)$_smarty_tpl->tpl_vars['g']->value->id));?>
" 
                           class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['action_edit']->value;?>
</a>
                        </td>
                </tr>                
             <?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?>
        </tbody>
    </table>
    <?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-datatables'),$_smarty_tpl);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#featured-table' ).DataTable();
                    woAutoAction( '.my-auto' ) ;
                    });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
<?php }
}
}
?>