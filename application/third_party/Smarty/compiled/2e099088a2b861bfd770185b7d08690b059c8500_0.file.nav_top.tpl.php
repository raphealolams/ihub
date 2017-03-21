<?php /* Smarty version 3.1.27, created on 2017-02-01 17:10:00
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\partials\nav_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26058920858bd8da9_10855559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e099088a2b861bfd770185b7d08690b059c8500' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\partials\\nav_top.tpl',
      1 => 1485965392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26058920858bd8da9_10855559',
  'variables' => 
  array (
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58920858c3cdc0_28956158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58920858c3cdc0_28956158')) {
function content_58920858c3cdc0_28956158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26058920858bd8da9_10855559';
?>
 <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="<?php echo base_url("assets/dashboard/img/logo.png");?>
" alt=""></a>

                            </header>

 <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>
                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                       class="btn btn-default btn-sm toggle-right">
                                        <span class="glyphicon glyphicon-comment"></span>
                                    </a>
                                </div>

                            </div>

                            

                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo site_url('school/dashboard');?>
">Dashboard</a></li>
                                    <li class='dropdown '>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Profile <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url('users/profile');?>
">Profile</a></li>
                                            <li><a href="<?php echo site_url('users/logout');?>
">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                    <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Live Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-home"></i>&nbsp;
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['page_title']->value;
$_tmp1=ob_get_clean();
echo $_tmp1;?>

          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
<?php }
}
?>