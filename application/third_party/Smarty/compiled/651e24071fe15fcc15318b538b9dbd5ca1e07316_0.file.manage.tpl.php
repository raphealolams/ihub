<?php /* Smarty version 3.1.27, created on 2016-10-31 15:35:48
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:148845817ff84d11328_96248645%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651e24071fe15fcc15318b538b9dbd5ca1e07316' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\manage.tpl',
      1 => 1474552765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148845817ff84d11328_96248645',
  'variables' => 
  array (
    'errors' => 0,
    'allPlugins' => 0,
    'activePlugins' => 0,
    'sys_plugins' => 0,
    'plugin' => 0,
    'public_uri' => 0,
    'name' => 0,
    'lang_disable' => 0,
    'lang_enable' => 0,
    'lang_uninstall' => 0,
    'lang_settings' => 0,
    'lang_repair' => 0,
    'update_data' => 0,
    'lang_author' => 0,
    'lang_version' => 0,
    'lang_type' => 0,
    'update_available' => 0,
    'latest_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817ff8545e338_87198042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817ff8545e338_87198042')) {
function content_5817ff8545e338_87198042 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '148845817ff84d11328_96248645';
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?> 
	<?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php }?> 
<?php $_smarty_tpl->tpl_vars['update_available'] = new Smarty_Variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['lang_settings'] = new Smarty_Variable('Settings', null, 0);?>
 <?php echo smarty_function_action_title(array('title'=>'Plugins List'),$_smarty_tpl);?>

    <div class="col-md-12" id="plugins-info">
        
    </div>

<div class="col-md-12">
    <div class="well">
        <input  class="check-all" data-list=".plugin-list" type="checkbox" name="" value="off">
        <span class="label label-info large-font"><?php echo lang('plugin_plugins_total');?>
  <span class="badge badge-success"> <?php echo count($_smarty_tpl->tpl_vars['allPlugins']->value);?>
</span></span>
        <span class="label label-info large-font"> <?php echo lang('plugin_plugins_enabled');?>
  <span class="badge badge-success"> <?php echo count($_smarty_tpl->tpl_vars['activePlugins']->value);?>
</span></span>
        <span class="label label-info large-font "><?php echo lang('plugin_plugins_system');?>
  <span class="badge badge-success"> <?php echo count($_smarty_tpl->tpl_vars['sys_plugins']->value);?>
</span></span>
        <span class="pull-right"><?php echo nyra_help_link('plugins');?>
 </span>
    </div>
</div>
<?php echo form_open();?>

   
    <?php $_smarty_tpl->tpl_vars['lang_author'] = new Smarty_Variable(lang('plugin_plugins_author'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_type'] = new Smarty_Variable(lang('plugin_plugins_type'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_author'] = new Smarty_Variable(lang('plugin_plugins_author'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_version'] = new Smarty_Variable(lang('plugin_plugins_version'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_update_available'] = new Smarty_Variable(lang('plugin_plugins_update_available'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_latest'] = new Smarty_Variable(lang('plugin_plugins_lastest_version'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_enable'] = new Smarty_Variable(lang('action_activate'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_disable'] = new Smarty_Variable(lang('action_deactivate'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_uninstall'] = new Smarty_Variable(lang('action_uninstall'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_repair'] = new Smarty_Variable(lang('action_repair'), null, 0);?>
    
    <?php
$_from = $_smarty_tpl->tpl_vars['allPlugins']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['plugin']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
$foreach_plugin_Sav = $_smarty_tpl->tpl_vars['plugin'];
?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable($_smarty_tpl->tpl_vars['plugin']->value->title, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable(strtolower($_smarty_tpl->tpl_vars['plugin']->value->name), null, 0);?>

        <div class="col-md-12 " style="border-style: groove " > <!--individual-->
            <div class="col-md-1">
                <input class="plugin-list " type="checkbox" name="plugins[]" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" />
            </div>
            <div class="col-md-5" > <!--action-->
                <p>
                    <a href="<?php echo admin_url("plugins/plugin_info/".((string)$_smarty_tpl->tpl_vars['plugin']->value->name));?>
">
                            <?php if ($_smarty_tpl->tpl_vars['plugin']->value->screenshot) {?>
                                <img width="300" class="img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['public_uri']->value;?>
themes/themes/<?php echo $_smarty_tpl->tpl_vars['plugin']->value->screenshot;?>
" />
                            <?php }?>
                            <strong> <?php echo $_smarty_tpl->tpl_vars['plugin']->value->title;?>
</strong> 
                        </a>
                </p>
                <p>
                    <?php if (!$_smarty_tpl->tpl_vars['plugin']->value->is_core || !$_smarty_tpl->tpl_vars['plugin']->value->auto_activate) {?> 
                        <?php if ($_smarty_tpl->tpl_vars['plugin']->value->isActive()) {?> 
                            <a  class="btn btn-default" href="<?php echo admin_url("plugins/disable/".((string)$_smarty_tpl->tpl_vars['name']->value));?>
"> 
                                <span class="glyphicon glyphicon-off"></span> <?php echo $_smarty_tpl->tpl_vars['lang_disable']->value;?>

                            </a>  
                        <?php } else { ?>
                            <a  class="btn btn-success" href="<?php echo admin_url("plugins/enable/".((string)$_smarty_tpl->tpl_vars['name']->value));?>
"> 
                                <span class="glyphicon glyphicon-ok"></span>
                                <?php echo $_smarty_tpl->tpl_vars['lang_enable']->value;?>
 </a> 
                        <?php }?>  
                        <a  class="btn btn-danger" href="<?php echo admin_url("plugins/uninstall/".((string)$_smarty_tpl->tpl_vars['name']->value));?>
">
                        <span class="glyphicon glyphicon-remove"></span><?php echo $_smarty_tpl->tpl_vars['lang_uninstall']->value;?>
</a>
                    <?php } else { ?>
                        <span class="label label-default"> System Plugin </span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->hasSettings()) {?>
                         <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->getSettingsUrl();?>
" 
                            class="btn btn-default" target="_blank">
                            <span class="glyphicon glyphicon-cog"></span> <?php echo $_smarty_tpl->tpl_vars['lang_settings']->value;?>

                        </a>
                    <?php }?>
                    <a  class="btn btn-default" href="<?php echo admin_url("plugins/repair/".((string)$_smarty_tpl->tpl_vars['name']->value));?>
">
                        <span class="glyphicon glyphicon-wrench"></span><?php echo $_smarty_tpl->tpl_vars['lang_repair']->value;?>

                    </a>
                    <?php $_smarty_tpl->tpl_vars['update_data'] = new Smarty_Variable($_smarty_tpl->tpl_vars['plugin']->value->getUpdateData(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['latest_version'] = new Smarty_Variable('', null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['update_data']->value && $_smarty_tpl->tpl_vars['update_data']->value->updateAvailable()) {?>
                        <?php $_smarty_tpl->tpl_vars['update_available'] = new Smarty_Variable('Yes', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['latest_version'] = new Smarty_Variable($_smarty_tpl->tpl_vars['update_data']->value->latest_version, null, 0);?>
                        <a href="<?php echo admin_url("maintenance/update/plugin/".((string)$_smarty_tpl->tpl_vars['plugin']->value->name));?>
" class="btn btn-primary">Update</a>
                    <?php }?>
                </div> <!--end- action-->
            <div class="col-md-6" > <!--description-->
                <p> 
                    <span class="label label-primary"> <?php echo $_smarty_tpl->tpl_vars['lang_author']->value;?>
</span>&nbsp<strong> <?php echo $_smarty_tpl->tpl_vars['plugin']->value->author;?>
</strong> | 
                    <span class="label label-primary"> <?php echo $_smarty_tpl->tpl_vars['lang_version']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['plugin']->value->version;?>
 | 
                    <span class="label label-primary"> <?php echo $_smarty_tpl->tpl_vars['lang_type']->value;?>
</span> <?php echo ucfirst($_smarty_tpl->tpl_vars['plugin']->value->type);?>

                    <?php if ($_smarty_tpl->tpl_vars['update_available']->value) {?><span class="label label-primary"> </span>  <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['latest_version']->value) {?><span class="label label-primary">Latest</span>  
                    <?php echo $_smarty_tpl->tpl_vars['latest_version']->value;
}?>
            
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value->parent) {?>
                        <span class="label label-primary"> For</span> 
                        <?php if (array_key_exists($_smarty_tpl->tpl_vars['plugin']->value->parent,$_smarty_tpl->tpl_vars['allPlugins']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['allPlugins']->value[$_smarty_tpl->tpl_vars['plugin']->value->parent]['title'];?>

                        <?php } else { ?>
                             <?php echo $_smarty_tpl->tpl_vars['plugin']->value->parent;?>

                        <?php }?>
                    <?php }?>
                </p>
                <p class="info bg-info"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->description;?>
  </p>
            </div>	<!--descriptionription-->
        </div>
        <hr />
        <?php
$_smarty_tpl->tpl_vars['plugin'] = $foreach_plugin_Sav;
}
?>
        <div class="col-lg-3">
            <label>To Checked</label>
            <select class="form-control" name="action">
                    <option value="deactivate">Deativate</option>
                    <option value="deactivate">Activate</option>
                    <option value="deactivate">Update</option>
                    <option value="deactivate">Uninstall</option>
            </select>
        </div>

    <?php echo form_close();?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
        
        Nyra.util.form.checkAll( '.check-all' ) ;
     <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
?>