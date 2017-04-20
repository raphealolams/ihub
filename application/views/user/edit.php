
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">User Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name="user_name" placeholder="someone" value="<?php echo $user_edit->user_name?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            <?php echo form_error('user_name')?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Passowrd</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" class="form-control" name="user_password" placeholder="Sesan">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"> </span>                                          <?php echo form_error('user_password')?>
                        </div>
                      </div>
                    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Confirm Passowrd</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="password" class="form-control" name="user_password_confirm">
                          <span class="fa fa-fa form-control-feedback right" aria-hidden="true"></span>
                        <?php echo form_error('user_password_confirm')?>
                        </div>
                    </div>
                  
                    
                    
                    <div class="form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Priveledge:</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <?php foreach ($priveledges as $priviledge):?>
                                    <div class="radio">
                                        <label>
                                         <input type="radio" name="user_priveledge" value="<?php echo $priviledge->priveledge_name?>">
                                        <?php echo $priviledge->priveledge_name .' '. $priviledge->priveledge_info?>
                                        </label>
                                    </div>
                                <?php endforeach?>
                                <?php echo form_error('user_priveledge')?>
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
    <?php $this->load->view('layout/footer')?>
</div>