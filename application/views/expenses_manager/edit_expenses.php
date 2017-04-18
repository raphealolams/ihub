
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel1"></h4>
            </div>
<br/>
<div class="right_col" role="main">
    <div class="">
    
             <div class="row">
                 
                        <?php echo form_open() ?>
                        <div class="form-horizontal form-label-left col-md-10">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Reason</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea type="text" class="form-control" name="expenses_reason"><?php echo $expenses->expenses_reason?></textarea>
                        </div>
                      </div>
                    
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="expenses_amount" value="<?php echo $expenses->expenses_amount?>">
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Date</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="expenses_date" value="<?php echo $expenses->expenses_date?>">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" name="expenses_type">
                               <option value="<?php echo $expenses->expenses_type_id?>"><?php echo $expenses->getExpenseType()?></option>
                              <?php foreach ($expenses_type as $type):?>
                                <option value="<?php echo $type->expenses_type_id?>"><?php echo $type->expenses_type_name?> </option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                        
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Collected By</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" name="collected_by">
                               <option value="<?php echo $expenses->collected_by?>"><?php echo $expenses->getStaffName()?></option>
                              <?php foreach ($staffs as $staff):?>
                                <option value="<?php echo $staff->staff_id?>"><?php echo $staff->getName()?> </option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" name="expenses_status">
                               <option value="<?php echo $expenses->expenses_status?>"><?php echo $expenses->expenses_status?></option>
                              <option></option>
                          </select>
                        </div>
                      </div>
                        
                      
                        <br/>
                        <center>
                          <input type="submit" class="btn btn-success" value="submit" name="submit">
                        </center>
                            </div>
                         <?php echo form_close() ?>
        </div>
    
    </div>
    <?php $this->load->view('layout/footer')?>
</div>

