<?php /* Smarty version 3.1.27, created on 2016-11-08 03:06:01
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\browse_url.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109295821dbc903a948_75934100%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d431c0e9c71d46f94a9408c77208a3d1b76fe4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\browse_url.tpl',
      1 => 1474552765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109295821dbc903a948_75934100',
  'variables' => 
  array (
    'request_url' => 0,
    'relative_url' => 0,
    'links' => 0,
    'tab' => 0,
    'section' => 0,
    'count' => 0,
    'links_data' => 0,
    'active_class' => 0,
    'data' => 0,
    'obj' => 0,
    'limit' => 0,
    'tab_content' => 0,
    'is_form_helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821dbca7bdd75_06395233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821dbca7bdd75_06395233')) {
function content_5821dbca7bdd75_06395233 ($_smarty_tpl) {
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '109295821dbc903a948_75934100';
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
<body>
    <div class="container">

        <a href="<?php echo $_smarty_tpl->tpl_vars['request_url']->value;?>
" class="btn btn-success"> 
            <span class="glyphicon glyphicon-refresh"> </span><?php if ($_smarty_tpl->tpl_vars['relative_url']->value) {?> 
            <?php echo lang('plugin_plugins_full_url');
} else { ?>  <?php echo lang('plugin_plugins_relative_url');
}?> 
        </a>
                <?php $_smarty_tpl->tpl_vars['active_class'] = new Smarty_Variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tab_content'] = new Smarty_Variable(array(), null, 0);?>
        
        <ul class="nav nav-tabs">
            <?php
$_from = $_smarty_tpl->tpl_vars['links']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['links_data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['links_data']->_loop = false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['links_data']->value) {
$_smarty_tpl->tpl_vars['links_data']->_loop = true;
$foreach_links_data_Sav = $_smarty_tpl->tpl_vars['links_data'];
?>
                
                <?php if ($_smarty_tpl->tpl_vars['tab']->value == $_smarty_tpl->tpl_vars['section']->value || (!$_smarty_tpl->tpl_vars['tab']->value && $_smarty_tpl->tpl_vars['count']->value == 0)) {?>
                    <?php $_smarty_tpl->tpl_vars['active_class'] = new Smarty_Variable('active', null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['active_class'] = new Smarty_Variable('', null, 0);?>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['links_data']->value['data'])) {?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['active_class']->value;?>
"> 
                        <a href="#<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
" data-toggle="tab" >
                            <?php echo $_smarty_tpl->tpl_vars['section']->value;?>

                        </a>  
                    </li>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "tab_content"); ob_start(); ?>
                        <div id='<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
' class='tab-pane fade in <?php echo $_smarty_tpl->tpl_vars['active_class']->value;?>
'>

                            <?php if (is_string($_smarty_tpl->tpl_vars['links_data']->value['data'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                            <?php } elseif (is_array($_smarty_tpl->tpl_vars['links_data']->value['data'])) {?>
                                
                                <div class="col-lg-12" >
                                    <div class="table-responsive">
                                        <table class="table table-hover links-table" id="">
                                            <thead>
                                                <tr>
                                                    <th> ID </th>
                                                    <th> <?php echo lang('label_title');?>
 </th>
                                                    <th> <?php echo lang('label_url');?>
 </th>
                                                    <th><?php echo lang('noun_actions');?>
 </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['links_data']->value['data'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['obj']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->_loop = true;
$foreach_obj_Sav = $_smarty_tpl->tpl_vars['obj'];
?>
                                                <tr>
                                                    <td> <?php echo $_smarty_tpl->tpl_vars['obj']->value->getId();?>
 </td>
                                                    <td> <?php echo $_smarty_tpl->tpl_vars['obj']->value->getTitle();?>
 </td>
                                                    <td> <?php echo $_smarty_tpl->tpl_vars['obj']->value->getUrl($_smarty_tpl->tpl_vars['relative_url']->value);?>
</td>
                                                    <td>  
                                                        <a href="#" data-link-url="<?php echo $_smarty_tpl->tpl_vars['obj']->value->getUrl($_smarty_tpl->tpl_vars['relative_url']->value);?>
" 
                                                             data-property-id="<?php echo $_smarty_tpl->tpl_vars['obj']->value->id;?>
" class="btn btn-primary select-btn" ><?php echo lang('verb_select');?>

                                                        </a> 
                                                    </td>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['obj'] = $foreach_obj_Sav;
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p><?php ob_start();
echo current_full_url(false);
$_tmp1=ob_get_clean();
echo pagination_links($_smarty_tpl->tpl_vars['links_data']->value['total'],$_smarty_tpl->tpl_vars['limit']->value,$_tmp1."&tab=".((string)$_smarty_tpl->tpl_vars['section']->value));?>
</p>
                                </div>
                            <?php }?>
                        </div>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }?>
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(1, null, 0);?>
            <?php
$_smarty_tpl->tpl_vars['links_data'] = $foreach_links_data_Sav;
}
?>
        </ul> 
        <div class="tab-content">
             <?php echo join('',$_smarty_tpl->tpl_vars['tab_content']->value);?>

        </div>
      </div> 
        <?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-datatables'),$_smarty_tpl);?>

        <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>

            <?php echo '<script'; ?>
 type='text/javascript'>
                
                /**
                 * 
                 * @param {string} paramName
                 * @returns {getUrlParam.match}
                 */
                function getUrlParam( paramName ) {
                        var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' ) ;
                        var match = window.location.search.match(reParam) ;
                        return ( match && match.length > 1 ) ? match[ 1 ] : null ;
                    }
                    var funcNum = getUrlParam( 'CKEditorFuncNum' );


                

            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type='text/javascript'>
               var dataTable = $( '.links-table' ).DataTable({
                            'order'  : [[ 1 , 'desc']]
                   });
                // to allow the select button event to work, me must re hook event
                // when data tables new page loads
               dataTable.on('draw' , hookSelectBtn ) ;
               function hookSelectBtn() {
                  $( '.select-btn'  ).click( function(){
                       var url = $( this).attr( 'data-link-url' );
                       var isFormHelper =  '<?php echo $_smarty_tpl->tpl_vars['is_form_helper']->value;?>
' ;

                       if ( url  ){
                           
                           if( ! funcNum ){
                               window.top.Nyra.dialogue.callback( url );
                               return;
                           }else{
                               
                               window.opener.CKEDITOR.tools.callFunction( funcNum ,  url );
                           }
                           window.close() ;
                       }
                  });
              }
              hookSelectBtn();
           <?php echo '</script'; ?>
>
           
    </body>
</html>
<?php }
}
?>