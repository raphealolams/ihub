<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\themes\deal\includes\nav_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1732658179fa79d0977_66502166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe47661bae705a62c2c4ff20e02138de99346fff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\themes\\deal\\includes\\nav_top.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732658179fa79d0977_66502166',
  'variables' => 
  array (
    'top_links' => 0,
    'links_data' => 0,
    'id' => 0,
    'label' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa7af7842_93400579',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa7af7842_93400579')) {
function content_58179fa7af7842_93400579 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '1732658179fa79d0977_66502166';
?>
 <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <ul class="nav navbar-top-links navbar-left pull-left">
                    <li class="hidden-xs">
                        
                        <a  class="nyra-nav-toggle" data-nav="#admin-side-nav" 
                            data-main-content="#page-wrapper"  href="">
                            <i class="glyphicon glyphicon-menu-hamburger fa-2x"></i>
                        </a>
                    </li>
                    <li > 
                        <a href="<?php echo site_url();?>
" ><i class="glyphicon glyphicon-home fa-2x"> </i> Home </a>
                    </li>  
                </ul>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url();?>
">
                </a>
            </div>
             
            
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                
                <?php $_smarty_tpl->tpl_vars['top_links'] = new Smarty_Variable(array(), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['top_links'] = new Smarty_Variable(allow_filter('admin.dropdown',$_smarty_tpl->tpl_vars['top_links']->value,'<li class="dropdown">','</li>'), null, 0);?>
                
                <?php
$_from = $_smarty_tpl->tpl_vars['top_links']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['links_data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['links_data']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['links_data']->value) {
$_smarty_tpl->tpl_vars['links_data']->_loop = true;
$foreach_links_data_Sav = $_smarty_tpl->tpl_vars['links_data'];
?>
                    <?php $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable(element('label',$_smarty_tpl->tpl_vars['links_data']->value), null, 0);?>
                    <li class="dropdown drop-keep-open" id="dropdown-item-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

                    <a id="dropdown-link-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="dropdown-toggle" data-toggle="dropdown" 
                       <?php echo $_smarty_tpl->tpl_vars['links_data']->value['link_attrs'];?>
 href="#">
                        <?php if ($_smarty_tpl->tpl_vars['label']->value) {?>
                            <span id="" class="top-label dropdown-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 label label-<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
">

                            </span>
                        <?php }?>
                       <i class="<?php echo $_smarty_tpl->tpl_vars['links_data']->value['icon'];?>
 fa-3x"></i>
                    </a>
                        <ul class="dropdown-menu dropdown-content-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 ">
                            
                            <?php echo $_smarty_tpl->tpl_vars['links_data']->value['content'];?>
 
                        </ul>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['links_data'] = $foreach_links_data_Sav;
}
?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->can('receive_message')) {?>                
                   
                <?php }?>                  <!-- end dropdown-messages -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->can('add_task')) {?>

                <?php }?>      
                      
               
                
               
            </ul>
            <!-- end navbar-top-links -->
            <div class="clearfix"></div>
            
        </nav>
   
<?php echo smarty_function_theme_plugin(array('name'=>'jquery-play-sound'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
      
       
        
    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
        $('#navbar a.dropdown-toggle').click( function(){
            var sound = new Audio('/public/assets/media/navigation.wav')
            sound.play();
        })
    <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



        <!-- end navbar top -->
<?php }
}
?>