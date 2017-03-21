<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:02
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\ojuoge\partials\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17849584ffc8a0cc878_33928580%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d4e10d03c902005e5d334bbc41086190aabd1c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\ojuoge\\partials\\header.tpl',
      1 => 1470876256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17849584ffc8a0cc878_33928580',
  'variables' => 
  array (
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc8a1f1fc8_90237236',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc8a1f1fc8_90237236')) {
function content_584ffc8a1f1fc8_90237236 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '17849584ffc8a0cc878_33928580';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'ojuoge'),$_smarty_tpl);
$_tmp2=ob_get_clean();
$_smarty_tpl->tpl_vars['public'] = new Smarty_Variable($_tmp2, null, 0);?>
    <meta charset="utf-8">
    <title><?php echo smarty_function_page_title(array(),$_smarty_tpl);?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php echo smarty_function_header_style_hooks(array(),$_smarty_tpl);?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <!-- Icons -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link  href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
styles/custom.css" rel="stylesheet" type="text/css" />	
    
    <?php echo smarty_function_header_script_hooks(array(),$_smarty_tpl);

}
}
?>