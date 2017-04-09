<div class="right_col" role="main">

    <div  class="alert alert-success alert-dismissable"> </div>


          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
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
                                     
                                        <option></option>
                                       
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