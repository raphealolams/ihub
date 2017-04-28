
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
                            

					
                    <table id="table-responsive" class="datatable table table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                     
                      <thead>
                        <tr>
                          <th>Month</th>
                          <th>Year</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php echo form_open()?>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="month">
                                        <option value="select">Select</option>
                                        <?php foreach($months as $key => $month ):?>
                                        <option value="<?php echo $key?>"><?php echo $month?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            
                            
                            </td>
                            <td>
                                 <div class="form-group">
                                    <select class="form-control" name="year">
                                        <option value="select">Select</option>
                                        <?php foreach($years as $year):?>
                                        <option value="<?php echo $year?>"><?php echo $year?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </td>
                            <td><input type="submit" class="btn btn-success" value="search" name="search"> </td>
                        </tr>
                          <?php echo form_close()?>
                     </tbody>
                    </table>
                        </div>
                          
                          <!-- Ends Here -->
                      </div>
                    </div>

                  </div>
                </div>
