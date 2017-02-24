
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Item
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-pie-chart"></i> Drop Off</a></li>
        <li class="active">Add Item </li>
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
                  <th>Item Category</th>
                  <th>Item Name</th>
                  <th>Unit Price</th>
                  <th>Notes</th>
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
              <h4 class="modal-title">Edit Item Details </h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
           </div>
           <div class="box-body">
             <div class="form-group ">
                <label>Item Category:</label>
                  <input type="text" name="cat" class="form-control" value="">
              </div>
              <br/>

                <div class="form-group ">
                   <label>Item Name:</label>
                     <input type="text" name="item_name" class="form-control" placeholder="Mens Shirt">
                 </div>
                 <br/>

              <div class="form-group">
                  <label>Price:</label>
                  <input type="text" name="price" class="form-control" value="">
              </div>
              <br/>

          <div class="form-group">
             <label>Comments</label>
               <textarea class="form-control"name="comment" rows="3" value=""></textarea>
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
             <div class="form-group ">
                <label>Item Category:</label>
                  <input type="text" name="cat" class="form-control" placeholder="Mens Suit">
              </div>
              <br/>

                <div class="form-group ">
                   <label>Item Name:</label>
                     <input type="text" name="item_name" class="form-control" placeholder="Mens Shirt">
                 </div>
                 <br/>

              <div class="form-group">
                  <label>Price:</label>
                  <input type="text" name="price" class="form-control" placeholder="250">
              </div>
              <br/>

          <div class="form-group">
             <label>Comments</label>
               <textarea class="form-control" name="comment" rows="3" placeholder="Enter ..."></textarea>
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

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
