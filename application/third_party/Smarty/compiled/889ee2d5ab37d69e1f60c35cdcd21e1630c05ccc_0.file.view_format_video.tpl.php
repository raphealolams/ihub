<?php /* Smarty version 3.1.27, created on 2016-11-02 18:53:23
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\arewa\modules\nyra_posts\view_format_video.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25808581ad0d3392ae8_75580268%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889ee2d5ab37d69e1f60c35cdcd21e1630c05ccc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\arewa\\modules\\nyra_posts\\view_format_video.tpl',
      1 => 1478106789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25808581ad0d3392ae8_75580268',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581ad0d349cf82_63987110',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581ad0d349cf82_63987110')) {
function content_581ad0d349cf82_63987110 ($_smarty_tpl) {
if (!is_callable('smarty_function_locate_load')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.locate_load.php';

$_smarty_tpl->properties['nocache_hash'] = '25808581ad0d3392ae8_75580268';
echo $_smarty_tpl->tpl_vars['post']->value->getVideoTemplate('video_file');?>

<?php echo smarty_function_locate_load(array('file'=>'partials/post_tags_comments'),$_smarty_tpl);

}
}
?>