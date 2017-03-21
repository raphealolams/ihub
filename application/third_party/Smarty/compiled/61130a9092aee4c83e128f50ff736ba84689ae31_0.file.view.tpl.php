<?php /* Smarty version 3.1.27, created on 2017-01-14 05:15:38
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\diary\views\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27137587a4eaab79820_80095221%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61130a9092aee4c83e128f50ff736ba84689ae31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\diary\\views\\view.tpl',
      1 => 1453423556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27137587a4eaab79820_80095221',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587a4eaabf84f9_03326005',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587a4eaabf84f9_03326005')) {
function content_587a4eaabf84f9_03326005 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '27137587a4eaab79820_80095221';
echo smarty_function_theme_plugin(array('name'=>'famfamfam-icons'),$_smarty_tpl);?>


<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->title;
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>

<p><span class="fam date"></span> <?php echo $_smarty_tpl->tpl_vars['item']->value->day;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->month;?>
 -<?php echo $_smarty_tpl->tpl_vars['item']->value->year;?>
 
   <span class="fam time"></span><?php echo $_smarty_tpl->tpl_vars['item']->value->time;?>

   <?php if ($_smarty_tpl->tpl_vars['item']->value->exact_time) {?>
        <span class="fam tick"></span>
    <?php } else { ?>
         <span class="fam cross"></span>
    <?php }?>
    <strong>Exact Time </strong>
</p>
<div><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
 </div>

<?php echo get_comment_list('diary_item',$_smarty_tpl->tpl_vars['item']->value->id);

}
}
?>