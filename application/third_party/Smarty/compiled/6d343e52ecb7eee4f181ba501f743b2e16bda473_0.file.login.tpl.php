<?php /* Smarty version 3.1.27, created on 2017-02-09 00:55:38
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29985589baffacd0370_11399373%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d343e52ecb7eee4f181ba501f743b2e16bda473' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\login.tpl',
      1 => 1486565719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29985589baffacd0370_11399373',
  'variables' => 
  array (
    'CI' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589baffaded633_08134427',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589baffaded633_08134427')) {
function content_589baffaded633_08134427 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29985589baffacd0370_11399373';
?>
    <?php echo $_smarty_tpl->tpl_vars['CI']->value->smartytpl->show('layouts/partials/header');?>


  </head>
  <body >
 
<body class="login">

      <div class="form-signin">
      <h1><?php echo get_option('School_name');?>
 </h1>
    <div class="text-center">
        <img src="<?php echo option_get_logo();?>
" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
           <?php echo form_open();?>

                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div  class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                <?php }?>
                <div class="form-group">
                    <label><i class="glyphicon glyphicon-user"></i> Username</label>
                    <input type="text"class="form-control" name="username" value="<?php echo set_value('username');?>
" />
                    <?php echo form_error('username');?>

                </div>
                <div class="form-group">
                    <label> <i class="glyphicon glyphicon-lock"></i> Password</label>
                    <input type="password" name="password" class="form-control" />
                    <?php echo form_error('password');?>

                </div>
                <input type="submit" name="login" value="Login" class="btn btn-default" />
                <div class="btn-group pull-right">
                    <a class="" 
                       href="<?php echo site_url("users/register");?>
"> Register</a> &nbsp;
                    <a class="" 
                        href="<?php echo site_url("users/forgot_password");?>
"> Forgot Password?</a>
                </div>
            <?php echo form_close();?>

        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html">
                <p class="text-muted text-center">Enter your valid e-mail</p>
                <input type="email" placeholder="mail@domain.com" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html">
                <input type="text" placeholder="username" class="form-control top">
                <input type="email" placeholder="mail@domain.com" class="form-control middle">
                <input type="password" placeholder="password" class="form-control middle">
                <input type="password" placeholder="re-password" class="form-control bottom">
                <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
  </div>


    <!--jQuery -->
    <?php echo '<script'; ?>
 src="assets/lib/jquery/jquery.js"><?php echo '</script'; ?>
>

    <!--Bootstrap -->
    <?php echo '<script'; ?>
 src="assets/lib/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    <?php echo '</script'; ?>
>
</body>

</html>

</html>
<?php }
}
?>