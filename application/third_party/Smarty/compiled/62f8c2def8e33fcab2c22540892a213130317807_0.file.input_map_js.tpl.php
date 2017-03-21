<?php /* Smarty version 3.1.27, created on 2016-11-01 22:58:12
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\posts\views\admin\input_map_js.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:186385819b8b4539cc4_13746647%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f8c2def8e33fcab2c22540892a213130317807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\posts\\views\\admin\\input_map_js.tpl',
      1 => 1474552766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186385819b8b4539cc4_13746647',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5819b8b4643746_57566636',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5819b8b4643746_57566636')) {
function content_5819b8b4643746_57566636 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';

$_smarty_tpl->properties['nocache_hash'] = '186385819b8b4539cc4_13746647';
?>

<?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

<?php echo '<script'; ?>
>

(function(){
        var prefix  = '.nyra-form-input-group-' ;
        var affectedGroups = <?php echo json_encode($_smarty_tpl->tpl_vars['form']->value->getFieldGroupClassNames());?>
 ;
        // add the tab hide if its not a gallery post format
        affectedGroups.push('a[href="#tab-galleries"]')  ;
        var mapper = Nyra.util.mapInputs('#post-form' ,   '#input-format' ,{  
            'article' :   [ 'a[href="#tab-galleries"]' ,  ,prefix + "link_url" , prefix + "video_file" , prefix + "audio_file" , prefix + "featured_group_id" ] ,
            'video' :  [ 'a[href="#tab-galleries"]'  , prefix + "link_url" , prefix + "audio_file"   ]   ,
            'audio' :  [ 'a[href="#tab-galleries"]' , prefix + "link_url" , prefix + "video_file" ] ,
            'link' :  [  ,'a[href="#tab-galleries"]' ,   prefix + "featured_group_id" , prefix + "video_file"] ,
            'gallery' :  [  prefix + "link_url" ,  prefix + "video_file" , prefix + "audio_file"  ]   
        }, affectedGroups , false , '.form-group');
        
        mapper.on('nyra.input.map.show' , function(e){
                var container = e.target ;
                // if thie tha tab toggle link 
                if(container.attr('href') =='#tab-galleries'){
                    // focus on the elem
                    $('html, body').animate({
                        scrollTop : container.offset().top - 100
                    } , 2000 , function(){
                        container.effect('highlight');
                        // boostrap tab
                        container.tab('show');

                    });
                }
            })
    })();
<?php echo '</script'; ?>
><?php }
}
?>