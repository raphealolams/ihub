<?php /* Smarty version 3.1.27, created on 2017-01-14 04:59:31
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\tags\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31011587a4ae3423a66_52197536%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ddcd788cbddde79165e1204ed2f04d6621cf1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\tags\\views\\admin\\manage.tpl',
      1 => 1474552768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31011587a4ae3423a66_52197536',
  'variables' => 
  array (
    'errors' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587a4ae35361d8_78933653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587a4ae35361d8_78933653')) {
function content_587a4ae35361d8_78933653 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '31011587a4ae3423a66_52197536';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?>
    <?php echo smarty_function_action_title(array('title'=>'Tags'),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        <a href="<?php echo admin_url('tags/add');?>
" >Add New Tag </a> 
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="col-lg-12" >
        <div class="table-responsive">
             <table class="table table-hover" id="categories-table">
                <thead>
                    <tr>
                        <th> Name </th> <th> Entity </th> <th > Action </th>
                    </tr>
                </thead>
               <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$foreach_tag_Sav = $_smarty_tpl->tpl_vars['tag'];
?>
                    <tr> 
                        <td> <?php echo $_smarty_tpl->tpl_vars['tag']->value->name;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['tag']->value->entity;?>
 </td>
                        <td> <a href="<?php echo admin_url("tags/edit/".((string)$_smarty_tpl->tpl_vars['tag']->value->id));?>
">Edit</a> &nbsp; &nbsp;
                            <?php if ($_smarty_tpl->tpl_vars['tag']->value->live) {?> 
                                <a href="<?php echo admin_url("tags/disable/".((string)$_smarty_tpl->tpl_vars['tag']->value->id));?>
">Disable</a>
                            <?php } else { ?>
                                <a href="<?php echo admin_url("tags/enable/".((string)$_smarty_tpl->tpl_vars['tag']->value->id));?>
">Enable</a>
                            <?php }?>  
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['tag'] = $foreach_tag_Sav;
}
?>
               </tbody>
            </table>
        </div>
    </div>
    <?php echo smarty_function_theme_plugin(array('p'=>'bootstrap-datatables'),$_smarty_tpl);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#categories-table' ).DataTable();
                    });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
<?php }

}
}
?>