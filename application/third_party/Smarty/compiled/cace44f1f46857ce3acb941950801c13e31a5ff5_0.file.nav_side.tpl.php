<?php /* Smarty version 3.1.27, created on 2017-02-07 20:11:43
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\partials\nav_side.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21147589a1bef66db94_12729213%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cace44f1f46857ce3acb941950801c13e31a5ff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\partials\\nav_side.tpl',
      1 => 1486494697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21147589a1bef66db94_12729213',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a1bef724896_90841051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a1bef724896_90841051')) {
function content_589a1bef724896_90841051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21147589a1bef66db94_12729213';
?>
 <div id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
                <a class="user-link" href="">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url("assets/dashboard/img/user.gif");?>
")}">
                    <span class="label label-danger user-label">16</span>
                </a>

                <!--
                <div class="media-body">
                    <h5 class="media-heading">Archie</h5>
                    <ul class="list-unstyled user-info">
                        <li><a href="">Administrator</a></li>
                        <li>Last Access : <br>
                            <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small>
                        </li>
                    </ul>
                </div>
                -->
            </div>
        </div>
        <!-- #menu -->
        <ul id="menu" class="bg-blue dker">
            <li class="nav-header">Menu</li>
            <li class="nav-divider"></li>
            <li class="">
                <a href="<?php echo site_url();?>
">
                  <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                </a>
            </li>

                <!-- School Links -->
                 <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-building"></i>
                            <span class="link-title">School</span>
                            <span class="fa arrow"></span>
                          </a>
                     <ul class="collapse">
                         <li>
                          <a href="<?php echo site_url('school/arms');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Arms </a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('school/sessions');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Sessions </a>
                        </li>
                         <li>
                          <a href="<?php echo site_url('school/terms');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Terms </a>
                        </li>
                    </ul>
                </li>
                <!-- / School Links -->
                  <!-- STaff Links -->
                 <li class="">
                  <a href="javascript:;">
                    <i class="fa fa-users "></i>
                    <span class="link-title">Staffs</span>
                    <span class="fa arrow"></span>
                  </a>
                  <ul class="collapse">
                        <li>
                          <a href="<?php echo site_url('staffs/all');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Staffs </a>
                        </li>

                        <li>
                          <a href="<?php echo site_url('staffs/departments');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Department </a>
                        </li>
                    </ul>
                </li>
                  <!-- / Staff Links -->


                <!-- Class Links -->
                <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-male"></i>
                            <span class="link-title">Classes</span>
                            <span class="fa arrow"></span>
                          </a>
                     <ul class="collapse">
                        <li>
                          <a href="<?php echo site_url('classes');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Classes </a>
                        </li>

                    </ul>
                </li>
                <!-- /Class Links -->
              
                
                <!-- Students Links -->
                <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-male"></i>
                            <span class="link-title">Students</span>
                            <span class="fa arrow"></span>
                          </a>
                     <ul class="collapse">
                        <li>
                          <a href="<?php echo site_url('students/all');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Students </a>
                        </li>

                    </ul>
                </li>

                    <!-- Parents Links -->
                <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-male"></i>
                            <span class="link-title">Parents</span>
                            <span class="fa arrow"></span>
                          </a>
                     <ul class="collapse">
                        <li>
                          <a href="<?php echo site_url('parents/all');?>
">
                            <i class="fa fa-angle-right"></i>&nbsp; Parents </a>
                        </li>

                    </ul>
                </li>
                <!-- /Class Links -->
                <!-- Account Links -->
                <li class="">
                    <a href="javascript:;">
                      <i class="fa fa-users "></i>
                      <span class="link-title">Account</span>
                      <span class="fa arrow"></span>
                    </a>
                    <ul class="collapse">
                          <!-- Expenses Links -->
                        <li class="">
                          <a href="javascript:;">
                            <i class="fa fa-users "></i>
                            <span class="link-title">Expenses</span>
                            <span class="fa arrow"></span>
                          </a>
                            <ul class="collapse">
                              <li>
                                <a href="<?php echo site_url('expenses/manage_expenses');?>
">
                                  <i class="fa fa-angle-right"></i>&nbsp; Expenses </a>
                              </li>

                              <li>
                                <a href="<?php echo site_url('expenses/expense_types');?>
">
                                <i class="fa fa-angle-right"></i>&nbsp; Expenses Type</a>
                              </li>
                            </ul>
                          </li>
                          <!-- / Expenses Links -->
                          
                          <!-- Bank Links -->
                        <li class="">
                            <a href="javascript:;">
                              <i class="fa fa-users "></i>
                              <span class="link-title">Bank</span>
                              <span class="fa arrow"></span>
                            </a>
                            <ul class="collapse">
                              <li>
                                <a href="<?php echo site_url('account/manage_banks');?>
">
                                  <i class="fa fa-angle-right"></i>&nbsp; Bank details </a>
                              </li>
                            </ul>
                    </li>
                    <!-- / Bank Links -->
                    </ul>
               </li>
              <!-- /Account Links -->
            </ul>
            <!-- /#menu -->


      </div>
<?php }
}
?>