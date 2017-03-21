<?php /* Smarty version 3.1.27, created on 2016-10-31 08:59:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\comments\views\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102105817a2b315f875_51417109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c6881929c1cc3f8503a9fad4851b8bce093b51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\comments\\views\\list.tpl',
      1 => 1476263804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102105817a2b315f875_51417109',
  'variables' => 
  array (
    'total' => 0,
    'comment_config' => 0,
    'must_login' => 0,
    'user_online' => 0,
    'entity' => 0,
    'entity_id' => 0,
    'reply_comment_id' => 0,
    'comments' => 0,
    'comment' => 0,
    'redirect' => 0,
    'user' => 0,
    'commen_parent_id' => 0,
    'query' => 0,
    'replies' => 0,
    'reply' => 0,
    'limit' => 0,
    'comment_page_query_segment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817a2b32e2014_16110876',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817a2b32e2014_16110876')) {
function content_5817a2b32e2014_16110876 ($_smarty_tpl) {
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '102105817a2b315f875_51417109';
?>

<h4> Comments </h4>
<?php if ($_smarty_tpl->tpl_vars['total']->value >= $_smarty_tpl->tpl_vars['comment_config']->value->max_allowed) {?>
    <div class="alert alert-info">Comment Closed</div>
<?php } elseif ($_smarty_tpl->tpl_vars['must_login']->value && !$_smarty_tpl->tpl_vars['user_online']->value) {?>
    <p> <?php echo lang('must_login_to','post comment');?>
  <?php echo get_login_button();?>
</p>
<?php } else { ?>
    <div class="comment-form-container">
        <?php echo get_comment_form($_smarty_tpl->tpl_vars['entity']->value,$_smarty_tpl->tpl_vars['entity_id']->value,$_smarty_tpl->tpl_vars['reply_comment_id']->value,'Add Comment');?>
 
    </div>
<?php }?>
<?php $_smarty_tpl->tpl_vars['redirect'] = new Smarty_Variable(current_full_url(), null, 0);?>
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
    <div id="comment-box-<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"  class="comment media">
        <div class="pull-left">
            <img class="avatar" style="width:100px;height:100px;" src="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getUserImageUrl(true,true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['comment']->value->getUserName();?>
" /> 
        </div>
        <div id="comment-body-<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
" class="media-body">
            <strong>Posted by <?php echo $_smarty_tpl->tpl_vars['comment']->value->getAuthorLink();?>
</strong><br>
            <small> <?php echo $_smarty_tpl->tpl_vars['comment']->value->created;?>
</small><br>
            <p><?php echo allow_filter('post.comment.message',$_smarty_tpl->tpl_vars['comment']->value->message,$_smarty_tpl->tpl_vars['comment']->value);?>
  </p>
            <p> 
                
                <?php if ($_smarty_tpl->tpl_vars['user_online']->value) {?>
                    <a href="/comments/thread/<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
" 
                       class='btn btn-default com-reply' 
                       data-target="#comment-body-<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"
                       data-entity="<?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
" data-entity_id="<?php echo $_smarty_tpl->tpl_vars['entity_id']->value;?>
"
                       data-reply_comment_id="<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
" 
                       >Reply</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user_online']->value && $_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['comment']->value->user_id) {?> 
                    <a href="/comments/edit/<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
" class="btn btn-default">Edit</a>
                    <a href="<?php echo site_url("comments/delete/".((string)$_smarty_tpl->tpl_vars['comment']->value->id));?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                       class="btn btn-default"
                       >Delete</a>
                <?php }?>
                
            </p>
        </div>
    </div>
    
    <?php if (!$_smarty_tpl->tpl_vars['commen_parent_id']->value) {?>
        <div class="comment-replies">
            <?php if ($_smarty_tpl->tpl_vars['comment']->value->hasReply()) {?>
                <p> <span class="">Replies </span>
                    <span class="badge comment-replies-count"><?php echo $_smarty_tpl->tpl_vars['comment']->value->getTotalReply();?>
</span>
                 <?php $_smarty_tpl->tpl_vars['replies'] = new Smarty_Variable($_smarty_tpl->tpl_vars['comment']->value->getReplies($_smarty_tpl->tpl_vars['query']->value), null, 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['replies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['reply']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->_loop = true;
$foreach_reply_Sav = $_smarty_tpl->tpl_vars['reply'];
?> 
                        <div id="comment-box-<?php echo $_smarty_tpl->tpl_vars['reply']->value->id;?>
" class="col-lg-offset-2"> 
                            <div class="comment media">
                                <div class="pull-left">
                                    <img class="avatar" style="width:100px; height:100px" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value->getUserImageUrl(true,true);?>
" alt="" />  
                                </div>
                                <div id="comment-body-<?php echo $_smarty_tpl->tpl_vars['reply']->value->id;?>
" class="media-body">
                                    <strong>Posted by <?php echo $_smarty_tpl->tpl_vars['reply']->value->getAuthorLink();?>
</strong><br>
                                    <small> <?php echo $_smarty_tpl->tpl_vars['reply']->value->created;?>
</small><br>
                                    <p><?php echo allow_filter('view.comment.content',$_smarty_tpl->tpl_vars['reply']->value->message);?>
  </p>
                                    <p> 
                                    <?php if ($_smarty_tpl->tpl_vars['user_online']->value && $_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['reply']->value->user_id) {?>
                                        <a href="/comments/edit/<?php echo $_smarty_tpl->tpl_vars['reply']->value->id;?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                                           class='btn btn-default'
                                           >Edit</a>
                                        <a href="<?php echo site_url("comments/delete/".((string)$_smarty_tpl->tpl_vars['comment']->value->id));?>
?redirect=<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"
                                           class='btn btn-default'
                                           >Delete</a>
                                    <?php }?>
                                    
                                    
                                </div>
                            </div> <!--media-->
                        </div><!--col-->
                    <?php
$_smarty_tpl->tpl_vars['reply'] = $foreach_reply_Sav;
}
?> 
            <?php }?>
        </div>       
    <?php }?>
        
<?php
$_smarty_tpl->tpl_vars['comment'] = $foreach_comment_Sav;
}
?> 
        
 
 
<?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value,null,null,$_smarty_tpl->tpl_vars['comment_page_query_segment']->value);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
    <?php echo '<script'; ?>
>
        $('.com-reply').click( function( e ){
            e.preventDefault();
            var elem = $( this );
            var target = elem.data('target');
            // remove all reply box
            $( '.comment-reply').remove();
            $( target ).children('.comment-form-container').remove();
            var formClone =  $('.comment-form-container').first().clone( false );
            formClone.addClass('comment-reply');
            var form = formClone.find('form').first();
            form.children("[name='entity']").val( elem.data('entity'));
            form.children("[name='entity_id']").val( elem.data('entity_id'));
            form.children("[name='reply_comment_id']").val( elem.data('reply_comment_id')); 
            //form.append("< input name='comment_reply_id' value").val() 
            $( target ).append( formClone );
            //console.log( $( target ) )
        });
        
    <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }
}
?>