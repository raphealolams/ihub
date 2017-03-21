<?php /* Smarty version 3.1.27, created on 2016-11-02 05:33:15
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\system\views\widgets\admin\site_update_checker.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27602581a154bcf86a1_36623147%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c898ea23649a68bc940d5069ce305c9be220cacf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\system\\views\\widgets\\admin\\site_update_checker.tpl',
      1 => 1474552768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27602581a154bcf86a1_36623147',
  'variables' => 
  array (
    'current_cms_vers' => 0,
    'update_available' => 0,
    'latest_cms_version' => 0,
    'is_error' => 0,
    'response' => 0,
    'span_class' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a154c0a8476_03751591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a154c0a8476_03751591')) {
function content_581a154c0a8476_03751591 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '27602581a154bcf86a1_36623147';
?>
<p><span id="cms-version" class="label label-default"> Current Cms Version </span><?php echo $_smarty_tpl->tpl_vars['current_cms_vers']->value;?>
  
    <a href="#" > <span class="glyphicon glyphicon-refresh"> </span> </a>

    <?php $_smarty_tpl->tpl_vars['span_class'] = new Smarty_Variable('info', null, 0);?>
     <?php $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['update_available']->value) {?> 
        <?php $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable($_smarty_tpl->tpl_vars['latest_cms_version']->value, null, 0);?>  
        <?php $_smarty_tpl->tpl_vars['span_class'] = new Smarty_Variable('success', null, 0);?>
        <a href="#" id="cms-update-btn" >Update Available <span  id="cms-update-icon" class="glyphicon glyphicon-download"> </span> </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['is_error']->value) {?>
        <?php $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable($_smarty_tpl->tpl_vars['response']->value, null, 0);?>  
        <?php $_smarty_tpl->tpl_vars['span_class'] = new Smarty_Variable('warning', null, 0);?>
    <?php } else { ?>
         <?php $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable('No Update', null, 0);?>  
    <?php }?>
    <span class="bg-<?php echo $_smarty_tpl->tpl_vars['span_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
 
        
    </span>
 </p>

<?php if (!$_smarty_tpl->tpl_vars['is_error']->value) {?>
    <p>
        Plugins <span class="badge" id="total-plugin-update"><?php echo $_smarty_tpl->tpl_vars['response']->value['available_updates_total']['plugins'];?>
  </span>
    </p>
    <p>
            Themes <span class="badge"  id="total-theme-update"><?php echo $_smarty_tpl->tpl_vars['response']->value['available_updates_total']['themes'];?>
 </span>
    </p>
<?php }?>
<?php echo smarty_function_theme_plugin(array('name'=>'font-awesome'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo '<script'; ?>
>
	Nyra.util.spin( '#cms-update-icon');
		$('#cms-update-btn').click( function(){
			Nyra.util.spin( '#cms-update-icon');
		});
	<?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



    
    

<?php }
}
?>