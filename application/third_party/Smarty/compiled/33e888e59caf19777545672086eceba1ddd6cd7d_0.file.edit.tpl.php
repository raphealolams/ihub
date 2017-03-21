<?php /* Smarty version 3.1.27, created on 2016-12-13 02:51:25
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\menus\views\admin\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21709584ffcdd070104_96996292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33e888e59caf19777545672086eceba1ddd6cd7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\menus\\views\\admin\\edit.tpl',
      1 => 1475276082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21709584ffcdd070104_96996292',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffcdd1cec03_87976830',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffcdd1cec03_87976830')) {
function content_584ffcdd1cec03_87976830 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_loop_errors')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.loop_errors.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '21709584ffcdd070104_96996292';
ob_start();
echo lang('action_update_#','menu');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['success']->value) {?> 
    <?php echo nyra_alert(lang('alert_update_success'),'success');?>

 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
     <?php echo smarty_function_loop_errors(array('error'=>$_smarty_tpl->tpl_vars['errors']->value),$_smarty_tpl);?>

 <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         <?php echo HtmlHelper::listButton(admin_url('menus/manage'));?>

        <div class="pull-right">
            <?php echo HtmlHelper::submitButton('menu-form');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo form_open('',array('id'=>"menu-form"));?>

       <div class="form-group">
           <label for="title" class="text-capitalize"> <?php echo lang('label_title');?>
 </label>
           <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value->title;?>
"
                  class="form-control" placeholder="" required="required" />
           <?php echo form_error('title');?>

       </div>
       <div class="form-group">
           <label for="desc" class="text-capitalize"> <?php echo lang('label_description');?>
</label>
           <textarea cols="10" rows="10" class="form-control" name="description" 
                     placeholder=""><?php echo $_smarty_tpl->tpl_vars['menu']->value->description;?>
</textarea>
           <?php echo form_error('description');?>

       </div>
   <?php echo form_close();?>

<?php }
}
}
?>