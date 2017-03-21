<?php /* Smarty version 3.1.27, created on 2016-11-01 12:20:58
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\appearance\views\admin\theme_files.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:208575819235a9c48c1_01155926%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e186d330dcac9b7b7491283191646430d2434c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\appearance\\views\\admin\\theme_files.tpl',
      1 => 1478042454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208575819235a9c48c1_01155926',
  'variables' => 
  array (
    'themes' => 0,
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819235aaba302_89968932',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819235aaba302_89968932')) {
function content_5819235aaba302_89968932 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '208575819235a9c48c1_01155926';
echo smarty_function_theme_plugin(array('name'=>'codemirror'),$_smarty_tpl);?>

<style>
    #files-menu > li > a{
            padding: 5px 15px;
    }
</style>
<div class="col-md-8">
    <div class="form-group">
        <textarea name="file-content" id="file-content-editor"></textarea>
    </div>
    <p>
        <?php echo lang('action_select');?>
 theme:
        <select onchange="" id=select-theme>
            <?php echo Tools::getCodeMirrorThemeOptions();?>

        </select>
        <span class="pull-right">
            <button id="update-btn" class="btn btn-success ">Update</button>
        </span>
        
    </p>
    
</div>
<div class="col-md-4">
    
    <div class="form-group">
        <label>Select Package</label>
        <select id="package-name" class="form-control">
            <?php
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$foreach_theme_Sav = $_smarty_tpl->tpl_vars['theme'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['theme']->value->title;?>
</option>
            <?php
$_smarty_tpl->tpl_vars['theme'] = $foreach_theme_Sav;
}
?>
        </select>
        
    </div>
    <div class="well" id="file-list">
        
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
        (function(){
            // add codemiror required css
            Nyra.util.addJs('assets/codemirror/mode/javascript/javascript.js');
            Nyra.util.addJs('assets/codemirror/mode/smarty/smarty.js');
            Nyra.util.addJs('assets/codemirror/mode/php/php.js');
            Nyra.util.addJs('assets/codemirror/mode/xml/xml.js');
            Nyra.util.addJs('assets/codemirror/addon/edit/matchbrackets.js');
            Nyra.util.addJs('assets/codemirror/addon/comment/continuecomment.js');
            Nyra.util.addCss('assets/codemirror/theme/3024-night.css');
            
            // the file list container
            var container = $('#file-list');
            var currentFile ;
            // editot options
            var options = {
              lineNumbers: true,
              styleActiveLine: true,
              matchBrackets: true , 
              matchBrackets: true,
              continueComments: "Enter",
              theme  : '3024-night' ,
               mode: "xml"  ,
              extraKeys: { "Ctrl-Space": "autocomplete" },
            };
            var nyrafileeditor = CodeMirror.fromTextArea(document.getElementById("file-content-editor"),options );
            nyrafileeditor.setSize('100%' , 500 );
            
           $('#select-theme').change(function(){
                var input = this;
                var theme = input.options[input.selectedIndex].innerHTML;
                // add the css for the theme
                Nyra.util.addCss('assets/codemirror/theme/' + theme + '.css');
                nyrafileeditor.setOption("theme", theme);
            });
            
            
            //var inputPackageType =  $('#package-type');
            var inputPackageName =  $('#package-name');
            
            function getPackageFiles(){
                
                container.html('');
                Nyra.util.startRoller('Fetching...' , null, container)
                var data = { 
                        'type' : 'theme' ,
                        'name' : inputPackageName.val() 
                        
                };
                var done = function(response){
                    if(response.error_message){
                        Nyra.util.alert(response.error_message);
                        
                        return;
                    }
                    
                    // remove current names
                    updateFileList( response.data.files )
                }           
                Nyra.request.post('<?php echo admin_url("files/get_package_files");?>
' , data , { 'done' : done })
            }
            
            
            function updateFileList(files) {
                console.log(files)
                // clear previous
                container.html('')
                var tree = $('<ul>', { 'class' : 'nav' , 'id' : 'files-menu'});
                // add single list item
                var appendSingle = function(parentElem, value){
                    var item = $('<li>', { 'class' : ''});
                    item.html('<a class="file-item" data-file-name="'+value+'" href="#"><i class="glyphicon glyphicon-file"></i> '+value+'</a>');
                    parentElem.append(item);
                }
                var recursiveList = function(parent,basepath , data){
                    
                    for(var i in data){
                        if(data[i].constructor == Object || data[i].constructor == Array) {
                            // its a folder
                            // we will add the folder as base for children
                            var path = basepath + i ;
                            var item = $('<li>', { 'class' : ''});
                            var folder = i.replace('\\' , '');
                            item.append('<a ><i class="glyphicon glyphicon-folder-open"></i> <strong>'+folder+'</strong><span class="fa arrow" ></span></a>');
                            var sub = ($('<ul>', { 'class' : 'nav nav-second-level'}));
                            item.append(sub);
                            parent.append(item)
                            if(data[i].constructor == Array){
                                for(var x in data[i]){
                                    appendSingle(sub , basepath+i+data[i][x]);
                                }
                                delete data[i];
                            }
                            recursiveList(sub , path , data[i] )
                        }else if(data[i].constructor == String){
                            appendSingle(parent , basepath+data[i]);
                             // its file
                        }else if(data[i].constructor == Array){
                            for(var x in data[i]){
                                appendSingle(parent , basepath+data[i][x]);
                            }
                        }
                    }
                };
                
                recursiveList(tree,'',files)
                container.html();
                container.append(tree);
                tree.metisMenu();
                $('.file-item').click(function(){
                    getFileContent($(this))
                })
            }
            
            function getFileContent(elem){
                
                var rollerId = Nyra.util.startRoller('Fetching file content...' );
                var data = { 
                        'type' : 'theme' ,
                        'name' : inputPackageName.val(),
                        'file' : elem.data('file-name')
                        
                };
                var done = function(response){
                    Nyra.util.stopRoller(rollerId);
                    if(response.error_message){
                        Nyra.util.alert(response.error_message);
                        return
                    }
                    //set the current file
                    currentFile = elem.data('file-name');
                    setEditorMode(response.data.ext);
                    nyrafileeditor.setValue(response.data.content);
                    //clear history
                    nyrafileeditor.doc.clearHistory()
                    
                    
                    //document.getElementById("file-content-editor").innerHTML = response.data.content;
                }           
                Nyra.request.post('<?php echo admin_url("files/get_package_file_content");?>
' , data , { 'done' : done })
            }
            
            function setEditorMode(extension){
                var mode = extension;
                if(extension == 'tpl'){
                    mode = 'smarty' ;
                }
                nyrafileeditor.setOption('mode' , mode);
                
            }
            // initialize
            getPackageFiles();
            
            inputPackageName.change(function(){
                getPackageFiles()
            })
            
            // update file
            $('#update-btn').click(function(){
                var rollerId = Nyra.util.startRoller('Updating file content...' );
                var data = { 
                        'type' : 'theme' ,
                        'name' : inputPackageName.val(),
                        'file' : currentFile ,
                        'content' :nyrafileeditor.getValue()
                        
                };
                var done = function(response){
                    Nyra.util.stopRoller(rollerId);
                    if(response.error_message){
                        Nyra.util.alert(response.error_message);
                        return
                    }
                    Nyra.util.alert('Updated Successfuly')
                    //document.getElementById("file-content-editor").innerHTML = response.data.content;
                }           
                Nyra.request.post('<?php echo admin_url("files/update_package_file_content");?>
' , data , { 'done' : done })
                
            })
            
        })();
    <?php echo '</script'; ?>
>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>