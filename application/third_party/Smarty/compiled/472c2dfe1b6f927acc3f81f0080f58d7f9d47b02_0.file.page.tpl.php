<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\themes\deal\layouts\page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1579258179fa776a866_83253647%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472c2dfe1b6f927acc3f81f0080f58d7f9d47b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\themes\\deal\\layouts\\page.tpl',
      1 => 1476012009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1579258179fa776a866_83253647',
  'variables' => 
  array (
    'title' => 0,
    'CI' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa77d3670_76931880',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa77d3670_76931880')) {
function content_58179fa77d3670_76931880 ($_smarty_tpl) {
if (!is_callable('smarty_function_locate_load_admin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load_admin.php';
if (!is_callable('smarty_function_breadcrumb')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.breadcrumb.php';
if (!is_callable('smarty_function_alerts')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.alerts.php';
if (!is_callable('smarty_function_get_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_action_header.php';
if (!is_callable('smarty_function_get_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_action_title.php';
if (!is_callable('smarty_function_action_view')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_view.php';

$_smarty_tpl->properties['nocache_hash'] = '1579258179fa776a866_83253647';
echo smarty_function_locate_load_admin(array('file'=>'includes/header'),$_smarty_tpl);?>

 </head>
 <body class="<?php echo body_class();?>
">
    <!--  wrapper -->
    <div id="wrapper">
       <?php echo smarty_function_locate_load_admin(array('file'=>'includes/nav_top'),$_smarty_tpl);?>
      
       <?php echo smarty_function_locate_load_admin(array('file'=>'includes/nav_side'),$_smarty_tpl);?>

        <div id="page-wrapper">
            <div class="row"><?php echo smarty_function_breadcrumb(array(),$_smarty_tpl);?>
 </div>
            <div id="alert-block"  class="row "> 
                <?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
              
            </div>
            <?php ob_start();
echo smarty_function_get_action_header(array(),$_smarty_tpl);
$_tmp2=ob_get_clean();
$_smarty_tpl->tpl_vars['header'] = new Smarty_Variable($_tmp2, null, 0);?>
            <?php ob_start();
echo smarty_function_get_action_title(array(),$_smarty_tpl);
$_tmp3=ob_get_clean();
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable($_tmp3, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['title']->value == '') {?>
                <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->theme->getPageTitleLeft(), null, 0);?>
            <?php }?>
            <h4 class="page-header bg-default text-uppercase"><i class="fa fa-bars"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
            <div class="row <?php echo action_block_class();?>
">
                <div class='panel panel-default'>
                    <?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
                        <div class="panel-heading clearfix">
                            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

                        </div>
                    <?php }?>
                    <div class="panel-body" style="min-height: 500px">
                        <div class="col-lg-12 col-md-12"><?php echo smarty_function_action_view(array(),$_smarty_tpl);?>
 </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo smarty_function_locate_load_admin(array('file'=>'includes/footer'),$_smarty_tpl);?>

<?php }
}
?>