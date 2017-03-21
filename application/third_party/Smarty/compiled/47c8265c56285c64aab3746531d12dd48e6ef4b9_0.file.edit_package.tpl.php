<?php /* Smarty version 3.1.27, created on 2016-12-08 05:19:30
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\simple_pricing\views\admin\edit_package.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12303584988124852a5_39109149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c8265c56285c64aab3746531d12dd48e6ef4b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\simple_pricing\\views\\admin\\edit_package.tpl',
      1 => 1476041877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12303584988124852a5_39109149',
  'variables' => 
  array (
    'package_form' => 0,
    'package' => 0,
    'feature_form' => 0,
    'level_form' => 0,
    'levels' => 0,
    'level' => 0,
    'features' => 0,
    'feature' => 0,
    'redirect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584988127351c2_16041583',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584988127351c2_16041583')) {
function content_584988127351c2_16041583 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '12303584988124852a5_39109149';
?>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h4>
                    <a data-toggle="collapse" data-parent="#accordion" href="#package-form-box">
                        <span class="text-center text-warning">Package Details </span>
                    </a>
                </h4>
            </div>
            <div id="package-form-box" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['package_form']->value->open();?>

                        <?php echo $_smarty_tpl->tpl_vars['package_form']->value->render($_smarty_tpl->tpl_vars['package']->value);?>

                        <?php echo $_smarty_tpl->tpl_vars['package_form']->value->submitButton('class="btn btn-default btn-block"');?>

                    <?php echo $_smarty_tpl->tpl_vars['package_form']->value->close();?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h4><a data-toggle="collapse" data-parent="#accordion" href="#feature-form-box">
                        <span class="text-center text-warning">Add Feature </span>
                    </a>
                </h4>
            </div>
            <div id="feature-form-box" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['feature_form']->value->open('',array('id'=>'feature-form'));?>

                       <?php echo $_smarty_tpl->tpl_vars['feature_form']->value->render();?>

                       <?php echo $_smarty_tpl->tpl_vars['feature_form']->value->submitButton('class="btn btn-default btn-block"');?>

                   <?php echo $_smarty_tpl->tpl_vars['feature_form']->value->close();?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><a data-toggle="collapse" data-parent="#accordion" href="#level-form-box">
                        <span class="text-center text-warning">Add Level </span>
                    </a>
                </h4>
            </div>
            <div id="level-form-box" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $_smarty_tpl->tpl_vars['level_form']->value->open('',array('id'=>'level-form'));?>

                        <?php echo $_smarty_tpl->tpl_vars['level_form']->value->render();?>

                        <?php echo $_smarty_tpl->tpl_vars['level_form']->value->submitButton('class="btn btn-default btn-block"');?>

                    <?php echo $_smarty_tpl->tpl_vars['level_form']->value->close();?>

                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="row" style="margin-top: 20px ">
    <div class="col-md-12">
        <ul class="nav nav-pills">
            <li class="active"> 
                <a href="#tab-levels" data-toggle="tab" >Levels</a> 
            </li>
            <li class=""> 
                <a href="#tab-features" data-toggle="tab" >Features</a> 
            </li>
        </ul>
        <div class="tab-content col-lg-8" style="min-height: 500px">
            <div id="tab-levels" class="tab-pane fade in active">
                <?php
$_from = $_smarty_tpl->tpl_vars['levels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->_loop = true;
$foreach_level_Sav = $_smarty_tpl->tpl_vars['level'];
?>
                    <div class="row sortable" style="margin-bottom: 10px"
                          data-item-id="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"
                         >
                        <div class="col-md-6">
                             <i class="glyphicon glyphicon-star"></i>
                             <span class="feature-name">
                                 <?php echo $_smarty_tpl->tpl_vars['level']->value->name;?>
 
                             </span>
                            
                        </div>
                        <div class="col-md-6">
                             <a class="item-up-btn"  data-item-id="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"  data-action="up" >
                                <span  class=" glyphicon glyphicon-arrow-up "></span>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="item-down-btn"  data-item-id="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"  data-action="down" >
                                <span  class=" glyphicon glyphicon-arrow-down "></span>
                            </a>
                            <a href="<?php echo admin_url("simple_pricing/edit_level/".((string)$_smarty_tpl->tpl_vars['level']->value->id));?>
"
                               class="btn btn-default"
                               >
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['level']->value->live) {?>
                                <a href="<?php echo admin_url("simple_pricing/disable/level/".((string)$_smarty_tpl->tpl_vars['level']->value->id));?>
"
                                   class="btn btn-danger action-btn" data-type="level" data-id="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"
                                   data-action="disable" title="Disable"
                                   >
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                </a>
                            <?php } else { ?>
                                 <a href="<?php echo admin_url("simple_pricing/enable/level/".((string)$_smarty_tpl->tpl_vars['level']->value->id));?>
"
                                    class="btn btn-success action-btn" title="Enable"
                                    data-action="enable" data-type="level" data-id="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"
                                    >
                                    <i class="glyphicon glyphicon-check"></i>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['level'] = $foreach_level_Sav;
}
?>
                <button id="update-levels-order" class="btn btn-default">
                    <i class="glyphicon glyphicon-sort-by-order"></i>
                    Update Order </button>
            </div>
            <div id="tab-features" class="tab-pane fade in">
                <?php $_smarty_tpl->tpl_vars['redirect'] = new Smarty_Variable(current_url(), null, 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['features']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['feature']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
$foreach_feature_Sav = $_smarty_tpl->tpl_vars['feature'];
?>
                    <div class="row sortable" style="margin-bottom: 10px"
                         data-item-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                         >
                        <div class="col-md-6">
                             <i class=" <?php echo $_smarty_tpl->tpl_vars['feature']->value->icon;?>
 "></i>
                             <span class="feature-name">
                                 <?php echo $_smarty_tpl->tpl_vars['feature']->value->name;?>
 
                             </span>
                            
                        </div>
                        <div class="col-md-6">
                            
                            
                             <a class="item-up-btn"  data-item-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"  data-action="up" >
                                <span  class=" glyphicon glyphicon-arrow-up "></span>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="item-down-btn"  data-item-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"  data-action="down" >
                                <span  class=" glyphicon glyphicon-arrow-down "></span>
                            </a>
                            <a href="<?php echo admin_url("simple_pricing/edit_feature/".((string)$_smarty_tpl->tpl_vars['feature']->value->id));?>
"
                               class="btn btn-default"
                               
                               >
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value->live) {?>
                                <a href="<?php echo admin_url("simple_pricing/disable/feature/".((string)$_smarty_tpl->tpl_vars['feature']->value->id));?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                                   class="btn btn-danger action-btn" title="Disable"
                                   data-action="disable" data-type="feature" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                                   >
                                    <i class="glyphicon glyphicon-ban-circle" ></i>
                                </a>
                            <?php } else { ?>
                                 <a href="<?php echo admin_url("simple_pricing/enable/feature/".((string)$_smarty_tpl->tpl_vars['feature']->value->id));?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                                    class="btn btn-success action-btn" title="Enable"
                                    data-action="enable" data-type="feature" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                                    >
                                    <i class="glyphicon glyphicon-check" ></i>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['feature'] = $foreach_feature_Sav;
}
?>
                <button id="update-features-order" class="btn btn-default">
                    <i class="glyphicon glyphicon-sort-by-order"></i> Update Order 
                </button>
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
      
       $('#update-features-order').click(function(){
           var data = getOrdering($('#tab-features .sortable'));
           updateOrdering('features' , data);
       });
       $('#update-levels-order').click(function(){
           var data = getOrdering($('#tab-levels .sortable'));
           updateOrdering('levels' , data);
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
        * @param string type features|levels
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
           Nyra.request.post('<?php echo admin_url('simple_pricing/update_ordering');?>
' ,{ 
               package_id : <?php echo $_smarty_tpl->tpl_vars['package']->value->id;?>
 ,
               type : type ,
               ordering : data
           } , { done : done });
       }
       
       
       $('.action-btn').click(function(e){
           e.preventDefault();
           // get relative admin url
           var urlBase = '<?php echo admin_url('simple_pricing/',false);?>
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