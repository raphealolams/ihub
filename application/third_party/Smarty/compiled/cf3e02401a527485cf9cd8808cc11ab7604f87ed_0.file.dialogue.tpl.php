<?php /* Smarty version 3.1.27, created on 2017-02-01 14:27:41
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\dialogue.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71835891e24da61667_84840513%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3e02401a527485cf9cd8808cc11ab7604f87ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\dialogue.tpl',
      1 => 1485955659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71835891e24da61667_84840513',
  'variables' => 
  array (
    'CI' => 0,
    'page_title' => 0,
    'action_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891e24db1c593_72851222',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891e24db1c593_72851222')) {
function content_5891e24db1c593_72851222 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71835891e24da61667_84840513';
?>
    <?php echo $_smarty_tpl->tpl_vars['CI']->value->smartytpl->show('layouts/partials/header');?>


  </head>
  <body >
        <div class="container-fluid" style="padding-top: 20px">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $_smarty_tpl->getSubTemplate ('layouts/partials/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['page_title']->value;
$_tmp1=ob_get_clean();
echo $_tmp1;?>
</h1>
                                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['action_view']->value;
$_tmp2=ob_get_clean();
echo $_tmp2;?>

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                    
                    <?php echo $_smarty_tpl->tpl_vars['CI']->value->smartytpl->show('layouts/partials/footer');?>

                </div>
            </div>
        </body>
</html>
<?php }
}
?>