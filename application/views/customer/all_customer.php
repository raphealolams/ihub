<?php
include '../header.php';
?>
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
                        <?php
                        $sql = $pdo->prepare("SELECT * FROM customer");
                        $sql->execute();
                        while($result = $sql->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                        <td><?php echo $result['surname'];?></td>
                        <td><?php echo $result['other_name'];?></td>
                        <td><?php echo $result['gender'];?></td>
                        <td><?php echo $result['phone_number'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['address'];?></td>
                        <td><?php echo $result['status'];?></td>
                        <td><button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mymodal<?php echo $result['customer_id'];?>"></button>
                        <td></td>
</td>
                        </tr>

                        <div id="mymodal<?php echo $result['customer_id'];?>" class="modal fade" role="dialog">
                       <form action="edit_customer.php" method="post" enctyp="multipart/form-data">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Edit Customer Details </h4>
                          </div>
                          <div class="modal-body">
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                         </div>
                         <div class="box-body">
                           <div class="form-group ">
                              <label>Surname Name:</label>
                                <input type="text" name="surname" class="form-control" value="<?php echo $result['surname'];?>">
                            </div>
                            <br/>

                            <div class="form-group">
                                <label>Other Name:</label>
                                <input type="text" name="other_name" class="form-control" value="<?php echo $result['other_name'];?>">
                            </div>
                            <br/>

                            <div class="form-group">
                              <label>Gender</label>
                              <select class="form-control select2" name="gender" style="width: 100%;">
                                <option value="<?php echo $result['gender'];?>"><?php echo $result['gender'];?></option>
                                <<option value=""></option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                            <br/>

                            <div class="form-group">
                              <label>Date Of Birth:</label>
                              <input type="date" name="dob" class="form-control" value="<?php echo $result['dob'];?>">
                            </div>
                            <br/>

                            <div class="form-group">
                              <label>State of Origin</label>
                              <select class="form-control select2" name="state" style="width: 100%;">
                                <option value="<?php echo $result['state'];?>"><?php echo $result['state'];?></option>
                                <?php foreach ($state as $key => $value):
                                  echo '<option value="'.$key.'">'.$value.'</option>'; //close your tags!!
                                  endforeach;
                                  ?>
                              </select>
                            </div>
                            <br/>
                        <div class="form-group">
                           <label>Address</label>
                             <textarea class="form-control" name="address" rows="3" value="<?php echo $result['address'];?>"></textarea>
                        </div>
                          <br/>
                          <div class="input-group">
                            <div class="input-group-addon">
                            <label>Phone</label><i class="glyphicon glyphicon-phone"></i>
                            </div>
                            <input type="text" class="form-control" name="phone_number" value="<?php echo $result['phone_number'];?>">
                          </div>
                          <br/>

                          <div class="input-group">
                            <div class="input-group-addon">
                            <i class="">Email @</i>
                            </div>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $result['email'];?>">
                          </div>
                          <br/>

                          <div class="form-group">
                               <label for="exampleInputFile">Picture</label>
                               <input type="file" name="image" id="exampleInputFile">
                          </div>
                          <br/>

                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2" name="status" style="width: 100%;">
                              <<option value="<?php echo $result['status'];?>"></option>
                              <option selected="selected">Select</option>
                            </select>
                          </div>
                          <br/>
                                  <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
                             </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                                   </form>
                              </div>
                        <!--- END OF MODAL -->
                       <?php } ?>
                     </tbody>

                 </table>
                </div>


          <div id="add" class="tab-pane fade">
            <form action="add_customer.php" method="post" enctype="multipart/form-data">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
           </div>
           <div class="box-body">
             <div class="form-group ">
                <label>Surname Name:</label>
                  <input type="text" name="surname" class="form-control" placeholder="Adeoye">
              </div>
              <br/>

              <div class="form-group">
                  <label>Other Name:</label>
                  <input type="text" name="other_name" class="form-control" placeholder="Raphael Olamide">
              </div>
              <br/>

              <div class="form-group">
                <label>Gender</label>
                <select class="form-control select2" name="gender" style="width: 100%;">
                  <option selected="selected">Select</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <br/>

              <div class="form-group">
                <label>Date Of Birth:</label>
                <input type="date" name="dob" class="form-control">
              </div>
              <br/>

              <div class="form-group">
                <label>State of Origin</label>
                <select class="form-control select2" name="state" style="width: 100%;">
                  <option selected="selected">Select</option>
                  <?php foreach ($state as $key):
                    echo '<option value="'.$key.'">'.$key.'</option>'; //close your tags!!
                    endforeach;
                    ?>
                </select>
              </div>
              <br/>
          <div class="form-group">
             <label>Address</label>
               <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."></textarea>
          </div>
            <br/>
            <div class="input-group">
              <div class="input-group-addon">
              <label>Phone</label><i class="glyphicon glyphicon-phone"></i>
              </div>
              <input type="text" class="form-control" name="phone_number" data-inputmask='"mask": "99999999999"' data-mask>
            </div>
            <br/>

            <div class="input-group">
              <div class="input-group-addon">
              <i class="">Email @</i>
              </div>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="someone@yahoo.com">
            </div>
            <br/>

            <div class="form-group">
                 <label for="exampleInputFile">Picture</label>
                 <input type="file" name="image" id="exampleInputFile">
            </div>
            <br/>

               <div class="form-group">
              <label>Customer Type</label>
              <select class="form-control select2" name="customer_type" style="width: 100%;">
                <option selected="selected">Select</option>
                <?php
                $sql = "SELECT customer_type_name FROM customer_type";
                $stmt = $pdo->prepare($sql);
                          $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($stmt->rowCount() > 0) { ?>
                    <?php foreach ($results as $row) { ?>
                      <option value="<?php echo $row['customer_type_name']; ?>"><?php echo $row['customer_type_name']; ?></option>
                    <?php } ?>
                <?php } ?>
              </select>
            </div>
            <br/>

            <div class="form-group">
              <label>Status</label>
              <select class="form-control select2" name="status" style="width: 100%;">
                <option selected="selected">Select</option>
                <option>New</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Passive</option>
              </select>
            </div>
            <br/>
                    <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
                  </div>
                </div>
              </form>
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
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<?php
      include '../footer.php';
?>
