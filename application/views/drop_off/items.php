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
                    <h2><i class="fa fa-list"></i> <span><?php echo $title2 ?></span></h2>
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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"> <i class="fa fa-users"></i><span>Add New Items</span></a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="all-tab" data-toggle="tab" aria-expanded="false"> <i class="fa fa-list"></i><span>All Items</span></a>
                        </li>
                      </ul>
                      </div>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <br />
                            <div class="row">
                        <?php echo form_open('drop_off/add_items') ?>
                        <div class="form-horizontal form-label-left col-md-10">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Category Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="category_name">
                                <option>Select</option>
                                <?php foreach ($category as $cat): ?>
                            <option value="<?php echo $cat->category_id ?>"> <?php echo $cat->category_name ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Item Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="item_name" placeholder="Shrit">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Price</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="price" placeholder="1000">
                          <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                 
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Comment</label> 
                         <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="comment"></textarea>
                         </div>                        
                    </div>
                            <br/>      
                        <center>
                            <input type="submit" class="btn btn-success" value="submit" name="submit"/>
                        </center>
                    </div>  
                         <?php echo form_close() ?>
                            </div>
                          </div>
                            
                              <!-- View Customer -->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="all-tab">
                     
					  <p class="text-muted font-13 m-b-30">
                      
                    </p>
					
                    <table id="datatable-responsive" class="datatable table table-striped table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Item Name</th>
                                 <th>Price</th>
                                <th>Comment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($items as $itemss): ?>
                            <tr>
                                <td><strong><?php echo $itemss->getCatName() ?></strong></td>
                                <td><?php echo $itemss->item_name ?> </td>
                                <td><?php echo $itemss->price ?></td>
                                <td><?php echo $itemss->comment ?></td>
                                <td>
                                <a href="<?php echo site_url("drop_off/edit_items/{$itemss->item_id}")?>" class="btn btn-warning btn-form-modal fa fa-pencil" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</a>
                                <a href="<?php echo site_url()?>" class="btn btn-danger fa fa-trash">Delete</a></td>
                            </tr>
                            <?php endforeach ;?>
                        </tbody>
                        </table>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
    </div>
                        