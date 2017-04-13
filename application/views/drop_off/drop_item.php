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
                                    <input type="submit" class="btn btn-success" value="select" name="select"/>
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
                       <?php $total = 0 ?>
                        <tbody>
                            
                            <?php 
                                foreach ($droped as $drop) :?>
                            <tr>
                                <td><?php echo $drop->getCatName() ?></td>
                                <td><?php echo $drop->getItemName() ?></td>
                                <td><?php echo $drop->price?></td>
                                <td><?php echo $drop->quantity?></td>
                                <td><?php echo $drop->total_price?></td>
                                <td><a href="<?php echo site_url("drop_off/delete_items/{$drop->drop_id}/{$customer_id}")?>" class="btn btn-warning fa fa-pencil">Remove</a></td>
                            </tr>
                            <?php $total += $drop->total_price ?>
                            <?php endforeach ; ?>
                             <tr>
                                <td colspan="4"></td>
                                
                                <td><strong><label>Total Price</label><input type="number" id="txt1" class="form-control" onkeyup="sum();"  value="<?php echo $total ?>" name="total"  readonly>  </strong> </td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td><strong><label>Pickup Date</label><input type="date" class="form-control" name="pick_date" value="<?php echo set_value('pick_date')?>" >  </strong> </td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td>
                            <strong> <label>Deposit</label> <input type="number" id="txt2" class="form-control"  onkeyup="sum();" name="deposit" > </strong> 
                                </td>
                            </tr>
                             <tr>
                                <td colspan="4"></td>
                                <td>
                                    <strong> <label>Balance</label> <input type="number" id="txt3" class="form-control" name="balance" readonly> </strong>
                                </td>
                            </tr>
                             <tr>
                                <td colspan="5"></td>
                                <td>
                                        <input type="submit" class="btn btn-success pull-center" value="save" name="save" >
                                </td>
                            </tr>
                        </tbody>
                      </table>
                      <?php echo form_close()?>
                      
                    </div>
                </div>
              </div>
    </div>
</div>
<script>

    function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
    
      if(!txtSecondNumberValue || txtSecondNumberValue < 0){
          txtSecondNumberValue = 0;
          document.getElementById('txt3').value = 0;
      }
        // if amount entered is higher than the charged, then correct it
        if(txtSecondNumberValue > txtFirstNumberValue){
            txtSecondNumberValue = txtFirstNumberValue;
        }
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (isNaN(result)) {
          result = txtFirstNumberValue;
      }
        document.getElementById('txt3').value = result;
}

</script>