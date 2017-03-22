
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel1"></h4>
            </div>
<br/>

<div class="">                
<div class="form-horizontal form-label-left">
                       <?php echo form_open() ?>
                        <div class="form-horizontal form-label-left col-md-10">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Surname</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="staff_surname" value="<?php echo $staff->staff_surname ?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Other Names</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="staff_othername" value="<?php echo $staff->staff_othername ?> ">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_gender">
                                <option><?php echo $staff->staff_gender ?></option>
                                <option></option>
                                 <option>Male</option>
                                 <option>Female</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date Of Birth</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <input type="date" class="form-control" name="staff_dob" value="<?php echo $staff->staff_dob ?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '99999999999'" name="staff_phone_number" value="<?php echo $staff->staff_phone_number?>">
                          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="staff_email" value="<?php echo $staff->staff_email ?>">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">State Of Origin</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_state">
                                <option><?php echo $staff->staff_state ?></option>
                                 <option></option>
                                 <option></option>
                            </select>
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label> 
                         <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="staff_address"><?php echo $staff->staff_address ?></textarea>
                         </div>                        
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Highest Qualification</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" name="highest_qualification" value="<?php echo $staff->highest_qualification ?>">
                        <span class="glyphicon glyphicon-education form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>        
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Employment Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_employment_type">
                                 <option><?php echo $staff->staff_employment_type ?></option>
                                 <option></option>
                                <?php foreach ($employment_type as $type): ?>
                                <option value="<?php echo $type->staff_type_id ?>"> <?php echo $type->staff_type ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Staff Department</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_dept">
                                 <option><?php echo $staff->staff_dept ?></option>
                                 <option></option>
                                <?php foreach ($staff_dept as $dept):?>
                                <option value="<?php echo $dept->staff_dept_id?>"><?php echo $dept->getDeptName() ?></option>
                                <?php endforeach ; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Staff Level</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_level">
                                 <option><?php echo $staff->staff_level ?></option>
                                 <option></option>
                                <?php foreach ($staff_level as $level) :?>
                                <option value="<?php echo $level->staff_level_id ?>"> <?php echo $level->staff_level ?></option>
                                 <?php endforeach ; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Staff Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="staff_status">
                                 <option> <?php echo $staff->staff_status ?></option>
                                <?php foreach ($staff_status as $status):?>
                                <option value="<?php echo $status->staff_status_id?>"> <?php echo $status->staff_status ?> </option>
                                <?php endforeach ; ?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="file" class="form-control" name="staff_image" value="<?php echo $staff->staff_image ?>">
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
<?php $this->load->view('layout/footer')?>
</div>