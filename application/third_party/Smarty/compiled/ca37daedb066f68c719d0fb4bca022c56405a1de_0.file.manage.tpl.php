<?php /* Smarty version 3.1.27, created on 2016-11-08 03:07:32
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\files\views\admin\manage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181675821dc24c421f2_52495911%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca37daedb066f68c719d0fb4bca022c56405a1de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\files\\views\\admin\\manage.tpl',
      1 => 1476904662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181675821dc24c421f2_52495911',
  'variables' => 
  array (
    'CI' => 0,
    'files' => 0,
    'file' => 0,
    'lang_view' => 0,
    'lang_delete' => 0,
    'total' => 0,
    'limit' => 0,
    'folders' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5821dc24f37988_97250871',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5821dc24f37988_97250871')) {
function content_5821dc24f37988_97250871 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_multitab_link')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.multitab_link.php';
if (!is_callable('smarty_block_multitab_content')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.multitab_content.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '181675821dc24c421f2_52495911';
echo smarty_function_action_title(array('title'=>'Media Files'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a href="<?php echo admin_url("files/upload");?>
" 
        class="btn btn-default"> 
        <span class="glyphicon glyphicon-upload"></span> 
        <strong><?php echo lang('action_upload');?>
</strong>
    </a>
    <button id="btn-files-tile" class="btn btn-default">
        <span class="glyphicon glyphicon-list"></span>
    </button>
    <button id="btn-files-list" class="btn btn-default">
        <span class="glyphicon glyphicon-list-alt"></span>
    </button>
    <input type="search" id="input-files-search" class="" />
    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->tpl_vars['lang_view'] = new Smarty_Variable(lang('action_view'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['lang_delete'] = new Smarty_Variable(lang('action_delete'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_exts'] = new Smarty_Variable(array('.jpg','.png','.jpeg','.tif','.gif'), null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['CI']->value->load->view('files/admin/upload');?>

<?php echo smarty_function_multitab_link(array('hook'=>'files.manage.tab','link_open'=>'<ul class=" nav nav-pills multitab-nav">','item_template'=>' <li role="presentation" class="[[active_class]]"><a href="[[url]]">[[title]]</a></li>','default_tab_title'=>'Local','add_default_tab'=>true),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('multitab_content', array('hook'=>'files.manage.tab')); $_block_repeat=true; echo smarty_block_multitab_content(array('hook'=>'files.manage.tab'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="col-sm-8 col-md-9 col-lg-9">
    <div id="file-list-container" class="row">
        <?php
$_from = $_smarty_tpl->tpl_vars['files']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
$foreach_file_Sav = $_smarty_tpl->tpl_vars['file'];
?>
            <div class="file-container col-xs-4 col-sm-4 col-md-2 col-lg-2"
                 
                 data-filename="<?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
"
                 >
                <?php if ($_smarty_tpl->tpl_vars['file']->value->isHtmlImage()) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" class="img img-responsive file-img"
                         data-thumbnails="<?php echo join(',',$_smarty_tpl->tpl_vars['file']->value->thumbnails);?>
" 
                         data-file-url-path="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrlPath();?>
"
                         alt="<?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
"
                         data-thumbnails-container="#thumbs-<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
"
                         style="height: 100px">
                <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->isHtmlVideo()) {?>
                    <video width="100%" height='100' controls>
                       <source src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" type="<?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
" >
                    </video>
                <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->isHtmlAudio()) {?>
                    <audio width="100%" height='100' controls>
                       <source src="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrl();?>
" type="<?php echo $_smarty_tpl->tpl_vars['file']->value->mime;?>
" >
                    </audio>
                <?php } else { ?>
                     <?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>

                     <?php echo $_smarty_tpl->tpl_vars['file']->value->created;?>

                <?php }?>
                <p class="file-meta">
                    <?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>

                    <a href="<?php echo admin_url("files/view/".((string)$_smarty_tpl->tpl_vars['file']->value->id));?>
" 
                       class="btn-preview-file btn btn-success"
                       data-thumbnails="<?php echo join(',',$_smarty_tpl->tpl_vars['file']->value->thumbnails);?>
" 
                        data-file-url-path="<?php echo $_smarty_tpl->tpl_vars['file']->value->getUrlPath();?>
"
                        data-filename="<?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
"

                       > <?php echo $_smarty_tpl->tpl_vars['lang_view']->value;?>
</a>
                    <a href="<?php echo admin_url("files/delete/".((string)$_smarty_tpl->tpl_vars['file']->value->id));?>
"
                       class="btn-delete-file btn btn-danger"
                       data-file-id="<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
"
                       > <?php echo $_smarty_tpl->tpl_vars['lang_delete']->value;?>
</a>
                </p>
            </div>
        <?php
$_smarty_tpl->tpl_vars['file'] = $foreach_file_Sav;
}
?>
    </div>
    <?php echo pagination_links($_smarty_tpl->tpl_vars['total']->value,$_smarty_tpl->tpl_vars['limit']->value);?>

</div>
<div class="col-sm-4 col-md-3 col-lg-3">
    <p class="text-center"><strong>Folders</strong></p>
    <?php
$_from = $_smarty_tpl->tpl_vars['folders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?>
            <p>
                <a href="<?php echo admin_url('files/manage');?>
?folder=<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
">
                    <span class='glyphicon glyphicon-file'><?php echo $_smarty_tpl->tpl_vars['f']->value;?>
</span>
                </a>
            </p>
        <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?>
</div>

                            
<?php echo Tools::activateThemePlugin('bootstrap-datatables');?>

        
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_multitab_content(array('hook'=>'files.manage.tab'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

 
<style>
    .file-actions  {
        display: none;
        position: absolute;
        bottom: 5px;
        background-color: white;
        //opacity: 0.9;
        padding: 5px;
    }
    .file-container {
        display: inline-block;
    }
    .file-container:hover .file-actions {
        //display: block;
    }
    .file-container:hover .btn-delete-file, .btn-preview-file{
        opacity: 1;
    }
    .file-meta{
        overflow:scroll;
    }
</style>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
            <?php echo '<script'; ?>
 >
                fileContainers = $('#file-list-container .file-container');
                
                btnTile = $('#btn-files-tile');
                btnList = $('#btn-files-list');
                inputFileSearch = $('#input-files-search');
                
                btnTile.click(function(){
                    fileContainers.addClass('col-xs-4').addClass('col-sm-4').addClass('col-md-2').addClass('col-lg-2')
                    fileContainers.removeClass('col-xs-12').removeClass('col-sm-12').removeClass('col-md-12').removeClass('col-md-2')
                    
                    btnTile.addClass('active').addClass('primary').addClass('disabled');
                    btnList.removeClass('active').removeClass('primary').removeClass('disabled');
                });
                btnList.click(function(){
                    fileContainers.removeClass('col-xs-4').removeClass('col-sm-4').removeClass('col-md-2').removeClass('col-lg-2')
                    fileContainers.addClass('col-xs-12').addClass('col-sm-12').addClass('col-md-12').addClass('col-md-12')
                    
                    btnList.addClass('active').addClass('primary').addClass('disabled');
                    btnTile.removeClass('active').removeClass('primary').removeClass('disabled');
                });
                
                inputFileSearch.on('keypress',function(){
                    var val = inputFileSearch.val();
                    
                    if(val.length > 2){
                       filterFiles(val)
                    }else{
                        filterFiles(null);
                    }
                });
                var filterFiles = function(query ){
                    
                    // show all
                    if(!query){
                        fileContainers.show();
                        return;
                    }
                    fileContainers.each(function(){
                        var elem = $(this);
                        var filename = elem.data('filename');
                        if(filename && filename.substring(query) === 1){
                            elem.show();
                            console.log(filename)
                        }else{
                           elem.hide();
                        }
                    })
                };
                /**
                 * @todo view thumnails when user mouse over image 
                $('.file-img').each(function(index , elem){
                    var img = $(elem);
                    var path = img.data('file-url-path');
                    // make array of tumbnails
                    var thums = img.data('thumbnails').split(',');
                    var thumbsContainer = $(img.data('thumbnails-container'));
                    $(thums).each(function(index , value){
                        var thumbImg = document.createElement('img');
                        thumbImg.src = path + value ;
                        thumbImg.className = 'img img-responsive';
                        thumbImg.style.margin = '3px'
                                //console.log(thumbImg)
                        thumbsContainer.append( thumbImg );
        
                    })
                });
                */
                $( document).ready( function(){
                    $( '#files-table' ).DataTable();
                    });
            <?php echo '</script'; ?>
>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
?>