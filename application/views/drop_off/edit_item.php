
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel1"></h4>
            </div>
<br/>

<div class="right_col" role="main">
    <div class="">
    
           <?php echo form_open() ?>
                        <div class="form-horizontal form-label-left col-md-10">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Category Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <select class="form-control" name="category_name">
                                <option value="<?php echo $item->category_name?>"> <?php echo $item->getCatName()?></option>
                                <?php foreach ($category as $cat): ?>
                            <option value="<?php echo $cat->category_id ?>"> <?php echo $cat->category_name ?></option>
                                <?php endforeach ;?>
                            </select>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Item Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="item_name" value="<?php echo $item->item_name?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Price</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="price" value="<?php echo $item->price?>">
                          <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                 
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Comment</label> 
                         <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" name="comment"><?php echo $item->comment?>"</textarea>
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