<?php /* Smarty version 3.1.27, created on 2016-11-02 18:50:25
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\partials\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30710581ad021c173d5_97083260%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e06e9f0a3b315722e3f0af79666838a9d5cba3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\partials\\navigation.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30710581ad021c173d5_97083260',
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad0221c9019_69851227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad0221c9019_69851227')) {
function content_581ad0221c9019_69851227 ($_smarty_tpl) {
if (!is_callable('smarty_function_FILTER')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.FILTER.php';
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '30710581ad021c173d5_97083260';
?>

<!-- Fixed navbar -->
  <nav id="navbar-header" class="navigation navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" id="top-nav-toogle" data-target="#navbar-header-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url();?>
">
           <?php ob_start();
echo option('siteName');
$_tmp3=ob_get_clean();
echo smarty_function_FILTER(array('e'=>'theme.arewa.nav.brand.title','title'=>$_tmp3),$_smarty_tpl);?>

        </a>
      </div>
      <div id="navbar-header-collapse" class="navbar-collapse collapse navbar-right" style="position: relative;">
            <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable(array('max_depth'=>4,'nested'=>1,'close_tag'=>'','root_parent_class'=>'nav navbar-nav navbar-right','sub_parent_class'=>'dropdown-menu','template_root_no_child'=>'<li><a href="[[getUrl()]]">[[title]]</a>','template_root_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle" data-toggle="dropdown">[[title]]<b class="caret"></b></a>','template_sub_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle sub-has-child" data-toggle="dropdown">
                                                                    [[title]]<b class=""></b>
                                                            </a>'), null, 0);?> 
                                 
            <?php echo smarty_function_MENU(array('position'=>'navigation_first','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

            <?php if (theme_option('arewa','add_contact_modal')) {?>
                <li><a data-toggle="modal" data-target="#contact-modal" href="#contact-modal"><i class="fa fa-envelope-o"></i></a></li>
            <?php }?>
            </u>
      </div><!--/.nav-collapse -->
    </div>
</nav>


<style>
    @media (max-device-width: 760px){
        #navbar-header-collapse{
           display: none;
           visibility: visible;
        }
    }
</style>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
        $('#top-nav-toogle').click(function(){
            var nav = $('#navbar-header-collapse');

            var hidden = (nav.css('display') == 'none');
            if( hidden ){
                nav.css('display','block');
                 nav.animate({    
                        left: '0px' 
                }, 500 , function(){
                    nav.data('hidden' , 0);
                });
            }else{
                nav.animate({    
                        left: '-400px' ,
                        'display': 'none'
                }, 500 , function(){
                    nav.data('hidden' , 1).css('display','none');
                });

            }
        });
    <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>