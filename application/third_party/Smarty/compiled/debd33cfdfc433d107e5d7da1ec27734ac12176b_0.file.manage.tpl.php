<?php /* Smarty version 3.1.27, created on 2016-11-01 12:25:00
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\categories\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:139365819244c096137_49557274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debd33cfdfc433d107e5d7da1ec27734ac12176b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\categories\\views\\admin\\manage.tpl',
      1 => 1474552708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139365819244c096137_49557274',
  'variables' => 
  array (
    'errors' => 0,
    'user' => 0,
    'entity' => 0,
    'categories' => 0,
    'category' => 0,
    'lang_edit' => 0,
    'lang_disable' => 0,
    'lang_enable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819244c261833_71616560',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819244c261833_71616560')) {
function content_5819244c261833_71616560 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '139365819244c096137_49557274';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
   <?php $_smarty_tpl->tpl_vars['lang_disable'] = new Smarty_Variable(lang('action_disable'), null, 0);?> 
    <?php $_smarty_tpl->tpl_vars['lang_enable'] = new Smarty_Variable(lang('action_enable'), null, 0);?> 
    <?php $_smarty_tpl->tpl_vars['lang_edit'] = new Smarty_Variable(lang('action_edit'), null, 0);?> 
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        <div class="btn-group pull-left">
             <?php echo HtmlHelper::backButton();?>

            <?php if ($_smarty_tpl->tpl_vars['user']->value->can('add_category')) {?>
                <?php echo HtmlHelper::addButton(admin_url("categories/add/".((string)$_smarty_tpl->tpl_vars['entity']->value)));?>

            <?php }?>
        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::helpButton('plugins-nyra_pages-manage');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="col-lg-12" >
        <div class="table-responsive">
             <table class="table table-hover" id="categories-table">
                <thead>
                    <tr>
                        <th> <?php echo lang('title');?>
 </th>
                        <th> Entity </th>
                        <th> <?php echo lang('url');?>
 </th>
                        <th><?php echo lang('actions');?>
 </th>
                    </tr>
                </thead>
               <tbody>
                     
                <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
                    <tr> 
                        <td> <?php echo $_smarty_tpl->tpl_vars['category']->value->title;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['category']->value->entity;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['category']->value->getUrl();?>
 </td>
                        <td> <a href="/admin/categories/edit/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['lang_edit']->value;?>
 </a> &nbsp; &nbsp;
                            <?php if ($_smarty_tpl->tpl_vars['category']->value->live) {?> 
                                <a href="/admin/categories/disable/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['lang_disable']->value;?>
</a> 
                            <?php } else { ?>
                                <a href="/admin/categories/enable/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['lang_enable']->value;?>
</a>
                            <?php }?>  
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
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
?>