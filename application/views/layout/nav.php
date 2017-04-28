
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $set_up->setup_name?>!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo $users->getPhotoUrl()?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $users->user_name?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('welcome')?>"><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="<?php echo site_url('customer')?>"><i class="fa fa-users"></i>Manage Customer <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="<?php echo site_url('staff')?>"><i class="fa fa-users"></i>Manage Staff <span class="fa fa-chevron"></span></a>
                  </li>
                <li><a href="<?php echo site_url('expenses_manager/expenses')?>"><i class="fa fa-money"></i>Expense Manager <span class="fa fa-chevron"></span></a> </li>
                 <li><a><i class="fa fa-money"></i>Payroll <span class="fa fa-chevron-down"></span></a>                                                <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("payroll/manage")?>">Generate Payroll</a></li>
                          <li><a href="<?php echo site_url("payroll/bill")?>">Generate Payroll Bill</a></li>
                          </ul>
                       </li>
                
                 <li><a><i class="fa fa-mobile"></i>Sms <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("sms")?>">Quick Sms</a></li>
                          <li><a href="<?php echo site_url("sms/select")?>">Select Sms</a></li>
                          </ul>        
                </li>
                    
                 <li><a><i class="fa fa-book"></i>Reporting<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("report")?>">Profit and Loss</a></li>
                          </ul>        
                </li>
                <li><a href="<?php echo site_url('user/all')?>"><i class="fa fa-users"></i>Users <span class="fa fa-chevron"></span></a>
                  </li>
            <li><a href="<?php echo site_url('setup')?>"><i class="fa fa-laptop"></i>Setup <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a><i class="fa fa-wrench"></i>Configuration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                            <!--Customer Configuration-->
                      <li><a><i class="fa fa-users"></i>Customer Configuration<span class="fa fa-chevron-down"></span></a>                                         <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("customer/manage_type")?>">Add Customer Type</a></li>
                          <li><a href="<?php echo site_url("customer/manage_status")?>">Add Customer status</a></li>
                          </ul>
                       </li>
                        
                       <!--Staff Configuration-->
                         <li><a><i class="fa fa-users"></i>Staff Configuration<span class="fa fa-chevron-down"></span></a>                                         <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("staff/manage_type")?>">Add Staff Type</a></li>
                          <li><a href="<?php echo site_url("staff/manage_status")?>">Add Staff status</a></li>
                          <li><a href="<?php echo site_url("staff/manage_level")?>">Add Staff Level</a></li>
                          </ul>
                       </li>
                        
                          <!--Dropoff Configuration-->
                         <li><a><i class="fa fa-book"></i>Drop Off <span class="fa fa-chevron-down"></span></a>                               <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("customer/manage_type")?>">Add Items</a></li>                                         <li><a href="<?php echo site_url("customer/manage_type")?>">Add Category</a></li>
                        </ul>
                       </li>
                        
                          <!--Expenses Configuration-->
                         <li><a><i class="fa fa-money"></i>Expenses <span class="fa fa-chevron-down"></span></a>                               <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("expenses_manager")?>">Add Expenses Type</a></li>
                        </ul>
                       </li>
                        
                          <!--Payroll Configuration-->
                         <li><a><i class="fa fa-money"></i>Payroll <span class="fa fa-chevron-down"></span></a>                               <ul class="nav child_menu">
                          <li><a href="<?php echo site_url("payroll")?>">Add Payroll Type</a></li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
              </div>
             
               

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Profile" href="<?php echo site_url('user/profile')?>">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="<?php echo site_url('setup')?>">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('user/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $users->getPhotoUrl()?>" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo site_url('user/profile')?>"> Profile</a></li>
                    <li>
                      <a href="<?php echo site_url('setup')?>">
                        <span class="badge bg-red">Settings</span>
                        <span></span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('user/logout')?>"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->