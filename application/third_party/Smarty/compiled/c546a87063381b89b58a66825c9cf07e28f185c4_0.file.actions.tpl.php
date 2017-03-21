<?php /* Smarty version 3.1.27, created on 2016-11-01 07:25:58
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\system\views\admin\actions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17645818de36c2e0f8_71808410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c546a87063381b89b58a66825c9cf07e28f185c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\system\\views\\admin\\actions.tpl',
      1 => 1474552768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17645818de36c2e0f8_71808410',
  'variables' => 
  array (
    'keys' => 0,
    'title' => 0,
    'cache_key' => 0,
    'lang_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818de36d0fa23_17525792',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818de36d0fa23_17525792')) {
function content_5818de36d0fa23_17525792 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '17645818de36c2e0f8_71808410';
?>
 <?php echo smarty_function_action_title(array('title'=>'Maintenance Actions'),$_smarty_tpl);?>
     
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

     <a data-clear-action="clear_compiled_template" 
        class="text-capitalize maintain-action btn btn-default"><?php echo lang('plugin_system_clear_template');?>
<span class='glyphicon glyphicon-remove'> </span> 
    </a> 
     <a data-clear-action="clear_all_cache"
            class="text-capitalize maintain-action btn btn-default"><?php echo lang('plugin_system_clear_cache');?>
<span class='glyphicon glyphicon-remove'> </span> 
    </a> 
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

 <?php $_smarty_tpl->tpl_vars['lang_delete'] = new Smarty_Variable(lang('action_delete'), null, 0);?>
 <?php
$_from = $_smarty_tpl->tpl_vars['keys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['title']->_loop = false;
$_smarty_tpl->tpl_vars['cache_key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['cache_key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
$foreach_title_Sav = $_smarty_tpl->tpl_vars['title'];
?>
     <div class="text-capitalize">
     <div class="col-md-3"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </div>
     <div class="col-md-8 col-md-offset-1" style="padding-bottom: 10px">
         <a data-clear-action="<?php echo $_smarty_tpl->tpl_vars['cache_key']->value;?>
"
            class="maintain-action btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang_delete']->value;?>
<span class='glyphicon glyphicon-remove'> </span> 
         </a>  
     </div>
     </div>
<?php
$_smarty_tpl->tpl_vars['title'] = $foreach_title_Sav;
}
?>

<?php echo '<script'; ?>
>
    $(".maintain-action").click(function(){
        var roller = Nyra.util.startRoller( '<?php echo lang('please_wait');?>
...' );
        
        var cacheKey = $(this).data('clear-action');
        var ajaxOption = { 
            'done' : function( response ){
                if( response.success ){
                    Nyra.util.alert( '<?php echo lang('alert_delete_success');?>
');
                     Nyra.util.stopRoller( roller );
                }else{
                    Nyra.util.alert( '<?php echo lang('try_again_later');?>
');
                }
            },
            'always' : function(){
                 Nyra.util.stopRoller( roller );
            }
        }
        Nyra.request.post('<?php echo admin_url("system/clear_cache");?>
', { 'cache-key' : cacheKey } , ajaxOption)
    });
<?php echo '</script'; ?>
>
<?php }
}
?>