<?php /* Smarty version 3.1.27, created on 2017-01-17 03:04:40
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\diary\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10545587e24782afac2_09475589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79e90e3467bed90b593f32ea59b40aa8dbe9a52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\diary\\views\\index.tpl',
      1 => 1484661878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10545587e24782afac2_09475589',
  'variables' => 
  array (
    'CI' => 0,
    'diary_items' => 0,
    'item' => 0,
    'user' => 0,
    'total' => 0,
    'limit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587e24783536a5_91913978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e24783536a5_91913978')) {
function content_587e24783536a5_91913978 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';

$_smarty_tpl->properties['nocache_hash'] = '10545587e24782afac2_09475589';
?>


<?php echo smarty_function_theme_plugin(array('name'=>'famfamfam-icons'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['CI']->value->theme->addCss('plugins/diary/styles.css');?>

<div id="diary-items-block">
    <?php if (!$_smarty_tpl->tpl_vars['diary_items']->value) {?>
        <div class="alert alert-info"><?php echo lang('record_non_found');?>
!!!</div>
    <?php }?>
    
    <?php if (!current_user_is_visitor()) {?>
        <p> 
            
            <a class="btn btn-default" href="<?php echo site_url('diary/today_in_history');?>
">Today In History</a>
            <a class=" pull-right btn btn-default" href="/diary/add">Add New Item</a>
        </p>
    <?php }?>
    <?php
$_from = $_smarty_tpl->tpl_vars['diary_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <div class="well">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-4 calender-bg" >
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getMonthStr();?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->day;?>
</p>
                     <p><?php echo $_smarty_tpl->tpl_vars['item']->value->year;?>
</p>
                </div>
                <div class="col-xs-6 col-sm-9 col-md-8 col-lg-8 diary-item-meta">
                    <p> <a href="/diary/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</strong> </a></p>
                    <p><span class="fam user_gray"></span><?php echo $_smarty_tpl->tpl_vars['item']->value->user_first;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->user_last;?>
</p>
                    <p> <span class="fam folder_page"></span> <a href="/diary/category/<?php echo $_smarty_tpl->tpl_vars['item']->value->cat_slug;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value->cat_title;?>
</strong> </a></p>
                    <p>
                        <span class="fam folder_page"></span> 
                        <a href="/diary/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><strong>view</strong> </a>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['item']->value->user_id) {?>
                            <span class="fam user_edit"></span> 
                            <a href="/diary/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><strong></strong> </a>
                            <span class="fam user_delete"></span> 
                            <a href="/diary/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class=""><strong>delete</strong> </a>
                       <?php }?>
                </p>
                </div>
            </div>
        </div>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    <div><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value);?>
</div>
</div>
<?php }
}
?>