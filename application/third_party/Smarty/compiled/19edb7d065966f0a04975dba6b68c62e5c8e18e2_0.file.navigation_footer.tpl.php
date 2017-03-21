<?php /* Smarty version 3.1.27, created on 2016-11-02 18:50:27
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\partials\navigation_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18020581ad023a0cf13_07004652%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19edb7d065966f0a04975dba6b68c62e5c8e18e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\partials\\navigation_footer.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18020581ad023a0cf13_07004652',
  'variables' => 
  array (
    'options' => 0,
    'THEME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad023a951b7_45411462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad023a951b7_45411462')) {
function content_581ad023a951b7_45411462 ($_smarty_tpl) {
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';

$_smarty_tpl->properties['nocache_hash'] = '18020581ad023a0cf13_07004652';
?>
    <!-- Fixed navbar , Footer nav -->
<div class="container">
    <div id="footer-nav" class="navigation">
            <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable(array('max_depth'=>4,'nested'=>1,'cache'=>false,'root_parent_class'=>'nav nav-pills','sub_parent_class'=>'dropdown-menu','template_root_no_child'=>'<li><a href="[[getUrl()]]">[[title]]</a>','template_root_has_child'=>'<li class="dropdown">
                                                        <a href="[[getUrl()]]" class="dropdown-toggle" data-toggle="dropdown">[[title]]<b class="caret"></b></a>','template_sub_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle sub-has-child" data-toggle="dropdown">
                                                                    [[title]]<b class=""></b>
                                                            </a>'), null, 0);?> 
                                 
            <?php echo smarty_function_MENU(array('position'=>'footer_row','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

      </div>
     <div class="pull-right">
         <span class="cms-meta label text-muted">
             <a href="<?php echo theme_option('arewa','powered_by_link');?>
"><?php echo $_smarty_tpl->tpl_vars['THEME']->value->getPoweredBy();?>
</a>
         </span>
     </div>
</div>
 <?php }
}
?>