<?php /* Smarty version 3.1.27, created on 2017-02-08 00:12:14
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22875589a544e2c9a28_30017568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b223ac9ce58d8e2f4071f3881ddb553e11945c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\page.tpl',
      1 => 1486476712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22875589a544e2c9a28_30017568',
  'variables' => 
  array (
    'CI' => 0,
    'page_title' => 0,
    'action_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a544e3a52c7_34496347',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a544e3a52c7_34496347')) {
function content_589a544e3a52c7_34496347 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22875589a544e2c9a28_30017568';
echo $_smarty_tpl->tpl_vars['CI']->value->smartytpl->show('layouts/partials/header');?>


  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">


                
                    <?php echo $_smarty_tpl->getSubTemplate ('layouts/partials/nav_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



                <!-- /#top -->
                   <?php echo $_smarty_tpl->getSubTemplate ('layouts/partials/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                   <style>
                       .inner{
                           min-height: 450px;
                       }
                   </style>
                    <!-- /#left -->

                <div id="content">
                    <div class="outer">
                        <div class="col-lg-12">
                                <?php echo $_smarty_tpl->getSubTemplate ('layouts/partials/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        </div>
                        <div class="inner bg-light lter">

                          <div class="col-lg-12">
                          <h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['page_title']->value;
$_tmp1=ob_get_clean();
echo $_tmp1;?>
</h2>
                          <?php ob_start();
echo $_smarty_tpl->tpl_vars['action_view']->value;
$_tmp2=ob_get_clean();
echo $_tmp2;?>

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                      </div>
                    <!-- /#right -->
            </div>
            
            <?php echo $_smarty_tpl->tpl_vars['CI']->value->smartytpl->show('layouts/partials/footer');?>


        </body>

</html>
<?php }
}
?>