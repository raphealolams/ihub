
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="myModalLabel1"></h4>
            </div>
<br/>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
    <div class="table">
        <center> 
        <img src="$staff->getPhotoUrl()" class="img-rounded img-responsive" alt="staff Photo" width="304" height="236"> 
        </center> 
        <table class="table table-responsive table-hover">
            <tbody>
                <tr>
                    <th>Surname</th>
                    <td><?php echo $staff->staff_surname ?></td>
                </tr>
                
                <tr>                   
                    <th>Other Name</th>
                    <td><?php echo $staff->staff_othername ?></td>
                </tr>
                
                <tr>
                    <th>Gender</th>
                    <td><?php echo $staff->staff_gender ?></td>
                </tr>
                
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $staff->staff_dob ?></td>
                </tr>
                
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo $staff->staff_phone_number ?></td>
                </tr>
                
                 <tr>
                    <th>Email</th>
                    <td><?php echo $staff->staff_gender ?></td>
                </tr>
                
                <tr>
                    <th>State Of Origin</th>
                    <td><?php echo $staff->staff_state ?></td>
                </tr>
                
                <tr>
                    <th>Address</th>
                    <td><?php echo $staff->staff_address ?></td>
                </tr>
                
                <tr>
                    <th>Highest Qualification</th>
                    <td><?php echo $staff->highest_qualification ?></td>
                </tr>
                
                <tr>
                    <th>Employment Type</th>
                    <td><?php echo $staff->getEmploy() ?> </td>
                </tr>
                
                <tr>
                    <th>Department</th>
                    <td><?php echo $staff->getDeptName() ?></td>
                </tr>
                
                <tr>
                    <th>Level</th>
                    <td><?php echo $staff->getLevel() ?></td>
                </tr>
                
                <tr>
                    <th>Status</th>
                    <td><?php echo $staff->getStatus() ?></td>
                </tr>
            
            </tbody>
        
        </table>
    
    
    <?php $this->load->view('layout/footer')?>
    </div>
        </div>
</div>
