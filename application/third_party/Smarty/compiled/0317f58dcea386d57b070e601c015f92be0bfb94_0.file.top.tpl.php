<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:01
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\ojuoge\partials\top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31616584ffc89e744d6_37449321%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0317f58dcea386d57b070e601c015f92be0bfb94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\ojuoge\\partials\\top.tpl',
      1 => 1470876256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31616584ffc89e744d6_37449321',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc89ef0367_16893681',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc89ef0367_16893681')) {
function content_584ffc89ef0367_16893681 ($_smarty_tpl) {
if (!is_callable('smarty_function_get_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_header.php';
if (!is_callable('smarty_function_navigation')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.navigation.php';
if (!is_callable('smarty_function_alerts')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.alerts.php';

$_smarty_tpl->properties['nocache_hash'] = '31616584ffc89e744d6_37449321';
echo smarty_function_get_header(array(),$_smarty_tpl);?>
	
</head>
<body id="pageBody" class="pageBody <?php echo body_class();?>
">
    
    <div id="divBoxed" class="container">
    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

        <div class="row">
                <div class="col-xs-12 col-md-12">					
                    <!--Edit Site Name and Slogan here-->
                    <div id="divLogo">
                        <a href="/" id="divSiteTitle"><?php echo OptionHelper::get('siteName','SIte Name');?>
</a><br />
                        <a href="/" id="divTagLine"><?php echo OptionHelper::get('companyTheme');?>
</a>
                    </div>
                </div>
            </div> 
            <div class="row">
                <?php echo smarty_function_navigation(array(),$_smarty_tpl);?>

            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12"> <?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
 </div>
            </div>
            
  <?php }
}
?>