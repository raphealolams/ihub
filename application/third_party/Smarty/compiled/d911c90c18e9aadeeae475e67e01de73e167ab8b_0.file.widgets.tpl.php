<?php /* Smarty version 3.1.27, created on 2016-10-31 09:03:16
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\appearance\views\admin\widgets.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181415817a38437cf65_05412281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd911c90c18e9aadeeae475e67e01de73e167ab8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\appearance\\views\\admin\\widgets.tpl',
      1 => 1477765630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181415817a38437cf65_05412281',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'CI' => 0,
    'focus_pos' => 0,
    'pos_index' => 0,
    'registerd_widgets' => 0,
    'id' => 0,
    'widget' => 0,
    'pos_select_opt' => 0,
    'widget_pos' => 0,
    'pos' => 0,
    'data' => 0,
    'widgetData' => 0,
    'widget_db_data' => 0,
    'index' => 0,
    'widget_title' => 0,
    'settings' => 0,
    'input_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817a3846b9860_09987662',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817a3846b9860_09987662')) {
function content_5817a3846b9860_09987662 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '181415817a38437cf65_05412281';
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert-success"> Widget Updated</div>
<?php } elseif (!HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['focus_pos'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->input->get('position'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['pos_index'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->input->get('index'), null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['focus_pos']->value) {?>
        <?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo '<script'; ?>
>
            
            (function(){
                var pos = '<?php echo $_smarty_tpl->tpl_vars['focus_pos']->value;?>
' ;
                var index = '<?php echo $_smarty_tpl->tpl_vars['pos_index']->value;?>
' ;
                var tabAnchor = $('#open-tab-link-'+pos ) ;
                var panelId = '#widget-content-pos-'+pos+'-index-'+index;
                var panel = $(panelId);
                // bootsrap tab
                tabAnchor.tab('show');

                $('html, body').animate({
                    scrollTop : tabAnchor.offset().top
                } , 3000 , function(){
                    panel.collapse('show');
                    panel.effect('highlight');
                });
            })();
        <?php echo '</script'; ?>
>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php echo smarty_function_action_title(array('title'=>'Manage Widgets'),$_smarty_tpl);?>

        <div class="col-lg-12" >  
            <?php if (!$_smarty_tpl->tpl_vars['registerd_widgets']->value) {?>
                <div class="alert-info"> No Widget Registerd !</div>
            <?php }?>
                
                
                <?php
$_from = $_smarty_tpl->tpl_vars['registerd_widgets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['widget']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
$foreach_widget_Sav = $_smarty_tpl->tpl_vars['widget'];
?>  
                    <div class="registerd-widget col-lg-6"> <!--widget col-->
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <span class="text-center text-warning">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value->title;?>
 </strong>
                                    </span>
                                  </a>
                                </h4>
                            </div>
                            <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo nyra_form_open();?>

                                        <input type="hidden" name="widget-id" value="<?php echo $_smarty_tpl->tpl_vars['widget']->value->id;?>
"/>
                                        <select name="position" class="span1 form-control">
                                            
                                            <?php echo FormHelper::selectOptions('position',$_smarty_tpl->tpl_vars['pos_select_opt']->value);?>

                                        </select>
                                        <p class="help-block text-center"> Select Position </p>
                                        <input type="submit" name="add" value="Add Widget" class="btn btn-primary pull-right" />
                                    <?php echo form_close();?>

                                </div>
                            </div> 
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['widget'] = $foreach_widget_Sav;
}
?>
        </div>  
        <div class="col-lg-12"> <!--currently active -->
            <?php if (!$_smarty_tpl->tpl_vars['widget_pos']->value) {?>
                <div class="alert-info"> No Widget Positions Available !</div>
            <?php }?>
            <ul class="nav nav-pills" role="tablist">
                <?php
$_from = $_smarty_tpl->tpl_vars['widget_pos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?> 
                    <!-- 1 -->
                    <li role="presentation" class="">
                        <a href="#<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" id="open-tab-link-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"aria-controls="plugins" role="tab" data-toggle="tab"><?php echo element('title',$_smarty_tpl->tpl_vars['data']->value);?>
</a>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
            </ul>
            <div class="tab-content" id="widget-locations">
                <style >
                    .sortable li div:hover {
                        background-color: white ;
                    }
                     /* overeapping form elements */
                    .sortable div.form-group{
                          margin-left: 0px;
                    }
                        
                </style>
                <?php
$_from = $_smarty_tpl->tpl_vars['widget_pos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?> 
                    <?php $_smarty_tpl->tpl_vars['pos_name'] = new Smarty_Variable(element('title',$_smarty_tpl->tpl_vars['data']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['pos_desc'] = new Smarty_Variable(element('desc',$_smarty_tpl->tpl_vars['data']->value), null, 0);?>
                    
                    <!-- Nav tabs -->
                    <div role="tabpanel" class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
                        <div class="well drop-target" data-pos="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"> <!--position list -->
                            <?php $_smarty_tpl->tpl_vars['widgetData'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->theme->getWidgetsInPosition($_smarty_tpl->tpl_vars['pos']->value,TRUE), null, 0);?>
                            
                            <ol class="sortable" id="sort-list-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
                                <?php
$_from = $_smarty_tpl->tpl_vars['widgetData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['widget_db_data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['widget_db_data']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['widget_db_data']->value) {
$_smarty_tpl->tpl_vars['widget_db_data']->_loop = true;
$foreach_widget_db_data_Sav = $_smarty_tpl->tpl_vars['widget_db_data'];
?> 
                                <?php if (!isset($_smarty_tpl->tpl_vars['widget_db_data']->value['id']) || !$_smarty_tpl->tpl_vars['CI']->value->theme->isWidgetResgisterd($_smarty_tpl->tpl_vars['widget_db_data']->value['id'])) {?>
                                    <?php continue 1;?>
                                <?php }?>
                                <?php $_smarty_tpl->tpl_vars['settings'] = new Smarty_Variable(array(), null, 0);?>
                                
                                
                               <?php
$_from = $_smarty_tpl->tpl_vars['registerd_widgets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['widget']->_loop = false;
$_smarty_tpl->tpl_vars['ind'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['ind']->value => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
$foreach_widget_Sav = $_smarty_tpl->tpl_vars['widget'];
?> 
                                   <?php if ($_smarty_tpl->tpl_vars['widget_db_data']->value['id'] == $_smarty_tpl->tpl_vars['widget']->value->id) {?> 
                                       <?php $_smarty_tpl->tpl_vars['settings'] = new Smarty_Variable($_smarty_tpl->tpl_vars['widget']->value->getOptions(), null, 0);?>
                                       <?php $_smarty_tpl->tpl_vars['widget_title'] = new Smarty_Variable($_smarty_tpl->tpl_vars['widget']->value->title, null, 0);?>
                                       <?php break 1;?>
                                   <?php }?>
                               <?php
$_smarty_tpl->tpl_vars['widget'] = $foreach_widget_Sav;
}
?>
                                <li class="" data-position="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" id='pos-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
-index-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
'>
                                        <div class="panel panel-default" >
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#widget-content-pos-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
-index-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                                                    <span class="text-center text-warning">
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['widget_title']->value;?>
 </strong>
                                                    </span>
                                                  </a>
                                                </h4>
                                            </div>
                                            <div id="widget-content-pos-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
-index-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <?php echo nyra_form_open('',false,array('class'=>'form-horizontal widget-form','name'=>"widget-form-".((string)$_smarty_tpl->tpl_vars['pos']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value)."-".((string)$_smarty_tpl->tpl_vars['widget_db_data']->value['id']),'id'=>"widget-form-".((string)$_smarty_tpl->tpl_vars['pos']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value)."-".((string)$_smarty_tpl->tpl_vars['widget_db_data']->value['id'])));?>

                                                        
                                                        <h5> <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['widget_title']->value;?>
</span> </h5>
                                                        <?php echo form_hidden('pos',$_smarty_tpl->tpl_vars['pos']->value);?>

                                                        <?php echo form_hidden('index',$_smarty_tpl->tpl_vars['index']->value);?>

                                                        <?php echo form_hidden('wid',$_smarty_tpl->tpl_vars['widget_db_data']->value['id']);?>

                                                        <?php $_smarty_tpl->createLocalArrayVariable('input_options', null, 0);
$_smarty_tpl->tpl_vars['input_options']->value['input_id_prefix'] = ((string)$_smarty_tpl->tpl_vars['pos']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value)."-";?>
                                                        <?php echo FormHelper::loopInputs($_smarty_tpl->tpl_vars['settings']->value,$_smarty_tpl->tpl_vars['widget_db_data']->value,$_smarty_tpl->tpl_vars['input_options']->value);?>

                                                        <div class="form-group">
                                                            <?php echo form_submit(array('class'=>'btn btn-success widget-form-action','data-form-id'=>"#widget-form-".((string)$_smarty_tpl->tpl_vars['pos']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value)."-".((string)$_smarty_tpl->tpl_vars['widget_db_data']->value['id']),'name'=>'update'),'Update');?>

                                                            <?php echo form_submit(array('class'=>'btn btn-default pull-right widget-form-action','data-form-id'=>"#widget-form-".((string)$_smarty_tpl->tpl_vars['pos']->value)."-".((string)$_smarty_tpl->tpl_vars['index']->value)."-".((string)$_smarty_tpl->tpl_vars['widget_db_data']->value['id']),'data-list-item-id'=>"#pos-".((string)$_smarty_tpl->tpl_vars['pos']->value)."-index-".((string)$_smarty_tpl->tpl_vars['index']->value),'data-sortable-id'=>"#sort-list-".((string)$_smarty_tpl->tpl_vars['pos']->value),'name'=>'remove'),'Remove');?>

                                                        </div>
                                                    <?php echo form_close();?>

                                                </div>
                                            </div>
                                        </div>
                                    
                                </li >
                            <?php
$_smarty_tpl->tpl_vars['widget_db_data'] = $foreach_widget_db_data_Sav;
}
?>
                        </ol> 
                        </div>
                        
                    </div> <!--position list end -->
                    <div class="clearfix"></div>
                <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>  
            </div>
        </div>

   <?php echo smarty_function_theme_plugin(array('p'=>'jquery-nested_sortable'),$_smarty_tpl);?>

   <?php echo smarty_function_theme_plugin(array('p'=>'jquery-ui'),$_smarty_tpl);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo '<script'; ?>
 >
               $('.widget-form-action').click( function(e){
                    var btn = $(this);
                    var action = btn.attr( 'name' ) ;
                    var updateUrl =  '<?php echo admin_url('appearance/widgets');?>
' ;
                    
                    Nyra.util.updateEditorData();
                    var data  = $( btn.data('form-id' )).serialize();
                    
                    if ( action == 'update') {
                        btn.attr( 'value' ,'Updating...');
                        btn.removeClass('btn-success');
                        data += '&update=update' ;
                         e.preventDefault() ;
                    }else if ( action == 'remove'){
                        return confirm( "Are You sure you want to delete?");
                          
                        
                        data += '&remove=remove' ;
                        return //cancel out thisbto allow removal via ajax ; but theres a bug where by the current order is ignored
                    }
                     Nyra.request.post( updateUrl , data  , {
                         'done' : function( response ){
                             btn.removeClass('btn-warning');
                             btn.removeClass('btn-success');
                            if( response.success){
                               if(action == 'remove'){
                                   // remove the item from dom
                                    // there is a bug here, we stoped execution because of a bug   
                                   $( btn.data('list-item-id')).remove();
                                   // update the sortable list
                                   $( btn.data('sortable-id')).trigger('sortupdate');
                                   Nyra.util.alert("<?php echo lang('alert_delete_success');?>
sssss");
                               }else if( action == 'update'){
                                   btn.addClass('btn-success');
                                   Nyra.util.alert("<?php echo lang('alert_update_success');?>
");
                               }
                            }else if( response.error_message ){
                                Nyra.util.alert( response.error_message );
                                btn.addClass('btn-warning');
                            }
                             btn.attr('value' , '<?php echo lang('verb_update');?>
');
                        }
                    } ,  '<?php echo lang('alert_update_success');?>
' ) ;
                     return false;
                })
                var updateUrl =  '/appearance/ajax/admin_ajax/update_widget_pos' ;
                
                //sort
                $( '.sortable' ).nestedSortable( {
                                                    items: 'li',
                                                    maxLevels: 1 ,
                                                    isAllowed : function( item , elem ){
                                                        //console.log( item )
                                                    }
                                                }
                ); 
        $( '.sortable' ).on('sortupdate' , updateWidgetPosition );
        
         function updateWidgetPosition(  event , ui ){
                var  dataString = $('ol.sortable').nestedSortable('serialize');
                var items = [] ;
                 var listClassPrefix = 'sort-list-' ;
                 
                 var itemPos = ui.item.attr( 'data-position') ;
                 //var itemID = ui.item.attr( 'id') ;
                 //var itemIndex =  ui.item.attr( 'data-index') ;
                 
                 var listItems = $('#' + listClassPrefix + itemPos ).children('li');
                  
                 listItems.each( function( index , obj ){
                     var item =  { } ; 
                     var $obj = $(obj);
                     // get the index attribute which was the widget index in the db
                     item.index = $obj.data('index');
                     // update the index, because it is sorted on the server
                     $obj.data('index' , index );
                     
                     var form =  $( obj ).find( '.widget-form').first();
                     form.find('input[name="index"]').val( index ) ;
                     
                     item.sort = index ;
                     items.push( item ) ;

                 });
                 Nyra.request.post( updateUrl ,  {  
                                         'pos' : itemPos ,
                                         'items' : items 
                                         } , {} ,   'Widget Position Updated' ) ;

         }
        
    <?php echo '</script'; ?>
>
            
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


    
 <?php }
}
?>