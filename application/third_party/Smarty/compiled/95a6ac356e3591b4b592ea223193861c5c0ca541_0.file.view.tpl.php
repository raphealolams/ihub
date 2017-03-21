<?php /* Smarty version 3.1.27, created on 2016-11-08 03:25:31
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\shop\views\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:150225821e05ba593c4_37505637%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95a6ac356e3591b4b592ea223193861c5c0ca541' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\shop\\views\\view.tpl',
      1 => 1478615115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150225821e05ba593c4_37505637',
  'variables' => 
  array (
    'product' => 0,
    'product_attributes' => 0,
    'section' => 0,
    'attr_value' => 0,
    'product_features' => 0,
    'feature' => 0,
    'continue_shopping_url' => 0,
    'catalogue_recommendations' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821e05bb28bd5_47743199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821e05bb28bd5_47743199')) {
function content_5821e05bb28bd5_47743199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '150225821e05ba593c4_37505637';
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 </h1>
<div class="col-md-12">
     <img class="img img-" style="height: 300px; width: 100%" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" />
</div>
<div class="col-md-12">
    <?php echo form_open(site_url($_smarty_tpl->tpl_vars['product']->value->addToCartUrl()));?>

        <ul class="list-unstyled">
        
            <li> <strong><?php echo $_smarty_tpl->tpl_vars['product']->value->currency;
echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</strong></li>
            <li>
                <?php
$_from = $_smarty_tpl->tpl_vars['product_attributes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$foreach_section_Sav = $_smarty_tpl->tpl_vars['section'];
?>
                 <label><?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
</label>
                    <select name="attributes[<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
]">
                        <?php
$_from = $_smarty_tpl->tpl_vars['section']->value['values'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['attr_value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['attr_value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['attr_value']->value) {
$_smarty_tpl->tpl_vars['attr_value']->_loop = true;
$foreach_attr_value_Sav = $_smarty_tpl->tpl_vars['attr_value'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['attr_value']->value->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attr_value']->value->value;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['attr_value'] = $foreach_attr_value_Sav;
}
?>
                    </select>
                <?php
$_smarty_tpl->tpl_vars['section'] = $foreach_section_Sav;
}
?>
                <label>Quantity</label>
                <input type="number" name="quantity" value="1" />
                <button type="submit" href="/products/add_to_cart/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-default">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        Add To Cart 
                </button>
            </li>
            <li>
                <?php echo $_smarty_tpl->tpl_vars['product']->value->getDescription();?>

            </li>
            <?php
$_from = $_smarty_tpl->tpl_vars['product_features']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['feature']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
$foreach_feature_Sav = $_smarty_tpl->tpl_vars['feature'];
?>
                <li><strong><?php echo $_smarty_tpl->tpl_vars['feature']->value->name;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['feature']->value->feature_value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['feature'] = $foreach_feature_Sav;
}
?>
            <li>
                <div class="col-md-4">
                     <img class="img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image2;?>
" />
                </div>
                <div class="col-md-4">
                     <img class="img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image3;?>
" />
                </div>
                <div class="col-md-4">
                     <img class="img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image4;?>
" />
                </div>
            </li>
            <li>
                <a class="btn btn-default pull-right"
                   href="<?php echo $_smarty_tpl->tpl_vars['continue_shopping_url']->value;?>
"
                   >
                    <i class="glyphicon glyphicon-arrow-right"></i>
                       Continue shopping 
                </a>
            </li>
        </ul>
    <?php echo form_close();?>

</div>
<div id="catalogue-recommendations-block" class="col-md-12" >
    <?php
$_from = $_smarty_tpl->tpl_vars['catalogue_recommendations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value->viewUrl();?>
">  <?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</a>
            <?php echo $_smarty_tpl->tpl_vars['p']->value->description;?>

        </p>
    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</div>
            
<?php }
}
?>