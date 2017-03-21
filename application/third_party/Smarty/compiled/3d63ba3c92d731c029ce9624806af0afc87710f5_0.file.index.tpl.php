<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:01
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\ojuoge\layouts\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24579584ffc89ab9a83_58145280%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d63ba3c92d731c029ce9624806af0afc87710f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\ojuoge\\layouts\\index.tpl',
      1 => 1472902408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24579584ffc89ab9a83_58145280',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc89beaed4_75915559',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc89beaed4_75915559')) {
function content_584ffc89beaed4_75915559 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_WIDGET')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.WIDGET.php';
if (!is_callable('smarty_function_get_footer')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_footer.php';

$_smarty_tpl->properties['nocache_hash'] = '24579584ffc89ab9a83_58145280';
ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'ojuoge'),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['public'] = new Smarty_Variable($_tmp1, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('partials/top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="headerSeparator"></div>
                <!--Edit Camera Slider here-->
            <!--End Camera Slider here-->
            <div id="divHeaderText" class="page-content">
                <div id="divHeaderLine1"><?php echo theme_option('ojuoge','tagline1');?>
</div>
                    </br>
                <div id="divHeaderLine2"><?php echo theme_option('ojuoge','tagline2');?>
</div><br />                    
            </div>
            <hr>
            <div id="headerSeparator2"></div>						
        </div>
    </div>
     <div id="home-page-slides" class="row" >
            <div id="home-page-right-col" class="col-xs-12 col-sm-12 col-md-12">
                <?php echo smarty_function_WIDGET(array('l'=>'home_page_first_row'),$_smarty_tpl);?>
 
            </div>
        </div>
    <div class="contentArea <?php echo action_block_class();?>
">
        <div class="notop page-content"> 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="divMain">
                    <?php echo smarty_function_WIDGET(array('l'=>'home_page_feeds','content_area'=>1),$_smarty_tpl);?>
 
                    <!--Edit Main Content here-->                    
                </div>
                <!--End Main Content Area here-->
            </div>
        </div>
    </div>
        <div id="footerOuterSeparator"></div>

        <?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>

            <br /><br /><br />
</body>
</html><?php }
}
?>