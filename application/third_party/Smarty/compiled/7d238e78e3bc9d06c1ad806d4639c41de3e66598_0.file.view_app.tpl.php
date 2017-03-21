<?php /* Smarty version 3.1.27, created on 2016-11-21 10:08:53
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\api\views\admin\view_app.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26271583362657c4ae0_07153421%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d238e78e3bc9d06c1ad806d4639c41de3e66598' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\api\\views\\admin\\view_app.tpl',
      1 => 1474552707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26271583362657c4ae0_07153421',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583362658a6f78_80083610',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583362658a6f78_80083610')) {
function content_583362658a6f78_80083610 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';

$_smarty_tpl->properties['nocache_hash'] = '26271583362657c4ae0_07153421';
?>

<?php echo smarty_function_action_title(array('title'=>"My App ".((string)$_smarty_tpl->tpl_vars['app']->value->getAppTitle())),$_smarty_tpl);?>

<a href="<?php echo admin_url("api/edit_app/".((string)$_smarty_tpl->tpl_vars['app']->value->app_name));?>
" class="btn btn-default" >
                    <span class="glyphicon glyphicon-edit"></span> Edit
</a>
<div class="row">
    <div class="col-xs-6 col-md-3">
      <div class="thumbnail">
        <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value->getLogoUri();?>
" alt="App Logo">
      </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class="well"><strong>Client ID: </strong><?php echo $_smarty_tpl->tpl_vars['app']->value->client_id;?>
</div>
        <div class="well"> 
            <strong>Client Secret: </strong>
            <span id="client-secret">**************</span>
           
        </div>
    </div>
</div>





<?php echo '<script'; ?>
>
    var clientId = '<?php echo $_smarty_tpl->tpl_vars['app']->value->client_id;?>
';
    var secretShown = false;
    
    $('#show-client-secret').click(function(){
        
        if(secretShown){
            
            return;
        }
        $('#auth-modal').modal('show');
        $('#send-password').click(function(){
            var password = $('#user-password').val();

            var callback = function(response){
                if(response.success){
                    $('#client-secret').text(response.data);
                    secretShown = true;
                    $('#auth-modal').modal('hide');
                }else{
                    Nyra.util.alert(response.error_message);
                }
                
            };
            Nyra.request.post('/api/ajax/api/get_secret' , { 
                'password' : password ,
                'client_id' : clientId 
            }, { done : callback })
        });
    });

    
   
<?php echo '</script'; ?>
>
<!--  modal for user password -->


<div class="modal fade" id="auth-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Password</h4>
      </div>
      <div class="modal-body">
          <input type="password" id="user-password" class="form-control" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="send-password" class="btn btn-primary">Show</button>
      </div>
    </div>
  </div>
</div><?php }
}
?>