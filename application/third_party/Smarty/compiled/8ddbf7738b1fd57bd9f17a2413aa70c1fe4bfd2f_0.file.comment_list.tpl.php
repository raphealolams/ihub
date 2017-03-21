<?php /* Smarty version 3.1.27, created on 2016-11-01 13:38:01
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\comments\views\admin\comment_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:189405819356985df12_57889336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ddbf7738b1fd57bd9f17a2413aa70c1fe4bfd2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\comments\\views\\admin\\comment_list.tpl',
      1 => 1478047059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189405819356985df12_57889336',
  'variables' => 
  array (
    'comments' => 0,
    'is_reply' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819356bcf4870_33150508',
  'tpl_function' => 
  array (
    'loop_comment' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'C:\\xampp\\htdocs\\nyra_cms\\application\\third_party/Smarty/compiled\\8ddbf7738b1fd57bd9f17a2413aa70c1fe4bfd2f_0.file.comment_list.tpl.php',
      'uid' => '8ddbf7738b1fd57bd9f17a2413aa70c1fe4bfd2f',
      'call_name' => 'smarty_template_function_loop_comment_189405819356985df12_57889336',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819356bcf4870_33150508')) {
function content_5819356bcf4870_33150508 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '189405819356985df12_57889336';
?>



 <div class="table-responsive">
        <table class="table table-hover" id="comments-table">
            <thead>
            <th>Comment</th>
            </thead>
            <tbody>
                <?php $_smarty_tpl->callTemplateFunction ('loop_comment', $_smarty_tpl, array('comments'=>$_smarty_tpl->tpl_vars['comments']->value), true);?>

            </tbody>
        </table>
 </div>
    
    <?php echo smarty_function_theme_plugin(array('p'=>'bootstrap-datatables'),$_smarty_tpl);?>

    <?php echo smarty_function_theme_plugin(array('p'=>'jquery-ui'),$_smarty_tpl);?>

    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
   
    <?php echo '<script'; ?>
 >
        $( document).ready( function(){
            $( '#comments-table' ).DataTable();
        });
            
         function sendRequest(data , btn){

            var done = function(response){
                if(response.error_message){
                    Nyra.util.alert(response.error_message);
                    return;
                }
                var commentContainer = btn.parents('.comment-item');
                var spamIcon = commentContainer.find('spam-icon');
                var approval = commentContainer.find('approval-icon');
                switch(data.action)
                {
                    case 'reply' :
                        // clone comment item
                        var newComment = commentContainer.clone(true);
                        // remove any form there
                        newComment.find('.comment-form-template').remove();
                        // add it to the parent
                        commentContainer.siblings('div.comment-replies').append(newComment)
                        break;
                    case 'edit' :
                        break;
                    case 'spam':
                        btn.data('action' , 'unspam').children('i').removeClass('glyphicon-asterisk').addClass('glyphicon-ok');
                        break;
                    case 'unspam':
                         btn.data('action' , 'spam').children('i').removeClass('glyphicon-ok').addClass('glyphicon-asterisk');
                        break;
                    case 'delete':
                        //commentContainer.html("<span class='text-danger'>Deleted</span>");
                        commentContainer.effect('shake' , function(){
                            $(this).parent().remove();
                            Nyra.util.alert("Delete")
                        });
                        break;
                    case 'approve':
                         btn.data('action' , 'disapprove').children('i').removeClass('glyphicon-check').addClass('glyphicon-ban-circle');
                        break;
                    case 'disapprove':
                        btn.data('action' , 'approve').children('i').removeClass('glyphicon-ban-circle').addClass('glyphicon-check');
                        break;
                }
            }
            Nyra.request.post('<?php echo admin_url('comments/ajax_actions');?>
' , data , { done : done });
         }
         
        var formContainer = $('#comment-from-template');
        
        
        $('.reply-btn , .edit-btn').click(function(e){
            e.preventDefault();
            var btn = $(this);
            
            if(btn.data('action') == 'edit'){
                $('#comment-message').val($('#comment-item-body-'+btn.data('comment-id')).html());
            }
            formContainer.css('display' , 'block');
            formContainer.data('comment-id' , btn.data('comment-id'));
            formContainer.data('action' , btn.data('action'));
            formContainer.appendTo(btn.parent());
           
        });
        
        $('#reply-send-btn').click(function(e){
            e.preventDefault();
            var btn = $(this);
            var data = {
                'action' : formContainer.data('action') ,
                'comment_id' : formContainer.data('comment-id'),
                'message' : $('#comment-message').val()
            };
            
            if(!data.comment_id || data.message == ''){
                Nyra.log("Comment id and reply message must be set");
                return;
            }
            sendRequest(data , btn);
        });
        
        $('.action-btn').click(function(e){
            e.preventDefault();
            var btn = $(this);
            var action = btn.data('action');
            var data = {
                action : action ,
                comment_id : btn.data('comment-id'),
            };
            sendRequest(data , btn);
        });
    <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<div id="comment-from-template" class="comment-form-template" style="display: none">
    <div class="form-group">
       <textarea rows="7" cols="7" class="form-control "
            id="comment-message" data-comment-id="" ></textarea>
        <button type="submit" id="reply-send-btn" class="btn btn-default btn-default pull-right"
              >
        <span class="glyphicon glyphicon-envelope"></span> Reply</button>
    </div>
</div>


<?php }
}
?><?php
/* smarty_template_function_loop_comment_189405819356985df12_57889336 */
if (!function_exists('smarty_template_function_loop_comment_189405819356985df12_57889336')) {
function smarty_template_function_loop_comment_189405819356985df12_57889336($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('is_reply'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
    <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$foreach_comment_Sav = $_smarty_tpl->tpl_vars['comment'];
?>
        <?php if ($_smarty_tpl->tpl_vars['is_reply']->value == 0) {?>
            <tr>
                <td>
        <?php }?>
        <div class="row comment-item"  style="margin-bottom: 10px;" >
            <div class="col-md-2"> 
                <img class="avatar img img-responsive" style="height:100px;" 
                    src="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getUserImageUrl(true,true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getUserName();?>
" />
            </div>
            <div class="col-md-3"> 
                <p><strong><?php echo $_smarty_tpl->tpl_vars['comment']->value->user_first;?>
 <?php echo $_smarty_tpl->tpl_vars['comment']->value->user_last;?>
 </strong></p> 
                <span id="comment-item-body-<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getMessage();?>
 </span>
            </div>
            <div class="col-md-7"> 
                <?php if ($_smarty_tpl->tpl_vars['is_reply']->value == 0) {?>
                    <a href="" title="Reply"
                            class="btn btn-default reply-btn" data-action="reply"
                             data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                            >
                            <i class="glyphicon glyphicon-comment"></i> 
                     </a>
                <?php }?>
                 <a href="" title="Edit"  class="btn btn-default edit-btn"
                   data-action="edit" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                   > 
                    <i class="edit-icon glyphicon glyphicon-pencil"></i> 
                </a>
                <?php if ($_smarty_tpl->tpl_vars['comment']->value->isApproved()) {?> 
                        <a href="" title="Disapprove" data-action="disapprove"
                            class="btn btn-default action-btn" 
                            data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
">
                            <i class="disapprove-icon glyphicon glyphicon-ban-circle"></i> 
                         </a>
                <?php } else { ?>
                    <a href="" title="Approve" class="btn btn-default action-btn"
                       data-action="approve" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                       >
                       <i class="approval-icon glyphicon glyphicon-check"></i>
                    </a>
                <?php }?>  
               
                <a href="" title="Delete" class="btn btn-default action-btn"
                   data-action="delete" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                   >
                    <i class="delete-icon glyphicon glyphicon-trash"></i>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['comment']->value->isSpam()) {?>
                    <a href="" title="Unmark Spam" class="btn btn-default unspam-btn"
                       data-action="unspam" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                       > 
                        <i class="spam-icon -icon glyphicon glyphicon-ok" ></i>
                    </a>  
                <?php } else { ?>
                    <a href="" title="Mark Spam"  class="btn btn-default action-btn"
                       data-action="spam" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                       > 
                        <i class="spam-icon glyphicon glyphicon-asterisk"></i> 
                    </a>  
                <?php }?>
            </div>
        </div>
        <div class="col-md-offset-3 clearfix comment-replies">
            <?php if ($_smarty_tpl->tpl_vars['comment']->value->hasReply()) {?>                    
                <?php $_smarty_tpl->callTemplateFunction ('loop_comment', $_smarty_tpl, array('comments'=>$_smarty_tpl->tpl_vars['comment']->value->getReplies(),'is_reply'=>1), false);?>

            <?php }?>
         </div>
         <?php if ($_smarty_tpl->tpl_vars['is_reply']->value == 0) {?>
                </td>
            </tr>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['comment'] = $foreach_comment_Sav;
}
?>
<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_loop_comment_189405819356985df12_57889336 */

?>
