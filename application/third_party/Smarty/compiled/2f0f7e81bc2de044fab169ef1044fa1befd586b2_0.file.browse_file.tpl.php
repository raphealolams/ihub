<?php /* Smarty version 3.1.27, created on 2016-10-31 15:42:09
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\files\views\admin\browse_file.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:458558180101274417_34738515%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0f7e81bc2de044fab169ef1044fa1befd586b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\files\\views\\admin\\browse_file.tpl',
      1 => 1474552758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '458558180101274417_34738515',
  'variables' => 
  array (
    'files' => 0,
    'file' => 0,
    'lang_select' => 0,
    'is_form_helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58180101433076_84930930',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58180101433076_84930930')) {
function content_58180101433076_84930930 ($_smarty_tpl) {
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';
if (!is_callable('smarty_function_multitab_link')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.multitab_link.php';
if (!is_callable('smarty_block_multitab_content')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.multitab_content.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '458558180101274417_34738515';
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
    <?php echo smarty_function_multitab_link(array('hook'=>'files.browse.tab','link_open'=>'<ul class=" nav nav-pills multitab-nav">','item_template'=>' <li role="presentation" class="[[active_class]]"><a href="[[url]]">[[title]]</a></li>','default_tab_title'=>'Local','add_default_tab'=>true),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('multitab_content', array('hook'=>'files.browse.tab')); $_block_repeat=true; echo smarty_block_multitab_content(array('hook'=>'files.browse.tab'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['lang_select'] = new Smarty_Variable(lang('verb_select'), null, 0);?>
        <div class="col-lg-12" >
             <div class="table-responsive">
                  <table class="table table-hover" id="files-table">
                     <thead>
                         <tr>
                             <th> Id </th> 
                             <th> <?php echo lang('adejective_created');?>
 </th>
                             <th><?php echo lang('plugin_files_filename');?>
 </th>
                             <th>Thumbnails preview (image type) </th>
                             <th> Main Preview </th> 
                             <th><?php echo lang('noun_actions');?>
 </th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php
$_from = $_smarty_tpl->tpl_vars['files']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
$foreach_file_Sav = $_smarty_tpl->tpl_vars['file'];
?>
                             <tr>
                                 <td>  <?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
 </td>
                                 <td> <?php echo $_smarty_tpl->tpl_vars['file']->value->created;?>
 </td>
                                 <td> <?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
 </td>
                                 
                                 <td >
                                     <div class="col-md-3" id="thumbs-<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
">
                                     </div>
                                 </td>
                                 <td> 
                                     <?php if ($_smarty_tpl->tpl_vars['file']->value->isHtmlImage()) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" class="img file-img select-btn"
                                              data-thumbnails="<?php echo join(',',$_smarty_tpl->tpl_vars['file']->value->thumbnails);?>
" 
                                              data-file-url-path="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrlPath();?>
"
                                              data-image-url="<?php echo $_smarty_tpl->tpl_vars['file']->value->getRelativeUrl();?>
"
                                              data-thumbnails-container="#thumbs-<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
"
                                              style="max-height: 300px; max-width: 300px">
                                     <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->isHtmlVideo()) {?>
                                         <video width="200px" height='240' controls>
                                             <source src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" type="<?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
" >
                                         </video>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->isHtmlAudio()) {?>
                                          <audio width="200px" height='240' controls>
                                             <source src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" type="<?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
" >
                                          </audio>
                                     <?php } else { ?>

                                     <?php }?>
                                     <?php echo $_smarty_tpl->tpl_vars['file']->value->caption;?>

                                 </td>
                                 <td>  
                                     <a href="#" data-image-url="<?php echo $_smarty_tpl->tpl_vars['file']->value->getRelativeUrl();?>
" 
                                          class="btn btn-primary select-btn" ><?php echo $_smarty_tpl->tpl_vars['lang_select']->value;?>

                                     </a> </td>
                             </tr>
                         <?php
$_smarty_tpl->tpl_vars['file'] = $foreach_file_Sav;
}
?>
                     </tbody>
                 </table>
             </div>
         </div> 
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_multitab_content(array('hook'=>'files.browse.tab'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo Tools::activateThemePlugin('bootstrap-datatables');?>

     
    <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>

   
 
     <?php echo '<script'; ?>
 type='text/javascript'>
        
        /**
         * 
         * @param {type} paramName
         * @returns {getUrlParam.match}
         */
           
                    
            function getUrlParam( paramName ) {
                var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' ) ;
                var match = window.location.search.match(reParam) ;
                return ( match && match.length > 1 ) ? match[ 1 ] : null ;
            }
            var funcNum = getUrlParam( 'CKEditorFuncNum' );
            var fileUrl = '{$url}' ;
            
               
        
           
    <?php echo '</script'; ?>
>
             <?php echo '<script'; ?>
 type='text/javascript'>
                function createTumbnails(){
                $('.file-img').each(function(index , elem){
                    var img = $(elem);
                    var path = img.data('file-url-path');
                    // make array of tumbnails
                    var thums = img.data('thumbnails').split(',');
                    var thumbsContainer = $(img.data('thumbnails-container'));
                    $(thums).each(function(index , value){
                        var thumbImg = document.createElement('img');
                        thumbImg.src = path + value ;
                        thumbImg.setAttribute('data-image-url' , path + value );
                        
                        thumbImg.className = 'img select-btn';
                        thumbImg.style.margin = '3px'
                        thumbImg.style['max-width'] = '200px'
                        thumbsContainer.append( thumbImg );
        
                    })
                });
            }
            function hookDataTables(){
                    createTumbnails()
                    $( '.select-btn'  ).click( function(){
                        var picUrl = $( this).attr( 'data-image-url' );
                        var isFormHelper = '<?php echo $_smarty_tpl->tpl_vars['is_form_helper']->value;?>
' ;
                        if ( picUrl  ){

                            // this works for custom browser
                            if( !funcNum ){
                                //<?php echo "window.top.".((string)$_smarty_tpl->tpl_vars['form_helper_func']->value);?>
(picUrl );
                                window.top.Nyra.dialogue.callback( picUrl  );
                                return;
                            }
                            //console.log(picUrl )
                            window.opener.CKEDITOR.tools.callFunction( funcNum ,  picUrl );
                            window.close() ;
                        }
                    });
                }
            dataTables = $( '#files-table' ).DataTable();
            dataTables.on('draw' , hookDataTables );
            hookDataTables();
        <?php echo '</script'; ?>
>
            
           
</body>
</html><?php }
}
?>