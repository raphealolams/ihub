<?php /* Smarty version 3.1.27, created on 2016-12-08 20:56:18
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\search\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9556584a63a2238fb1_90937275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654614383ed478980701db063a4f843a0c773671' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\search\\views\\index.tpl',
      1 => 1474552767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9556584a63a2238fb1_90937275',
  'variables' => 
  array (
    'q' => 0,
    'total' => 0,
    'entities' => 0,
    'e' => 0,
    'term' => 0,
    'result_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584a63a25a6957_39718683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584a63a25a6957_39718683')) {
function content_584a63a25a6957_39718683 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '9556584a63a2238fb1_90937275';
?>

<?php ob_start();
echo lang('search');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

<form method="GET" >
    <div class="input-group">
        <input type="text" name="q" value="<?php echo $_smarty_tpl->tpl_vars['q']->value;?>
" class="form-control" placeholder="<?php echo lang('plugin_search_for');?>
...">
        <span class="input-group-btn">
            <input class="btn btn-default" name="search" value="<?php echo lang('verb_search');?>
" type="submit" />
        </span>
    </div><!-- /input-group -->
</form>
<div class="col-md2-12 col-lg-12" style="margin-top: 10px">
   <div class="alert alert-info">
       <?php if ($_smarty_tpl->tpl_vars['total']->value < 1) {?>
            <?php echo lang('record_non_found');?>

        <?php } else { ?>
           <?php if ($_smarty_tpl->tpl_vars['total']->value == 1) {?>
               <?php echo lang('plugin_search_one_record_found');?>

               one record found
            <?php } else { ?>
               <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 record(s) found
            <?php }?>
        <?php }?>
   </div>
</div>
<div class="row">
     <ul class="nav nav-pills<?php if (count($_smarty_tpl->tpl_vars['entities']->value) > 1) {
}?>" style="margin: 10px">
        <?php
$_from = $_smarty_tpl->tpl_vars['entities']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['e']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
$foreach_e_Sav = $_smarty_tpl->tpl_vars['e'];
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['e']->value->searchTerm() == $_smarty_tpl->tpl_vars['term']->value) {?>active<?php }?>"> 
                <a href="?term=<?php echo $_smarty_tpl->tpl_vars['e']->value->searchTerm();?>
&q=<?php echo $_smarty_tpl->tpl_vars['q']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value->getTitle();?>
</a>
            </li>
        <?php
$_smarty_tpl->tpl_vars['e'] = $foreach_e_Sav;
}
?>
    </ul>
</div>

<div class="row">
    <?php echo $_smarty_tpl->tpl_vars['result_view']->value;?>

</div>

<?php }
}
?>