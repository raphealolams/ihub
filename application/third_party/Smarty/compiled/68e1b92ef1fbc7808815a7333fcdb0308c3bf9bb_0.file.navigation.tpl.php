<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:02
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\ojuoge\partials\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15870584ffc8a4a3359_44561311%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e1b92ef1fbc7808815a7333fcdb0308c3bf9bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\ojuoge\\partials\\navigation.tpl',
      1 => 1470876256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15870584ffc8a4a3359_44561311',
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc8a4e04c5_95652045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc8a4e04c5_95652045')) {
function content_584ffc8a4e04c5_95652045 ($_smarty_tpl) {
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';

$_smarty_tpl->properties['nocache_hash'] = '15870584ffc8a4a3359_44561311';
?>
<style>
    
    
</style>
<div class="col-md-12">				
    <div class="centered_menu">                      
        <!--Edit Navigation Menu here-->
        <div class="navbar">
            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                MENU <span class="icon-chevron-down icon-white"></span>
            </button>
            <nav id=main-menu' class="nav-collapse collapse" role="navigation">
                        <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable(array('max_depth'=>4,'nested'=>1,'root_parent_class'=>'nav nav-pills ddmenu','sub_parent_class'=>'dropdown-menu sub-menu','template_root_no_child'=>'<li><a href="[[getUrl()]]">[[title]]</a>','template_root_has_child'=>'<li class="dropdown">
                                                                       <a href="[[getUrl()]]" class="dropdown-toggle" data-toggle="dropdown">[[title]] <b class="caret"></b></a>','template_sub_has_child'=>'<li class="dropdown">
                                                                       <a href="[[getUrl()]]" class="sub-has-child disable" data-toggle="dropdown">
                                                                               [[title]]<b class=""></b>
                                                                       </a>'), null, 0);?> 

                <?php echo smarty_function_MENU(array('position'=>'navigation_first','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

            </nav>
        </div>                     
    </div>
</div>
<?php }
}
?>