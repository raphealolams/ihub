<?php /* Smarty version 3.1.27, created on 2016-12-08 23:26:15
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\test\views\jq_UI.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1851584a86c7bc9fa6_15301261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28dcc79f32d7b5398cd532515e4143f67ef34519' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\jq_UI.tpl',
      1 => 1481278935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1851584a86c7bc9fa6_15301261',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584a86c7d07832_02244190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584a86c7d07832_02244190')) {
function content_584a86c7d07832_02244190 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '1851584a86c7bc9fa6_15301261';
?>
<h1>Transfer Effecr</h1>
<?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

<style>  
    section.green {    width: 100px;    height: 80px;    background: green;    border: 10px solid black;    position: relative;  }  
    section.red {    margin-top: 10px;    width: 50px;    height: 30px;    background: red;    border: 1px solid black;    position: relative;  }  .ui-effects-transfer {    border: 1px dotted black;  }  
</style>  

<section class="green" data-h='hi'>

</section>
<section class="red">

</section> 


<table>
    <tr>
        <td><input  type="checkbox" class='master' data-target="master-c1" /></td>
        <td><input   type="checkbox" class='master' data-target="master-c2"/>
            </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" class='master-c1' />
        <input  type="checkbox" class='master-c1' />
        <input  type="checkbox" class='master-c1' />
        <input  type="checkbox"  class='master-c1' /> 
        </td>
        <td>
        <input  type="checkbox" class='master-c2' />
        <input  type="checkbox" class='master-c2' />
        <input  type="checkbox" class='master-c2' />
        <input  type="checkbox" class='master-c2' />
        <input  type="checkbox" class='master-c2' />
        <input  type="checkbox" class='master-c2' />
        </td>
    </tr>
    
    
</table>

<?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo '<script'; ?>
>
    $( "section" ).click(function() {  
        var i = 1 - $( "section" ).index( this );  
        $(this).data('h' , 'wasup')
        console.log($(this).data('h'))
        $( this ).effect( "transfer", { to: $( "section" ).eq( i ) }, 1000 );
    });
<?php echo '</script'; ?>
>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>