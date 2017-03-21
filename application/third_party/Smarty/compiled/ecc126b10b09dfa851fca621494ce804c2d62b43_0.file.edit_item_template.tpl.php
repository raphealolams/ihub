<?php /* Smarty version 3.1.27, created on 2016-12-13 02:51:29
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\menus\views\admin\edit_item_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3110584ffce1474471_84080019%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc126b10b09dfa851fca621494ce804c2d62b43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\menus\\views\\admin\\edit_item_template.tpl',
      1 => 1475486236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3110584ffce1474471_84080019',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffce1606e36_53122682',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffce1606e36_53122682')) {
function content_584ffce1606e36_53122682 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3110584ffce1474471_84080019';
?>
 
<li id="item_[[id]]" data-id_int="[[id]]">
    <div>
        <span class="pull-left item-handle glyphicon glyphicon-move" ></span> 
		<span id='menu-item-label-[[id]]'>[[label]]</span>
        <a data-toggle="collapse" data-parent="#accordion" href="#menu-item-data-[[id]]" class="href-edit-item ">
            <span class="glyphicon glyphicon-edit "></span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a class="menu-item-up-btn"  data-item-id="[[id]]"  data-action="up" >
            <span  class=" glyphicon glyphicon-arrow-up "></span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a class="menu-item-down-btn"  data-item-id="[[id]]"  data-action="down" >
            <span  class=" glyphicon glyphicon-arrow-down "></span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a class="menu-item-left-btn"  data-item-id="[[id]]"  data-action="left" >
            <span  class=" glyphicon glyphicon-arrow-left "></span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a class="menu-item-right-btn"  data-item-id="[[id]]"  data-action="right" >
            <span  class=" glyphicon glyphicon-arrow-right"></span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a href="#" class="menu-item-action-btn"  data-item-id="[[id]]"  data-action="delete" >
            <span  class=" glyphicon glyphicon-trash  pull-right "></span>
        </a>
        <div id="menu-item-data-[[id]]" class="collapse">
            
            <?php echo nyra_form_open('',false,array('class'=>'form-vertical','id'=>"item-edit-form-[[id]]"));?>

                <input type="hidden" name="id" value="[[id]]"  />
                <div class="form-group">
                    <label for="label"> <?php echo lang('input_label_label');?>
 </label>
                    <input class="form-control" name="label" id="item-label-[[id]]" value="[[label]]" >
                </div>
                <div class="form-group">
                    <label for="title"> <?php echo lang('input_label_title');?>
 </label>
                    <input class="form-control" name="title" id="item-title-[[id]]" value="[[title]]" >
                </div>
                <div class=name"form-group">
                    <label for="url"> <?php echo lang('input_label_url');?>
 </label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn  btn-primary dialogue-launch-btn" 
                                    data-browse-entity="menu_item" data-browse-property="id"
                                    data-action="browse_url" data-target-input="#item-url-[[id]]" ><?php echo lang('verb_browse');?>
 </button>
                        </span>
                        <input class="form-control input-url-browser" name="url"  id="item-url-[[id]]" value="[[url]]" >
                    </div>
                    <div class="help-block"> 
                        <?php echo lang('input_info_url');?>

                     </div>
                </div>
                <div class="form-group form-group-[[id]] clearfix ">
                    <label for="icon_class" class="col-sm-12 text-capitalize"><?php echo lang('input_label_icon_class');?>
</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                           <button type="button" class="btn  btn-primary dialogue-launch-btn" 
                                   data-action="icon_select" data-browse-select-multiple="0"
                                   data-target-input="#item-css_class-[[id]]" >Browse </button>
                        </span>
                        <input class="form-control col-md-3" name="icon_class" value="[[icon_class]]"
                              id="item-css_class-[[id]]" type="text"  
                               data-input-preview-container="#input-preview-container-[[id]]"
                               />
                        <div id="input-preview-container-[[id]]" class="input-group-addon">
                           <i class="[[icon_class]]"></i>
                        </div>
                        <div class="help-block"> <?php echo lang('input_info_icon_class');?>
 </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="window"> <?php echo lang('input_label_window');?>
 </label>
                    <select name="window" data-item-window="[[window]]"  id="item-window-[[id]]" class="form-control">
                        <option  selected='selected' value="_self" ><?php echo lang('open_current_window');?>
</option>
                        <option value="_blank"><?php echo lang('open_new_window');?>
 </option>
                    </select>
                    <div class="help-block"> <?php echo lang('input_info_window');?>
 </div>
                </div>
                <button data-action="update"  data-loading-text="<?php echo lang('updating');?>
" class="btn btn-default menu-item-action-btn" id='btn-update-[[id]]' data-item-id="[[id]]"><?php echo lang('verb_submit');?>
</button>
                <span id="item-update-status"></span>
            </form>
        </div>
    </div>
      
        <?php }
}
?>