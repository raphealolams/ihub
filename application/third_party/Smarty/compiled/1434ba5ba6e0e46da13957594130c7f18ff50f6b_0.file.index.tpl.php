<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:19
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\deep\layouts\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11132584ffc9be90b30_14968876%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1434ba5ba6e0e46da13957594130c7f18ff50f6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\deep\\layouts\\index.tpl',
      1 => 1472121569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11132584ffc9be90b30_14968876',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc9c31f975_12950218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc9c31f975_12950218')) {
function content_584ffc9c31f975_12950218 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';
if (!is_callable('smarty_function_WIDGET')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.WIDGET.php';

$_smarty_tpl->properties['nocache_hash'] = '11132584ffc9be90b30_14968876';
?>
    <?php ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'deep'),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['theme_public_url'] = new Smarty_Variable($_tmp1, null, 0);?>
    <?php echo smarty_function_locate_load(array('file'=>"partials/header"),$_smarty_tpl);?>

</head>
    <body>
    <?php echo smarty_function_locate_load(array('file'=>"partials/navigation"),$_smarty_tpl);?>

  
    <?php echo smarty_function_locate_load(array('file'=>"partials/slider"),$_smarty_tpl);?>

    <div class="container" style="padding-top: 35px;">
        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo smarty_function_WIDGET(array('position'=>'home_page_feeds'),$_smarty_tpl);?>
 
            </div>
    </div>
    <?php echo smarty_function_locate_load(array('f'=>"partials/footer"),$_smarty_tpl);?>
 
<?php echo '<script'; ?>
>
    Nyra.widget.show( '.ajax-widget' , { 'loadingText' : '<img style="margin:20px auto;" class="img img-responsive" src="<?php echo get_pulic_url();?>
assets/img/loader.gif" />' } )
<?php echo '</script'; ?>
>

<style>
    .news-item{
        margin-bottom: 10px;
        position: relative;
    }
    .news-item .title{
        position: absolute;
        top: 150px;
        
    }
    .news-image{
        top: 0px;
        height: 200px;
        width: 100%
    }
</style>
    </body>
</html>
<?php }
}
?>