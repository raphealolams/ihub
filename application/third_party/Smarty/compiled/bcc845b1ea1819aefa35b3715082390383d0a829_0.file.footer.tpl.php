<?php /* Smarty version 3.1.27, created on 2016-12-26 00:21:48
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\partials\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25365860fd4c3dfaa8_55499215%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc845b1ea1819aefa35b3715082390383d0a829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\partials\\footer.tpl',
      1 => 1482751305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25365860fd4c3dfaa8_55499215',
  'variables' => 
  array (
    'link_over_color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5860fd4c4b5ee6_28541491',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5860fd4c4b5ee6_28541491')) {
function content_5860fd4c4b5ee6_28541491 ($_smarty_tpl) {
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '25365860fd4c3dfaa8_55499215';
?>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xm-12 col-sm-4 col-md-4 col-lg-4 ajax-widget" id="footerArea1"  
                 data-position="footer_first_column">
            </div>
            <div class="col-xm-12 col-sm-4 col-md-4 col-lg-4  ajax-widget" id="footerArea2"  
                 data-position="footer_second_column" >
            </div>
            <div class="col-xm-12 col-sm-4col-md-4 col-lg-4 ajax-widget" id="footerArea3" 
                 data-position="footer_third_column">
            </div>
        </div>
</div>
<?php echo smarty_function_locate_load(array('f'=>"partials/navigation_footer"),$_smarty_tpl);?>

	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
        <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">contact us</h4>
                    </div>
                    <div class="modal-body">
                            <div class="row centered">
                                <p><?php echo theme_option('arewa','contact_form_into');?>
</p>
                                    <p>
                                      <?php echo (($tmp = @option('address'))===null||$tmp==='' ? "Address Line 1" : $tmp);?>
<br/>
                                       <?php echo option('address2');?>
<br/>
                                       <?php echo (($tmp = @option('mobile'))===null||$tmp==='' ? 'Address Line 2' : $tmp);?>
<br/>
                                       <?php echo (($tmp = @option('email'))===null||$tmp==='' ? 'contact@email' : $tmp);?>

                                    </p>
                                    <div id="mapwrap">
                                        <iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                                                src="https://www.google.com/maps/embed/v1/view?key=<?php echo theme_option('arewa','map_api_key');?>
&center=<?php echo option('latitude');?>
,<?php echo option('longitude');?>
&"></iframe>
                                    </div>
                            </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                    </div>
                </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>
   

<style>
    
    <?php $_smarty_tpl->tpl_vars['link_over_color'] = new Smarty_Variable(theme_option('arewa','link_over_color'), null, 0);?>
    body {
        background: url("<?php echo theme_option('arewa','bg_image');?>
") repeat fixed center !important ;
        font-family : <?php echo theme_option('arewa','body_font');?>

    }
/* Dark Grey Wrap */
    #r {
        background-color: <?php echo theme_option('arewa','home_footer_text_bg_color');?>
 !important ;
    }
    #navbar-header{
        background-color: <?php echo theme_option('arewa','header_nav_bg_color');?>
 !important ;
        border-color: <?php echo theme_option('arewa','header_nav_bg_color');?>
 !important ;
    }
    #navbar-header .active a {
        background: <?php echo theme_option('arewa','active_link_color');?>
 !important ;
    }
    #navbar-footer{
        background-color: <?php echo theme_option('arewa','footer_nav_bg_color');?>
 !important ;
    }
    .w i{
        color: <?php echo theme_option('arewa','brand_color');?>
 !important ;
    }
    
    a {
        color: <?php echo theme_option('arewa','link_color');?>
 !important ;
    }
    
    .navigation a {
        color: <?php echo theme_option('arewa','nav_link_color');?>
 !important ;
    }
    ol.breadcrumb {
        background-color:  <?php echo theme_option('arewa','breadcrumb_bg_color');?>
 !important ;
    }
    ol.breadcrumb a {
        color:  <?php echo theme_option('arewa','breadcrumb_link_color');?>
 !important ; 
    }
    ol.breadcrumb a:hover {
        color:  <?php echo $_smarty_tpl->tpl_vars['link_over_color']->value;?>
 !important ; 
    }
    /*   breadcrumb */
    ol.breadcrumb {
            font-family: "Comic Sans MS", cursive, sans-serif !important ;
    }
    .breadcrumb>li+li:before{
        padding: 0 5px !important ;
        color: <?php echo theme_option('arewa','breadcrumb_link_color');?>
 !important ;
        content: "\2192" !important ;
    }
    ol.breadcrumb .active {
        color: <?php echo theme_option('arewa','breadcrumb_active_link_color');?>
 !important ;
    }
    
    .panel-default .panel-heading{
        
        background-color:  <?php echo theme_option('arewa','default_panel_header_bg_colour');?>
 !important;
        
    }
    .panel-default .panel-heading *{
        
        color:  <?php echo theme_option('arewa','default_panel_header_colour');?>
 !important; 
    }
    .panel-default .panel-heading a{
        
        color:  <?php echo theme_option('arewa','default_panel_header_link_colour');?>
 !important; 
    }
    .panel-default .panel-heading a:hover{
        
        color:  <?php echo $_smarty_tpl->tpl_vars['link_over_color']->value;?>
 !important 
    }
    
    .btn-default {
        
        background-color:  <?php echo theme_option('arewa','default_button_bg_colour');?>
 !important;
        color:  <?php echo theme_option('arewa','default_button_colour');?>
 !important;
        
    }
    .main-content{
         font-family : <?php echo theme_option('arewa','main_content_font');?>

    }
    #footer{
        min-height: 100px;
        background-color: black;
        color: #fff;
    }
   
    a:hover {
        color:  <?php echo $_smarty_tpl->tpl_vars['link_over_color']->value;?>
 !important;
    }
    .glyphicon, .fa {
        color :  <?php echo theme_option('arewa','icon_color');?>
 !important;
    }
</style>            
<?php echo '<script'; ?>
>
  
    $('html, body').on('scroll', function(){
        
        consoloe.log('Scrolled')
        
    });
    
    
    Nyra.widget.show( '.ajax-widget' , { 'loadingText' : '<img style="margin:20px auto;min-height: 100%" class="img img-responsive" src="<?php echo get_pulic_url();?>
assets/img/loader.gif" />' } )
<?php echo '</script'; ?>
>
<?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);

}
}
?>