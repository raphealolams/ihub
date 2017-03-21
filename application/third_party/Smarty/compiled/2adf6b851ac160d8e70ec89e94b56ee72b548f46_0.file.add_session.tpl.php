<?php /* Smarty version 3.1.27, created on 2017-01-30 18:40:55
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\add_session.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14355588f7aa7592a00_13620854%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2adf6b851ac160d8e70ec89e94b56ee72b548f46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\add_session.tpl',
      1 => 1485797386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14355588f7aa7592a00_13620854',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588f7aa75df6b7_73365423',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588f7aa75df6b7_73365423')) {
function content_588f7aa75df6b7_73365423 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14355588f7aa7592a00_13620854';
?>
<title>Add Session of School</title>

<div class="col-xs-12 col-sm-9">
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="session_name" class="col-sm-2 control-label">
             Session Name:   
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="session_name" placeholder="Enter Session Name">
            </div>
        </div>

        <div class="form-group">
            <label for="user_id" class="col-sm-2 control-label">
             User ID:   
            </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" 
                name="user_id" placeholder="Enter User ID">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">
                Submit</button>
            </div>
        </div>
        
    </form>
</div><?php }
}
?>