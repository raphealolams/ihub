<?php /* Smarty version 3.1.27, created on 2016-12-13 02:49:33
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\destiny\partials\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15997584ffc6d6991f4_33585253%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3baf3a3f68f619b54a4f020d67d556595fb0ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\destiny\\partials\\navigation.tpl',
      1 => 1472768892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15997584ffc6d6991f4_33585253',
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc6d8b8444_05695894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc6d8b8444_05695894')) {
function content_584ffc6d8b8444_05695894 ($_smarty_tpl) {
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';

$_smarty_tpl->properties['nocache_hash'] = '15997584ffc6d6991f4_33585253';
?>

<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation" id="main-nav" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="/"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" >
                   <?php echo option('siteName');?>

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable(array('max_depth'=>4,'nested'=>1,'root_parent_class'=>'nav navbar-nav','sub_parent_class'=>'dropdown-menu','template_root_no_child'=>'<li><a href="[[getUrl()]]">[[title]]</a>','template_root_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle" data-toggle="dropdown">[[title]]<b class="caret"></b></a>','template_sub_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle sub-has-child" data-toggle="dropdown">
                                                                    [[title]]<b class=""></b>
                                                            </a>'), null, 0);?> 
                                 
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <?php echo smarty_function_MENU(array('position'=>'navigation_first','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

                
            </div>
        </div>
    <div class="shadow"></div>
 </nav>
                
              
   <?php }
}
?>