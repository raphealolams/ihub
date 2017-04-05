
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
                    <h2><i class="fa fa-bars"></i>Manage</h2>
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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa-user"></i>Add New</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="all-tab" data-toggle="tab" aria-expanded="false"> <i class="fa-list"></i>All Customer</a>
                        </li>
                      </ul>
                      </div>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <!-- Add Form Begins -->
                           <br />
                            <div class="row">
                              <div class="form-horizontal form-label-left col-md-10">
                        <?php echo form_open_multipart('customer/save') ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Surname</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="surname" placeholder="Ajilore" required="required" value="">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Other Names</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="other_name" placeholder="Olamide">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" id="select2" name="gender">
                              <option>Male</option>
                              <option>Female</option>
                         </select>
                        </div>
                      </div>
                        
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date of Birth</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="dob">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State Of Origin</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control"  name="state">
                              <option>Male</option>
                         </select>
                        </div>
                      </div>
                        
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label> 
                         <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="address"></textarea>
                         </div>                        
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '99999999999'" name="phone_number">
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="email" class="form-control" name="email">
                            <span class="fa fa-email form-control-feedback right" aria-hidden="true">@</span>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="file" class="form-control" name="image">
                            <span class="fa fa-image form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Customer Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="customer_type">
                                <option>Select</option>
                                <?php foreach ($types as $type): ?>
                            <option value="<?php echo $type->customer_type_id ?>"> <?php echo $type->customer_type_name ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Customer Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="status">
                                <option>Select</option>
                                <?php foreach ($status as $stat): ?>
                            <option value="<?php echo $stat->customer_status_id ?>"> <?php echo $stat->customer_status_name ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                        <br/>
                        <center>
                          <input type="submit" class="btn btn-success" value="submit" name="submit">
                        </center>
                            </div>
                      <?php echo form_close() ?>
<!--                    </form>-->
                            <!-- Form Ends -->
                        </div>  
                            </div>
                            
                              <div class="clearfix"></div>

                          <!-- View Customer -->
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="all-tab">
                     
					  <p class="text-muted font-13 m-b-30">
                      View Registered Customers in a glance
                    </p>
					
                    <table id="datatable-responsive" class="datatable table table-striped table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                          <th>Surname</th>
                          <th>Gender</th>
                          <th>Phone Number</th>
                          <th>Address</th>
                          <th>Status</th>
                          <th>Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php foreach ($customers as $customer): ?>
                          <tr>
                          <td><strong><?php echo $customer->getName() ?></strong></td>
                          <td><?php echo $customer->gender ?></td>
                          <td><?php echo $customer->phone_number ?></td>
                          <td><?php echo $customer->address ?> </td>   
                          <td><?php echo $customer->getStatus() ?></td> 
                         <td><?php echo $customer->getType() ?></td>
                          <td><a href="<?php echo site_url("customer/view/{$customer->customer_id}")?>" class="btn btn-form-modal btn-primary fa fa-link" data-toggle="modal" data-target=".bs-example-modal-lg">View</a>
                              <a href="<?php echo site_url("customer/edit_customer/{$customer->customer_id}")?>" class="btn btn-form-modal btn-warning fa fa-pencil" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</a>
                              <a href="site_url('')" class="btn btn-danger fa fa-trash">Delete</a></td>
                          </tr>
                          <?php endforeach; ?>
                     </tbody>
                    </table>
                        </div>
                          
                          <!-- Ends Here -->
                      </div>
                    </div>

                  </div>
                </div>
              </div>
        </div>
