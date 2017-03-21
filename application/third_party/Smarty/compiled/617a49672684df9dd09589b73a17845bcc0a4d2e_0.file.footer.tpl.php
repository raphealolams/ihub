<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:46
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\favour\partials\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19044584ffcb63e2071_37482611%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617a49672684df9dd09589b73a17845bcc0a4d2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\favour\\partials\\footer.tpl',
      1 => 1471969521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19044584ffcb63e2071_37482611',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffcb641c3c1_54094513',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffcb641c3c1_54094513')) {
function content_584ffcb641c3c1_54094513 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '19044584ffcb63e2071_37482611';
?>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date('Y');?>
 <?php echo option('siteName');?>
  All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="<?php echo option('logo');?>
" alt="ShapeBootstrap" title="<?php echo option('siteName');?>
">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    
  <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);

}
}
?>