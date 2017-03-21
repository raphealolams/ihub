<?php /* Smarty version 3.1.27, created on 2016-12-08 05:17:29
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\files\views\admin\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6620584987991aed49_97573338%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01804a7e8d04648d11f80f81754a136db846c082' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\files\\views\\admin\\view.tpl',
      1 => 1475275521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6620584987991aed49_97573338',
  'variables' => 
  array (
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5849879a2e44b7_59523879',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5849879a2e44b7_59523879')) {
function content_5849879a2e44b7_59523879 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';

$_smarty_tpl->properties['nocache_hash'] = '6620584987991aed49_97573338';
ob_start();
echo lang('plugin_files_details');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo HtmlHelper::listButton(admin_url('files/manage'));?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

 <?php if ($_smarty_tpl->tpl_vars['file']->value->isHtmlImage()) {?>
    <img id="file-image" src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" class="img file-img select-btn"
          data-thumbnails="<?php echo join(',',$_smarty_tpl->tpl_vars['file']->value->thumbnails);?>
" 
          data-file-url-path="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrlPath();?>
"
          data-image-url="<?php echo $_smarty_tpl->tpl_vars['file']->value->getRelativeUrl();?>
"
          data-thumbnails-container="#thumbnails"
          style="max-height: 300px; max-width: 300px">
    <div class="" id='thumbnails'>
        <h4>Thumbnails</h4>
    </div>
 <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->isHtmlVideo()) {?>
     <video width="100%" height='240' controls>
         <source src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" type="<?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
" >
     </video>
 <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->isHtmlAudio()) {?>
      <audio width="200px" height='240' controls>
         <source src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" type="<?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
" >
      </audio>
 <?php } else { ?>

 <?php }?>
<?php echo $_smarty_tpl->tpl_vars['file']->value->caption;?>

<p> <?php echo $_smarty_tpl->tpl_vars['file']->value->created;?>
 </p>
<p> <?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
 </p>

<p>
    <div class="col-md-3" id="thumbs-<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
">
    </div>
</p>
<p> 
   
</p>

<?php echo '<script'; ?>
 type='text/javascript'>
    function createTumbnails(){
        var elem = $('.file-img');
           var img = $(elem);
           var path = img.data('file-url-path');
           // make array of tumbnails
           var thums = img.data('thumbnails').split(',');
           var thumbsContainer = $(img.data('thumbnails-container'));
           $(thums).each(function(index , value){
               var thumbImg = document.createElement('img');
               thumbImg.src = path + value ;
               thumbImg.setAttribute('data-image-url' , path + value );
               
               thumbImg.className = 'img select-btn';
               thumbImg.style.margin = '3px'
               thumbImg.style['max-width'] = '200px'
               thumbsContainer.append( thumbImg );
            })
    }
    createTumbnails()
<?php echo '</script'; ?>
><?php }
}
?>