
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Payroll Type Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="payroll_type_name" placeholder="Lateness" required="required" value="<?php echo $payroll_type->payroll_type_name?>">
                        </div>
                      </div>
                    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Payroll Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                         <select name="payroll_type_status" class="form-control">
                                <option value="<?php echo $payroll_type->payroll_type_status?>"><?php if($payroll_type->isAddition())
                                {
                                   echo 'Addition';
                                }
                                else{
                                    echo 'Deduction';
                                }
                              ?></option>
                                <option value="2">Addition</option>
                                <option value="1">Deduction</option>
                            </select>
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Payroll Type Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="payroll_type_descr" placeholder="write a short description" required="required"><?php echo $payroll_type->payroll_type_descr?></textarea>
                        </div>
                      </div>
                      
                        <br/>
                        <center>
                          <input type="submit" class="btn btn-success" value="submit" name="submit">
                        </center>
                            </div>
                            </div>
                         <?php echo form_close() ?>
        </div>
    
    </div>
    <?php $this->load->view('layout/footer')?>
</div>

