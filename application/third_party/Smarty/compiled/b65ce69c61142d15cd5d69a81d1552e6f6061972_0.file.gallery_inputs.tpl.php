<?php /* Smarty version 3.1.27, created on 2016-11-01 22:58:12
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\admin\gallery_inputs.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:311775819b8b4126816_07342243%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b65ce69c61142d15cd5d69a81d1552e6f6061972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\admin\\gallery_inputs.tpl',
      1 => 1474552766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311775819b8b4126816_07342243',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819b8b41c2167_34905809',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819b8b41c2167_34905809')) {
function content_5819b8b41c2167_34905809 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';

$_smarty_tpl->properties['nocache_hash'] = '311775819b8b4126816_07342243';
?>


<?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

<div id="dynamic-fields-group-wrapper-[[field_id]]" 
     data-template-id="#gellery-template-[[field_id]]" 
     class="panel-group input-group-wrapper posts-gallery-inputs"
      role="tablist" aria-multiselectable="true">
    <div >
        <a class="btn btn-default add-btn">Add Input</a>
        <a class="btn btn-default undo-remove-btn">Unde Remove</a>
    </div>
    <?php echo '<script'; ?>
 id="gellery-template-[[field_id]]" type="text/template">
        <div class="panel panel-default" style="margin: 3px 0px">
            <div class="panel-heading" role="tab" id="">
               <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" 
                        data-parent="#dynamic-fields-group-wrapper-[[field_id]]" 
                        href="#dynamic-form-group-collapse-wrapper-[=_index]" 
                        aria-expanded="true" aria-controls="collapseOne">
                      <span class="badge indicator"></span>
                    </a>
                </h4>
            </div>
            <div id="dynamic-form-group-collapse-wrapper-[=_index]" 
                class="panel-collapse collapse" role="tabpanel" 
                aria-labelledby="headingTwo">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="btn-group pull-center">
                            <button type="button" class="close remove-btn"  
                                aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <span style="margin-right:10px" class="move-up-btn glyphicon glyphicon-menu-up"></span>
                            <span style="margin-right:10px" class="move-down-btn glyphicon glyphicon-menu-down"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[galleries][%s][title]">Title</label>
                        <input type="text" name="data[galleries][%s][title]" class="form-control input-title" />
                    </div>
                    <div class="form-group clearfix">
                        <label for="data[galleries][%s][url]" class="col-sm-12 text-capitalize">Url</label>
                        <div class="input-group">
                           <span class="input-group-btn">
                               <button type="button" class="btn  btn-primary dialogue-launch-btn" 
                                   data-browse-entity="" data-browse-property="browse_url"
                                   data-browse-custom-query="[[browse_custom_query]]"
                                   data-action="browse_url"
                                   data-target-input="#[[input_id]]-url-%s" 
                               >Browse </button>
                           </span>
                           <input class="input-url input-url-browser form-control" type="text" 
                             name="data[galleries][%s][url]"  id="[[input_id]]-url-%s" />
                       </div>
                    </div>
                    <div class="form-group clearfix">
                        <label for="data[galleries][%s][image]" class="col-sm-12 text-capitalize">Image</label>
                        <div class="input-group">
                           <span class="input-group-btn">
                               <button type="button" class="btn  btn-primary dialogue-launch-btn" 
                                   data-file-type="image"
                                   data-action="browse_file"
                                   data-target-input="#[[input_id]]-image-%s" 

                               >Browse </button>
                            </span>
                            <input class="input-image input-url-browser form-control" type="text" 
                             name="data[galleries][%s][image]"  id="[[input_id]]-image-%s" 
                             data-file-type='image'
                             data-file-preview-container="#file-preview-container-[[input_id]]-image-%s"
                          />
                        </div>
                        <div id="file-preview-container-[[input_id]]-image-%s" class="file-preview-container">
                            <img src="[=image]" class="img img-responsive" style="max-width: 300px; max-height: 300px"/>              
                        </div>
                        <div class="form-group">
                            <label for="data[galleries][%s][description]">Description</label>
                            <textarea name="data[galleries][%s][description]" 
                                class="form-control editor-mini input-description" cols="15" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo '</script'; ?>
>
</div>

<?php }
}
?>