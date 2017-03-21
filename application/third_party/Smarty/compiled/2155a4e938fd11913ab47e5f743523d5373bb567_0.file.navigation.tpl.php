<?php /* Smarty version 3.1.27, created on 2016-12-13 02:50:20
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\deep\partials\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1114584ffc9c7efbc0_54602220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2155a4e938fd11913ab47e5f743523d5373bb567' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\deep\\partials\\navigation.tpl',
      1 => 1471994130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114584ffc9c7efbc0_54602220',
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584ffc9cb24d32_02041689',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584ffc9cb24d32_02041689')) {
function content_584ffc9cb24d32_02041689 ($_smarty_tpl) {
if (!is_callable('smarty_function_MENU')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.MENU.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '1114584ffc9c7efbc0_54602220';
?>
 <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" 
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url();?>
"></a>
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
    .navbar-default .navbar-brand{
        background: url(<?php echo option('logo');?>
) no-repeat 0 50%;
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