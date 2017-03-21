<?php /* Smarty version 3.1.27, created on 2016-11-01 07:28:09
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\admin\product_features.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:98075818deb9dc44e8_59851530%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b9c8c79ae01db8bd7bf72e3062e0a5b5aa982f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\admin\\product_features.tpl',
      1 => 1478024882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98075818deb9dc44e8_59851530',
  'variables' => 
  array (
    'product' => 0,
    'form' => 0,
    'features' => 0,
    'feature' => 0,
    'predefined_values' => 0,
    'fv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818deb9df47f6_86628077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818deb9df47f6_86628077')) {
function content_5818deb9df47f6_86628077 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98075818deb9dc44e8_59851530';
if (!is_object($_smarty_tpl->tpl_vars['product']->value)) {?>
    <div class="alert alert-danger">Save Product First </div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

    <div id="product-feature-list" class="list-group">
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
            <div class="col-md-12 list-group-item sortable">
                <div class="col-md-4 text-md">
                    <?php echo $_smarty_tpl->tpl_vars['feature']->value->name;?>

                </div>
                <div class="col-md-8">
                    
                    <?php $_smarty_tpl->tpl_vars['predefined_values'] = new Smarty_Variable($_smarty_tpl->tpl_vars['feature']->value->getValues(), null, 0);?>
                    <?php if (!count($_smarty_tpl->tpl_vars['predefined_values']->value)) {?>
                        <a href="<?php echo admin_url("products/edit_feature/".((string)$_smarty_tpl->tpl_vars['feature']->value->id));?>
" 
                           target="_blank"><i class="glyphicon glyphicon-plus"></i>
                            Add Predfined Values</a>
                    <?php } else { ?>
                        
                        <select id="input-feature-value-id-<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" class="feature-value-select" 
                                data-custom-feature-value-element="#input-custom-feature-value-<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                                >
                            <?php
$_from = $_smarty_tpl->tpl_vars['predefined_values']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
$_smarty_tpl->tpl_vars['fv']->_loop = true;
$foreach_fv_Sav = $_smarty_tpl->tpl_vars['fv'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['fv']->value->id;?>
" 
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['fv']->value->value == $_smarty_tpl->tpl_vars['feature']->value->feature_value) {?>
                                        selected=""
                                    <?php }?> >
                                    <?php echo $_smarty_tpl->tpl_vars['fv']->value->value;?>

                                </option>
                            <?php
$_smarty_tpl->tpl_vars['fv'] = $foreach_fv_Sav;
}
?>
                             <option value="0">Custom</option>
                    </select>
                     <?php }?>
                     
                     <input type="text" class="product-feature-item"
                         id="input-custom-feature-value-<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                         data-feature-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" 
                         
                         <?php if (count($_smarty_tpl->tpl_vars['predefined_values']->value) && $_smarty_tpl->tpl_vars['feature']->value->feature_value_id != 0) {?>readonly="1"<?php }?>
                    data-feature-value-element="#input-feature-value-id-<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                       />
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['feature'] = $foreach_feature_Sav;
}
?>
    </div>
    <span id="update-features" class="btn btn-default btn-lg">
        <i class="glyphicon glyphicon-save"></i>
        Save 
    </span>
    <?php echo '<script'; ?>
>
    
    // when the select changes, check is user choose custom input option
    $('.feature-value-select').change(function(){
        // get text input
        var input  = $(this);
        var customInput = $(input.data('custom-feature-value-element'));
        
        if(input.val() == '0'){
            customInput.prop('readonly' , false);
            customInput.focus();
        }else{
                // remove the value of the text box since its not needed
             customInput.val('');
             customInput.prop('readonly' , true);
        }
                
    });
    (function(){
        $('#update-features').click(function(){
            var url = '<?php echo admin_url("shop/update_product_features");?>
'
            var data = {
                features : { },
                product_id : <?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>

            };
            
            $('.product-feature-item').each(function(){
                var input = $(this);
                var featureId = input.data('feature-id');
                // get the value of the select
                var featureValueId = $(input.data('feature-value-element')).val();
                
                data.features[featureId] = {
                    'custom_value' : input.val() ,
                    'feature_id' : featureId ,
                    'feature_value_id' : featureValueId
                };
            });
            var callback = function(response){
                if(response.error_message){
                   Nyra.util.alert(response.error_message , 'danger') ;
                   return;
                }
                 Nyra.util.alert(response.success_message ) ;
            };
            Nyra.request.post(url,data , { done : callback })
            
        })
        
    })()
<?php echo '</script'; ?>
>
<style>
    .nyra-form-input-group-feature_group_id{
        width: 50%
    }
    #update-features{
        margin-top: 10px;
    }
    #product-feature-list input{
            padding: 5px;
            width: 80%;
            border-radius: -0px;
            
    }
    #product-feature-list:first-child {
        margin-bottom: 3px;
        font-size: large;
    }
    .feature-value-select{
            padding: 8px;
            border-width: 2px;
    }
</style>
<?php }
}
}
?>