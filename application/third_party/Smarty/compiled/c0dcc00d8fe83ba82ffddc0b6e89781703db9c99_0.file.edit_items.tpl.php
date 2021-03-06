<?php /* Smarty version 3.1.27, created on 2016-12-13 02:51:29
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\menus\views\admin\edit_items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28775584ffce187e568_97048394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0dcc00d8fe83ba82ffddc0b6e89781703db9c99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\menus\\views\\admin\\edit_items.tpl',
      1 => 1475486972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28775584ffce187e568_97048394',
  'variables' => 
  array (
    'errors' => 0,
    'menu' => 0,
    'success' => 0,
    'form' => 0,
    'menu_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffce1abdaf8_62286740',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffce1abdaf8_62286740')) {
function content_584ffce1abdaf8_62286740 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '28775584ffce187e568_97048394';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo smarty_function_loop_errors(array('erros'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
  
        <div class="btn-group ">
            <button type="button" class="btn btn-info" data-toggle="popover" 
                    title="<?php echo lang('drag_and_drop');?>
" 
                    data-content="<?php echo lang('menu_items_reorder_info');?>
">
                Tip!
            </button>
            <button class="btn btn-default" data-toggle="collapse" 
                    data-parent="#accordion" href="#item-add-block">
                <span class="glyphicon glyphicon-plus"></span>
                <?php echo lang('add_new_item');?>

            </button>
            <button class="btn btn-primary pull-center" data-menu-id="<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
" id="regenrate-menu-btn">
                <span id='regenerate-span' class="glyphicon glyphicon-refresh"></span>
                <?php echo lang('regenerate_html');?>
 
            </button>
            <button data-loading-text="saving..."  class="btn btn-success pull-right" 
                    id="save-menu-btn">
                <i class="glyphicon glyphicon-sort-by-order"></i>
                <?php echo lang('verb_save');?>

            </button>
        </div> 
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?> 
        <div class="alert alert-success"> <?php echo lang('alert_create_success');?>
 </div>
    <?php }?>
    <div class="col-md-12">
        
        
        <div class="col-lg-8 collapse clearfix" id="item-add-block" >
            <?php echo $_smarty_tpl->tpl_vars['form']->value->open('',array('id'=>'menu-item-add-form'));?>

                <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

                <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

            <?php echo form_close();?>

        </div>
    </div>
    <div class="col-md-12">
        <?php echo $_smarty_tpl->tpl_vars['menu_html']->value;?>
  
    </div>
 
    <?php echo smarty_function_theme_plugin(array('p'=>'jquery-nested_sortable'),$_smarty_tpl);?>
   
    <?php echo smarty_function_theme_plugin(array('name'=>'ray-sortable'),$_smarty_tpl);?>

    <?php echo smarty_function_theme_plugin(array('p'=>'font-awesome'),$_smarty_tpl);?>
   

    
           
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         <?php echo '<script'; ?>
>
             
             //Nyra.require('dialogue');
                
                $( document).ready( function(){
                     var itemUpdateUrl = '/menus/ajax/menus_admin_ajax/update' ;
                    
                    $( 'select[name="window"] option' ). each( function( index , ele){
                        var ele = $(ele) ;
                        var eleParentWithValue = ele.parent().get(0) ;
                        // the item window value
                        var parentwindow = $( eleParentWithValue ).attr('data-item-window') ;
                        
                        if ( ele.val() == parentwindow ){
                            $(this).attr('selected' , 'selected') ;
                        }
                    });
                    
                    
                    $('.menu-item-action-btn').click(  function( e ){
                        e.preventDefault() ;
                        var action = $( this).attr( 'data-action' ) ;
                        if ( action == 'update') {
                            var btn = $(this).html( 'Updating');
                            btn.removeClass('btn-success');
                        }
                        if ( action == 'delete' && !confirm( "Are You sure you want to delete?") ){
                            return ;
                        }
                        var itemId = $( this).attr( 'data-item-id' ) ;
                        if ( itemId ){
                            var data = $('#item-edit-form-' + itemId) .serialize();
                            data += '&action=' + action ;
                            var options = { 
                                'done'  : function( response ) {
                                    if(response.error_message){
                                        Nyra.util.alert( response.error_message );
                                        btn.removeClass('btn-success');
                                        btn.addClass('btn-warning').html('<?php echo lang('action_update');?>
');
                                    }else{
                                        if( action == 'update' ){
                                            btn.removeClass('btn-warning');
                                            btn.addClass('btn-success');
                                            btn.html('<?php echo lang('action_update');?>
') ;
                                            // get the new input value for label and update the indicator
                                            var label = $('#item-label-' + itemId ).val();
                                            $('#menu-item-label-' + itemId ).html( label )
                                            Nyra.util.alert(  'Item Updated' );
                                        }else if( action == 'delete'){
                                            // remove the list item from dom
                                             $('#item_' + itemId ).remove();
                                             Nyra.util.alert('<?php echo lang('alert_delete_success');?>
' );
                                         }
                                    } 
                                }
                            };
                            Nyra.request.post( itemUpdateUrl , data  , options );
                        }// if item
                    }); //click
                    //
                });// ready
            <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 >
            $( document).ready( function(){
                var addUrl = '/admin/menus/ajax/menus_adnin_ajax/add' ; 
                
                $( '.sortable' ).nestedSortable( {
                    items: 'li',
                    maxLevels: 4 ,
                }); 
                
                $("#menu-item-btn-add").click( function( e ){
                    e.preventDefault() ;
                    var btn = this ;
                    var data = $('#menu-item-add-form').serialize();
                    data.menu_id = $('#menu-id' ).val();
                    var options = { 'onSuccess'  : function( response ) {
                            $("#item-add-block").collapse();
                            Nyra.util.alert( response.success_message || 'Menu Item Added');
                            $( btn ).button('reset');
                        }}  ;
                    Nyra.request.post( addUrl , data , options)
                });
                
                
                $('#save-menu-btn').click( function( event , item ) {
                    var url = '/menus/ajax/menus_admin_ajax/update_items_position'  ;
                    var data = { 
                        'data' : $('ol.sortable').nestedSortable('serialize') 
                    }  ;
                    Nyra.request.post( url , data  , null ,  'Changes Saved' );
                });
                
                
                $('#regenrate-menu-btn').click(function( e ){
                    e.preventDefault();
                    var roller = Nyra.util.spin( '#regenerate-span')
                    var url = '/menus/ajax/menus_admin_ajax/regenrate_html' ;
                    
                    var data = {  menu_id : $(this).attr('data-menu-id') } ;
                    var options = {
                        'done' : function( response){
                                Nyra.util.stopSpin('#regenerate-span');
                                if( response.success){
                                    Nyra.util.alert( response.success_message || 'Menu Regenerated Successfully');
                                }
                        },
                        'always' : function(){
                            Nyra.util.stopSpin(roller);
                        }
                    }
                    Nyra.request.post( url , data  , options  );
                });
        
            var nyraRaySort = new raySortable('.sortable' , { 
                nested : true ,
                // this option must tally with that of nested sortable
                maxLevels : 4 ,
                listElement : 'ol',
                listElementClass : 'sortable',
                itemSelector : 'li' ,
                moveUpSelector : '.menu-item-up-btn' ,
                moveDownSelector : '.menu-item-down-btn' ,
                moveRightSelector : '.menu-item-right-btn' ,
                moveLeftSelector : '.menu-item-left-btn' ,
            })
        });
        <?php echo '</script'; ?>
>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
   
    
<?php }?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
<?php }
}
?>