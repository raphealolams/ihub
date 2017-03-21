<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:49
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\admin\help.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2857558179fa98e9081_06106158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16236368c556f1780e38d40f4526496a8f98de53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\admin\\help.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2857558179fa98e9081_06106158',
  'variables' => 
  array (
    'CI' => 0,
    'help_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa9a08d44_08682881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa9a08d44_08682881')) {
function content_58179fa9a08d44_08682881 ($_smarty_tpl) {
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '2857558179fa98e9081_06106158';
?>

<div id="help-menu-container" class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right" >
        <?php $_smarty_tpl->tpl_vars['loader'] = new Smarty_Variable($_smarty_tpl->tpl_vars['CI']->value->load->library('walker',array('root_parent_class'=>'nav','root_parent_attrs'=>'id="help-menu"','sub_parent_attrs'=>'','sub_parent_class'=>'nav nav-second-level','template_root_has_child'=>'<li>
                                                                                        <a data-content-slug="[[slug]]" class=""href="#">
                                                                                            [[title]] <span class="fa arrow" ></span>
                                                                                        </a>
                                                                                      ','template_root_no_child'=>'<li>
                                                                                        <a data-content-slug="[[slug]]" class=""href="#">
                                                                                            [[title]] 
                                                                                        </a>','template_sub_has_child'=>'<li>
                                                                                        <a data-content-slug="[[slug]]" class=""href="#">
                                                                                            [[title]] <span class="fa arrow" ></span>
                                                                                        </a>
                                                                                      ','template_sub_no_child'=>'<li>
                                                                                        <a data-content-slug="[[slug]]" class=""href="#">
                                                                                            [[title]] 
                                                                                        </a>')), null, 0);?>
        <?php echo $_smarty_tpl->tpl_vars['CI']->value->walker->walk_tree($_smarty_tpl->tpl_vars['help_data']->value['processed'],true,0,10);?>

</div>
<div id="help-content-container" class="col-xs-12 col-xm-12 col-md-7 col-lg-7 pull-left" >
    <h3 id='help-content-title'></h3>
    <div id="help-content-body"></div>
</div>

        
<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
        var data = <?php echo json_encode($_smarty_tpl->tpl_vars['help_data']->value['raw']);?>

        
        console.log( data )
    <?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>