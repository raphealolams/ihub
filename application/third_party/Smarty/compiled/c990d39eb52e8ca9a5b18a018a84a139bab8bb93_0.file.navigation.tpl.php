<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:46
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\favour\partials\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19447584ffcb61be3e8_98726858%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c990d39eb52e8ca9a5b18a018a84a139bab8bb93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\favour\\partials\\navigation.tpl',
      1 => 1471983138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19447584ffcb61be3e8_98726858',
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffcb626b837_87107001',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffcb626b837_87107001')) {
function content_584ffcb626b837_87107001 ($_smarty_tpl) {
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '19447584ffcb61be3e8_98726858';
?>
 <header id="" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <?php $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable(array('max_depth'=>4,'nested'=>1,'close_tag'=>'','root_parent_class'=>'nav navbar-nav navbar-right','sub_parent_class'=>'dropdown-menu','template_root_no_child'=>'<li><a href="[[getUrl()]]">[[title]]</a>','template_root_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle" data-toggle="dropdown">[[title]]<b class="caret"></b></a>','template_sub_has_child'=>'<li class="dropdown">
                                                            <a href="[[getUrl()]]" class="dropdown-toggle sub-has-child" data-toggle="dropdown">
                                                                    [[title]]<b class=""></b>
                                                            </a>'), null, 0);?> 
                                 
                    <?php echo smarty_function_MENU(array('position'=>'navigation_first','options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

                       
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->


<style>
    @media (max-device-width: 480px){
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