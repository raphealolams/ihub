<?php /* Smarty version 3.1.27, created on 2016-11-28 02:41:02
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\test\views\dynamic_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1956583c33ee831de0_29506105%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b93dd952f1c2daf6a9c49b7bd18e597ff713be8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\dynamic_form.tpl',
      1 => 1475748532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956583c33ee831de0_29506105',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583c33ef20a641_47616040',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583c33ef20a641_47616040')) {
function content_583c33ef20a641_47616040 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '1956583c33ee831de0_29506105';
?>

<h1>Testin Dynamic form Javascript Utility</h1>

<?php echo smarty_function_theme_plugin(array('name'=>'jquery-ui'),$_smarty_tpl);?>

<form id="validate">
    <div id="wrapper1" data-template-id="#wrapper1-template" class="input-group-wrapper">
        <div >
            <a class="btn btn-default add-btn">Add Input</a>
            <a class="btn btn-default undo-remove-btn">Undo Remove</a>
        </div>
        
        <?php echo '<script'; ?>
 id="wrapper1-template" type="text/template">
                <div class="form-group" style="margin: 10px 0px"
                    <div class="btn-group pull-right" role="group">
                        <span class="badge indicator"></span>
                        <button type="button" class="close remove-btn"  
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <span style="margin-right:10px" class="move-up-btn glyphicon glyphicon-menu-up"></span>
                        <span style="margin-right:10px" class="move-down-btn glyphicon glyphicon-menu-down"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="me[%s][name]">Name</label>
                    <input type="text" name="me[%s][name]" 
                        data-form-validation-input-label="Name"
                        data-form-validation-events="change" data-form-validation-rules="required|min_length[5]"
                        class="form-control input-name" placeholder="Jane Doe">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="me[%s][email]" class="form-control input-email" 
                        data-form-validation-input-label="Email"
                    data-form-validation-events="change" data-form-validation-rules="required|valid_email"
                placeholder="jane.doe@example.com">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="one" name="me[%s][agree][]" 
                    data-form-validation-input-label="Agreement" class="input-agree" >Subscribe
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="two" name="me[%s][agree][]" 
                        data-form-validation-input-label="Agreement" class=" input-agree" >Subscribe
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="me[%s][religion]" value="christian" class=" input-religion"> Christian
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="me[%s][religion]"  value="islam" class=" input-religion">
                  Islam
                </label>
              </div>
               <div class="form-group">
                    <label for="sex">Sex</label>
                    <select name="me[%s][sex]" class="form-control input-sex" >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
              </div>
              <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="me[%s][desc]" class="form-control input-desc" placeholder="jane.doe@example.com"></textarea>
              </div>
            <hr/>
        <?php echo '</script'; ?>
>
    </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo smarty_function_theme_plugin(array('name'=>'ray-dynamic-form'),$_smarty_tpl);?>

<?php echo smarty_function_theme_plugin(array('name'=>'ray-form-validate'),$_smarty_tpl);?>

    <?php echo '<script'; ?>
>
    
    
       
        data = [
                    {
                    'name' : 'Crystalhills',
                    'email' : 'wakeel.oguns@gmail.com',
                    'desc' : 'test',
                    },
                    {
                    'name' : 'Alimat Ogunsanya',
                    'email' : 'ola@yahoo.com',
                    'desc' : 'test',
                    }
        ]
                        

        var f = new RayDynamicForm('#wrapper1' , data , { maximum : 2 } , true);
        var v = RayFormValidate(document.getElementById('validate'));
        
        f.on('rf.on.add', function( e  ){
            
            // reset validation
            v.reset()
            var groupContainer =  e.target;
            // focus on the elem
            $('html, body').animate({
                scrollTop : groupContainer.offset().top - 100
            } , 2000 , function(){
                groupContainer.effect('highlight');

                });
            });
        f.on('rf.on.index.refresh', function( e  ){
            if(f.removedGroups.length > 0 ){
                console.log('Can Restore!!!')
            }
        });
        
        //f.addInput(); 
        
    <?php echo '</script'; ?>
>   
 
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}
?>