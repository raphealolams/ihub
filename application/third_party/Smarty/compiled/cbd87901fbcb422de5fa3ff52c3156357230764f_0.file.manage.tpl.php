<?php /* Smarty version 3.1.27, created on 2016-11-01 22:57:43
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:294285819b897bbb6c4_78945856%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd87901fbcb422de5fa3ff52c3156357230764f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\admin\\manage.tpl',
      1 => 1477336727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294285819b897bbb6c4_78945856',
  'variables' => 
  array (
    'errors' => 0,
    'user' => 0,
    'posts' => 0,
    'post' => 0,
    'can_publish' => 0,
    'can_publish_self' => 0,
    'can_edit' => 0,
    'can_edit_self' => 0,
    'can_delete' => 0,
    'total' => 0,
    'limit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819b8990e2764_00461453',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819b8990e2764_00461453')) {
function content_5819b8990e2764_00461453 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '294285819b897bbb6c4_78945856';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
      <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>
  
<?php } else { ?>
     <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        <div class="btn-group pull-left">
             <?php echo HtmlHelper::backButton();?>

             <?php echo HtmlHelper::addButton(admin_url('posts/add'));?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::helpButton('plugins-nyra_posts-manage');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_smarty_tpl->tpl_vars['can_publish'] = new Smarty_Variable($_smarty_tpl->tpl_vars['user']->value->can('publish_post'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['can_publish_self'] = new Smarty_Variable($_smarty_tpl->tpl_vars['user']->value->can('publish_self_post'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['can_edit'] = new Smarty_Variable($_smarty_tpl->tpl_vars['user']->value->can('edit_post'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['can_edit_self'] = new Smarty_Variable($_smarty_tpl->tpl_vars['user']->value->can('edit_self_post'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['can_delete'] = new Smarty_Variable($_smarty_tpl->tpl_vars['user']->value->can('delete_post'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['can_delete'] = new Smarty_Variable($_smarty_tpl->tpl_vars['user']->value->can('delete_self_post'), null, 0);?>
    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="table-responsive">
             <table class="table table-hover" id="posts-table">
                 <thead class="bg-primary">
                    <tr>
                        <th> <?php echo lang('label_id');?>
  </th> 
                        <th> <?php echo lang('adjective_created');?>
  </th>
                        <th> <?php echo lang('adjective_modified');?>
  </th>
                        <th> <?php echo lang('label_title');?>
  </th>
                        <th> <?php echo lang('label_author');?>
  </th> 
                        <th><?php echo lang('noun_actions');?>
  </th>
                    </tr>
                 </thead>
                 <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
                        <tr>
                            <td>  <?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['post']->value->created;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['post']->value->modified;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['post']->value->getAuthorName();?>
 </td>
                            <td> <!--chack wether post is ebabled-->
                                <?php if ($_smarty_tpl->tpl_vars['post']->value->status == 'draft') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['can_publish']->value || $_smarty_tpl->tpl_vars['post']->value->user_id == $_smarty_tpl->tpl_vars['user']->value->id && $_smarty_tpl->tpl_vars['can_publish_self']->value) {?> 
                                        <a class="btn btn-default" href="<?php echo admin_url("posts/publish/".((string)$_smarty_tpl->tpl_vars['post']->value->id));?>
" >
										<i class="glyphicon glyphicon-send"></i>
										Publish</a>
                                    <?php }?>
                                <?php } else { ?>
                                    <a class="btn btn-default disabled">Published </a>
                                <?php }?>  
                                <?php if ($_smarty_tpl->tpl_vars['can_edit']->value || $_smarty_tpl->tpl_vars['post']->value->user_id == $_smarty_tpl->tpl_vars['user']->value->id && $_smarty_tpl->tpl_vars['can_edit_self']->value) {?> 
                                     <a class="btn btn-default" href="<?php echo admin_url("posts/edit/".((string)$_smarty_tpl->tpl_vars['post']->value->id));?>
">
									 <i class="glyphicon glyphicon-pencil"></i>
									 edit</a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['can_delete']->value) {?>
                                    <a class="btn btn-danger" href="<?php echo admin_url("posts/delete/".((string)$_smarty_tpl->tpl_vars['post']->value->id));?>
">
									<i class="glyphicon glyphicon-trash"></i>
									Trash</a>
                                <?php }?>
                                <?php echo nbs(3);?>
 
                                 <a class="btn btn-default" href="<?php echo site_url(((string)$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
?preview=1" 
								 target="_blank" >
								 <i class="glyphicon glyphicon-eye-open"></i>
								 Preview</a>
                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
                </tbody>
            </table>
        </div>
        <div class="center-align"><?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value,null,null);?>
</div>
    </div>
                            
    <?php echo smarty_function_theme_plugin(array('p'=>'bootstrap-datatables'),$_smarty_tpl);?>

    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

         
            <?php echo '<script'; ?>
 >
                $( document).ready( function(){
                    $( '#posts-table' ).DataTable({
                         'order'  : [[ 1 , 'desc']] 
                    });
                });
            <?php echo '</script'; ?>
>
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }

}
}
?>