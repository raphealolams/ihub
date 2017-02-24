

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Staff
        <small>Bank </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-share"></i> Staff</a></li>
        <li class="active">Bank Details</li>
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
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#all">All</a></li>
                  <li><a data-toggle="tab" href="#add">Add New Item</a></li>
              </ul>
            </div>
            <div class="box-body">
            <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Staff Name</th>
                  <th>Staff Account Name</th>
                  <th>Staff Account Number</th>
                  <th>Bank</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
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
              <h4 class="modal-title">Edit Staff Bank </h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
           </div>
           <div class="box-body">
             <form method="post" action="">
             <div class="form-group">
                 <label>Staff Name</label>
                   <select name="staff_name" class="form-control select2" style="width: 100%;">
                     <option selected="selected">Select</option>
                   </select>
             </div>

                <div class="form-group ">
                   <label>Staff Account Name:</label>
                     <input type="text" name="staff_acc_name" class="form-control" value="">
                 </div>
                 <br/>

              <div class="form-group">
                  <label>Staff Account Number:</label>
                  <input type="text" name="staff_acc_number" class="form-control" value="">
              </div>
              <br/>

          <div class="form-group">
            <label>Staff Bank:</label>
            <input type="text" name="staff_bank" class="form-control" value="">
          </div>
            <br/>
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
           <div class="box-body">
             <div class="box-body">
               <div class="form-group ">
                  <label>Staff Name:</label>
                  <select name="staff_name" class="form-control select2" style="width: 100%;">
                    <option selected="selected"></option>
                  </select>
                </div>
                <br/>

                  <div class="form-group ">
                     <label>Staff Account Name:</label>
                       <input type="text" name="staff_acc_name" class="form-control">
                   </div>
                   <br/>

                <div class="form-group">
                    <label>Staff Account Number:</label>
                    <input type="number" name="staff_acc_number" class="form-control">
                </div>
                <br/>

            <div class="form-group">
              <label>Staff Bank:</label>
              <input type="text" name="staff_bank" class="form-control" >
            </div>
              <br/>
                      <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />

              </form>
            </div>
            <!--- box body -->
          </div>
          <!--/ box box info -->
          </div>
            <!-- /. close of second tab -->
          </div>
          <!-- /.tab content -->
        </div>
        <!---/. box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!--/.col -->
    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
