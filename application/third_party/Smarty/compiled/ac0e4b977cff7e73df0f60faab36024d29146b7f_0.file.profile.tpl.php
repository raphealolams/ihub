<?php /* Smarty version 3.1.27, created on 2016-10-31 15:33:56
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\users\views\profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:80705817ff143a9b97_87924709%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac0e4b977cff7e73df0f60faab36024d29146b7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\users\\views\\profile.tpl',
      1 => 1474552770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80705817ff143a9b97_87924709',
  'variables' => 
  array (
    'user' => 0,
    'is_visitor' => 0,
    'CI' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817ff14b18615_03236323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817ff14b18615_03236323')) {
function content_5817ff14b18615_03236323 ($_smarty_tpl) {
if (!is_callable('smarty_function_multitab_link')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.multitab_link.php';
if (!is_callable('smarty_block_multitab_content')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.multitab_content.php';

$_smarty_tpl->properties['nocache_hash'] = '80705817ff143a9b97_87924709';
$_smarty_tpl->tpl_vars['is_operamini'] = new Smarty_Variable(browser_is_opramini(), null, 0);?>

<div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
            <img class="img img-thumbnail user-avarter" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getImage();?>
" />
            <?php if (OptionHelper::get('userUploadImage')) {?>
              <a href="<?php echo site_url('users/change_picture');?>
" class="btn btn-default btn-block">
                <i class="glyphicon glyphicon-upload"></i><?php echo lang('verb_change');?>
</a> 
            <?php }?>
        </div>
        <div class="col-xs-6 col-sm-9 col-md-10 col-lg-10">
            <p><span class="glyphicon glyphicon-user"> </span> <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
 </strong> </p>
            
            <?php if ($_smarty_tpl->tpl_vars['user']->value->current_country) {?><p> 
               <span class="glyphicon glyphicon-map-marker"></span>
               <?php echo (($tmp = @lang('lives_in'))===null||$tmp==='' ? "lives in" : $tmp);
echo $_smarty_tpl->tpl_vars['user']->value->current_state;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->current_country;?>
 </p> 
            <?php }?>
            <p>
                <span class="glyphicon glyphicon-home"></span>
                <?php echo (($tmp = @lang('from'))===null||$tmp==='' ? "from" : $tmp);?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->country;?>

            </p>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->job_title && $_smarty_tpl->tpl_vars['user']->value->job_title) {?>
                <span class="glyphicon glyphicon-briefcase"> </span>  <?php echo $_smarty_tpl->tpl_vars['user']->value->job_title;?>
 at <?php echo $_smarty_tpl->tpl_vars['user']->value->company;?>
 </p> 
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['is_visitor']->value && !$_smarty_tpl->tpl_vars['user']->value->email_verified) {?>
                <p> Email not verified  <a href="/send_verification"> 
                        <span class="glyphicon glyphicon-send"> </span>
                        <?php echo (($tmp = @lang('send_verification_mail'))===null||$tmp==='' ? "Send Verification" : $tmp);?>
</a> 
                </p>
            <?php }?>
            <p>
                <?php if (!$_smarty_tpl->tpl_vars['is_visitor']->value) {?>
                    <a href="/settings"><span class="glyphicon glyphicon-cog"> </span>  Settings </a>
                <?php }?>
            </p>
        </div>
</div>
<div class="multitab-content col-xs-12 col-sm-12 col-lg-12 col-md-12" id="user-profile-tab-content"> 
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->getName();
$_tmp1=ob_get_clean();
echo smarty_function_multitab_link(array('hook'=>'users.profile.tab','link_open'=>'<ul class=" nav nav-pills multitab-nav">','item_template'=>' <li role="presentation" class="[[active_class]]"><a href="[[url]]">[[title]]</a></li>','default_tab_title'=>$_tmp1,'add_default_tab'=>false),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('multitab_content', array('hook'=>'users.profile.tab')); $_block_repeat=true; echo smarty_block_multitab_content(array('hook'=>'users.profile.tab'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
        <?php $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->theme->getWidgetsInPosition('nyra_users_profile_home'), null, 0);?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

     <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_multitab_content(array('hook'=>'users.profile.tab'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

     
 </div>
     
    
     
     
     


<?php }
}
?>