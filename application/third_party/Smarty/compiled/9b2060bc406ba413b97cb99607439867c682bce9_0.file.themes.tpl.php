<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\appearance\views\admin\themes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:331558179fa745c899_69457216%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b2060bc406ba413b97cb99607439867c682bce9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\appearance\\views\\admin\\themes.tpl',
      1 => 1474552708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331558179fa745c899_69457216',
  'variables' => 
  array (
    'themes' => 0,
    'theme' => 0,
    'public_uri' => 0,
    'current_theme' => 0,
    'lang_settings' => 0,
    'lang_repair' => 0,
    'update_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa7592208_44389118',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa7592208_44389118')) {
function content_58179fa7592208_44389118 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '331558179fa745c899_69457216';
?>

<?php ob_start();
echo lang('action_change');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>
 
<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo admin_url("appearance/install_theme");?>
" 
        class="btn btn-default"> 
        <span class="glyphicon glyphicon-upload"></span> 
        <strong><?php echo lang('action_upload_#','Theme');?>
</strong>
    </a>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars['lang_repair'] = new Smarty_Variable(lang('action_repair'), null, 0);?>

<?php $_smarty_tpl->tpl_vars['lang_settings'] = new Smarty_Variable('Settings', null, 0);?>
<div class="table-responsive" >
    <table class="table table-hover">
        <thead>
            <tr>
                <th><?php echo lang('title');?>
</th>
                <th><?php echo lang('description');?>
</th>
                <th><?php echo lang('actions');?>
</th>
            <tr>
        </thead>
        <?php
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$foreach_theme_Sav = $_smarty_tpl->tpl_vars['theme'];
?>
        <tr>
            <td>
                <a href="<?php echo admin_url("appearance/theme_info/".((string)$_smarty_tpl->tpl_vars['theme']->value->name));?>
">
                    <?php if ($_smarty_tpl->tpl_vars['theme']->value->screenshot) {?>
                        <img width="300" class="img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['public_uri']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value->screenshot;?>
" />
                    <?php }?>
                    <strong> <?php echo $_smarty_tpl->tpl_vars['theme']->value->title;?>
</strong> 
                </a><?php echo $_smarty_tpl->tpl_vars['theme']->value->version;?>

            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['theme']->value->description;?>
 </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['current_theme']->value != trim($_smarty_tpl->tpl_vars['theme']->value->name)) {?>
                    <a target="_blank" href="<?php echo site_url();?>
?preview_theme=1&theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
" 
                        class="btn btn-primary"> <span class="glyphicon glyphicon-eye-open"></span> <?php echo lang('action_preview');?>
   </a>
                     <a href="<?php echo admin_url("appearance/activate_theme/".((string)$_smarty_tpl->tpl_vars['theme']->value->name));?>
" 
                        class="btn btn-success">
                         <span class="glyphicon glyphicon-ok"></span>
                         <?php echo lang('action_activate');?>
  
                        </a>
                <?php } else { ?>
                    <button class="btn btn default disable" > <?php echo lang('action_activate');?>
 <span class="glyphicon glyphicon-check"></span> </button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['theme']->value->hasSettings()) {?>
                     <a href="<?php echo admin_url("appearance/theme_options/".((string)$_smarty_tpl->tpl_vars['theme']->value->name));?>
" 
                        class="btn btn-default" target="_blank">
                        <span class="glyphicon glyphicon-cog"></span> <?php echo $_smarty_tpl->tpl_vars['lang_settings']->value;?>

                    </a>
                <?php }?>
                <a href="<?php echo admin_url("appearance/repair_theme/".((string)$_smarty_tpl->tpl_vars['theme']->value->name));?>
" class="btn btn-default">
                   <span class="glyphicon glyphicon-wrench"></span> <?php echo $_smarty_tpl->tpl_vars['lang_repair']->value;?>

                </a>
                 <a href="<?php echo admin_url("admin/appearance/unistall_theme/".((string)$_smarty_tpl->tpl_vars['theme']->value->name));?>
" class="btn btn-default">
                   <span class="glyphicon glyphicon-remove"></span>  <?php echo lang('action_uninstall');?>

                </a>

                <?php $_smarty_tpl->tpl_vars['update_info'] = new Smarty_Variable($_smarty_tpl->tpl_vars['theme']->value->getUpdateData(), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['update_available'] = new Smarty_Variable('No', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['latest'] = new Smarty_Variable('', null, 0);?>
                 <?php if ($_smarty_tpl->tpl_vars['update_info']->value && $_smarty_tpl->tpl_vars['update_info']->value->updateAvailable()) {?>
                     <?php $_smarty_tpl->tpl_vars['update_available'] = new Smarty_Variable('Yes', null, 0);?>
                     <?php $_smarty_tpl->tpl_vars['latest'] = new Smarty_Variable($_smarty_tpl->tpl_vars['update_info']->value->latest_version, null, 0);?>
                     <p>  New version is avilable 
                         <a href="<?php echo admin_url("maintenance/update/theme/".((string)$_smarty_tpl->tpl_vars['theme']->value->name));?>
" class="">
                             <span class="glyphicon glyphicon-download"></span>
                             <?php echo lang('action_update');?>
 </a>
                     </p>
                     
                 <?php }?>
                </td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['theme'] = $foreach_theme_Sav;
}
?> 
    </table>
</div>
<?php }
}
?>