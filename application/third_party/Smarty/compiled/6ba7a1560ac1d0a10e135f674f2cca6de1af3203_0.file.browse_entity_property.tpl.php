<?php /* Smarty version 3.1.27, created on 2016-11-01 07:20:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\browse_entity_property.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:242925818dcffaec237_70250700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ba7a1560ac1d0a10e135f674f2cca6de1af3203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\browse_entity_property.tpl',
      1 => 1474552764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242925818dcffaec237_70250700',
  'variables' => 
  array (
    'content' => 0,
    'data' => 0,
    'object' => 0,
    'id' => 0,
    'relative_url' => 0,
    'url' => 0,
    'limit' => 0,
    'tab' => 0,
    'select_multiple' => 0,
    'property' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818dcffd5b0d1_80163572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818dcffd5b0d1_80163572')) {
function content_5818dcffd5b0d1_80163572 ($_smarty_tpl) {
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '242925818dcffaec237_70250700';
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
    <div class="container-fluid">
        <div class="row">
        <?php if (is_array($_smarty_tpl->tpl_vars['content']->value)) {?>
        
      
        <div class="col-lg-12" >
            <div class="table-responsive">
                <table class="table table-hover " id="entity-records-table">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> <?php echo lang('label_title');?>
 </th>
                        <th> <?php echo lang('label_url');?>
 </th>
                        <th><?php echo lang('noun_actions');?>
 </th>
                    </tr>
                 </thead>
                 <tbody>
                <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable($_smarty_tpl->tpl_vars['content']->value['data'], null, 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['object'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['object']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
$foreach_object_Sav = $_smarty_tpl->tpl_vars['object'];
?>
                    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['object']->value->getId(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable('', null, 0);?>
                        <tr id="record-table-row-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <td class="record-table-data-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 </td>
                            <td class="record-table-data-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['object']->value->getTitle();?>
 </td>
                            
                            <td><?php if (method_exists($_smarty_tpl->tpl_vars['object']->value,'getUrl')) {?>
                                    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable($_smarty_tpl->tpl_vars['object']->value->getUrl($_smarty_tpl->tpl_vars['relative_url']->value), null, 0);?>
                                <?php }?>
                            </td>
                            <td >  <a href="#" data-link-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" 
                                     data-property-id="<?php echo $_smarty_tpl->tpl_vars['object']->value->id;?>
"  
                                     class="btn btn-primary select-btn" ><?php echo lang('verb_select');?>
</a> 
                            </td>
                        </tr>
                <?php
$_smarty_tpl->tpl_vars['object'] = $foreach_object_Sav;
}
?>
                </tbody>
            </table>
        </div>
        <p><?php ob_start();
echo current_full_url(false);
$_tmp1=ob_get_clean();
echo pagination_links($_smarty_tpl->tpl_vars['content']->value['total'],$_smarty_tpl->tpl_vars['limit']->value,$_tmp1."&tab=".((string)$_smarty_tpl->tpl_vars['tab']->value));?>

            <button href="#" class="ok-btn btn btn-primary btn-lg pull-right clearfix " >Ok</button> 
        </p>
        </div>
    </div>
</div>   
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-datatables'),$_smarty_tpl);?>

<?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type='text/javascript'>
        var dataTable =     $( '#entity-records-table' ).DataTable();
        dataTable.on('draw' , refreshEvents ) ;
        
        // get current value(s) and add context
        var input = window.top.Nyra.dialogue.getInput();
        var values = input.val();
        var valuesArr = [] ;
        var selectedValuesObj = { } ;
        var selectedValue ;
        var selectMultiple = '<?php echo $_smarty_tpl->tpl_vars['select_multiple']->value;?>
' == 'yes' ? true : false ;
        
        // get the current values and save it
        if(values){
            valuesArr = values.split(',');
            for(var i in valuesArr){
               selectedValuesObj[valuesArr[i]]= { propertyValue : valuesArr[i] };
            }
        }
        
        
        function indicateSelection(){
            if(selectMultiple){
                for(var i in selectedValuesObj){
                    $('#record-table-row-'+selectedValuesObj[i].propertyValue).addClass('active');
                    $('.record-table-data-'+selectedValuesObj[i].propertyValue).addClass('success');
                }
            }else{
                $('#record-table-row-'+selectedValue).addClass('active');
                $('.record-table-data-'+selectedValue).addClass('success');
            }
        }
        /**
         * 
         * @param { type } value
         * @param { type } selectMultiple
         * @returns { String|toogleSelection.value|selectedValue|selectedValuevalue }
         */
        function toogleSelection(value){
            var row = $('#record-table-row-'+value);
            var cols =  $('.record-table-data-'+value);
            
            // if is single and previous value is not equals new
            // remove active state on previous row
            if(!selectMultiple && value != selectedValue ){
                $('#record-table-row-'+selectedValue).removeClass('active');
                $('.record-table-data-'+selectedValue).removeClass('success');
            }
            
            if(row.hasClass('active')){
                row.removeClass('active');
                cols.removeClass('success');
                // delete the property from current if its multile
                if(selectMultiple && selectedValuesObj[value]) delete selectedValuesObj[value];
                else selectedValue = null ;
            }else{
                row.addClass('active');
                cols.addClass('success'); 
                
                if(!selectMultiple) selectedValue = value ;
                else selectedValuesObj[value] = { propertyValue : value };
            }
        }
        
        
        function refreshEvents(){
            // loop the curent selected value
            indicateSelection();
            
            $( '.select-btn'  ).click( function(){
                 var propertyValue = $( this).attr( 'data-property-<?php echo $_smarty_tpl->tpl_vars['property']->value;?>
' );
                 
                 if ( propertyValue  )
                 {
                    toogleSelection(propertyValue );
                 }else{
                   NYra.log("Invalid property requested from property browser :" +propertyValue);
                }
            });
            
            $( '.ok-btn'  ).click( function(){
                 if(selectMultiple){
                    window.top.Nyra.dialogue.callback( selectedValuesObj , selectMultiple );
                }else{
                    window.top.Nyra.dialogue.callback( selectedValue , selectMultiple );
                }
            });
        }
        refreshEvents();
   <?php echo '</script'; ?>
>
 </body>
</html><?php }
}
?>