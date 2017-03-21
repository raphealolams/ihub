<?php /* Smarty version 3.1.27, created on 2017-01-23 05:25:17
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\destiny\layouts\page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2553158862e6d52bdd7_63915323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '226ac23d9600b6d2f89c4a54ced2b7d1c0540c87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\destiny\\layouts\\page.tpl',
      1 => 1485188658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2553158862e6d52bdd7_63915323',
  'variables' => 
  array (
    'action_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58862e6d5c3811_76736657',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58862e6d5c3811_76736657')) {
function content_58862e6d5c3811_76736657 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_header.php';
if (!is_callable('smarty_function_navigation')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.navigation.php';
if (!is_callable('smarty_function_alerts')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.alerts.php';
if (!is_callable('smarty_function_breadcrumb')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.breadcrumb.php';
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';
if (!is_callable('smarty_function_get_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_action_title.php';
if (!is_callable('smarty_function_action_view')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_view.php';
if (!is_callable('smarty_function_get_footer')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_footer.php';

$_smarty_tpl->properties['nocache_hash'] = '2553158862e6d52bdd7_63915323';
?>

<?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

</head>
<body class="the-global">
     <?php echo smarty_function_navigation(array(),$_smarty_tpl);?>
 
    <div class="container">
        <div id="alert-blcok"  class="row "> 
            <?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
 
        </div>
        <div id="alert-blcok"  class="row "> 
            <?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
 
        </div>
        <div class="row">
            <?php echo smarty_function_breadcrumb(array(),$_smarty_tpl);?>
 
        </div>
        <?php echo smarty_function_HOOK(array('location'=>'page.before'),$_smarty_tpl);?>
 
        <div class="col-sm-12 col-md-8 col-lg-8">
        <?php ob_start();
echo smarty_function_get_action_title(array(),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['action_title'] = new Smarty_Variable($_tmp1, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['action_title']->value) {?>
            <h1> <span class="title"><?php echo $_smarty_tpl->tpl_vars['action_title']->value;?>
</span></h1>
        <?php }?>
        
            <div class="panel panel-default action-block">
                <div class="panel-body">
                
                    <?php echo smarty_function_action_view(array(),$_smarty_tpl);?>
 
                
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 ajax-widget" data-position="sidebar_right_first">
        </div>
    </div>
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>

  </body>
</html>
<?php }
}
?>