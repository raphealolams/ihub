<?php /* Smarty version 3.1.27, created on 2016-12-26 05:54:01
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\nyra_developer\views\admin\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2462258614b295da777_17288416%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd867903a3c1176c65e59ae3f48e54c3e853f3f1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\nyra_developer\\views\\admin\\view.tpl',
      1 => 1482771239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2462258614b295da777_17288416',
  'variables' => 
  array (
    'xml_meta' => 0,
    'commit_info' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58614b2964fc62_51471521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58614b2964fc62_51471521')) {
function content_58614b2964fc62_51471521 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '2462258614b295da777_17288416';
echo smarty_function_action_title(array('title'=>'Project Details'),$_smarty_tpl);?>


<div class="col-md-12">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-8">
        <p>  <span class="label label-primary"> Title</span> <strong> <?php echo $_smarty_tpl->tpl_vars['xml_meta']->value->title;?>
 </strong> </p>
        <p>  <span class="label label-primary"> Name</span> <?php echo $_smarty_tpl->tpl_vars['xml_meta']->value->name;?>
 </p>
        <p>  <span class="label label-primary">Description</span> <?php echo $_smarty_tpl->tpl_vars['xml_meta']->value->description;?>
</p>
        <p>  <span class="label label-primary">Current Version</span> <?php echo $_smarty_tpl->tpl_vars['xml_meta']->value->version;?>
</p>
        <p>  <span class="label label-primary">Current Version Commited</span>
            <?php if ($_smarty_tpl->tpl_vars['xml_meta']->value->current_version_commited) {?> 
                <span class="glyphicon glyphicon-check">  </span>
            <?php } else { ?><span class="">No</span> 
            <?php }?>
        </p>
        <p>Stable version :<?php echo $_smarty_tpl->tpl_vars['commit_info']->value['stable_version'];?>
 </p>
        <p>Last Commit Date : <?php echo $_smarty_tpl->tpl_vars['commit_info']->value['last_commit'];?>
</p>
    </div>
</div>
<div class="row">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#commit" aria-controls="commit_updates" role="tab" data-toggle="tab">Commit Update</a></li>
        <li role="presentation"><a href="#update_files" aria-controls="themes" role="tab" data-toggle="tab">Update Files</a></li>
      </ul>
     <!-- Tab panes -->
     
      <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="commit">
                <div class="alert alert-info"><strong>Note: </strong>Folders that are checked will be exclude !</div>
                <?php echo form_open();?>

                    <?php echo $_smarty_tpl->tpl_vars['form']->value->render();?>

                    <?php echo $_smarty_tpl->tpl_vars['form']->value->submitButton();?>

                <?php echo form_close();?>

            </div>
            <div role="tabpanel" class="tab-pane active" id="update_files">
                
            </div>
      </div>
</div>
            
<?php }
}
?>