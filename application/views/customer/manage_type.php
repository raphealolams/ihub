<?php
include '../header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Customer
        <small> Type</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">Manage Type </li>
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
            <div class="nav nav-tabs-custom">
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
                  <th>Customer Type Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    $sql = $pdo->prepare("SELECT * FROM customer_type");
                    $sql->execute();
                    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                      ?>
                  <td><?php echo $row['customer_type_name'];?></td>
                  <td><button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mymodal<?php echo $row['customer_type_id'];?>"></button>
                  <a class="delete btn btn-danger glyphicon glyphicon-trash" id="<?php echo $row['customer_type_id']; ?>" href="#" title="Delete"></a></td>
                </tr>

                <div id="mymodal<?php echo $row['customer_type_id'];?>" class="modal fade" role="dialog">

                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Edit Customer Type </h4>
                        </div>
                        <div class="modal-body">
                          <form action="edit_manage_type.php" method="POST">
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                         <div class="box-body">
                          <input type="hidden" name="id" value="<?php echo $row['customer_type_id'];?>">
                           <div class="form-group ">
                              <label>Customer Type Name:</label>
                                <input type="text" name="type" value="<?php echo $row['customer_type_name'];?>" class="form-control">
                            </div>
                                <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
                                </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      <?php } ?>
                            </form>
                  </div>
          </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
              </table>
            </div>

          <div id="add" class="tab-pane fade">
            <form method="POST" action="add_customer_type">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
           <div class="box-body">
             <div class="form-group ">
                <label>Customer Type Name:</label>
                  <input type="text" name="customer_type_name" class="form-control" placeholder="Regular">
              </div>


                  <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
               </div>
                </div>
              </form>
                </div>

          </div>
              <!--/ Tab content -->
</div>
        <!-- /.col -->
      </div>
    </div>
      <!-- /.row -->
    </div>
    </section>
    <!-- /.content -->
  <script src="../../dist/js/jquery.js"></script>
  <script type="text/javascript">
  $(function() {
  $(".delete").click(function(){
  var element = $(this);
  var del_id = element.attr("id");
  var info = 'id=' + del_id;
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
     type: "POST",
     url: "delete_customer_type.php",
     data: info,
     success: function(){
   }
  });
    $(this).parents(".show").animate({ backgroundColor: "#003" }, "slow")
    .animate({ opacity: "hide" }, "slow");
   }
  return false;
  });
  });
  </script>
  </div>
  <!-- /.content-wrapper -->
<?php
include '../footer.php';
?>
