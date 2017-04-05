
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
        <img src="" class="img-rounded img-responsive" alt="Customer Photo" width="304" height="236"> 
        </center> 
        <table class="table table-responsive table-hover">
            <tbody>
                <tr>
                    <th>Surname</th>
                    <td><?php echo $customer->surname ?></td>
                </tr>
                
                <tr>                   
                    <th>Other Name</th>
                    <td><?php echo $customer->other_name ?></td>
                </tr>
                
                <tr>
                    <th>Gender</th>
                    <td><?php echo $customer->gender ?></td>
                </tr>
                
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $customer->dob ?></td>
                </tr>
                
                <tr>
                    <th>State Of Origin</th>
                    <td><?php echo $customer->state ?></td>
                </tr>
                
                <tr>
                    <th>Address</th>
                    <td><?php echo $customer->address ?></td>
                </tr>
                
                <tr>
                    <th>Phone Number</th>
                    <td><?php echo $customer->phone_number ?></td>
                </tr>
                
                <tr>
                    <th>Email</th>
                    <td><?php echo $customer->email ?></td>
                </tr>
                
                <tr>
                    <th>Customer Type</th>
                    <td><?php echo $customer->getType() ?> </td>
                </tr>
                
                <tr>
                    <th>Status</th>
                    <td><?php echo $customer->getStatus() ?></td>
                </tr>
            
            </tbody>
        
        </table>
    
    
    <?php $this->load->view('layout/footer')?>
    </div>
        </div>
</div>
