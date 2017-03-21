<?php /* Smarty version 3.1.27, created on 2017-01-31 17:15:18
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\add_term.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10165890b816f34612_81833234%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55270870403d4adfb71094a2d1139f89b4bcbd28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\add_term.tpl',
      1 => 1485877976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10165890b816f34612_81833234',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5890b817040b54_12777818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5890b817040b54_12777818')) {
function content_5890b817040b54_12777818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10165890b816f34612_81833234';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Term of School</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    </head>
    <body>

    	<ul class="nav nav-tabs">
	        <li class="active"><a data-toggle="tab" href="#home">Veiw All</a></li>
	        <li><a  data-toggle="tab" href="#add_term">Add Term</a>
	        </li>

    	</ul>

	    <div id="add_term" class="tab-pane fade">
	        <div class="col-xs-12 col-sm-9">
			<form class="form-horizontal" role="form" method="POST">
			    <div class="form-group">
			        <label for="session_id" class="col-sm-2 control-label">
			         Session ID:   
			        </label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" name="session_id" placeholder="Enter Session ID">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="term_name" class="col-sm-2 control-label">
			         Term Name:   
			        </label>
			        <div class="col-sm-10">
			            <input type="text" class="form-control" 
			            name="term_name" placeholder="Enter Term Name">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="def" class="col-sm-2 control-label">
			         Def:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" 
			            name="def" placeholder="Enter Def">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="create_id" class="col-sm-2 control-label">
			         Create ID:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" name="create_id" placeholder="Create ID">
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="term_start" class="col-sm-2 control-label">
			         Term Start:   
			        </label>
			        <div class="col-sm-10 date">
			        	<div class="input-group input-append">
				            <input type="date" class="form-control" id = date name="date">
				            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				        </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="term_end" class="col-sm-2 control-label">
			         Term End:   
			        </label>
			        <div class="col-sm-10 date">
			        	<div class="input-group input-append">
				            <input type="date" class="form-control" id = date name="date">
				            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
				        </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <label for="user_id" class="col-sm-2 control-label">
			         User ID:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" name="user_id" placeholder="User ID">
			        </div>
			    </div>
			    
			    <div class="form-group">
			        <label for="term_order" class="col-sm-2 control-label">
			         Term Order:   
			        </label>
			        <div class="col-sm-10">
			            <input type="number" class="form-control" name="term_order" placeholder="Term Order">
			        </div>
			    </div>

			    <div class="form-group">
			        <div class="col-sm-offset-2 col-sm-10">
			            <button type="submit" class="btn btn-primary">
			            Submit</button>
			        </div>
	        	</div>


			</form>
			</div>
		</div>

    </body>
</html>






<?php }
}
?>