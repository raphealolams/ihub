<?php /* Smarty version 3.1.27, created on 2016-11-02 18:53:09
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\layouts\full-page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23699581ad0c547a9a3_58474442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0526715c1b671a04dbca7a2609074d58e2fdb20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\layouts\\full-page.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23699581ad0c547a9a3_58474442',
  'variables' => 
  array (
    'action_title' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad0c556d8b9_06179013',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad0c556d8b9_06179013')) {
function content_581ad0c556d8b9_06179013 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_asset_uri')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_asset_uri.php';
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';
if (!is_callable('smarty_function_alerts')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.alerts.php';
if (!is_callable('smarty_function_breadcrumb')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.breadcrumb.php';
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';
if (!is_callable('smarty_function_get_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.get_action_title.php';
if (!is_callable('smarty_function_action_view')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_view.php';

$_smarty_tpl->properties['nocache_hash'] = '23699581ad0c547a9a3_58474442';
?>
    <?php ob_start();
echo smarty_function_theme_asset_uri(array('theme'=>'arewa'),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['theme_public_url'] = new Smarty_Variable($_tmp1, null, 0);?>
    <?php echo smarty_function_locate_load(array('file'=>"partials/header"),$_smarty_tpl);?>

</head>
    <body>
    <?php echo smarty_function_locate_load(array('file'=>"partials/navigation"),$_smarty_tpl);?>

        <div class="container">
            <div class="row" style="padding-top: 35px;">
                <!-- content Column -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="alert-blcok"  class="row "> 
                    <?php echo smarty_function_alerts(array(),$_smarty_tpl);?>
 
                </div>
                <div class="row">
                    <?php echo smarty_function_breadcrumb(array(),$_smarty_tpl);?>
 
                </div>
                <?php echo smarty_function_HOOK(array('location'=>'page.before'),$_smarty_tpl);?>
 
                 <?php ob_start();
echo smarty_function_get_action_title(array(),$_smarty_tpl);
$_tmp2=ob_get_clean();
$_smarty_tpl->tpl_vars['action_title'] = new Smarty_Variable($_tmp2, null, 0);?>
                 <div id="action-block" class='panel  main-content'>
                      <?php if ($_smarty_tpl->tpl_vars['action_title']->value) {?>
                        <div class="panel-heading"> 
                            <h1 class="title-header"><?php echo $_smarty_tpl->tpl_vars['action_title']->value;?>
 </h1>
                        </div>
                        <?php }?>
                    <div id="action-block-body" class="panel-body " style="min-height: 300px" >
                        
                        
                            <?php echo smarty_function_action_view(array(),$_smarty_tpl);?>
 
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php echo smarty_function_HOOK(array('l'=>'page.after','user'=>$_smarty_tpl->tpl_vars['user']->value,'me'=>'wow'),$_smarty_tpl);?>
           
            </div> <!--act-->
            </div>  <!-- /.row -->
        </div>
         <?php echo smarty_function_locate_load(array('f'=>"partials/footer"),$_smarty_tpl);?>
 
    </body>
</html>
<?php }
}
?>