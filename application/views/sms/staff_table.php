<table id="table-responsive" class="table table-striped table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <br><a>
                <div class="icons">
                    <center> <strong style="padding-left: 8px;"> Results Generated For Category Name</strong> </center>
                </div>
            </a>
    <br/>
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Staff Name</th>
                            <th>Staff Phone Number </th>
                        </tr>
                      </thead>
                        <tbody>
                            <?php foreach ($staffs as $staff):?>
                            <tr>
                                <td><input type="checkbox" name="numbers[]" value="<?php echo $staff->staff_phone_number?>"  checked="" /></td>
                                <td><?php echo $staff->getName()?></td>
                                <td><?php echo $staff->staff_phone_number?></td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                            </table>
                          <div>  <center > <input type="submit" class="btn btn-info btn-block" name="submit"
                                        value="Send Sms To Selected Rows" >  </center></div>