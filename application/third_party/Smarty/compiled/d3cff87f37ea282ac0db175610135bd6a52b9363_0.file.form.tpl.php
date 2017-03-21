<?php /* Smarty version 3.1.27, created on 2016-10-31 08:59:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\comments\views\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19075817a2b35fe057_21086425%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3cff87f37ea282ac0db175610135bd6a52b9363' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\comments\\views\\form.tpl',
      1 => 1475563737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19075817a2b35fe057_21086425',
  'variables' => 
  array (
    'form_action' => 0,
    'reply_comment_id' => 0,
    'f_action' => 0,
    'entity_id' => 0,
    'entity' => 0,
    'user' => 0,
    'message' => 0,
    'button_text' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817a2b36b1367_28307281',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817a2b36b1367_28307281')) {
function content_5817a2b36b1367_28307281 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19075817a2b35fe057_21086425';
?>

 <?php $_smarty_tpl->tpl_vars['f_action'] = new Smarty_Variable('', null, 0);?>
 <?php $_smarty_tpl->tpl_vars['reply_to'] = new Smarty_Variable('', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['form_action']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['f_action'] = new Smarty_Variable($_smarty_tpl->tpl_vars['form_action']->value, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['reply_comment_id']->value) && $_smarty_tpl->tpl_vars['reply_comment_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['reply_to'] = new Smarty_Variable($_smarty_tpl->tpl_vars['reply_comment_id']->value, null, 0);?>
<?php }?>
    <?php echo nyra_form_open($_smarty_tpl->tpl_vars['f_action']->value,array('class'=>'comment-form'));?>

        <input type="hidden" name="entity_id" value="<?php echo $_smarty_tpl->tpl_vars['entity_id']->value;?>
" />
        <input type="hidden" name="entity"  value="<?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
" />
        <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name" />
                <?php echo form_error('name');?>

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="email" />
                <?php echo form_error('email');?>

            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" name="website" placeholder="website" />
                <?php echo form_error('website');?>

            </div>
        <?php }?>
        
        <input type="hidden" name="reply_comment_id" value="<?php echo $_smarty_tpl->tpl_vars['reply_comment_id']->value;?>
"/> 
        <div class="form-group">
            <textarea  class="form-control" rows="3" name="message"><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {
echo $_smarty_tpl->tpl_vars['message']->value;
}?></textarea>
            <?php echo form_error('message');?>

        </div>
        <input type="submit" class="btn btn-default comment-submit-button" 
            value="<?php echo $_smarty_tpl->tpl_vars['button_text']->value;?>
" name="reply">
            
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                <a href="<?php echo site_url("comments/delete/".((string)$_smarty_tpl->tpl_vars['comment']->value->id));?>
?redirect=<?php echo UrlHelper::currentUrlStr();?>
">Delete</a>
            <?php }?>
    <?php echo form_close();?>

   

<?php }
}
?>