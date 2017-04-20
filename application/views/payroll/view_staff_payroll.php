<div class="right_col" role="main">

          <div class="">
            

            <div class="clearfix"></div>

            <div class="">
    
                             
                    <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Staff Payslip</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
         <section class="invoice-box">
        
        <h1>LInk2Fix payslip for the month of <span class="all-caps-blue">June 2015</span></h1>
             <br>
 <div class="container-panel-nd">    
<ul class="list-group">
      <li class="list-group-item">Name: <span class="pull-right"><strong><?php echo $staff->getName()?></strong></span></li>
      <li class="list-group-item">Phone Number: <span class="pull-right"><strong><?php echo $staff->staff_phone_number?></strong></span></li>
  <li class="list-group-item"> Staff Level: <span class="pull-right"><strong><?php echo $staff->getLevel()?></strong></span></li>
  <li class="list-group-item"> Staff Employment Type: <span class="pull-right"><strong><?php echo $staff->getEmploy()?></strong></span></li>
  <li class="list-group-item">Pay period: <span class="pull-right"><strong><?php echo element($month ,$months) {$year}?></strong></span></li>
</ul>
</div>
             <br>
             <br>
  <div class="container-panel-md">
    <table class="table table-responsive">
         <thead>
        <tr>
          <th>Items</th>
          <th>Description</th>
          <th>Amount(N)</th>
          <th>Sub-total(N)</th>
        </tr>
      </thead>
        <tbody>
            <?php
            $additions = 0;
            $deductions = 0;
            ?>
            <tr>
          <td><strong>Additions </strong> </td>
          <td colspan="3"> </td>
        </tr>
            <?php foreach($items as $item):?>
            <?php if($item->getAmount() > 0  && $item->isAddition()){
                  $additions = $additions + $item->getAmount();
                }
               ?>
  
        <tr>
          <td><?php echo $item->getItemName()?></td>
          <td class="td-num"><?php echo $item->getItemDescription()?></td>
          <td class="td-num"><?php echo number_format($item->getAmount() , 2 , '.' , ',')?></td>
          <td></td>
        </tr>
            <?php endforeach ?>
        
          <tr>
          <td colspan="3"></td>
          <td class="raphael"><?php echo number_format($additions , 2 , '.' , ',')?></td>
        </tr>
            
            
         <tr>
          <td><strong>Deduction </strong> </td>
          <td colspan="3"> </td>
        </tr>
            <?php foreach ($items as $item):?>
            <?php if ($item->getAmount() > 0  && $item->isDeduction()){
                $deductions = $deductions + $item->getAmount();
            }
            ?>
                <tr>
                  <td><?php echo $item->getItemName()?></td>
                  <td class="td-num"><?php echo $item->getItemDescription()?></td>
                  <td class="td-num"><?php echo number_format($item->getAmount() , 2 , '.' , ',')?></td>
                  <td></td>
                </tr>
            <?php endforeach?>
         <tr>
          <td></td>
          <td></td>
          <td ></td>
          <td class="raphael"><?php echo number_format($deductions , 2 , '.' , ',')?></td>
        </tr>
      </tbody> 
        <tr>
        <td colspan="4"></td>
        </tr>
        <tr>
         <strong><td>Grand total</td></strong>
          <td></td>
          <td></td>
        <td class="ed"><?php echo number_format($additions - $deductions , 2 , '.' , ',')?></td>
        </tr>
      </table>

  </div>
        
        
        </section>
            
                      
                  </div>
                </div>
              </div>
    </div>
</div>

<style>

.container-panel-md{
  margin-left: auto;
  margin-right: auto;
  max-width: 600px;
  line-height: 24px;
  max-width:800px;
  margin:auto;
  padding:30px;
  box-shadow:0 0 10px rgba(0, 0, 0, .15); 
  border:1px solid #eee;
  font-size:16px;
  font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  color:#555;
}
    
.container-panel-nd{
  margin-left: auto;
  margin-right: auto;
  max-width: 600px;
  line-height: 15px;
 
}
.td-num{
  text-align: center;
}
.all-caps-blue{
  color: #5A8BC3;
  text-transform: uppercase;
}
     .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }

.table > tbody > tr > .raphael{
    border-top: 2px solid;
}

.table > tbody > tr > .ed{
  border-top: 2px solid;
  border-bottom: 2px solid;

}

.table > tbody > tr > .cd{
  border-top: none;

}
	.height{
		height: 100px;
		font-size: 50px;
		text-align: center;
	}
	.margin
	{
		margin-bottom: 40px;
	}

</style>