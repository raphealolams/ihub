<?php $CI = get_instance() ?>
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
                          <th>Staff Name</th>
                          <th></th>
                          <th>Month</th>
                          <th></th>
                          <th>Year</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                            <?php echo form_open()?>
                            <tr>
                            <td>
                    
                        <div class="form-group">
                              <select class="form-control" name="staff_id">
                               <option value="">Select</option>
                              <?php foreach ($staffs as $staff):?>
                                <option value="<?php echo $staff->staff_id?>">
                                    <?php echo $staff->getName()?>
                                </option>
                              <?php endforeach?>
                          </select>
                        </div>
                           
                            </td>
                                
                                <td></td>
                        <td>
                        <div class="form-group">
                              <select class="form-control" name="payroll_others_year">
                               <option value="">Select</option>
                              <?php foreach ($months as $index=>$value):?>
                                <option value="<?php echo $index ?> <?php echo set_value('payroll_others_month')?>">
                                <?php echo $value?>      
                            </option>
                              <?php endforeach?>
                          </select>
                        </div>
                        </td>
                          
                        <td></td>
                                
                        <td>
                            <div class="form-group">
                                 <select class="form-control" name="payroll_others_month">
                               <option value="">Select</option>
                              <?php foreach ($years as $y):?>
                                <option value="<?php echo $y?>"> 
                                <?php echo $y?>     
                                </option>
                              <?php endforeach?>
                          </select>
                            </div>
                        </td>
                                
                        <td>
                        <div class="form-group">
                          <input type="submit" class="btn btn-success" name="search" value="search">
                          <input type="submit" class="btn btn-success" name="view" value="Print">
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
                    <?php echo form_open()?>               
                 <table id="tahle-responsive" class="datatable table table-striped table-hover  dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                             <th>Payroll Name</th>
                             <th>Payroll Type</th>
                             <th>Status</th>
                             <th>Amount</th>
                             
                        </tr>
                      </thead>
                     
                      <tbody>
                          <?php foreach ($payroll_types as $payroll_type):?>
                
                        <?php 
                          ($payroll_other = $CI->payroll_others->getOne(' ' , [
                            'staff_id' =>  $staff_id ,
                            'Payroll_others_month' => $month,
                            'Payroll_others_year' => $year,
                            'Payroll_type_id' =>  $payroll_type->payroll_type_id
                ])) ?>
                      
                     <input type="hidden" name="items[]" value="<?php echo $payroll_type->payroll_type_id?>">
                         
                    <tr>
                        <td><?php echo ucwords($payroll_type->payroll_type_name)?></td>  
                        <td><?php if ($payroll_type->isAddition())
                                {
                                echo "Addition"; 
                                }
                                    else{
                                        echo "Deduction";
                                } 
                            ?>
                            </td>
                        <td>
                          <div class="checkbox">
                            <input type="checkbox" name="items[]" value="<?php echo $payroll_type->payroll_type_id?>">
                        </div>
                        
                        </td>
                        <td><input type="text" class="form-control"  value="<?php echo $payroll_other->payroll_others_amount?>"
                        name="amounts <?php echo $payroll_type->payroll_type_id ?>"
                        id="amount"></td>
                          
                    </tr>
                          <?php endforeach ?>
                     </tbody>
                        
                    </table>
                      <?php echo form_close()?>
                      <?php if (count($payroll_types)) :?>
                        <input type="submit" name="generate" class="btn btn-success " value="generate" />  
                        <?php endif ?>
                </div>
                </div>
                 </div>
                            
                              <div class="clearfix"></div>
                          
                          <!-- Ends Here -->
                      </div>
                    </div>