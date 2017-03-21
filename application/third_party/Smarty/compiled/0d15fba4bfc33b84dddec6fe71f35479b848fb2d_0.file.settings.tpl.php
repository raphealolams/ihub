<?php /* Smarty version 3.1.27, created on 2016-10-31 15:33:48
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\notifications\views\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:148705817ff0ca745f3_26269158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d15fba4bfc33b84dddec6fe71f35479b848fb2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\notifications\\views\\settings.tpl',
      1 => 1474552763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148705817ff0ca745f3_26269158',
  'variables' => 
  array (
    'success' => 0,
    'form' => 0,
    'user' => 0,
    'plugin_notifications' => 0,
    'pn' => 0,
    'notification' => 0,
    'subscribed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817ff0cc5fa76_79057379',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817ff0cc5fa76_79057379')) {
function content_5817ff0cc5fa76_79057379 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '148705817ff0ca745f3_26269158';
?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <?php echo nyra_alert(lang('alert_update_success'));?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['user']->value);?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value->can('subscribe_system_notifications')) {?>
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    <?php
$_from = $_smarty_tpl->tpl_vars['plugin_notifications']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pn']->value) {
$_smarty_tpl->tpl_vars['pn']->_loop = true;
$foreach_pn_Sav = $_smarty_tpl->tpl_vars['pn'];
?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['pn']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['notification']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->_loop = true;
$foreach_notification_Sav = $_smarty_tpl->tpl_vars['notification'];
?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['notification']->value['entity'] != 'SYSTEM') {?>
                                <?php continue 1;?>
                            <?php }?>
                            <li class="list-group-item">
                                <?php echo StringHelper::title($_smarty_tpl->tpl_vars['notification']->value['action'],'_');?>

                                <div class="pull-right">
                                    <?php if (array_key_exists("SYSTEM_".((string)$_smarty_tpl->tpl_vars['notification']->value['action']),$_smarty_tpl->tpl_vars['subscribed']->value)) {?>
                                        <a data-stream-id="<?php echo $_smarty_tpl->tpl_vars['notification']->value['action'];?>
" 
                                                data-action="off"
                                                class="btn btn-primary btn-action">on
                                        </a>
                                    <?php } else { ?>
                                        <a data-stream-id="<?php echo $_smarty_tpl->tpl_vars['notification']->value['action'];?>
" 
                                                data-action="on"
                                                class="btn btn-default btn-action">off
                                        </a>
                                    <?php }?>                                        
                                </div>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['notification'] = $foreach_notification_Sav;
}
?>
                    <?php
$_smarty_tpl->tpl_vars['pn'] = $foreach_pn_Sav;
}
?>
                </ul>
            </div>
        </div>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton('class="btn btn-default btn-justified"');?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->close();?>


<style>
    .btn-action{
        padding: 3px 12px !important;
        
    }
</style>
<?php echo '<script'; ?>
>
    $('.btn-action').click(function(e){
        e.preventDefault();
        var btn = $(this);
        var action = btn.data('action');
        var stream = btn.data('stream-id');
        
        if(!action || !stream){
            Nyra.log("The action or stream is not set");
            return;
        }
        var requestData = {
            'action' : action,
            'stream' : stream
        };
        var done = function(response){
            if(action == 'on'){
                btn.removeClass('btn-default').addClass('btn-primary').text('on').data('action' , 'off')
            }
            else if(action == 'off'){
                btn.removeClass('btn-primary').addClass('btn-default').text('off').data('action' , 'on')
            }
        };
        
        Nyra.request.post('/notifications/subscription' , requestData , { done : done });
        
    })
<?php echo '</script'; ?>
><?php }
}
?>