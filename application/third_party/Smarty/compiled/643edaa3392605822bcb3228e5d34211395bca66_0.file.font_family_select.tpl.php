<?php /* Smarty version 3.1.27, created on 2016-10-31 15:30:08
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\font_family_select.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:136605817fe30376875_99326577%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '643edaa3392605822bcb3228e5d34211395bca66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\font_family_select.tpl',
      1 => 1477751577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136605817fe30376875_99326577',
  'variables' => 
  array (
    'fonts' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817fe30dddc31_53830316',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817fe30dddc31_53830316')) {
function content_5817fe30dddc31_53830316 ($_smarty_tpl) {
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '136605817fe30376875_99326577';
?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php echo smarty_function_meta_tags(array(),$_smarty_tpl);?>

    <?php echo smarty_function_link_tags(array(),$_smarty_tpl);?>

    <title> <?php echo smarty_function_page_title(array(),$_smarty_tpl);?>
</title> 
     <?php echo smarty_function_header_style_hooks(array(),$_smarty_tpl);?>
  
    
    <?php echo smarty_function_header_script_hooks(array(),$_smarty_tpl);?>
  	
</head>
<div class="container">
    <div class="col-lg-12" >
          <div class="table-responsive">
             <table class="table table-hover links-table" id="">
                <thead>
                    <tr>
                        <th> Icon Name </th>
                        <th> Icon </th>
                        <th><?php echo lang('noun_actions');?>
 </th>
                    </tr>
                 </thead>
                 <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['fonts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
                        <tr> 
                            <td> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
  </td>
                            <td> 
                               <h3 style="font-family:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">This is Heading</h3>
                               <p style="font-family:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">This is paragraph</p>
                            </td>
                            <td>  <a href="#" data-font-family='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
' 
                                     class="btn btn-primary select-btn" ><?php echo lang('verb_select');?>
</a> 
                            </td>
                        </tr>
                <?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>
                </tbody>
            </table>
        </div>
        
    </div>

 <?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-datatables'),$_smarty_tpl);?>

 <?php echo smarty_function_theme_plugin(array('name'=>'font-awesome'),$_smarty_tpl);?>

 <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>

    <?php echo '<script'; ?>
 type='text/javascript'>
        var dataTable =     $( '.links-table' ).DataTable({
                                
                            });
        dataTable.on('draw' , hookSelectBtn ) ;
         
        function hookSelectBtn(){
            $( '.select-btn'  ).click( function(){
                 var propertyValue = $( this).attr( 'data-font-family' );
                 if ( propertyValue  )
                 {
                     var preview = "<h3 style='font-family:"+propertyValue+"'>This is Heading</h3>" ;
                     preview += "<p style='font-family:"+propertyValue+"'>This is Heading</p>" ;
                    window.top.Nyra.dialogue.callback( propertyValue  , null , preview );
                 }
            });
        }
        hookSelectBtn();
        <?php echo '</script'; ?>
>
</div>
 </body>
</html>
 
<?php }
}
?>