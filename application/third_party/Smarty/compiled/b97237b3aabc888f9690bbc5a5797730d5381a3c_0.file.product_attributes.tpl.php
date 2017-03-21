<?php /* Smarty version 3.1.27, created on 2016-11-01 07:28:09
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\product_attributes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:186065818deb9b40462_60027805%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97237b3aabc888f9690bbc5a5797730d5381a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\product_attributes.tpl',
      1 => 1478024871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186065818deb9b40462_60027805',
  'variables' => 
  array (
    'product' => 0,
    'form' => 0,
    'attribute_values' => 0,
    'attr_section' => 0,
    'av' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818deb9c20537_92355896',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818deb9c20537_92355896')) {
function content_5818deb9c20537_92355896 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '186065818deb9b40462_60027805';
if (!is_object($_smarty_tpl->tpl_vars['product']->value)) {?>
    <div class="alert alert-danger">Save Product First </div>
<?php } else { ?>
    <div class="col-md-12 form-inline">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

        <span class="btn btn-default" id="add-product-attribute-btn">Add </span>
    </div>
    <div class="col-md-12">
        <ul id="product-attributes-group" class="list-group">
        <?php
$_from = $_smarty_tpl->tpl_vars['attribute_values']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['attr_section'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['attr_section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['attr_section']->value) {
$_smarty_tpl->tpl_vars['attr_section']->_loop = true;
$foreach_attr_section_Sav = $_smarty_tpl->tpl_vars['attr_section'];
?>
            <?php
$_from = $_smarty_tpl->tpl_vars['attr_section']->value['values'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['av'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['av']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['av']->value) {
$_smarty_tpl->tpl_vars['av']->_loop = true;
$foreach_av_Sav = $_smarty_tpl->tpl_vars['av'];
?>
            <li id="product-attribute-<?php echo $_smarty_tpl->tpl_vars['av']->value->id;?>
" class="list-group-item">
                <span class="attribute-name"> <?php echo $_smarty_tpl->tpl_vars['av']->value->attribute_name;?>
 :: </span>
                <span class="attribute-value"><?php echo $_smarty_tpl->tpl_vars['av']->value->value;?>
 </span>
                <span class="remove-btn btn btn-default ">
                    <i class="glyphicon glyphicon-remove-sign"></i>
                </span>
            </li>
            <?php
$_smarty_tpl->tpl_vars['av'] = $foreach_av_Sav;
}
?>
        <?php
$_smarty_tpl->tpl_vars['attr_section'] = $foreach_attr_section_Sav;
}
?>
        </ul>
      
    </div>
<?php echo '<script'; ?>
>
    
    (function(){
        // control for attribute id
        var productId = <?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ;
        var attibuteElement         = $('#input-attribute_id');
        var attibuteValuesElement   = $('#input-attribute_value_id');
        
        // remove the atribute value options, it might not ally with the attibute name 
         removeSelectOptions(attibuteValuesElement);
         // get fresh
         getAttributeValues(attibuteElement);
        $("#add-product-attribute-btn").click(function(){
            var atrrId      = attibuteElement.val();
            var attrValueId = attibuteValuesElement.val();
            // get the name from the selected option, we use it to create new list item
            //in the callback
            // we need the native dom, thats why we use .get() on jquery object
            var atrrName = attibuteElement.find(':selected').html() ;
            var atrrValue = attibuteValuesElement.find(':selected').html() ;
            var url = '<?php echo admin_url("shop/add_attribute_for_product");?>
' ;
            var callback = function(response){
                
                if(response.error_message == 'exist'){
                    return;
                }
                var li = $('<li>', { 
                    'class' : 'list-group-item' ,
                });
                var attrNameElem = $('<span>', { 
                    'class' : 'attribute-name' ,
                }).text(atrrName+ ' ::');
                var attrValueElem = $('<span>', { 
                    'class' : 'attribute-name' ,
                }).text(atrrValue);
                li.append(attrNameElem).append(attrValueElem);
                $('#product-attributes-group').append(li);
            };
            
            if(!atrrId || !attrValueId){
                Nyra.util.log("Attribute ID and Attribute value id not set");
            }
            Nyra.request.post(url, { 
               // attribute_id: atrrId ,
                attribute_value_id : attrValueId,
                product_id : productId
            },{
                done : callback
            });
        });
         
        $(attibuteElement).change(function(){ 
            getAttributeValues($(this));
        })
       
        function getAttributeValues(input){
            
            
            var url = '<?php echo admin_url("shop/get_attribute_values");?>
' ;
            var callback = function(response){
                if(response.error_message){
                    Nyra.util.alert().or(fun)
                }
                updateSelectOptions(attibuteValuesElement , response.data );
            };
            Nyra.request.post(url,{ 
                attribute_id : input.val() 
            },{ 
                done : callback 
            });
        }
        
        
        function updateSelectOptions( input , data ){
             removeSelectOptions(input);
             for( var i in data){
                 var option = $('<option>');
                 option.attr("value" , i );
                 option.html(data[i]);
                 input.append( option );
             }
        }

        
        function removeSelectOptions(input){
        input.children('option').remove();
        return input;
    }
    
    
        
    })()
<?php echo '</script'; ?>
>
        
<?php }?>


<?php }
}
?>