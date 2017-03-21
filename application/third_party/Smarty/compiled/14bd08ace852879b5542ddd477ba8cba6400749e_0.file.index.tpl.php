<?php /* Smarty version 3.1.27, created on 2016-11-02 05:33:14
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\dashboard\views\admin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14388581a154adcb2a9_78581352%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14bd08ace852879b5542ddd477ba8cba6400749e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\dashboard\\views\\admin\\index.tpl',
      1 => 1474552720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14388581a154adcb2a9_78581352',
  'variables' => 
  array (
    'template' => 0,
    'CI' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581a154b9c89d2_02309489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581a154b9c89d2_02309489')) {
function content_581a154b9c89d2_02309489 ($_smarty_tpl) {
if (!is_callable('smarty_function_HOOK')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.HOOK.php';

$_smarty_tpl->properties['nocache_hash'] = '14388581a154adcb2a9_78581352';
?>
<div class="row">
    <?php echo smarty_function_HOOK(array('event'=>'view.admin.home.before'),$_smarty_tpl);?>

    <div class="col-lg-12">
			
        <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable('<div class="panel panel-default">
                           <div class="panel-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#widget-control-[[type]]-[[index_num]]">
                                        [[title]] <span class="caret"> </span> 
                                    </a>
                                    <span class="pull-right">[[controls]] <a href="/admin/dashboard/widget_options/[[id]]" ><span class="glyphicon glyphicon-cog"> </span></a></span>
                                </h4>
                                
                            </div>
                            <div id="widget-control-[[type]]-[[index_num]]" class="panel-collapse collapse in">
                                <div class="panel-body ">
                                    [[content]]
                                </div>
                            </div>
                        </div>', null, 0);?>
        <?php echo $_smarty_tpl->tpl_vars['CI']->value->theme->getDashboardWidgetType('small',"<div class='col-lg-4 text-center'>".((string)$_smarty_tpl->tpl_vars['template']->value)."</div>",0);?>
             
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <?php echo $_smarty_tpl->tpl_vars['CI']->value->theme->getDashboardWidgetType('large',"<div class='col-lg-12'>".((string)$_smarty_tpl->tpl_vars['template']->value)."</div>",0);?>
  
   
    </div>
    <div class="col-lg-4">
        <?php echo $_smarty_tpl->tpl_vars['CI']->value->theme->getDashboardWidgetType('medium',"<div class='col-lg-12'>".((string)$_smarty_tpl->tpl_vars['template']->value)."</div>",0);?>
                
    </div>
</div>
<div class="row">
     <?php echo $_smarty_tpl->tpl_vars['CI']->value->theme->getDashboardWidgetType('full',"<div class='col-lg-12'>".((string)$_smarty_tpl->tpl_vars['template']->value)."</div>",0);?>
 
</div>

  <!-- end wrapper -->
<div class="row">
    <?php echo run_hook('view.admin.home.after');?>
    
</div>
<?php }
}
?>