<?php /* Smarty version 3.1.27, created on 2017-01-31 14:02:59
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\department\view_department.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:297258908b032f9051_40029168%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16874a75dfe510171824658268bbe2e6fcef4ef0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\department\\view_department.tpl',
      1 => 1485867767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297258908b032f9051_40029168',
  'variables' => 
  array (
    'school_arms' => 0,
    'school_arm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58908b04185171_11855285',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58908b04185171_11855285')) {
function content_58908b04185171_11855285 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '297258908b032f9051_40029168';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/custom" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Veiw All</a></li>
        <li><a  data-toggle="tab" href="#add_department">Add Department</a></li>

    </ul>

  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <table class="table table-border">
    <!-- <caption class="text-center"> <b>View All Details</b> </caption> -->
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>School Arm Id</th>
          <th>User Id</th>
          <th>Action</th>
        </tr>
      </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a class="btn btn-warning">Edit</a>
        <a class="btn btn-danger">Delete</a> </td>
      </tr>
    </tbody>
  </table>
  </div>

  <div id="add_department" class="tab-pane fade in active">
    <form class="form-vertical">
   <div class="form-group">
     <div class="col-md-8">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name">
   </div>
 </div>

      <div class="form-group">
         <div class="col-md-8">
          <label>School Arm Id:</label>
          <select name="SCHOOLARM_ID">
          <option value="">Id</option>
          <?php
$_from = $_smarty_tpl->tpl_vars['school_arms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['school_arm'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['school_arm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['school_arm']->value) {
$_smarty_tpl->tpl_vars['school_arm']->_loop = true;
$foreach_school_arm_Sav = $_smarty_tpl->tpl_vars['school_arm'];
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['school_arm']->value->schoolarm_id;?>
"><?php echo $_smarty_tpl->tpl_vars['school_arm']->value->schoolarm_id;?>
</option>
                   <?php
$_smarty_tpl->tpl_vars['school_arm'] = $foreach_school_arm_Sav;
}
?>
          </select>
      </div>
    </div>
        <div>
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
 </div>

 </form>

</body>




     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>