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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-users"></i><span>Add New Staff</span></a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="all-tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-list"></i><span>All Staffs</span></a>
                        </li>
                      </ul>
                      </div>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <br />
                            <div class="row">
                        <?php echo form_open('staff/add_staff') ?>
                        <div class="form-horizontal form-label-left col-md-10">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Surname</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="staff_surname" placeholder="Seyi">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Other Names</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="staff_othername" placeholder="Sesan">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_gender">
                                 <option>Male</option>
                                 <option>Female</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date Of Birth</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <input type="date" class="form-control" name="staff_dob">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '99999999999'" name="staff_phone_number">
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="staff_email">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State Of Origin</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_state">
                                 <option></option>
                                 <option></option>
                            </select>
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label> 
                         <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="staff_address"></textarea>
                         </div>                        
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Highest Qualification</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" name="highest_qualification">
                        <span class="glyphicon glyphicon-education form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>        
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Employment Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_employment_type">
                                <option>Select</option>
                                <?php foreach ($employment_type->result() as $type): ?>
                                 <option value="<?php echo $type->staff_type_id ?>"><?php echo $type->staff_type ?></option>
                                 <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Staff Department</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_dept">
                                <option>Select</option>
                                 <?php foreach ($staff_dept->result() as $dept): ?>
                                 <option value="<?php echo $dept->staff_dept_id ?>"><?php echo $dept->staff_dept ?></option>
                                 <?php endforeach ;?>   
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Staff Level</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_level">
                                 <option>Select</option>
                                <?php foreach ($staff_level->result() as $level):?>
                                <option value="<?php echo $level->staff_level_id ?>"> <?php echo $level->staff_level ?> </option>
                                 <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Staff Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_status">
                                 <option>Select</option>
                                 <?php foreach ($staff_status->result() as $status):?>
                                <option value="<?php echo $status->staff_status_id?>"> <?php echo $status->staff_status ?> </option>
                                <?php endforeach ; ?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="file" class="form-control" name="staff_image">
                        <span class="fa fa-photo form-control-feedback right" aria-hidden="true"></span>
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
                            
                              <!-- View Customer -->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="all-tab">
                     
					  <p class="text-muted font-13 m-b-30">
                      
                    </p>
					
                    <table id="datatable-responsive" class="datatable table table-striped table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Employment Type</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($staffs->result() as $staff): ?>
                            <tr>
                                <td><?php echo ucwords($staff->staff_surname),  "  ", ucwords($staff->staff_othername) ?></td>
                                <td><?php echo $staff->staff_gender ?></td>
                                <td><?php echo $staff->staff_phone_number ?></td>
                                <td><?php echo $staff->staff_address ?></td>
                                <td><?php echo $staff->staff_employment_type ?></td>
                                <td><?php echo $staff->staff_dept ?></td>
                                <td><a href="<?php echo site_url("staff/view/{$staff->staff_id}")?>" class="btn btn-info btn-form-modal fa fa-link" data-toggle="modal" data-target=".bs-example-modal-lg">View</a>
                                <a href="<?php echo site_url("staff/edit_staff/{$staff->staff_id}")?>" class="btn btn-warning btn-form-modal fa fa-pencil" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</a>
                                <a href="<?php echo site_url()?>" class="btn btn-danger fa fa-trash">Delete</a></td>
                            </tr>
                            <?php endforeach ;?>
                        </tbody>
                        </table>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
    </div>
                        