<?php /* Smarty version 3.1.27, created on 2016-11-02 05:34:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\nyra_developer\views\admin\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22749581a15b3ecbde0_68465316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f102144a23a4f6c6aca047851da3a800749d40d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\nyra_developer\\views\\admin\\list.tpl',
      1 => 1463926978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22749581a15b3ecbde0_68465316',
  'variables' => 
  array (
    'commited' => 0,
    'commited_list' => 0,
    'my_projects' => 0,
    'p' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a15b43a2e07_05059128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a15b43a2e07_05059128')) {
function content_581a15b43a2e07_05059128 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '22749581a15b3ecbde0_68465316';
echo smarty_function_action_title(array('title'=>'Projects List'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo admin_url("nyra_developer/view/cms");?>
" 
       class="btn btn-default"> <strong>View CMS Commit Detail </strong><span class="glyphicon glyphicon-eye-open"></span> </a>
    <a href="<?php echo admin_url("nyra_developer/add_cms_version/install");?>
" 
       class="btn btn-default"> <strong>Commit New Cms Install Version </strong><span class="glyphicon glyphicon-save-file"></span> </a>
    <a href="<?php echo admin_url("nyra_developer/add_cms_version/update");?>
" 
       class="btn btn-default"> <strong>Commit New Cms Update Version </strong><span class="glyphicon glyphicon-save-file"></span> </a>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<div>
    <?php $_smarty_tpl->tpl_vars['commited_list'] = new Smarty_Variable('Themes: ', null, 0);?>
    <?php if (count($_smarty_tpl->tpl_vars['commited']->value['themes'])) {?> 
        <h3>Themes </h3>
        <div class="alert alert-info">THEMES: <?php echo join(' , ',$_smarty_tpl->tpl_vars['commited']->value['themes']);?>
</div>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['commited']->value['plugins'])) {?> 
        <h3>Plugins </h3>
        <div class="alert alert-info"><?php echo join(' , ',$_smarty_tpl->tpl_vars['commited']->value['plugins']);?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['commited_list']->value) {?> <?php echo $_smarty_tpl->tpl_vars['commited_list']->value;?>
</div><?php }?>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#plugins" aria-controls="plugins" role="tab" data-toggle="tab">Plugins</a></li>
    <li role="presentation"><a href="#themes" aria-controls="themes" role="tab" data-toggle="tab">Themes</a></li>
  </ul>
  <!-- Tab panes -->
    <?php echo form_open();?>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="plugins">
            <?php if (isset($_smarty_tpl->tpl_vars['my_projects']->value['plugins'])) {?>
                <table class="table table-responsive">
                    <tr><td><input type="checkbox" data-list=".plugin-list-item" class="check-all"/></td></tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['my_projects']->value['plugins'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                        <tr>
                            <td><input name="plugins[]" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
" type="checkbox" class="plugin-list-item"/><strong><?php echo $_smarty_tpl->tpl_vars['p']->value->title;?>
 </strong></td>
                            <td> 
                                <a href="<?php echo admin_url("nyra_developer/view/plugin/".((string)$_smarty_tpl->tpl_vars['p']->value->name));?>
" 
                                                class="btn btn-primary "> <span class="glyphicon glyphicon-eye-open"></span> View Details</a>
                                <a href="<?php echo admin_url("nyra_developer/add_version/plugin/".((string)$_smarty_tpl->tpl_vars['p']->value->name));?>
" 
                                                class="btn btn-primary "> <span class="glyphicon glyphicon-save-file"></span>Add new Version </a>
                            </td>
                        </tr>
                     <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                 </table>
            <?php }?>
        </div>
        <div role="tabpanel" class="tab-pane" id="themes">
            <?php if (isset($_smarty_tpl->tpl_vars['my_projects']->value['themes'])) {?>
                <?php echo form_open();?>

                     <table class="table table-responsive">
                         <tr>
                             <td><input type="checkbox" data-list=".theme-list-item" class="check-all"/></td>
                         </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['my_projects']->value['themes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>                            <tr>
                                <td> <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['t']->value->name;?>
" name="themes[]" class="theme-list-item"/><strong> <?php echo $_smarty_tpl->tpl_vars['t']->value->title;?>
 </strong></td>
                            <td><a href="<?php echo admin_url("nyra_developer/view/theme/".((string)$_smarty_tpl->tpl_vars['t']->value->name));?>
" 
                                   class="btn btn-primary "> View Details <span class="glyphicon glyphicon-eye-open"></span></a> 
                                <a href="<?php echo admin_url("nyra_developer/add_version/theme/".((string)$_smarty_tpl->tpl_vars['t']->value->name));?>
" 
                                   class="btn btn-primary "> Add new Version <span class="glyphicon glyphicon-save-file"></span></a> 
                            </td>                                            
                            </tr>
                       <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
                   </table>
            <?php }?>
        </div>
    </div>
    <input type="submit" value="Commit Selected" name="commit" class="btn btn-success btn-block" />
    <?php echo form_close();?>

</div>
       <?php }
}
?>