<?php /* Smarty version 3.1.27, created on 2016-10-31 08:46:47
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\themes\deal\includes\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:124458179fa7eea391_42576156%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a01e7b669babfb22f0fc415d39f674b1f25eb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\themes\\deal\\includes\\footer.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124458179fa7eea391_42576156',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58179fa8003408_97165146',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58179fa8003408_97165146')) {
function content_58179fa8003408_97165146 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.footer_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '124458179fa7eea391_42576156';
?>

        <?php echo smarty_function_footer_hooks(array(),$_smarty_tpl);?>

       
        <?php echo '<script'; ?>
>
             $('[data-toggle="popover"]').popover();
              
            $('.help-block').each(function(index , domEle){
                var elem = $(domEle);
                var text = elem.data('help-text');
                if(text){
                    var info = $('<i class="glyphicon glyphicon-info-sign info-tooltip"  data-toggle="tooltip" >');
                    info.attr('title' , text )
                    var label = elem.siblings('label').first();
                    // bootsrap checkbox markup are wrapped with the label
                    if( label.parent().first().hasClass('checkbox')){
                        info.css('margin-right'  , '20px') ;
                    }
                    label.prepend(info);
                    info.tooltip()
                }
            })
        <?php echo '</script'; ?>
>
        
    </body>
</html><?php }
}
?>