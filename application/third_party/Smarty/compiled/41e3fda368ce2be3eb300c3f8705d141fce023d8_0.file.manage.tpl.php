<?php /* Smarty version 3.1.27, created on 2016-11-03 05:30:01
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\roles\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18300581b6609946879_80009482%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e3fda368ce2be3eb300c3f8705d141fce023d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\roles\\views\\admin\\manage.tpl',
      1 => 1474552767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18300581b6609946879_80009482',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'CI' => 0,
    'roles' => 0,
    'current_role_edit' => 0,
    'role' => 0,
    'index' => 0,
    'role_perms' => 0,
    'lang_toolbar' => 0,
    'lang_editor_plugins' => 0,
    'lang_title' => 0,
    'lang_status' => 0,
    'lang_desc' => 0,
    'availablePermissions' => 0,
    'data' => 0,
    'perm_data' => 0,
    'plugin' => 0,
    'perm_name' => 0,
    'lang_update' => 0,
    'default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581b660b152101_64574044',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581b660b152101_64574044')) {
function content_581b660b152101_64574044 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '18300581b6609946879_80009482';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
        <?php echo nyra_alert(lang('alert_update_success'),'success');?>

    <?php }?>
    <?php $_smarty_tpl->tpl_vars['lang_desc'] = new Smarty_Variable(lang('noun_description'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_title'] = new Smarty_Variable(lang('label_title'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_status'] = new Smarty_Variable(lang('label_status'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_edit'] = new Smarty_Variable(lang('action_edit'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_update'] = new Smarty_Variable(lang('action_update'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_delete'] = new Smarty_Variable(lang('action_delete'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_toolbar'] = new Smarty_Variable(lang('plugin_roles_toolbars'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['lang_editor_plugins'] = new Smarty_Variable(lang('plugin_roles_editor_plugins'), null, 0);?>
    
    <?php $_smarty_tpl->tpl_vars['current_role_edit'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->input->get('current_role'), null, 0);?>
    
    <?php echo smarty_function_action_title(array('title'=>'Manage Roles'),$_smarty_tpl);?>

    <section id="permission-form" class="col-lg-12" > <!-- roles-->
        <?php if (is_array($_smarty_tpl->tpl_vars['roles']->value) && sizeof($_smarty_tpl->tpl_vars['roles']->value) > 0) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <ul class="nav nav-pills">
                <?php $_smarty_tpl->tpl_vars['tab_content'] = new Smarty_Variable('', null, 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['role']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$foreach_role_Sav = $_smarty_tpl->tpl_vars['role'];
?>
                    <li class=" <?php if ($_smarty_tpl->tpl_vars['current_role_edit']->value == $_smarty_tpl->tpl_vars['role']->value->name) {?>active<?php }?>"> 
                        <a href="#role-index-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-toggle="tab" ><?php echo $_smarty_tpl->tpl_vars['role']->value->title;?>
 </a> 
                    </li>
                <?php
$_smarty_tpl->tpl_vars['role'] = $foreach_role_Sav;
}
?>
            </ul>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            
            <div class="tab-content col-lg-8" style="min-height: 500px">
            <?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['role']->_loop = false;
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$foreach_role_Sav = $_smarty_tpl->tpl_vars['role'];
?>
                <div id="role-index-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['current_role_edit']->value == $_smarty_tpl->tpl_vars['role']->value->name) {?>in  active<?php }?>">
                    <?php $_smarty_tpl->tpl_vars['role_perms'] = new Smarty_Variable($_smarty_tpl->tpl_vars['role']->value->getPermissions(), null, 0);?>
                    <?php ob_start();
echo current_url();
$_tmp1=ob_get_clean();
echo nyra_form_open($_tmp1."?current_role=".((string)$_smarty_tpl->tpl_vars['role']->value->name),$_smarty_tpl->tpl_vars['role']->value->name);?>

                        <h4>  
                            <span id="role-<?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
-perm-count" class="badge badge-success"><?php echo count($_smarty_tpl->tpl_vars['role_perms']->value);?>
</span> 
                            Permissions for <?php echo $_smarty_tpl->tpl_vars['role']->value->title;?>
  
                        </h4>
                        <p>
                          <a href="<?php echo admin_url("roles/edit/".((string)$_smarty_tpl->tpl_vars['role']->value->id));?>
" class="btn btn-default" >
                            <span class="glyphicon glyphicon-pencil"></span> Edit Details
                          </a>
                          <a href="<?php echo admin_url("roles/editor_toolbar/".((string)$_smarty_tpl->tpl_vars['role']->value->id));?>
" class="btn btn-default" >
                            <span class="glyphicon glyphicon-briefcase"></span> <?php echo $_smarty_tpl->tpl_vars['lang_toolbar']->value;?>

                          </a>
                          <a href="<?php echo admin_url("roles/editor_plugins/".((string)$_smarty_tpl->tpl_vars['role']->value->id));?>
" class="btn btn-default" >
                            <span class="glyphicon glyphicon-wrench"></span> <?php echo $_smarty_tpl->tpl_vars['lang_editor_plugins']->value;?>

                          </a>
                        </p>
                       
                        
                        <input type="hidden" name="role" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
"  />
                        <table class="table table-responsive">
                            <thead>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang_title']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang_status']->value;?>
</th>
                                <th> <?php echo $_smarty_tpl->tpl_vars['lang_desc']->value;?>
</th>   
                                <th> Plugin</th>   
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['availablePermissions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
$_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['perm_data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['perm_data']->_loop = false;
$_smarty_tpl->tpl_vars['perm_name'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['perm_name']->value => $_smarty_tpl->tpl_vars['perm_data']->value) {
$_smarty_tpl->tpl_vars['perm_data']->_loop = true;
$foreach_perm_data_Sav = $_smarty_tpl->tpl_vars['perm_data'];
?>
                                <tr> 
                                    <td><?php echo $_smarty_tpl->tpl_vars['perm_data']->value['title'];?>
 </td>
                                    <td><input type="checkbox" name="access[<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
][]"  
                                        <?php if ($_smarty_tpl->tpl_vars['role']->value->name == 'administrator') {?> disabled="disabled" <?php }?>
                                        <?php if (array_key_exists($_smarty_tpl->tpl_vars['perm_name']->value,$_smarty_tpl->tpl_vars['role_perms']->value) || $_smarty_tpl->tpl_vars['role']->value->name == 'administrator') {?> checked="checked"
                                        <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['perm_name']->value;?>
"  
                                        class="checkbox-permission"
                                        data-count-target="#role-<?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
-perm-count"
                                        />  
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['perm_data']->value['description'];?>
 </td>
                                    <td><span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
</span></td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['perm_data'] = $foreach_perm_data_Sav;
}
?>
                            <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                            </tbody>
                        </table>
                        <div>
                            <input type="submit" name="add-permissions" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['lang_update']->value;?>
"  
                            <?php if ($_smarty_tpl->tpl_vars['role']->value->name == 'administrator') {?> disabled="disabled" <?php }?> />
                            <?php if (!array_key_exists($_smarty_tpl->tpl_vars['role']->value->name,$_smarty_tpl->tpl_vars['default']->value)) {?> 
                                <a href="{ site_url( 'admin/roles/delete/<?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
' ) }" onclick="return confirm( <?php echo lang('action_confirm');?>
 )" 
                                   class="btn btn-danger" > 
                                </a>
                            <?php }?>
                    </div>
                    <?php echo form_close();?>

                     
                </div> <!-- individual role-->
            <?php
$_smarty_tpl->tpl_vars['role'] = $foreach_role_Sav;
}
?>
            </div>
        <?php }?>
    </section > <!--end roles-->
    <div class="clearfix"></div>
    <div class="col-md-12"> 
       
        <?php ob_start();
echo lang('plugin_roles_restore_default');
$_tmp2=ob_get_clean();
ob_start();
echo lang('action_confirm');
$_tmp3=ob_get_clean();
echo UrlHelper::anchor('admin/roles/reset',$_tmp2,array('onclick'=>"return confirm( '".$_tmp3."')",'class'=>"btn btn-primary"),'?yes');?>

        <?php ob_start();
echo lang('plugin_roles_restore_delete');
$_tmp4=ob_get_clean();
ob_start();
echo lang('plugin_roles_restore_delete_prompt');
$_tmp5=ob_get_clean();
echo UrlHelper::anchor('admin/roles/reset',$_tmp4,array('onclick'=>"return confirm( '".$_tmp5."')",'class'=>"btn btn-primary"));?>

        </a> 
    </div>
<?php }?>
         

<?php echo '<script'; ?>
>
    $(function(){
        
        var current = $('.nav-pills li.active a');
        function changeCurrentTab()
        {
            current.children('i').remove();
            current = $('.nav-pills li.active a');
            current.prepend('<i class="glyphicon glyphicon-hand-right"></i> ');
        }
        changeCurrentTab();
        
        $('.nav-pills a[data-toggle="tab"]').on('shown.bs.tab', function(){
            changeCurrentTab();
        });
        
        
        
        
        $('.checkbox-permission').change(function(){
            var elem = $(this);
            var target = $(elem.data('count-target'));
            var value = target.text();
            if(elem.prop('checked')){
                value++;
            }else{
                value --;
            }
            // normalize
            if(value < 0){
                value = 0
            }
            // change the value
            target.text(value)
        })
    });
<?php echo '</script'; ?>
>

<?php }
}
?>