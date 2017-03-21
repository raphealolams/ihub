<?php /* Smarty version 3.1.27, created on 2016-11-02 18:53:08
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\errors\404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8397581ad0c48b59a5_74901957%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a86a8380a416213fbb02adba47d74fab9f6d8718' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\errors\\404.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8397581ad0c48b59a5_74901957',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad0c4c61037_67547389',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad0c4c61037_67547389')) {
function content_581ad0c4c61037_67547389 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '8397581ad0c48b59a5_74901957';
echo smarty_function_action_title(array('title'=>" "),$_smarty_tpl);?>

<div class="col-xs-12 col-sm-12 col-md-12">
    <p>
        <a id="back-btn" href="" class="btn btn-default">
            <i class="glyphicon glyphicon-arrow-left"></i>
            Back
        </a>
    </p>
        <img id="error-img" src="<?php echo htmlspecialchars(theme_option('arewa','404_image'), ENT_QUOTES, 'UTF-8', true);?>
" />
</div>
<style>
    #error-img{
        width: 90%    
    }
</style>
<?php echo '<script'; ?>
>
    Nyra.util.assignBackButtonRole('#back-btn');
<?php echo '</script'; ?>
>
    <?php }
}
?>