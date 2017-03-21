<?php /* Smarty version 3.1.27, created on 2016-12-22 02:15:46
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\destiny\layouts\404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2200585bd20296c8d0_32057643%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3499ae6d25d65b706098bd2708d76821698a399f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\destiny\\layouts\\404.tpl',
      1 => 1467556078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2200585bd20296c8d0_32057643',
  'variables' => 
  array (
    'nyra_action' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585bd203e94030_31544727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585bd203e94030_31544727')) {
function content_585bd203e94030_31544727 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_header.php';
if (!is_callable('smarty_function_navigation')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.navigation.php';
if (!is_callable('smarty_function_alerts')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.alerts.php';
if (!is_callable('smarty_function_breadcrumb')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.breadcrumb.php';
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';
if (!is_callable('smarty_function_get_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_action_header.php';
if (!is_callable('smarty_function_get_footer')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_footer.php';

$_smarty_tpl->properties['nocache_hash'] = '2200585bd20296c8d0_32057643';
?>

<?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

</head>
<body>
    
    <!-- main Content -->
    <div class="container">
    <!-- Navigation -->
    	<div class="row">
    	 	<?php echo smarty_function_navigation(array(),$_smarty_tpl);?>
 
        </div>
        <div class="row">
            <!-- content Column -->
             <!--  Sidebar Widgets Column -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar ajax-widget" data-position="sidebar_right_first">
         
            </div>
            <div class="col-md-9">
            	<?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
                
                <?php echo smarty_function_breadcrumb(array(),$_smarty_tpl);?>
                
                <?php echo smarty_function_HOOK(array('location'=>'page.before'),$_smarty_tpl);?>
 
                <div class='panel panel-default'>
                    <div class="panel-heading">
                        <h3> <?php echo smarty_function_get_action_header(array(),$_smarty_tpl);?>
</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $_smarty_tpl->tpl_vars['nyra_action']->value;?>
                
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php echo smarty_function_HOOK(array('l'=>'page.after','user'=>$_smarty_tpl->tpl_vars['user']->value,'me'=>'wow'),$_smarty_tpl);?>
           
            </div> <!--act-->
           
        </div>  <!-- /.row -->
     </div>

 <?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>
  
 </body>
</html>
 
 <?php }
}
?>