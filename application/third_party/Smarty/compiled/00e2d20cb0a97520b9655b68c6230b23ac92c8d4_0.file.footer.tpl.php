<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:21
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\deep\partials\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:872584ffc9d2073d6_27407566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e2d20cb0a97520b9655b68c6230b23ac92c8d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\deep\\partials\\footer.tpl',
      1 => 1472745528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872584ffc9d2073d6_27407566',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc9d2e61b9_75774788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc9d2e61b9_75774788')) {
function content_584ffc9d2e61b9_75774788 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '872584ffc9d2073d6_27407566';
?>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 ajax-widget"
                 data-position="footer_first_column"
                 >
            </div>
            <div class="col-sm-12 col-md-4 ajax-widget"
                 data-position="footer_first_column"
                 >
            </div>
            <div class="col-sm-12 col-md-4 ajax-widget"
                 data-position="footer_first_column"
                 >
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; <?php echo date('Y');?>
 <?php echo option('siteName');?>
  All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <img class="pull-right" src="<?php echo option('logo');?>
" alt="<?php echo option('siteName');?>
" title="<?php echo option('siteName');?>
">
            </div>
        </div>
    </div>
</footer><!--/#footer-->
    
  <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);

}
}
?>