
<div class="right_col" role="main">

    <div  class="alert alert-success alert-dismissable"> <?php echo $message ?></div>


          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $title ?></h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
    
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-search"></i><?php echo $title2?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                            
                    <section class="invoice-box" id="hello">
          <h1><center>Profit And Loss Account For <span class="all-caps-black"><?php echo $month. ' ' .$year ?></span></center></h1>
             <br>

            <br>
             <br>
  <div class="container-panel-md">
    <table class="table table-responsive" id="print-content">
         <thead>
        <tr>
          <th></th>
          <th></th>
          <th><center>#</center></th>
          <th><center>#</center></th>
        </tr>
      </thead>
        <tbody>
            <?php
            $additions = 0;
            $deductions = 0;
            ?>
            <tr>
          <td><strong>Revenue </strong> </td>
          <td colspan="3"> </td>
        </tr>

  
        <tr>
          <td>Total Income</td>
          <td class="td-num"></td>
          <td class="td-num"><center><?php echo number_format($income , 2 , '.' , ',')?></center></td>
          <td></td>
        </tr>
            
        <tr>
          <td>Less:: Cost of Service</td>
          <td class="td-num"></td>
          <td class="td-num"><center><?php echo number_format($additions , 2 , '.' , ',')?></center></td>
          <td></td>
        </tr>
        
         <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>    
         <?php
           $profit = $income - $additions;
            ?>
         <tr>
          <td><b>Gross Profit</b></td>
          <td class="td-num"></td>
          <td class="td-num"></td>
         <td class="raphael"><?php echo number_format($profit , 2 , '.' , ',')?></td>
        </tr>

        
          <tr>
          <td colspan="4"></td>
          
        </tr>
            
            
         <tr>
          <td><strong>Less:: Adminstrative Expenses</strong> </td>
          <td colspan="3"> </td>
        </tr>
                <tr>
                  <td>Expenses</td>
                  <td class="td-num"></td>
                  <td class="td-num"><center><?php echo number_format($expenses , 2 , '.' , ',')?></center></td>
                  <td></td>
                </tr>
            
                <tr>
                  <td>Staff Payables</td>
                  <td class="td-num"></td>
                  <td class="td-num"><center><?php echo number_format($payables , 2 , '.' , ',')?></center></td>
                  <td></td>
                </tr>
        
          <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
         </tr>
            <?php
                $total_expenses = $expenses + $payables;
            ?>
         <tr>
          <td><b>Total Adminstrative Expenses</b></td>
          <td></td>
          <td ></td>
          <td class="raphael"><?php echo number_format($total_expenses , 2 , '.' , ',')?></td>
        </tr>
      </tbody> 
        <tr>
        <td colspan="4"></td>
        </tr>
        <?php 
            $profit_before = $profit - $total_expenses;
        ?>
        <tr>
        <td><b>Profit Before Tax</b></td>
        <td></td>
        <td></td>
        <td class="raphael"><?php echo number_format($profit_before , 2 , '.' , ',')?></td>
        </tr>
        
         <tr>
        <td colspan="4"></td>  
        </tr>
        
        <?php 
            $tax = 30 / 100 * $profit_before;
        ?>
        <tr>
        <td><b>Less:: Taxation</b></td>
        <td></td>
        <td></td>
        <td class="raphael"><?php echo number_format($tax , 2 , '.' , ',')?></td>
        </tr>
        
        <tr>
        <td colspan="4"></td>
        </tr>
        
        <?php
        $total_profit = $profit_before - $tax;
        ?>
        <tr>
         <td><strong>Profit After Tax</strong></td>
          <td></td>
          <td></td>
        <td class="ed"><?php echo number_format($total_profit , 2 , '.' , ',')?></td>
        </tr>
      </table>

  </div>
        
        
        </section>              
                        </div>
                          <!-- Ends Here -->
                    <div>
                        <center><input type="submit" class="btn btn-success btn-print" name="print" onclick="window.print" value="print"> </center>
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
					