     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Invoice <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>    

    <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                     
                        <div class="invoice-box" id="print-content">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="12">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="http://nextstepwebs.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            <td>
                            
                            </td>
                            
                            <td>
                            
                            </td>
                            <td>
                            
                            </td>
                            <td>
                            
                            </td>
                            <td>
                            
                            </td>
                             <td>
                            
                            </td>
                            <td>
                            
                            </td>
                            <td>
                            
                            </td>
                            <td>
                            
                            </td>
                            <?php foreach ($invoice_number as $number):?>
                            <td>
                                Invoice #: <?php echo $number->invoice_number?> <br>
                                Expected Pickup Date:: <?php echo $number->picked_date?>: <br/>
                                Created:: <?php echo date('Dd-M-Y')?><br>
                            </td>
                            <?php endforeach?>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="12">
                    <table>
                        <tr>
                            <td>
                                Next Step Webs, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, TX 12345
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            </td>
                            
                            <td>
                            </td>
                            
                            <?php foreach ($invoice_number as $number):?>
                               <?php $data = $number->getdetails(); ?>
                            <td>
                                <?php echo $data->surname .' '. $data->other_name?><br>
                                <?php echo $data->email?><br>
                                <?php echo $data->phone_number?>
                            </td>
                            <?php endforeach?>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td colspan="11"> </td>
                
                <td>
                    #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Cash
                </td>
                
              <td colspan="11"> </td>
                    
                <?php foreach ($invoice_number as $number):?>
                <td>
                    <?php echo $number->deposit?>
                </td>
                <?php endforeach?>
            </tr>
            
            <tr class="heading">
                <td>
                    Category
                </td>
                
                <td colspan="2"> </td>
                
                <td>
                    Item
                </td>
                
                <td colspan="2"> </td>
                
                <td>Quantity</td>
                
               <td colspan="2"> </td>
                
                <td>
                    Unit Price
                </td>
                
               <td colspan="2"> </td>
                
                <td>
                    Price
                </td>
            </tr>
            <?php foreach ($droped as $drop_item):?>
            <tr class="item">
                
                <td>
                     <?php echo $drop_item->getCatName()?>
                </td>
                
              <td colspan="2"> </td>
                
                <td>
                    <?php echo $drop_item->getItemName()?>
                </td>
                
               <td colspan="2"> </td>
                
                  <td>
                     <?php echo $drop_item->quantity?>
                </td>
                
                 <td colspan="2"> </td>
                
                <td>
                   <?php echo $drop_item->price?>     
                </td>
                    
               <td colspan="2"> </td>
                
                <td>
                    <?php echo $drop_item->total_price?>
                </td>
               
            </tr>
             <?php endforeach?>
            
            
             <?php foreach ($invoice_number as $number):?>
            <tr class="total">
                <td colspan="12"> </td>
                
                <td>
                      <strong>Total:: <?php echo $number->total?></strong>
                </td>
            </tr>
            
            <tr class="balance" >
                <td colspan="12"> </td>
                <td>
                   <strong>Balance:: <?php echo $number->balance?></strong>   
                </td>
                
            </tr>
             <?php endforeach?>
        </table>
    </div>
              
                    <center>     
                        <input type="button" class="btn btn-success btn-print" name="Print" value="Print">
                    </center>        
                
                </section>
                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->
            </div>
</div>
              
 <style>
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
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(){
        text-align:left;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    
    .invoice-box table tr.total td:nth-child(){
        border-top:2px solid #eee;
        font-weight:bold;
    }
     
     .invoice-box table tr.balance td:nth-child(){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>