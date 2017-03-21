<?php /* Smarty version 3.1.27, created on 2017-01-23 07:17:27
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\icon_select.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15659588648b7719681_62618266%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d90b3d41492238b9300b5f1ca63029b177d286' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\icon_select.tpl',
      1 => 1477751040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15659588648b7719681_62618266',
  'variables' => 
  array (
    'icons' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588648b7a52d51_15095104',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588648b7a52d51_15095104')) {
function content_588648b7a52d51_15095104 ($_smarty_tpl) {
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '15659588648b7719681_62618266';
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
$_from = $_smarty_tpl->tpl_vars['icons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['icon']->_loop = false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->_loop = true;
$foreach_icon_Sav = $_smarty_tpl->tpl_vars['icon'];
?>
                        <tr> 
                            <td> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
  </td>
                            <td> <i class="fa <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></i> </td>
                            <td>  <a href="#" data-icon="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" 
                                     data-icon-name="fa <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"  
                                     class="btn btn-primary select-btn" ><?php echo lang('verb_select');?>
</a> 
                            </td>
                        </tr>
                <?php
$_smarty_tpl->tpl_vars['icon'] = $foreach_icon_Sav;
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
                 var propertyValue = $( this).attr( 'data-icon-name' );
                 if ( propertyValue  )
                 {
                    window.top.Nyra.dialogue.callback( propertyValue  , null , '<i class="fa '+propertyValue+'"></i>' );
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