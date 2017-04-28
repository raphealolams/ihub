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
                    <h2><i class="fa fa-search"></i> <span><?php echo $title2 ?></span></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                      
                        <br />
                        <?php echo form_open()?>
                                
                                 <table id="table-responsive" class="table table table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                            <th>Category</th>
                            <th></th>
                            <th></th>
 
                        </tr>
                      </thead>
                        <tbody>
                            <tr>
                               <td>
                                   <div class="form-group">

                                                <div class="col-lg-12">
                                                    <select name="select_type" class="form-control" value="">
                                            <option value="" class="form-control">Select</option>
                                            <option value="staff_birthday"<?php echo set_select( 'select_type','staff_birthday')?>>Staff Birthday</option>
                                            <option value="customer_birthday" <?php echo set_select( 'select_type', 'customer_birthday')?>>Customer Birthday</option>
                                            <option value="staff" <?php echo set_select( 'select_type' , 'staff')?>>All Staffs</option>
                                         <option value="customer" <?php echo set_select( 'select_type' , 'customer')?>>All Customers</option>
                                      <option value="pickup" <?php echo set_select( 'select_type' , 'pickup')?>>Pickup Customers</option>
                                                    </select>
                                                </div>
                                </div>
                                
                                
                                </td>
                                <td></td>
                                <td> <center>
                            <input type="submit" class="btn btn-success" value="Fetch" name="Fetch"/>
                        </center>
                                </td>
                            </tr>
                        </tbody>
                            </table> 
                         <?php echo form_close() ?>
                      
                          <?php echo form_open('sms')?>
                            <?php echo $table?>
                            <br/>
                        <?php echo form_open()?> 
                      
                            </div>
                          </div>
                               <div class="clearfix"></div>
                      </div>
                            
                    </div>
                          </div>     