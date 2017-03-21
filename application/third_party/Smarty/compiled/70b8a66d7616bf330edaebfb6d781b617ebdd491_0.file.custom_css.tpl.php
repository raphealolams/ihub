<?php /* Smarty version 3.1.27, created on 2016-12-29 11:50:36
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\appearance\views\admin\custom_css.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:131625865933cd523f0_32300766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70b8a66d7616bf330edaebfb6d781b617ebdd491' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\appearance\\views\\admin\\custom_css.tpl',
      1 => 1475273525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131625865933cd523f0_32300766',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5865933ddc9771_71694390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5865933ddc9771_71694390')) {
function content_5865933ddc9771_71694390 ($_smarty_tpl) {
if (!is_callable('smarty_block_action_header')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.action_header.php';
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '131625865933cd523f0_32300766';
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
     <?php echo HtmlHelper::loopErrors($_smarty_tpl->tpl_vars['errors']->value);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('action_header', array()); $_block_repeat=true; echo smarty_block_action_header(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group pull-left">
             <?php echo HtmlHelper::backButton();?>

        </div>
        <div class="btn-group pull-right">
             <?php echo HtmlHelper::submitButton('css-form');?>

             <?php echo HtmlHelper::helpButton('plugins-nyra_pages');?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_action_header(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php ob_start();
echo lang('pronoun_custom');
$_tmp1=ob_get_clean();
echo smarty_function_action_title(array('name'=>$_tmp1."  Css"),$_smarty_tpl);?>

    <?php echo smarty_function_theme_plugin(array('name'=>'codemirror'),$_smarty_tpl);?>

    
    <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
       <?php echo nyra_alert(lang('alert_update_success'),'success');?>

    <?php }?>
    
    <?php echo form_open('',array('id'=>'css-form'));?>

        <div class="form-group">
            <textarea name="code" id="custom-css-editor"><?php echo $_smarty_tpl->tpl_vars['css']->value;?>
</textarea>
        </div>
        <p><?php echo lang('action_select');?>
 theme: <select onchange="selectTheme()" id=select>
        <option selected>default</option>
        <option>3024-day</option>
        <option>3024-night</option>
        <option>ambiance</option>
        <option>base16-dark</option>
        <option>base16-light</option>
        <option>blackboard</option>
        <option>cobalt</option>
        <option>colorforth</option>
        <option>eclipse</option>
        <option>elegant</option>
        <option>erlang-dark</option>
        <option>lesser-dark</option>
        <option>liquibyte</option>
        <option>mbo</option>
        <option>mdn-like</option>
        <option>midnight</option>
        <option>monokai</option>
        <option>neat</option>
        <option>neo</option>
        <option>night</option>
        <option>paraiso-dark</option>
        <option>paraiso-light</option>
        <option>pastel-on-dark</option>
        <option>rubyblue</option>
        <option>solarized dark</option>
        <option>solarized light</option>
        <option>the-matrix</option>
        <option>tomorrow-night-bright</option>
        <option>tomorrow-night-eighties</option>
        <option>ttcn</option>
        <option>twilight</option>
        <option>vibrant-ink</option>
        <option>xq-dark</option>
        <option>xq-light</option>
        <option>zenburn</option>
    </select>
    </p>
    <?php echo form_close();?>





    <?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo '<script'; ?>
>
        Nyra.util.addJs('assets/codemirror/mode/javascript/javascript.js');
        Nyra.util.addJs('assets/codemirror/mode/smarty/smarty.js');
        Nyra.util.addJs('assets/codemirror/mode/xml/xml.js');
        Nyra.util.addJs('assets/codemirror/addon/edit/matchbrackets.js');
        Nyra.util.addJs('assets/codemirror/addon/comment/continuecomment.js');
        Nyra.util.addCss('assets/codemirror/theme/3024-night.css');
        
      var editor = CodeMirror.fromTextArea(document.getElementById("custom-css-editor"), {
        lineNumbers: true,
        styleActiveLine: true,
        matchBrackets: true , 
        mode:  "css" ,
        extraKeys: { "Ctrl-Space": "autocomplete" },
      });
      var input = document.getElementById("select");

      function selectTheme() {

        var theme = input.options[input.selectedIndex].innerHTML;

        // add the css for the theme
        Nyra.util.addCss('assets/codemirror/theme/' + theme + '.css');
        editor.setOption("theme", theme);
      }
      var choice = document.location.search &&
                   decodeURIComponent(document.location.search.slice(1));
      if (choice) {
        input.value = choice;
        editor.setOption("theme", choice);
      }
    <?php echo '</script'; ?>
>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
}
?>