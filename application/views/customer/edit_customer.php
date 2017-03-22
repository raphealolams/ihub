
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel1"></h4>
            </div>
<br/>

<div class="">                
<div class="form-horizontal form-label-left">
    <?php echo form_open() ?>
    <br/>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Surname</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="surname" value="<?php echo $customer->surname ?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Other Names</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" class="form-control" name="other_name" value="<?php echo $customer->other_name ?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" name="gender">
                              <option><?php echo $customer->gender ?></option>
                              <option></option>
                              <option>Male</option>
                              <option>Female</option>
                         </select>
                        </div>
                      </div>
                        
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date of Birth</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="dob" value="<?php echo $customer->dob ?>">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State Of Origin</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" id="select2" name="state">
                              <option><?php echo $customer->state ?></option>
                         </select>
                        </div>
                      </div>
                        
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label> 
                         <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="address"><?php echo $customer->address ?></textarea>
                         </div>                        
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '99999999999'" name="phone_number" value="<?php echo $customer->phone_number ?>">
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="email" class="form-control" name="email" value="<?php echo $customer->email ?>">
                            <span class="fa fa-email form-control-feedback right" aria-hidden="true">@</span>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="file" class="form-control" name="image" value="<?php echo $customer->image ?>">
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Customer Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="customer_type">
                            <option value="<?php echo $customer->customer_type ?>"></option>
                            <option> </option>
                                 <?php foreach ($types as $type): ?>
                            <option> <?php echo $type->customer_type_name ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Customer Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="status">
                            <option value="<?php echo $customer->status ?>"></option>
                                <option></option>
                                  <?php foreach ($status as $stat): ?>
                            <option> <?php echo $stat->customer_status_name ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                        <br/>
                        <center>
                          <input type="submit" class="btn btn-success" value="submit" name="submit">
                        </center>
            <?php echo form_close() ?>
    </div>
<?php $this->load->view('layout/footer')?>
</div>