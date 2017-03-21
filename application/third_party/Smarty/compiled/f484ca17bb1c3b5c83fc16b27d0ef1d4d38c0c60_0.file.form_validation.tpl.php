<?php /* Smarty version 3.1.27, created on 2016-11-26 13:56:35
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\test\views\form_validation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6982583a2f43214034_78594819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f484ca17bb1c3b5c83fc16b27d0ef1d4d38c0c60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\form_validation.tpl',
      1 => 1480208165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6982583a2f43214034_78594819',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583a2f43287db0_74784742',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583a2f43287db0_74784742')) {
function content_583a2f43287db0_74784742 ($_smarty_tpl) {
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';

$_smarty_tpl->properties['nocache_hash'] = '6982583a2f43214034_78594819';
?>
<h1>Testing Form Validation Javascript Utility</h1>
<?php echo form_open('','id="validate"');?>

 <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="inputName" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" 
           data-form-validation-events="change" data-form-validation-rules="required|min_length[5]"
           id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password-confirm" name="password-confirm" class="form-control" 
           data-form-validation-events="change" data-form-validation-rules="required|matches[password]"
           id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="file" id="exampleInputFile">
  </div>
  <div class="checkbox">
    <label>
      <input data-form-validation-events="change|blur" data-form-validation-rules="required" type="checkbox"> Check me out
    </label>
  </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <textarea name="me[%s][desc]" class="form-control input-desc" placeholder="jane.doe@example.com"
                  
        ></textarea>
      </div>
 
 <div class="row">
  
     <?php echo do_pagination('dev.com?',30,5);?>

 </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_theme_plugin(array('name'=>'ray-form-validate'),$_smarty_tpl);?>


    
    
        <?php echo '<script'; ?>
>
            hi = 'hello guys'
           console.log( hi.substring(1 , hi.length - 1))
            data = [ {
                        field : 'name'  ,
                        label : 'Name' ,
                        rules : 'required' , 
                        events : 'change'
                    }, {  
                      label : 'Email',
                      field : 'email',
                      rules : 'required|valid_email' ,
                      events : 'change'
                    },
                    {  
                      field : 'file' ,
                      rules : 'required' ,
                      events : 'blur'
                    },
                     {
                    field :  "me[%s][desc]" ,
                    rules : 'required|min_length[8]|max_length[50]' ,
                    events : 'change'
                    }
            ];

            var f = new RayFormValidate(document.getElementById('validate') , data);

            f.success(function(){
                Nyra.util.alert('form validated successfully');
                Nyra.util.startRoller('form will be subtmited');
                var form = this;

                setTimeout(function(){
                    form.submit();
                },5000)
                return false;

            }).error(function(objec){
                console.log(f.getErrors())
            });
                    //f.validate(document.getElementById('exampleInputEmail1'))
                    //r = f.validateWith('matches' , 'name' , 'email');

               //console.log( Boolean(r) )
        <?php echo '</script'; ?>
>
    
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>