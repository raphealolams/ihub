<?php /* Smarty version 3.1.27, created on 2016-11-08 03:07:33
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\files\views\admin\upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:105965821dc25376298_04331775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715fd718798e3273b84ac3310cd340366ad76ebe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\files\\views\\admin\\upload.tpl',
      1 => 1477783420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105965821dc25376298_04331775',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821dc254547e3_83198864',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821dc254547e3_83198864')) {
function content_5821dc254547e3_83198864 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '105965821dc25376298_04331775';
ob_start();
echo lang('plugin_files_upload_file');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo HtmlHelper::listButton(admin_url('files/manage'));?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

<?php echo smarty_function_theme_plugin(array('name'=>"plupload"),$_smarty_tpl);?>

<?php echo smarty_function_theme_plugin(array('name'=>"bootstrap-progreessbar-manager"),$_smarty_tpl);?>

<div class="col-md-12">
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <div class="alert alert-success"> <?php ob_start();
echo lang('plugin_files_file');
$_tmp2=ob_get_clean();
echo lang('alert_upload_success_#',$_tmp2);?>
  </div>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->openMultipart('',array('class'=>'form-horizontal'));?>

       
       <div class="col-xs-2">
            <label for="caption">Caption</label>
            <input class="form-control" id="caption" name='caption' type="text">
          </div>
          <div class="col-xs-2">
            <label for="width">Width</label>
            <input class="form-control" name="width" id="width" type="number">
          </div>
          <div class="col-xs-2">
            <label for="height">Height</label>
            <input class="form-control" name="height" id="height" type="number">
          </div>
          <div class="col-xs-2">
            <label for="quality">Quality</label>
            <input class="form-control" value="80" name="quality" id="quality" type="number">
          </div>
        <div class="col-xs-2">
          <div class="checkbox">
                <label><input type="checkbox" name="resize" id="resize" value="">Resize</label>
              </div>
          </div>
                 
    <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

</div>
<div class="col-md-4">
    <div id="upload-handler-container">
        <a id="pickfiles" class="btn btn-default btn-large" href="javascript:;">
            <i class="glyphicon glyphicon-file"></i>[Select files]</a> 
        <a id="uploadfiles" class="btn btn-default btn-large"href="javascript:;">
            <i class="glyphicon glyphicon-upload"></i>[Upload files]</a>
    </div>
    
</div>
<div class="col-md-4">
    <div id="file-list" class="list-group">

    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
 type="text/javascript">
    
(function(){
    var getResizeOption = function(){
        return ($("#resize").prop('checked') == false)? false : {
            width : $("#width").val() , height: $("#height").val() , quality : $("#quality").val() 
        };
    }       
    
    var uploader = new plupload.Uploader({
        runtimes : 'html5,flash,silverlight,html4',
        browse_button : 'pickfiles', // you can pass in id...
        container: document.getElementById('upload-handler-container'), // ... or DOM Element itself
        url : '/files/upload_file_editor?uploader=plupload',
        flash_swf_url : '../js/Moxie.swf',
        silverlight_xap_url : '../js/Moxie.xap',

        filters : {
                max_file_size : '10mb',
                mime_types: [
                        { title : "Image files", extensions : "jpg,gif,png"},
                        { title : "Zip files", extensions : "zip"}
                ]
        },

        init: {
                PostInit: function() {
                    document.getElementById('uploadfiles').onclick = function() {
                        uploader.resize = getResizeOption();
                       // console.log(getResizeOption())
                        uploader.start();
                        // animate the progress bar using the instance we saved when 
                        // it was added
                        plupload.each(uploader.files, function(file) {
                            file.progressBar.style('primary');
                            file.progressBar.animate();
                        });
                        return false;
                    };
                },

                FilesAdded: function(up, files) {
                      
                       var lastFile = files.pop();
                       var newList = $('<div />' , { class : 'list-group-item' });
                       newList.text(lastFile.name);
                       var removeIcon = $('<i />', { class : 'glyphicon glyphicon-remove pull-right' });
                       removeIcon.click(function(){
                            pb.destroy();
                            newList.remove();

                        })
                        newList.append(removeIcon)
                       $('#file-list').append(newList)
                       var progresBarId = 'progress-'+lastFile.name;
                       var pb = newList.progressbarManager({
                            id : progresBarId,
                            totalValue : 100,
                            animate : true ,
                            stripe : true,
                            showValueHandler : function(bar){
                                 return bar.elem.text(lastFile.name+ ' '+ bar.elem.attr('aria-valuenow')+'%');
                            }
                       });
                       pb.style('warning');
                       // save progress bar object
                       lastFile.progressBar = pb;
                },

                UploadProgress: function(up, file) {
                    // get the progress bar object
                        file.progressBar.setValue( file.percent );
                        if( file.percent == 100){
                            file.progressBar.style('success');
                        }
                        //document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
                },

                Error: function(up, err) {
                        //document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
                },


        },
        resize : {} ,
        multipart_params : {
            'is_main' : 1 
        }
    });
    uploader.init();
})();


<?php echo '</script'; ?>
>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>