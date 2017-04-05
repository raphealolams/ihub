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
                    <h2><i class="fa fa-list"></i> <span>Select Customer</span></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                       <table id="responsive" class="datatable table table-striped dt-responsive nowrap" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php echo form_open()?>
                        <tbody>
                            <tr>
                                <td>
                                      <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select class="form-control" name="customer_id">
                                        <?php foreach($customers as $customer): ?>
                                        <option value="<?php echo $customer->customer_id?>"><?php echo $customer->getName()?></option>
                                            <?php endforeach ?>
                                    </select>
                                   </div>
                                </div> 
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-success" value="select" name="Select"/>
                                </td>
                            </tr>
                        
                        </tbody>
                        </table>
                      <?php echo form_close()?>
                      
                    </div>
                </div> 
                
                
    
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
                      
                       <table id="responsive" class="datatable table table-striped dt-responsive nowrap" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Category</th>
                                <th></th>
                                <th>Item Name</th>
                                <th></th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php echo form_open()?>
                        <tbody>
                            <tr>
                                <td></td>
                               <td> 
                                   <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select class="form-control" name="category_name">
                                         <?php foreach($categorys as $category):?>
                                        <option value="<?php echo $category->category_id ?>"><?php echo $category->category_name?></option>
                                          <?php endforeach ?>
                                    </select>
                                   </div>
                                </div> 
                            </td>
                                <td></td>
                            <td> 
                                <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select class="form-control" name="item_id">
                                        <?php foreach($items as $item):?>
                                        <option value="<?php echo $item->item_id?>"><?php echo $item->item_name .' '. $item->price?></option>
                                        <?php endforeach ?>
                                    </select>
                                          
                                   </div>
                                </div> 
                            </td>
                                <td></td>
                               <td>
                                    <div class="form-group">
                                      <div class="col-md-9 col-sm-9 col-xs-9">
                                          <input type="number" class="form-control" name="quantity" required="required">
                                   </div>
                                </div>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-success" value="Add" name="Add"/>
                                </td>
                            </tr>
                        
                        </tbody>
                        </table>
                      <?php echo form_close()?>
                      
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-list"></i> <span><?php echo $title3 ?></span></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                       <table id="responsive" class="datatable table table-bordered table-hover table-striped dt-responsive nowrap" cellspacing="0">
                                    <center></center>
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Item Name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php echo form_open()?>
                        <tbody>
                            <?php foreach ($droped as $drop) :?>
                            <tr>
                                <td><?php echo $drop->getCatName() ?></td>
                                <td><?php echo $drop->getItemName() ?></td>
                                <td><?php echo $drop->price?></td>
                                <td><?php echo $drop->quantity?></td>
                                <td><?php echo $drop->total_price. ' '.  $randomString?></td>
                                <td><a href="" class="btn btn-warning fa fa-pencil">Remove</a></td>
                            </tr>
                            <?php endforeach ; ?>
                        </tbody>
                        </table>
                      <?php echo form_close()?>
                      
                    </div>