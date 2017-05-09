
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Inventory Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="inventory_name" value="<?php echo $inventory->inventory_name?>">
                          <span class="fa fa-book form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Inventory Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <select class="form-control" name="inventory_type">
                            <option value="<?php echo $inventory->inventory_type_id?>"><?php echo $inventory->getType()?></option>
                            <?php foreach($inventory_types as $inventory_type):?>
                            <option value="<?php echo $inventory_type->inventory_type_id?>"><?php echo $inventory_type->inventory_type_name?></option>
                            <?php endforeach?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Inventory Amount</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" class="form-control" name="inventory_amount" value="<?php echo $inventory->inventory_amount?>">
                          <span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
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
</div>