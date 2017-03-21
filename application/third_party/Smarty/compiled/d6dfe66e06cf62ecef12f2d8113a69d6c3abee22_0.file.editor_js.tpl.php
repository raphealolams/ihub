<?php /* Smarty version 3.1.27, created on 2016-10-31 09:03:17
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\plugins\views\admin\editor_js.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:128825817a3850b7bd6_60861372%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6dfe66e06cf62ecef12f2d8113a69d6c3abee22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\plugins\\views\\admin\\editor_js.tpl',
      1 => 1475271174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128825817a3850b7bd6_60861372',
  'variables' => 
  array (
    'selector' => 0,
    'config' => 0,
    'mini_toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5817a385107ef0_68893737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5817a385107ef0_68893737')) {
function content_5817a385107ef0_68893737 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '128825817a3850b7bd6_60861372';
?>


<?php echo '<script'; ?>
 >
                        
    CKEDITOR.replaceAll(  function( elem , EditorConfig){
        var isMini = $( elem ).hasClass( 'editor-mini' ) ;
        var isEditor = false ;

        if( $( elem ).hasClass( '<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
' ) || isMini ){
            isEditor = true ;
        }

        EditorConfig.enterMode =   CKEDITOR.ENTER_BR ;  
        EditorConfig.shiftEnterMode =   CKEDITOR.ENTER_P ;  
        EditorConfig.defaultLanguage  =  '<?php echo get_user_lang_code();?>
';  
        
        
        
              
        
        if( isEditor ){
            jQuery.extend( EditorConfig , <?php echo $_smarty_tpl->tpl_vars['config']->value;?>
 );
        }
        if( isMini ){
            EditorConfig.toolbar =   <?php echo $_smarty_tpl->tpl_vars['mini_toolbar']->value;?>
 ;
            EditorConfig.height = '200px'
         }
         return isEditor ;

    }) ;
<?php echo '</script'; ?>
>
<?php }
}
?>