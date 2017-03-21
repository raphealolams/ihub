<?php /* Smarty version 3.1.27, created on 2016-11-03 09:58:29
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\layouts\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27683581ba4f548b9f9_62010296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a095b7268d38cb4b40e3302b47042f37e620de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\layouts\\index.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27683581ba4f548b9f9_62010296',
  'variables' => 
  array (
    'theme_public_url' => 0,
    'THEME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ba4f63c21c7_28486304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ba4f63c21c7_28486304')) {
function content_581ba4f63c21c7_28486304 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';

$_smarty_tpl->properties['nocache_hash'] = '27683581ba4f548b9f9_62010296';
ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'arewa'),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['theme_public_url'] = new Smarty_Variable($_tmp1, null, 0);?>
<?php echo smarty_function_locate_load(array('file'=>"partials/header",'f'=>'','theme_public_url'=>$_smarty_tpl->tpl_vars['theme_public_url']->value),$_smarty_tpl);?>

</head>
  <body>
    <?php echo smarty_function_locate_load(array('file'=>'partials/navigation'),$_smarty_tpl);?>

    <div class="container">
        
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1><?php echo theme_option('arewa','first_home_heading');?>
</h1>
                        <h2><?php echo theme_option('arewa','second_home_heading');?>
</h2>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- headerwrap -->
        
        <div class="container w">
            <?php echo smarty_function_locate_load(array('file'=>"partials/home_featured"),$_smarty_tpl);?>

        </div><!-- container -->
        <div class="container">
            <div class="row">  
                <div class="col-md-12  ajax-widget" id=""  
                     data-position="home_page_feeds">
                </div>
            </div>
        </div>
    <!-- PORTFOLIO SECTION -->
    <?php if ($_smarty_tpl->tpl_vars['THEME']->value->canShowSection('lastest_works')) {?>
        <div id="dg">
            <div class="container">
                <?php echo smarty_function_locate_load(array('file'=>"partials/home_portfolio"),$_smarty_tpl);?>

            </div><!-- container -->
        </div><!-- DG -->
     <?php }?>
         
    <!-- FEATURE SECTION -->
    <div class="container wb">
            <div class="row centered">
                    <br><br>
                    <div class="col-lg-8 col-lg-offset-2">
                            <h4><?php echo theme_option('arewa','featured_text_heading');?>
</h4>
                            <p><?php echo theme_option('arewa','featured_text');?>
</p>
                    <p><br/><br/></p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10 col-lg-offset-1">
                            <img class="img-responsive" src="<?php echo htmlspecialchars(theme_option('arewa','featured_image'), ENT_QUOTES, 'UTF-8', true);?>
" alt="">
                    </div>
            </div><!-- row -->
    </div><!-- container -->
    <?php if ($_smarty_tpl->tpl_vars['THEME']->value->canShowSection('clients')) {?>
            <div id="lg">
                <div class="container">
                    <?php echo smarty_function_locate_load(array('file'=>"partials/home_clients"),$_smarty_tpl);?>

                </div><!-- container -->
            </div><!-- dg -->
        <?php }?>
        <div id="r">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h4><?php echo theme_option('arewa','home_footer_text_heading');?>
</h4>
                        <p><?php echo theme_option('arewa','home_footer_text');?>
 </p>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- r wrap -->
       
    </div>
    <?php echo smarty_function_locate_load(array('file'=>"partials/footer"),$_smarty_tpl);?>
        
  </body>
</html>
<?php }
}
?>