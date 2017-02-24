
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Customer
        <small> Record</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">Manage Customer </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div>
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#all">All</a></li>
                  <li><a data-toggle="tab" href="#add">Add New</a></li>
              </ul>
            </div>
            <div class="box-body">
            <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Telphone</th>
                  <th>Gender</th>
                  <th>Drop Date</th>
                  <th>Pick Up Date</th>
                  <th>Address </th>
                  <th>Customer Type</th>
                  <th>Initial Payment</th>
                  <th>Balance</th>
                  <th>Available</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn-form-modal btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mymodal"></a>
                    <a href= "" class="btn-form btn btn-danger glyphicon glyphicon-trash"></a></td>
                </tr>
              </table>
            </div>

            <div id="mymodal" class="modal fade" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Edit Drop Off </h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
           </div>
           <div class="box-body">
                    <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />

              </form>
              </div>
            </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

          <div id="add" class="tab-pane fade">
            <form method="POST" action="">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>

             <table class="table table-responsive table-borderd table-condensed">
                <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Item Category</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th> Discount </th>
                    <th>Total Price</th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-group">
                        <label></label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Select</option>
                          </select>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label></label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Select</option>
                          </select>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label></label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Select</option>
                          </select>
                    </div>
                  </td>
                  <td>
                    <div class="form-group" >
                        <label></label>
                        <input type="number" name="quantity" class="form-control" style="width:100%;">
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label></label>
                        <input type="text" name="price" class="form-control" style="width:100%;">
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label></label>
                        <input type="number" name="discount" class="form-control" style="width:100%;">
                    </div>
                  </td>
                  <td>
                    <div class="form-group" >
                        <label></label>
                        <input type="text" name="total_price" class="form-control"  disabled="disabled" style="width:100%;">
                    </div>
                  </td>
                </tr>
              </tbody>
           </table>
           <!--/. End of Table 1 -->

           <table class="table table-responsive table-borderd table-condensed">
              <thead>
                <tr>
                  <th>Deposit</th>
                  <th>Balance</th>
                  <th>Comment</th>
                  <th>Status</th>
                  <th>Drop Date</th>
                  <th>Pick Date</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-group">
                    <div class="form-group">
                      <label></label>
                      <input type="text" name="deposit" class="form-control" style="width:100%;">
                    </div>
                </td>
                <td>
                  <div class="form-group">
                    <label></label>
                    <input type="text" name="balance" class="form-control"  disabled="disabled" style="width:100%;">
                  </div>
                </td>
                <td>
                  <div class="form-group">
                     <label></label>
                       <textarea class="form-control" name="comment" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                      <label></label>
                        <select name="status" class="form-control select2" style="width: 100%;">
                          <option selected="selected">Select</option>
                          <option>Avaliable</option>
                          <option>Picked</option>
                        </select>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                      <label></label>
                      <input type="date" name="drop_date" class="form-control" style="width:100%;">
                  </div>
                </td>
                <td>
                  <div class="form-group">
                      <label></label>
                      <input type="date" name="pick_date" class="form-control" style="width:100%;">
                  </div>
                </td>
              </tr>
            </tbody>
         </table>
              <div>
                <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
              </div>
                <br/>
           <!--/. End of Table -->
         </form>
         <!---/. End of Form -->

         <table id="" class="table table-bordered table-striped">
           <thead>
           <tr>
             <th>Surname</th>
             <th>Other Names</th>
             <th>Gender</th>
             <th>Telephone</th>
             <th>Email</th>
             <th>Address</th>
             <th>Status</th>
             <th>Action</th>
           </tr>
           </thead>
           <tbody>
           <tr>
             <td>Ajilore</td>
             <td>Raphael Olamide</td>
             <td>Male</td>
             <td>08062265208</td>
             <td>raphealolams@yahoo.com</td>
             <td>7, Martins Street, Mile 12</td>
             <td>Active</td>
             <td><a class="btn-form-modal btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mymodal"></a>
               <a href= "" class="btn-form btn btn-danger glyphicon glyphicon-trash"></a></td>
           </tr>
         </table>
       </div>
       <!--/. End of view Add item -->
       </div>
       <!--/. End of Box-info -->
          </div>
          <!--/ Tab content -->
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
