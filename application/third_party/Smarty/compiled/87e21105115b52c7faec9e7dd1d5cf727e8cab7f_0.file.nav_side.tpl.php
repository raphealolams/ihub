<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\themes\deal\includes\nav_side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:135958179fa7c1b676_34549358%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e21105115b52c7faec9e7dd1d5cf727e8cab7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\themes\\deal\\includes\\nav_side.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135958179fa7c1b676_34549358',
  'variables' => 
  array (
    'CI' => 0,
    'isDisabled' => 0,
    'user' => 0,
    'menu' => 0,
    'm' => 0,
    'sub' => 0,
    'third_sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa7cdbc24_73688876',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa7cdbc24_73688876')) {
function content_58179fa7cdbc24_73688876 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '135958179fa7c1b676_34549358';
?>


<?php $_smarty_tpl->tpl_vars['baseUrl'] = new Smarty_Variable(get_admin_home_url(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['currentUrl'] = new Smarty_Variable(current_url(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['isDisabled'] = new Smarty_Variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->theme->getAdminLinks(), null, 0);?>
<?php echo smarty_function_theme_plugin(array('name'=>'jquery-play-sound'),$_smarty_tpl);?>

<!--admin navigation bar-->
<nav class="navbar-default navbar-static-side" id="admin-side-nav" role="navigation">
 <div class="sidebar-collapse">
    <!-- side-menu -->
    <ul class="nav " id="side-menu"  <?php if ($_smarty_tpl->tpl_vars['isDisabled']->value) {?> style="opacity: 10%" <?php }?>>
        <li>
            
            <div class="user-section">
                <div class="user-section-inner">
                    <img src='<?php echo $_smarty_tpl->tpl_vars['user']->value->getImage();?>
' alt="" />
                </div>
                <div class="user-info">
                    <div>
                       <?php echo ucfirst($_smarty_tpl->tpl_vars['user']->value->first);?>
<strong>&nbsp;<?php echo ucfirst($_smarty_tpl->tpl_vars['user']->value->last);?>
</strong>
                    </div>
                   <div class="user-text-online">
                        <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                    </div>
                </div>
             </div>
            
       </li>
       <li class="sidebar-search">
            
            <?php echo form_open(site_url('search'),array('method'=>'get','class'=>'form-horizontal'));?>

                <div class="input-group custom-search-form">
                     <!--to be continued for submition-->

                         <input type="text" name="q" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                             <button class="btn btn-default" value="" type="button" >
                             <i class="glyphicon glyphicon-search"></i>
                             </button>
                         </span>

                 </div>
            <?php echo form_close();?>

    	</li> <!--end search section -->
        
        <?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
              <?php if ($_smarty_tpl->tpl_vars['user']->value->can($_smarty_tpl->tpl_vars['m']->value->access)) {?>                
                <li class=" <?php if ($_smarty_tpl->tpl_vars['m']->value->isCurrent) {?> active <?php }?>">
                    
                    <a href="<?php if ($_smarty_tpl->tpl_vars['m']->value->url) {
echo $_smarty_tpl->tpl_vars['m']->value->url;
} else { ?>#<?php }?>"  <?php if ($_smarty_tpl->tpl_vars['isDisabled']->value) {?> aria-disabled='true' <?php }?>><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['m']->value->icon;?>
  fa-fw" ></i> 
                        <span class="admin-menu-item"><?php echo ucfirst($_smarty_tpl->tpl_vars['m']->value->title);?>
</span>
                        
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->hasSub && !$_smarty_tpl->tpl_vars['isDisabled']->value) {?>
                            <span class="fa arrow" ></span>
                        <?php }?>
                    </a>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->hasSub && !$_smarty_tpl->tpl_vars['isDisabled']->value) {?>
                            <ul class="nav nav-second-level ">
                                <?php
$_from = $_smarty_tpl->tpl_vars['m']->value->sub;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$foreach_sub_Sav = $_smarty_tpl->tpl_vars['sub'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->can($_smarty_tpl->tpl_vars['sub']->value->access)) {?>     
                                        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value->isCurrent) {?> class='selected'  <?php }?>  >  
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['sub']->value->url;?>
"  <?php if ($_smarty_tpl->tpl_vars['isDisabled']->value) {?> aria-disabled='true' <?php }?> >
                                               <?php echo ucfirst($_smarty_tpl->tpl_vars['sub']->value->label);?>
  <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['sub']->value->icon;?>
  fa-fw pull-right " ></i> 
                                            </a>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['sub']->value->hasSub) {?>
                                                <ul class="nav nav-third-level ">
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['sub']->value->sub;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['third_sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['third_sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['third_sub']->value) {
$_smarty_tpl->tpl_vars['third_sub']->_loop = true;
$foreach_third_sub_Sav = $_smarty_tpl->tpl_vars['third_sub'];
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->can($_smarty_tpl->tpl_vars['third_sub']->value->access)) {?>     
                                                            <li <?php if ($_smarty_tpl->tpl_vars['third_sub']->value->isCurrent) {?> class='selected'  <?php }?>  > 
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['third_sub']->value->url;?>
" ><?php echo ucfirst($_smarty_tpl->tpl_vars['third_sub']->value->label);?>
 </a>
                                                             </li>
                                                        <?php }?> 
                                                    <?php
$_smarty_tpl->tpl_vars['third_sub'] = $foreach_third_sub_Sav;
}
?>  
                                                </ul>
                                                <?php }?>
                                         </li>
                                    <?php }?> 
                                <?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>  
                            </ul>
                        <?php }?>
                </li>
            <?php }?>      
        <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>   
    </ul>
 </div>
    <!-- end sidebar-collapse -->
</nav>
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
>
        $('#side-menu li a').click( function(){
            var sound = new Audio('/public/assets/media/navigation.wav')
            sound.play();
        })
        // toogle side navigation
        Nyra.util.navToggle('.nyra-nav-toggle');
        
        $('#side-menu').metisMenu();
        //Loads the correct sidebar on window load, collapses the sidebar on window resize.
        $(function() {
            $(window).bind("load resize", function() {
                console.log($(this).width())
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            })
        })
    <?php echo '</script'; ?>
>
    
   
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>