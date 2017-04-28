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

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa-user"></i>Send Sms</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="all-tab" data-toggle="tab" aria-expanded="false"> <i class="fa-list"></i>Outgoing Sms</a>
                        </li>
                      </ul>
                      </div>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">  
                      
                        <br />
                            <div class="row">
                        <?php echo form_open_multipart()?>
                        <div class="form-horizontal form-label-left col-md-10">
                      
                          <input type="hidden" class="form-control" name="sms_username" value="<?php echo $sms_details->sms_username?>" readonly>
                            
                          <input type="hidden" class="form-control" name="sms_password" value="<?php echo $sms_details->sms_password?>" readonly>
                         
                    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Sender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="sms_sender">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                       
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Recipients</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea type="text" class="form-control" name="myRecipients" rows="3"><?php echo $numbers?> </textarea>
                      
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Message</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea type="text" class="form-control" name="message" rows="5"></textarea>
                        </div>
                    </div>
                            <br/>      
                        <center>
                            <input type="submit" class="btn btn-success" value="send" name="send"/>
                        </center>
                    </div>  
                         <?php echo form_close() ?>
                            </div>
                          </div>
                               <div class="clearfix"></div>

                          <!-- View Customer -->
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="all-tab">
                     <br/>
                        <?php echo form_open()?>
					 <div>
                         <input type="hidden" class="form-control" name="sms_username" value="<?php echo $sms_details->sms_username?>" readonly>
                            
                          <input type="hidden" class="form-control" name="sms_password" value="<?php echo $sms_details->sms_password?>" readonly>
                         <input type="submit" class="form-control btn btn-success" name="check_balance" value="check balance">
                    </div>
                        <?php echo form_close()?>
                   
					<br/>
                    <br/>
                    <table id="datatable-responsive" class="datatable table table-striped table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                            <th>Sms Sender</th>
                            <th>Sms Body</th>
                            <th>Receiver </th>
                            <th>Date Sent</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($sentsms as $sms):?>
                            <tr>
                                <td><?php echo $sms->sentsms_sender?></td>
                                <td><?php echo $sms->sentsms_message?></td>
                                <td><?php echo $sms->sentsms_reciever?></td>
                                <td><?php echo $sms->sentsms_datetime?></td>
                               <td><?Php if($sms->sentsms_status == 1801)
                                    {
                                     echo '<span class="label label-success">sent </span>';
                                    }
                                    else{
                                       echo '<span class="label label-warning">Not sent </span>';
                                    }
                                    ?>
                                </td>
                                <td><a href="<?php echo site_url("sms/delete_sms/{$sms->sentsms_id}")?>" class="btn btn-danger fa fa-trash">Delete</a></td>
                            
                            
                            </tr>
                            <?php endforeach?>
                        </tbody>
                            </table>
                      </div>
                      </div>
                            
                    </div>
                          </div>
                      </div>
                    </div>
                </div>        