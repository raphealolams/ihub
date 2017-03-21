<?php /* Smarty version 3.1.27, created on 2016-12-13 02:49:34
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\destiny\partials\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24946584ffc6e1b1db3_69358585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '856adb1d67b7bbc5c13a1f7a9436ada1d57519a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\destiny\\partials\\footer.tpl',
      1 => 1472771370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24946584ffc6e1b1db3_69358585',
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc6e3778d3_71278427',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc6e3778d3_71278427')) {
function content_584ffc6e3778d3_71278427 ($_smarty_tpl) {
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '24946584ffc6e1b1db3_69358585';
?>
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">
        <!--row-fluids-->
        <div class="row">
                <div class="col-md-4  ajax-widget" id="footerArea1"  data-position="footer_first_column">
                    <div style="center-align: center;width: 100%"><img class="img img-responsive" src="<?php echo get_pulic_url();?>
assets/img/loader.gif" /></div>
                       
                   </div>
                    <div class="col-md-4  ajax-widget" id="footerArea2"  data-position="footer_second_column" >
                     
                    </div>
                   <div class="col-md-4  ajax-widget" id="footerArea3" data-position="footer_third_column">
                      
                   </div>
        </div>
     </div>
</section> <!--buttom section-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="pull-left">
                &copy; <?php echo date('Y');?>
 <?php echo OptionHelper::get('siteName');?>
 All Rights Reserved.
                
            </div>
            <div class=" cp pull-right">
            <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable(array('max_depth'=>4,'nested'=>1,'cache'=>false,'root_parent_class'=>'nav nav-pills footer-menu','sub_parent_class'=>'dropdown-menu','template_root_no_child'=>'<li><a href="[[getUrl()]]">[[title]]</a>','template_root_has_child'=>'<li class="dropdown">
                                                        <a href="[[getUrl()]]" class="dropdown-toggle" data-toggle="dropdown">[[title]]<b class="caret"></b></a>','template_sub_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle sub-has-child" data-toggle="dropdown">
                                                                    [[title]]<b class=""></b>
                                                            </a>'), null, 0);?> 
                                 
                <?php echo smarty_function_MENU(array('position'=>'footer_row','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <p class="designer"> Site By <a href="http://www.crea8if.com"> Crea8if </a> </p>
            </div>
        </div>
    </div>
</footer>
 <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>
     
  <?php echo '<script'; ?>
>
      
    $('.breadcrumb > li:first a').prepend('<span class="glyphicon glyphicon-home"></span> ')
    Nyra.widget.show( '.ajax-widget' , { 'loadingText' : '<img style="margin:20px auto;" class="img img-responsive" src="<?php echo get_pulic_url();?>
assets/img/loader.gif" />' } )
<?php echo '</script'; ?>
>


<?php }
}
?>