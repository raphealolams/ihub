<?php /* Smarty version 3.1.27, created on 2016-11-08 22:48:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\features_attributes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:287935822f10b55d9a4_65844251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1e2199e4b30fb46bce454b9227d3748d4a5aab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\features_attributes.tpl',
      1 => 1476485595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287935822f10b55d9a4_65844251',
  'variables' => 
  array (
    'errors' => 0,
    'attribute_form' => 0,
    'feature_group_form' => 0,
    'attributes' => 0,
    'attribute' => 0,
    'feature_groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5822f10c2c6766_34336826',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5822f10c2c6766_34336826')) {
function content_5822f10c2c6766_34336826 ($_smarty_tpl) {
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '287935822f10b55d9a4_65844251';
echo smarty_function_loop_errors(array('e'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h4>
                    <a data-toggle="collapse" data-parent="#accordion" href="#attribute-form-box">
                        <span class="text-center text-warning">Add Attribute </span>
                    </a>
                </h4>
            </div>
            <div id="attribute-form-box" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['attribute_form']->value->open('',array('id'=>'attribute-form'));?>

                        <?php echo $_smarty_tpl->tpl_vars['attribute_form']->value->render();?>

                        <?php echo $_smarty_tpl->tpl_vars['attribute_form']->value->submitButton('class="btn btn-default btn-block"');?>

                    <?php echo $_smarty_tpl->tpl_vars['attribute_form']->value->close();?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h4><a data-toggle="collapse" data-parent="#accordion" href="#feature-form-box">
                        <span class="text-center text-warning">Add Feature Group</span>
                    </a>
                </h4>
            </div>
            <div id="feature-form-box" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['feature_group_form']->value->open('',array('id'=>'feature-form'));?>

                       <?php echo $_smarty_tpl->tpl_vars['feature_group_form']->value->render();?>

                       <?php echo $_smarty_tpl->tpl_vars['feature_group_form']->value->submitButton('class="btn btn-default btn-block"');?>

                   <?php echo $_smarty_tpl->tpl_vars['feature_group_form']->value->close();?>

                </div>
            </div>
        </div>
    </div>
    
</div>
    
<div class="row" style="margin-top: 20px ">
    <div class="col-md-12">
        <ul class="nav nav-pills">
            <li class="active"> 
                <a href="#tab-attributes" data-toggle="tab" >Attributes</a> 
            </li>
            <li class=""> 
                <a href="#tab-feature-groups" data-toggle="tab" >Feature Groups</a> 
            </li>
        </ul>
        <div class="tab-content col-lg-8" style="min-height: 500px">
            <div id="tab-attributes" class="tab-pane fade in active">
                <?php
$_from = $_smarty_tpl->tpl_vars['attributes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['attribute']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
$foreach_attribute_Sav = $_smarty_tpl->tpl_vars['attribute'];
?>
                    <div class="row sortable" style="margin-bottom: 10px"
                          data-item-id="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->id;?>
"
                         >
                        <div class="col-md-6">
                             <i class="glyphicon glyphicon-star"></i>
                             <span class="feature-name">
                                 <?php echo $_smarty_tpl->tpl_vars['attribute']->value->name;?>
 
                             </span>
                            
                        </div>
                        <div class="col-md-6">
                             <a class="item-up-btn"  data-item-id="[[id]]"  data-action="up" >
                                <span  class=" glyphicon glyphicon-arrow-up "></span>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="item-down-btn"  data-item-id="[[id]]"  data-action="down" >
                                <span  class=" glyphicon glyphicon-arrow-down "></span>
                            </a>
                            <a href="<?php echo admin_url("products/edit_attribute/".((string)$_smarty_tpl->tpl_vars['attribute']->value->id));?>
"
                               class="btn btn-default"
                               >
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['attribute']->value->live) {?>
                                <a href="<?php echo admin_url("products/disable/attribute/".((string)$_smarty_tpl->tpl_vars['attribute']->value->id));?>
"
                                   class="btn btn-danger action-btn" data-type="attribute" data-id="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->id;?>
"
                                   data-action="disable" title="Disable"
                                   >
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                </a>
                            <?php } else { ?>
                                 <a href="<?php echo admin_url("products/enable/attribute/".((string)$_smarty_tpl->tpl_vars['attribute']->value->id));?>
"
                                    class="btn btn-success action-btn" title="Enable"
                                    data-action="enable" data-type="attribute" data-id="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->id;?>
"
                                    >
                                    <i class="glyphicon glyphicon-check"></i>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['attribute'] = $foreach_attribute_Sav;
}
?>
                <button id="update-attributes-order" class="btn btn-default">
                    <i class="glyphicon glyphicon-sort-by-order"></i>
                    Update Order </button>
            </div>
            <div id="tab-feature-groups" class="tab-pane fade in">
                <?php
$_from = $_smarty_tpl->tpl_vars['feature_groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
$foreach_group_Sav = $_smarty_tpl->tpl_vars['group'];
?>
                    <div class="row sortable" style="margin-bottom: 10px"
                          data-item-id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"
                         >
                        <div class="col-md-6">
                             <i class="glyphicon glyphicon-star"></i>
                             <span class="feature-group-name">
                                 <?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
 
                             </span>
                        </div>
                        <div class="col-md-6">
                            
                            <a href="<?php echo admin_url("products/edit_feature_group/".((string)$_smarty_tpl->tpl_vars['group']->value->id));?>
"
                               class="btn btn-default"
                               >
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value->live) {?>
                                <a href="<?php echo admin_url("products/disable/feature_group/".((string)$_smarty_tpl->tpl_vars['group']->value->id));?>
"
                                   class="btn btn-danger action-btn" data-type="group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"
                                   data-action="disable" title="Disable"
                                   >
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                </a>
                            <?php } else { ?>
                                 <a href="<?php echo admin_url("products/enable/feature_group/".((string)$_smarty_tpl->tpl_vars['group']->value->id));?>
"
                                    class="btn btn-success action-btn" title="Enable"
                                    data-action="enable" data-type="group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"
                                    >
                                    <i class="glyphicon glyphicon-check"></i>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['group'] = $foreach_group_Sav;
}
?>
               
            </div>
            
        </div>
    </div>
</div>
<?php echo smarty_function_theme_plugin(array('name'=>'ray-sortable'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
>
    // allow sorting of list
     var nyraRaySort = new raySortable('.sortable' , { 
            nested : false ,
            listElement : 'div',
            itemSelector : 'div.sortable' ,
            moveUpSelector : '.item-up-btn' ,
            moveDownSelector : '.item-down-btn' ,
            moveRightSelector : '.menu-item-right-btn' ,
            moveLeftSelector : '.menu-item-left-btn' ,
        })
      
      
       $('#update-attributes-order').click(function(){
           var data = getOrdering($('#tab-attributes .sortable'));
           updateOrdering('attributes' , data);
       });
       /**
        * Get the odering data for feature or leve
        * @param { string }  Jquery object for the element that wraps the items
        * @returns { itemOrderNum }
        */
       function getOrdering(itemsParentElem){
           var data = { };
           itemsParentElem.each(function(index){
               var elem = $(this);
               var itemId = elem.data('item-id');
               var itemOrderNum = index + 1;
               
               if(!itemId){
                   Nyra.log("item id must be set for each  to update the ordering :");
                   Nyra.log(elem);
                   return;
               }
               data[itemId] = itemOrderNum;
           });
           return data;
       }
       
       /**
        * Send new order to the server
        * @param string type features|attributes
        * @param object data new ordering retrived by calling getOrdering()
        */
       function updateOrdering(type , data){
           if(data.length < 0){
                Nyra.log("No data to update for " + type );
                return;
           }
           var done = function(response){
               if(response.error_message){
                   Nyra.util.alert(response.error_message , 'danger');
               }
               Nyra.util.alert('<?php echo lang('alert_update_success');?>
' );
           };
           Nyra.request.post('<?php echo admin_url('products/update_ordering');?>
' ,{ 
               attribute_id : <?php echo $_smarty_tpl->tpl_vars['attribute']->value->id;?>
 ,
               type : type ,
               ordering : data
           } , { done : done });
       }
       
       
       $('.action-btn').click(function(e){
           e.preventDefault();
           // get relative admin url
           var urlBase = '<?php echo admin_url('products/',false);?>
'
           var btn = $(this);
           var type = btn.data('type');
           var id = btn.data('id');
           var action = btn.data('action');
           
           if(!action || !id || !type){
               Nyra.log("action,id and type must be set with data api");
               return;
           }
           // add the url parameters
           urlBase += action+'/'+type+'/'+id;
           // response callback
           var onDone =  function(response){
               if(response.error_message){
                   Nyra.util.alert(response.error_message);
                   return;
               }
               
               // change the state of the link and icon
               switch(action)
               {
                   case 'enable':
                       btn.data('action' , 'disable').removeClass('btn-success').addClass('btn-danger').attr('title' , 'Disable');
                       btn.children('i').removeClass('glyphicon-check').addClass('glyphicon-ban-circle')
                       break;
                   case 'disable':
                       btn.data('action' , 'enable').removeClass('btn-danger').addClass('btn-success').attr('title' , 'Enable');
                       btn.children('i').removeClass('glyphicon-ban-circle').addClass('glyphicon-check');
                       break;
               }
               // notify user of the sucess message if exist
               Nyra.util.alert(response.success_message);
           };
           
           Nyra.request.post(urlBase , { } , { done : onDone });
           
        });
<?php echo '</script'; ?>
>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>