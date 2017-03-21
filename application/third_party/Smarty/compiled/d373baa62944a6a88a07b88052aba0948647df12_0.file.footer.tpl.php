<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:02
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\ojuoge\partials\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31071584ffc8a661c79_46082595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd373baa62944a6a88a07b88052aba0948647df12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\ojuoge\\partials\\footer.tpl',
      1 => 1472908626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31071584ffc8a661c79_46082595',
  'variables' => 
  array (
    'CI' => 0,
    'twitter' => 0,
    'facebook' => 0,
    'google' => 0,
    'pinterest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc8a9cc474_49973044',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc8a9cc474_49973044')) {
function content_584ffc8a9cc474_49973044 ($_smarty_tpl) {
if (!is_callable('smarty_function_json_LD_breadcrumb')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.json_LD_breadcrumb.php';
if (!is_callable('smarty_function_json_LD_company_info')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.json_LD_company_info.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '31071584ffc8a661c79_46082595';
?>
<div id="divFooter" class="footerArea shadow" >
    <div class="divPanel">
               <div class="row-fluid">
                    <div class="col-md-4  ajax-widget" id="footerArea1"  data-position="footer_first_column">
                       
                   </div>
                    <div class="col-md-4  ajax-widget" id="footerArea2"  data-position="footer_second_column" >
                     
                    </div>
                   <div class="col-md-4  ajax-widget" id="footerArea3" data-position="footer_third_column">
                      
                   </div>
                  
               </div>
           <br /><br />
           <div class="row">
           <div class="col-md-12">
           <p class="copyright center-align"> 
           Copyright © <?php echo date('Y');?>
 <?php echo OptionHelper::get('siteName');?>
. All Rights Reserved.
           </p>
           <?php if (theme_option('ojuoge','show_elapsed_time')) {?>
               <p class="center-align"><?php echo theme_option('ojuoge','elapsed_time_text');?>
 <?php echo $_smarty_tpl->tpl_vars['CI']->value->benchmark->elapsed_time();?>
 secs</p>
            <?php }?>

           <div class="social_bookmarks">                    
               <?php $_smarty_tpl->tpl_vars['twitter'] = new Smarty_Variable(OptionHelper::get('twitter'), null, 0);?>
               <?php $_smarty_tpl->tpl_vars['facebook'] = new Smarty_Variable(OptionHelper::get('facebook'), null, 0);?>
               <?php $_smarty_tpl->tpl_vars['google'] = new Smarty_Variable(OptionHelper::get('google'), null, 0);?>
               <?php $_smarty_tpl->tpl_vars['pinterest'] = new Smarty_Variable(OptionHelper::get('pinterest'), null, 0);?>

               <?php if ($_smarty_tpl->tpl_vars['twitter']->value) {?>
                   <a href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
"><div class="icon_twitter"></div></a>
               <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['facebook']->value) {?>
                   <a href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
"><div class="icon_facebook"></div></a>
               <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['google']->value) {?>
                   <a href="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
"><div class="icon_google"></div></a>
               <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['pinterest']->value) {?>
                   <a href="<?php echo $_smarty_tpl->tpl_vars['pinterest']->value;?>
"><div class="icon_pinterest"></div></a> 
               <?php }?>
           </div>
           </div>
        </div>
    </div>
</div>
 <style>
        body.pageBody{
            background-color : <?php echo theme_option('ojuoge','body_bg_color');?>
  ;
            background-image : url( <?php echo theme_option('ojuoge','body_bg_image');?>
 )  ;
            
        }
        #divFooter {
            <?php if (file_exists(theme_option('ojuoge','footer_bg_image'))) {?>
                background-image :  url( <?php echo theme_option('ojuoge','footer_bg_image');?>
 );
            <?php }?>
            
        }
        .navbar .nav-pills > .active > a, .navbar .nav-pills > .active > a:hover, .navbar .nav-pills li.dropdown.open > .dropdown-toggle, .navbar .nav-pills li.dropdown.active > .dropdown-toggle{
                border-bottom-color: <?php echo theme_option('ojuoge','menu_item_current_hover_color');?>
 ;
        }
        #divSiteTitle {
            color: <?php echo theme_option('ojuoge','main_color');?>
 ;
        }
        #divHeaderLine1{
            color: <?php echo theme_option('ojuoge','tagline1_color');?>
 ;
        }
         .center-align{
        	text-align: center;
        }
        blockquote{
            border-left: 5px solid <?php echo theme_option('ojuoge','blockquote_border_color');?>
;
            
        }
        .widget .title {
            text-align: center;
            border-radius: 5px;
            background-color: beige;
            color: rebeccapurple;
        }
    <?php if (browser_is_operamini()) {?>
        #divSiteTitle {
            text-shadow: none ;
        }
    <?php }?>
    </style>
<?php echo smarty_function_json_LD_breadcrumb(array(),$_smarty_tpl);?>

<?php echo smarty_function_json_LD_company_info(array(),$_smarty_tpl);?>

<?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>


 <?php echo '<script'; ?>
>
    Nyra.widget.show( '.ajax-widget' , { 'loadingText' : '<img style="margin:20px auto;" class="img img-responsive" src="<?php echo get_pulic_url();?>
assets/img/loader.gif" />' } )
<?php echo '</script'; ?>
><?php }
}
?>