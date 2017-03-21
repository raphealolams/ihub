<?php /* Smarty version 3.1.27, created on 2016-11-21 10:10:53
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\featured\views\admin\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31566583362dd77b814_52123397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966a801f600debab1ee527b86f5b0047ff86d5f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\featured\\views\\admin\\add.tpl',
      1 => 1474552722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31566583362dd77b814_52123397',
  'variables' => 
  array (
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583362dd8efe63_55242988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583362dd8efe63_55242988')) {
function content_583362dd8efe63_55242988 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '31566583362dd77b814_52123397';
echo smarty_function_action_title(array('title'=>'Add Group'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo HtmlHelper::listButton(admin_url('featured/manage'));?>

        <div class="pull-right">
            <?php echo HtmlHelper::submitButton('featured-form');?>

        </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?> 
    <div class="alert alert-success"> <?php echo lang('alert_create_success');?>
 </div>
 <?php } else { ?>
     <div class="col-md-12">
        <?php echo form_open('','id="featured-form"');?>

        <div class="form-group">
            <label class="text-capitalize" for="title"> <?php echo lang('noun_title');?>
 </label>
            <input type="text" name="title" class="form-control" placeholder="Featured Title" required="required" />
            <?php echo form_error('title');?>

        </div>
        <div class="form-group">
            <label class="text-capitalize"  for="slug"> <?php echo lang('noun_slug');?>
 </label>
            <input type="text" name="slug" class="form-control" placeholder="<?php echo lang('info_empty_auto_generate');?>
"  />
            <?php echo form_error('title');?>

        </div>
        
        <div class="form-group">
            <label class="text-capitalize"  for="desc"> <?php echo lang('noun_description');?>
 </label>
            <textarea cols="10" rows="10" class="form-control" name="desc" placeholder="Desciption of Menu"></textarea>
            <?php echo form_error('title');?>

        </div>
        <?php echo form_close();?>

     </div>
    <?php }
}
}
?>