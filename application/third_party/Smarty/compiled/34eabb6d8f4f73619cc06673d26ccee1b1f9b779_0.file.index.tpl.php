<?php /* Smarty version 3.1.27, created on 2016-12-13 02:49:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\destiny\layouts\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21031584ffc6cdfaf41_69087937%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34eabb6d8f4f73619cc06673d26ccee1b1f9b779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\destiny\\layouts\\index.tpl',
      1 => 1472772364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21031584ffc6cdfaf41_69087937',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc6d2622c3_96474950',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc6d2622c3_96474950')) {
function content_584ffc6d2622c3_96474950 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_header.php';
if (!is_callable('smarty_function_navigation')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.navigation.php';
if (!is_callable('smarty_function_alerts')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.alerts.php';
if (!is_callable('smarty_function_WIDGET')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.WIDGET.php';
if (!is_callable('smarty_function_get_footer')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_footer.php';

$_smarty_tpl->properties['nocache_hash'] = '21031584ffc6cdfaf41_69087937';
echo smarty_function_get_header(array(),$_smarty_tpl);?>

</head>
<body class="the-global">
     <?php echo smarty_function_navigation(array(),$_smarty_tpl);?>
 
    <div class="container">
        <div id="alert-blcok"  class="row "> 
            <?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
 
        </div>
       
       
        <div id="home-page-slides" class="row" >
            <div id="home-page-right-col" class="col-xs-12 col-sm-12 col-md-12">
                <?php echo smarty_function_WIDGET(array('l'=>'home_page_first_row'),$_smarty_tpl);?>
 
            </div>
        </div>
        <div class="row">
            <div id="home-page-feeds" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 home-feeds">
                
                <?php echo smarty_function_WIDGET(array('l'=>'home_page_feeds'),$_smarty_tpl);?>
 
            </div>
            <div id="home-page-feeds" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ajax-widget"
                 data-position="home_page_right_column">
                
            </div>
        </div>
     </div>
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>


  </body>
</html><?php }
}
?>