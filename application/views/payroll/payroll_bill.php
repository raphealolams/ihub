
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
                              <select class="form-control" name="month">
                               <option value="">Select</option>
                              <?php foreach ($months as $index=>$value):?>
                                <option value="<?php echo $index ?>">
                                <?php echo $value?>      
                            </option>
                              <?php endforeach?>
                          </select>
                        </div>
                        </td>
                          
                        <td></td>
                                
                        <td>
                            <div class="form-group">
                               <input type="text" class="form-control" value="<?php echo $year?>" name="year">
                            </div>
                        </td>
                                
                        <td>
                        <div class="form-group">
                          <input type="submit" class="btn btn-success" name="Search" value="Search">
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
                                
                           <table id="tahle-responsive" class="datatable table table-striped table-hover  dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                    <div class="panel panel-info">
                    <div class="panel-body text-center"><strong>Staff Payroll Bill for the Month of <?php echo $month?> </strong></div>
                </div>
                        <tr>
                                <th>Name</th>
                                <th>Addition</th>
                                <th>Deduction</th>
                                <th>Total Payables</th>
                                <th>Action</th>
                             
                        </tr>
                      </thead>

                      <tbody>
                <?php 
                $total_addition = 0;
                $total_deduction= 0;
                $total_payable = 0;
                ?>
                <?php foreach ($staffs as $staff) :?>
                <?php $additions = $staff->getParollAdditionAmount($month, $year)?>
                <?php $deductions = $staff->getParollDeductionAmount($month, $year)?>
                <?php $payable = $additions - $deductions?>

                 <?php $total_addition = $total_addition + $additions ?>
                 <?php $total_deduction = $total_deduction + $deductions ?>
                 <?php $total_payable = $payable + $total_payable ?>
                          
                          
                    <tr>
                    <td><?php echo ucwords($staff->getName())?></td>
                    <td><?php echo number_format($additions , 2 , '.' , ',')?></td>
                    <td><?php echo number_format($deductions , 2 , '.' , ',')?></td>
                    <td><?php number_format($payable , 2 , '.' , ',') ?></td>
                    <td><a class="btn btn-primary fa fa-money"
                     href="<?php echo site_url("payroll/view_staff_payroll/{$staff->getId()}/{$month}/{$year}")?>"
                    >View</a></td>
           <?php endforeach?>
                </tr>
                          
                      <br/>
                    <br/>
                <tr>
                     
                    <th><strong>Total</strong></th>
                    <td><?php echo number_format($total_addition , 2 , '.' , ',')?></td>
                    <td><?php echo number_format($total_deduction , 2 , '.' , ',')?></td>
                    <td><?php echo number_format($total_payable , 2 , '.' , ',')?></td>

                </tr>
                          
                     </tbody>
                        
                    </table>
                      
                </div>
                </div>
                 </div>
                            
                              <div class="clearfix"></div>
                          
                          <!-- Ends Here -->
                      </div>
                    </div>