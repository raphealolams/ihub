<?php /* Smarty version 3.1.27, created on 2016-11-01 12:24:16
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\pages\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:242335819242064f9a9_47913839%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bebacf61c4dd8ae80cefd42de8224215649c15e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\pages\\views\\admin\\manage.tpl',
      1 => 1474552764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242335819242064f9a9_47913839',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'pages' => 0,
    'page' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58192420910aa0_49860464',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58192420910aa0_49860464')) {
function content_58192420910aa0_49860464 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '242335819242064f9a9_47913839';
?>
<!--pages/manage-->
<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_update_success'),'success');?>

<?php } elseif ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>
 
<?php } else { ?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        <div class="btn-group pull-left">
             <?php echo HtmlHelper::backButton();?>

             <?php echo HtmlHelper::addButton(admin_url('pages/add'));?>

             <a href="<?php echo admin_url('pages/generate_sitemap');?>
" class="btn btn-primary btn-lg"> 
                 <span class="glyphicon glyphicon-refresh"></span> Regenrate Sitemap 
             </a> 
        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::helpButton('plugins-nyra_pages-manage');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="col-lg-12" >
            <div class="table-responsive">
                <?php echo nyra_form_open();?>

                <table class="table table-hover" id="pages-table">
                    <!--HEAD-->
                    <thead class="text-danger">
                        <th> <?php echo lang('label_id');?>
 </th>
                        <th> <?php echo lang('adjective_created');?>
 </th>
                        <th> <?php echo lang('label_title');?>
 </th> 
                        
                        
                        <th><?php echo lang('noun_actions');?>
 </th>
                      </thead>
                <!--head end-->
                <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$foreach_page_Sav = $_smarty_tpl->tpl_vars['page'];
?>
                        <tr>
                            <td class="text-success">  <strong><?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
 </strong></td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['page']->value->created;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
 </td>
                            
                           
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->live) {?> 
                                    <a href="<?php echo admin_url("pages/disable/".((string)$_smarty_tpl->tpl_vars['page']->value->id));?>
" >Disable</a>
                                 <?php } else { ?>
                                     <a href="<?php echo admin_url("pages/enable/".((string)$_smarty_tpl->tpl_vars['page']->value->id));?>
" >Enable</a>
                                 <?php }?>  
                                 <?php echo nbs(3);?>
 
                                 <a href="<?php echo admin_url("pages/edit/".((string)$_smarty_tpl->tpl_vars['page']->value->id));?>
" >Edit</a>
                                 <?php echo nbs(3);?>
 
                                 <a href="<?php echo site_url(((string)$_smarty_tpl->tpl_vars['page']->value->slug));?>
?preview=1" target="_blank" >Preview</a>
                                 
                           </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['page'] = $foreach_page_Sav;
}
?>
                    </tbody>
               </table>
                <?php echo $_smarty_tpl->tpl_vars['link']->value;?>

                <input type="submit" value="<?php echo lang('verb_save');?>
" name="update" class="btn btn-primary" />
            <?php echo form_close();?>

        </div>
    </div>
    <?php echo Tools::activateThemePlugin('bootstrap-datatables');?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#pages-table' ).DataTable({
                            'order'  : [[ 1 , 'desc']]
                    });
                });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>   
<?php }
}
?>