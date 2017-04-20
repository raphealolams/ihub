<div class="right_col" role="main">

    <div  class="alert alert-success alert-dismissable"> <?php echo $message ?></div>


          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $title ?></h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
    
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-list"></i> <span><?php echo $title2 ?></span></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                            <br />
                            <div class="row">
                        <?php echo form_open() ?>
                        <div class="form-horizontal form-label-left col-md-10">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">User Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="user_name" value="<?php echo $user->user_name?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            <?php echo form_error('user_priveledge')?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Passowrd</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="user_password" placeholder="Sesan">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"> </span>                                          <?php echo form_error('user_priveledge')?>
                        </div>
                      </div>
                    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Confirm Passowrd</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="user_password_confirm">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        <?php echo form_error('user_priveledge')?>
                        </div>
                    </div>
                  
                            <br/>      
                        <center>
                            <input type="submit" class="btn btn-success" value="submit" name="submit"/>
                        </center>
                    </div>  
                         <?php echo form_close() ?>
                            </div>
                          </div>
          
                          </div>
                      </div>
                    </div>
                </div>        