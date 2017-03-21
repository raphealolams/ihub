<?php /* Smarty version 3.1.27, created on 2016-11-02 05:43:59
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\pages\views\confirm_action.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30301581a17cf361898_12342990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09106ecfe50ca195cb81b4f44c47c2dbd09b4696' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\pages\\views\\confirm_action.tpl',
      1 => 1474552764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30301581a17cf361898_12342990',
  'variables' => 
  array (
    'form_url' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a17d04df802_08162698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a17d04df802_08162698')) {
function content_581a17d04df802_08162698 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '30301581a17cf361898_12342990';
ob_start();
echo lang('verb_confirm');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('title'=>$_tmp1),$_smarty_tpl);?>


<?php ob_start();
echo $_smarty_tpl->tpl_vars['form_url']->value;
$_tmp2=ob_get_clean();
echo nyra_form_open($_tmp2);?>

<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<input type="submit" class="btn btn-success" name="current-action-yes" value="<?php echo (($tmp = @lang('yes'))===null||$tmp==='' ? 'Yes' : $tmp);?>
" />
<input type="submit" name="current-action-no" value="<?php echo (($tmp = @lang('no'))===null||$tmp==='' ? 'No' : $tmp);?>
" />

<?php echo form_close();

}
}
?>