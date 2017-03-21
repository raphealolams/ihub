<?php /* Smarty version 3.1.27, created on 2016-12-08 05:19:45
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\simple_pricing\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22723584988210e9ba7_36657071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '725c9bbe63e25adb6ba4c46e2ec04df4064c00ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\simple_pricing\\views\\admin\\edit.tpl',
      1 => 1475695993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22723584988210e9ba7_36657071',
  'variables' => 
  array (
    'list_url' => 0,
    'form' => 0,
    'object' => 0,
    'level_feature_form' => 0,
    'level_feature' => 0,
    'level_features' => 0,
    'feature' => 0,
    'redirect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58498821214a82_35913947',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58498821214a82_35913947')) {
function content_58498821214a82_35913947 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '22723584988210e9ba7_36657071';
$_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo HtmlHelper::listButton($_smarty_tpl->tpl_vars['list_url']->value);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="col-md-6">
    <h4>Level Details</h4>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['object']->value);?>

        <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>

</div>
<div class="col-md-6">
    <?php if (isset($_smarty_tpl->tpl_vars['level_feature_form']->value)) {?>
         <h4>Add Features</h4>
        <?php echo $_smarty_tpl->tpl_vars['level_feature_form']->value->open();?>

            <?php echo $_smarty_tpl->tpl_vars['level_feature_form']->value->render($_smarty_tpl->tpl_vars['level_feature']->value);?>

            <?php echo $_smarty_tpl->tpl_vars['level_feature_form']->value->submitButton();?>

        <?php echo $_smarty_tpl->tpl_vars['level_feature_form']->value->close();?>

    <?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['level_features']->value)) {?>
<div class="col-md-12">
    <h4>Enable/Disable Level Features</h4>
    <?php $_smarty_tpl->tpl_vars['redirect'] = new Smarty_Variable(current_url(), null, 0);?>
    <?php
$_from = $_smarty_tpl->tpl_vars['level_features']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['feature']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
$foreach_feature_Sav = $_smarty_tpl->tpl_vars['feature'];
?>
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-4">
                     <i class="<?php echo $_smarty_tpl->tpl_vars['feature']->value->feature_icon;?>
 "></i>
                     <span class="feature-name">
                         <?php echo $_smarty_tpl->tpl_vars['feature']->value->feature_name;?>
 
                     </span>
                </div>
                <div class="col-md-6">
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value->live) {?>
                        <a href="<?php echo admin_url("simple_pricing/disable/level_feature/".((string)$_smarty_tpl->tpl_vars['feature']->value->id));?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                           class="btn btn-danger action-btn"
                           data-action="disable" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                           >
                            <i class="glyphicon glyphicon-ban-circle"></i>
                        </a>
                    <?php } else { ?>
                         <a href="<?php echo admin_url("simple_pricing/enable/level_feature/".((string)$_smarty_tpl->tpl_vars['feature']->value->id));?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                            class="btn btn-success action-btn"
                             data-action="enable" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"
                            >
                            <i class="glyphicon glyphicon-check"></i>
                        </a>
                    <?php }?>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['feature'] = $foreach_feature_Sav;
}
?>
</div>
        <?php echo '<script'; ?>
>
            
       $('.action-btn').click(function(e){
           e.preventDefault();
           // get relative admin url
           var urlBase = '<?php echo admin_url('simple_pricing/',false);?>
'
           var btn = $(this);
           var id = btn.data('id');
           var action = btn.data('action');
           
           if(!action || !id ){
               Nyra.log("action,id and type must be set with data api");
               return;
           }
           // add the url parameters
           urlBase += action+'/level_feature/'+id;
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
<?php }
}
}
?>