<?php /* Smarty version 3.1.27, created on 2016-11-07 21:49:22
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\test\views\progress_bar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2036858219192b6cfd2_75063751%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26becd2d4521ab09f0b0eab80c965d04cf34e205' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\progress_bar.tpl',
      1 => 1478395824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036858219192b6cfd2_75063751',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582191946f4b57_04149162',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582191946f4b57_04149162')) {
function content_582191946f4b57_04149162 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '2036858219192b6cfd2_75063751';
?>
<h1> Bootstrap Progress Bar Manager       </h1>

          
<div id="progress">
    <strong>Simple Progress  Bar Example</strong>
</div>
<div id="example-4">
  <h3> Simulate Download Progress </h3>
   <p> <button id="start-download"  class="btn btn-primary">Start Download </button></p>
</div>


<?php echo smarty_function_theme_plugin(array('name'=>'bootstrap-progreessbar-manager'),$_smarty_tpl);?>
 
    <?php echo smarty_function_theme_plugin(array('name'=>'inview'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
>
      myProgress = $('#progress').progressbarManager({      
                    totalValue : 50,
                    initValue : 30 ,
                    // this is important
                    //total : 200
                 });
     
        $('#footer').bind('inview', function(event, visible) {
          if (visible) {
               myFooterProgress = $('#footer').progressbarManager({      
                    totalValue : 50,
                    initValue : 0 ,
                    // this is important
                    //total : 200
                 });
            var v = 1;
            myProgress.animate().stripe();
            var i = setInterval(function(){
                
                 myFooterProgress.setValue(v++).animate().stripe();
                 
                 if(myFooterProgress.isComplete()){
                     clearInterval(i)
                     console.log('completed');
                 }
        })
           
          } else {
             
           // $(this).stop().animate({ opacity: 0 });
          }
        });
  <?php echo '</script'; ?>
>
  


<?php echo '<script'; ?>
>
    myDownloadProgress = $('#example-4').progressbarManager({      
            totalValue : '20000kb',
            initValue : '0kb' ,
            animate : true ,
            stripe : true ,
            style : 'primary' ,
            debug : true
    });
    // wait for user click
    $('#start-download').click(function(){
        
         // lets simulate download
         var chunk = 0 ;
         var downloading = setInterval(function(){

             myDownloadProgress.setValue(chunk);

             if(myDownloadProgress.isComplete()){
                 myDownloadProgress.style('success');
                 clearInterval(downloading);
             }
             chunk += 2000;
         }, 2000);
    });
<?php echo '</script'; ?>
>



<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>