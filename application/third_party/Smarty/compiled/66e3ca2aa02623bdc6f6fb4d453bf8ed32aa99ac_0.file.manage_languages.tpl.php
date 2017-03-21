<?php /* Smarty version 3.1.27, created on 2017-01-17 03:30:07
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\nyra_developer\views\admin\manage_languages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:858587e2a6f7dccf1_83936387%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e3ca2aa02623bdc6f6fb4d453bf8ed32aa99ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\nyra_developer\\views\\admin\\manage_languages.tpl',
      1 => 1470149176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858587e2a6f7dccf1_83936387',
  'variables' => 
  array (
    'languages' => 0,
    'idiom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587e2a70512d80_20776396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e2a70512d80_20776396')) {
function content_587e2a70512d80_20776396 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '858587e2a6f7dccf1_83936387';
echo smarty_function_theme_plugin(array('name'=>'bootstrap-datatables'),$_smarty_tpl);?>

    <div class="form-group col-md-4">
        <label for="main-language">Main Language</label>
        <select id="main-language" class="form-control lang-control">
            <option value="english">English</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="project-type">Project Type</label>
        <select id="project-type" class="form-control lang-control">
            <option value="plugin">Plugin</option>
            <option value="theme">Theme</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="project-folder">Project Name</label>
        <select id="project-folder" class="form-control lang-control">
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="language-files">Language Files</label>
        <select id="language-files" class="form-control lang-control">
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="lang-key">Language Key</label>
        <select id="lang-key" class="form-control lang-control">
        </select>
    </div>
    

<div class="col-lg-12" >
    <h3 class="text-danger" >Current Language Key : <span class="text-success" id="current-lang-key">Select Language Key </span> </h3>
    <div class="table-responsive">
            <table class="table table-hover" id="lang-table">
                <thead>
                    <tr class="text-danger">
                        <th>Language</th> 
                        <th> Text</th> 
                    </tr>
                 </thead>
                 <tbody>

                       <?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['idiom'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['idiom']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['idiom']->value) {
$_smarty_tpl->tpl_vars['idiom']->_loop = true;
$foreach_idiom_Sav = $_smarty_tpl->tpl_vars['idiom'];
?>
                           <tr>
                               <td > <span class="text-primary" id="lang-name-<?php echo $_smarty_tpl->tpl_vars['idiom']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['idiom']->value;?>
</span></td>
                               <td>
                                   <textarea cols="20" data-idiom="<?php echo $_smarty_tpl->tpl_vars['idiom']->value;?>
" name="translation[<?php echo $_smarty_tpl->tpl_vars['idiom']->value;?>
]" id="lang-name-value-<?php echo $_smarty_tpl->tpl_vars['idiom']->value;?>
" class="form-control lang-item"></textarea>
                                   <button data-target="#lang-name-value-<?php echo $_smarty_tpl->tpl_vars['idiom']->value;?>
" class="btn btn-default paste">Paste</button>
                               </td>
                           </tr> 
                       <?php
$_smarty_tpl->tpl_vars['idiom'] = $foreach_idiom_Sav;
}
?>
                 </tbody>
            </table>
    </div>
    <button id="update-files" class="btn btn-justified btn-success">Update Files </button>

</div> 
                 
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/clipboard.js/1.5.10/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    function updateSelectOptions( inputSelector , data ){
         var ele = $(inputSelector)
         removeSelectOptions(ele);
        
         for( i in data){
             var option = $('<option>');
             option.attr("value" ,data[i] );
             option.html(data[i]);
             ele.append( option );
         }
    }
    
    
    function removeSelectOptions(inputSelector){
        var ele = $(inputSelector);
        ele.children('option').remove();
        return ele;
    }
    
    function addEmptySelectOption(inputSelector){
        var ele = $(inputSelector);
        ele.append($('<option>').attr('value','').html('select'))
    }
    
        
    $('#project-type').change( projectTypeTrigger );
    $('#project-folder').change( projectFolderTrigger);
    $('#language-files').change( projectFilesTriger );
    $('#lang-key').change( langKeyTrigger );
    
    
    
    function projectFilesTriger(){
        var projectName , projectType , langFile ;
            projectName = $('#project-folder').val();
            projectType = $('#project-type').val();
            langFile = $('#language-files').val();
            if( projectName && projectType && langFile ){
                var langUrl = '<?php echo admin_url('nyra_developer/get_project_language_key/',false);?>
' + projectType + '/' + projectName + '/' + langFile;
                Nyra.request.post( langUrl , {} , { 'done' : function( response){
                        if( response.error_message ){
                            Nyra.util.alert( response.error_message );
                            return;
                        }
                        updateSelectOptions('#lang-key' , response.data );
                        $('#lang-key').trigger('change');
                        //Nyra.request.post( );
                    }
                });
            }

    }
    
    function projectTypeTrigger(){
        var projectType = $('#project-type').val();
            var projectUrl = '<?php echo admin_url('nyra_developer/get_project_options/',false);?>
' + projectType ;
            Nyra.request.post( projectUrl , {} , { 'done' : function( response){
                        if( response.error_message ){
                            Nyra.util.alert( response.error_message );
                            return;
                        }
                        updateSelectOptions('#project-folder' , response.data );
                        // triger the project files 
                       $('#project-folder').trigger('change');
                    }
            });
        }
    
    /**
     * Get the langage files for current selected project
     * @returns void
     */
    function projectFolderTrigger(){
        var projectFolder , projectType , langUrl ;
            projectFolder = $('#project-folder').val();
            projectType = $('#project-type').val();
            if( projectFolder && projectType ){
                var langUrl = '<?php echo admin_url('nyra_developer/get_project_languages/',false);?>
' + projectType + '/' + projectFolder ;
                Nyra.request.post( langUrl , {} , { 'done' : function( response){
                        if( response.error_message ){
                            Nyra.util.alert( response.error_message );
                            return;
                        }
                        if(!response.data){
                            // remove the laguage files, they might not be related to current project
                            removeSelectOptions('#language-files');
                            removeSelectOptions('#lang-key');
                            addEmptySelectOption('#language-files')
                            addEmptySelectOption('#lang-key')
                            return;
                        }
                        updateSelectOptions('#language-files' , response.data );
                        projectFilesTriger();
                    }
                });
            }
    }
    
    
    /**
    * get the language keys for current selected project language file
     */
    function langKeyTrigger(){
        var projectFolder , projectType , langFile, langKey , langUrl ;
        projectFolder = $('#project-folder').val();
        projectType = $('#project-type').val();
        langFile = $('#language-files').val();
        langKey = $('#lang-key').val();
        if( projectFolder && projectType && langFile && langKey ){
            var langUrl = '<?php echo admin_url('nyra_developer/get_project_translations/',false);?>
' + projectType + '/' + projectFolder + '/' + langFile + '/' + langKey;
            Nyra.request.post( langUrl , {} , { 'done' : function( response){
                    if( response.error_message ){
                        Nyra.util.alert( response.error_message );
                        return;
                    }
                    // update the indicator
                    $('#current-lang-key').text( langKey );
                    updateTableContent(response.data );
                    //Nyra.request.post( );
                }
            });
        }
     }
     
     
     // update files
     $('#update-files').click( function(){
        var projectFolder , projectType , langFile , langUrl , langKey;
        var data ={};
        projectFolder = $('#project-folder').val();
        projectType = $('#project-type').val();
        langFile = $('#language-files').val();
        langKey = $('#lang-key').val();
        
        if( projectFolder && projectType && langFile && langKey ){
            var roller = Nyra.util.startRoller( 'Updating languages...please wait');
            var langUrl = '<?php echo admin_url('nyra_developer/update_project_translations/',false);?>
' + projectType + '/' + projectFolder + '/' + langFile + '/' + langKey;
            $('.lang-item').each(function( ){
                 elem = $(this );
                data[elem.data('idiom')] = elem.val();
            });
            Nyra.request.post( langUrl ,{ 'data' :  data } , { 'done' : function( response){
                Nyra.util.stopRoller( roller );
                if( response.error_message){
                    Nyra.util.alert( response.error_message , 'error'  ,'Error');
                }else{
                    Nyra.util.alert( 'language files updated' , 'success' ,'Successful!!!' );
                }
                
            }})
        }
        
    });
    
    
    $('.paste').click( function(){
       alert( window.clipboardData.getData('Text'))

    
    });
    function updateTableContent( data ){
        for(i in data){
            $('#lang-name-value-' + i ).val(  data[i]  ) ;
        }
    }
   
    // init
    projectTypeTrigger()
    
    
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
    $( '#lang-table' ).DataTable();
    <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>