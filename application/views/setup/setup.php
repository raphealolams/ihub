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
                        <?php echo form_open_multipart()?>
                        <div class="form-horizontal form-label-left col-md-10">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Company Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="setup_name">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control"  data-inputmask="'mask' : '99999999999'" name="setup_phonenumber">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Company Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea type="text" class="form-control" name="setup_address"></textarea>
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"> </span>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sms Username</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="sms_username" value="raphealolams@yahoo.com">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sms Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" class="form-control" name="sms_password" value="ajilore">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" name="setup_image">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                            <br/>      
                        <center>
                            <input type="submit" class="btn btn-success" value="submit" name="submit"/>
                        </center>
                    </div>  
                            </div>
                          </div>
          
                          </div>
                      </div>
                    </div>
                </div>        