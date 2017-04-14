
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
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="all-tab" data-toggle="tab" aria-expanded="false"> <i class="fa-list"></i>All Expenses</a>
                        </li>
                      </ul>
                      </div>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <!-- Add Form Begins -->
                           <br />
                            <div class="row">
                              <div class="form-horizontal form-label-left col-md-10">
                        <?php echo form_open() ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Expense Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="expenses_type_name" placeholder="Fuel" required="required" value="">
                          <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
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
                      
                    </p>
					
                    <table id="datatable-responsive" class="datatable table table-striped table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                          <th>Expenses Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php foreach ($expenses_type as $expenses): ?>
                          <tr>
                          <td><strong><?php echo $expenses->expenses_type_name ?></strong></td>

                          <td>
                              <a href="<?php echo site_url("expenses_manager/edit_expense/{$expenses->expenses_type_id}")?>" class="btn btn-form-modal btn-warning fa fa-pencil" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</a>
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
