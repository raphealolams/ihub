<?php /* Smarty version 3.1.27, created on 2017-01-22 21:42:41
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\crystalhills\layouts\page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58545885c201b8d5a4_93653131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1863c16531191ba4475be63a703e3d8ec52859f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\crystalhills\\layouts\\page.tpl',
      1 => 1485160959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58545885c201b8d5a4_93653131',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5885c201bf2839_56008906',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5885c201bf2839_56008906')) {
function content_5885c201bf2839_56008906 ($_smarty_tpl) {
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';
if (!is_callable('smarty_function_action_view')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_view.php';

$_smarty_tpl->properties['nocache_hash'] = '58545885c201b8d5a4_93653131';
?>
 <?php echo smarty_function_locate_load(array('file'=>"partials/header"),$_smarty_tpl);?>

</head>
<body>
    <div class="container">
        <div class="row">
             <?php echo smarty_function_action_view(array(),$_smarty_tpl);?>
 
        </div>
    </div>
   <?php echo smarty_function_locate_load(array('file'=>"partials/footer"),$_smarty_tpl);?>
  
</body>

 </html>

<?php }
}
?>