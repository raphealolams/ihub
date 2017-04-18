
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
                    <h2><i class="fa fa-bars"></i></h2>
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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa-user"></i> All Expenses</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="all-tab" data-toggle="tab" aria-expanded="false"> <i class="fa-list"></i>Add New</a>
                        </li>
                      </ul>
                      </div>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <!-- Add Form Begins -->
                           <br />
                             
                    <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Search Area</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <br/>
                                
                           <table id="table-responsive" class="datatable table table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                          <th>Search From</th>
                          <th></th>
                          <th>Search To</th>
                          <th></th>
                          <th>Expense Type</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                            <?php echo form_open()?>
                            <tr>
                            <td>
                    
                        <div class="form-group">
                          <input type="date" class="form-control" name="date_from" value="<?php echo set_value("date_from")?>">
                        </div>
                           
                            </td>
                                
                                <td></td>
                        <td>
                        <div class="form-group">
                          <input type="date" class="form-control" name="date_to" value="<?php echo set_value("date_to")?>">
                        </div>     
                        </td>
                          
                        <td></td>
                                
                        <td>
                            <div class="form-group">
                                 <select class="form-control" name="expenses_type">
                               <option value="">Select</option>
                              <?php foreach ($expenses_type as $type):?>
                                <option value="<?php echo $type->expenses_type_id?>"><?php echo $type->expenses_type_name?> </option>
                              <?php endforeach?>
                          </select>
                            </div>
                        </td>
                                
                        <td>
                        <div class="form-group">
                          <input type="submit" class="btn btn-success" name="search" value="search">
                        </div>     
                        </td>
                          
                          </tr>
                          <?php echo form_close()?>
                     </tbody>
                    </table>
                </div>
                </div>
                            <br/>
                            <br/>
                            
                    <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Search Result Area</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <br/>
                                
                           <table id="datatable-responsive" class="datatable table table-striped table-hover  dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                          <th>Expenses Reason</th>
                          <th>Expenses Amount</th>
                          <th>Expenses Date</th>
                          <th>Expenses Type</th>
                          <th>Collected by</th>
                          <th>Expenses Status</th>
                          <th>Action</th>
                             
                        </tr>
                      </thead>

                      <tbody>
                          <?php $total = 0 ?>
                          <?php foreach ($expenses as $expense):?>
                            <tr>
                        <td><?php echo $expense->expenses_reason?></td>
                          
                        <td><?php echo $expense->expenses_amount?></td>
                                
                        <td><?php echo $expense->expenses_date?></td>
                          
                        <td><?php echo $expense->getExpenseType()?></td>
                                
                        <td><?php echo $expense->getStaffName()?></td>
                                
                        <td><?php echo $expense->expenses_status?></td>
                                
                        <td>  <a href="<?php echo site_url("expenses_manager/edit_expenses/{$expense->expenses_id}")?>" class="btn btn-form-modal btn-warning fa fa-pencil" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</a>
                         <a href="<?php echo site_url("expenses_manager/delete_expenses/{$expense->expenses_id}")?>" class="btn btn-danger fa fa-trash">Delete</a></td>
                          
                          </tr>
                          <?php $total = $total + $expense->expenses_amount?>
                          <?php endforeach?>
                    
                     </tbody>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Total</strong></td>
                  <td class="bg-danger"><strong><?php echo $total?></strong></td>
                </tr>
                    </table>
                </div>
                </div>
                 </div>
                            
                              <div class="clearfix"></div>

                          <!-- View Customer -->
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="all-tab">
                            <br/>
                              <div class="row">
                              <div class="form-horizontal form-label-left col-md-10">
                        <?php echo form_open() ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Reason</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea type="text" class="form-control" name="expenses_reason"><?php echo set_value('expenses_reason')?></textarea>
                        </div>
                      </div>
                    
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="expenses_amount"><?php echo set_value('expenses_amount')?>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Date</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control" name="expenses_date"><?php echo set_value('expenses_date')?>
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select class="form-control" name="expenses_type">
                               <option value="">Select</option>
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
                               <option value="">Select</option>
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
                               <option value="">Select</option>
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
                          
                          <!-- Ends Here -->
                      </div>
                    </div>

                  </div>
                </div>
              </div>
        </div>