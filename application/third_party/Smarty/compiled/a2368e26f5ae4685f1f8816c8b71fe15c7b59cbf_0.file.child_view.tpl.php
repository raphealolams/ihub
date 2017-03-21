<?php /* Smarty version 3.1.27, created on 2016-12-01 05:08:27
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\test\views\template\child_view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1204058404afbd6bf71_24205664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2368e26f5ae4685f1f8816c8b71fe15c7b59cbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\template\\child_view.tpl',
      1 => 1480608504,
      2 => 'file',
    ),
    'e57624c89bfa3e565b93db5d1e6d27f9077e729d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\test\\views\\template\\parent_view.tpl',
      1 => 1480608428,
      2 => 'file',
    ),
    '456f6fa56a6981f80fe21ba7413492b9f8f1ea36' => 
    array (
      0 => '456f6fa56a6981f80fe21ba7413492b9f8f1ea36',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1204058404afbd6bf71_24205664',
  'variables' => 
  array (
    'parent_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58404afbe1d1d8_26285769',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58404afbe1d1d8_26285769')) {
function content_58404afbe1d1d8_26285769 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1204058404afbd6bf71_24205664';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns:ng="http://angularjs.org" ng-app="todoApp">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-theme.css" rel="stylesheet" type="text/css"/>       
        <!--        <?php echo '<script'; ?>
 src="jquery-1.11.0.min.js"><?php echo '</script'; ?>
>-->
        <!--         <?php echo '<script'; ?>
 src="bootstrap.js"><?php echo '</script'; ?>
>-->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"><?php echo '</script'; ?>
>
    </head>
    <body    ng-controller="ToDoCtrl" >
        <?php
$_smarty_tpl->properties['nocache_hash'] = '1204058404afbd6bf71_24205664';
?>

    <div class="page-header">
            <h1> </h1>
        </div>
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Done</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Buy Flowers</td><td>No</td></tr>
                <tr><td>Get Shoes</td><td>No</td></tr>
                <tr><td>Collect Tickets</td><td>Yes</td></tr>
                <tr><td>Call Joe</td><td>No</td></tr>
            </tbody>
        </table>
       
         <?php echo '<script'; ?>
>
           
           const appName = "Todo List";
           var todoApp = angular.module("todoApp", []);
           
           todoApp.controller('ToDoCtrl' , function($scope){
                $scope.appName =  appName;
           });
        <?php echo '</script'; ?>
>

        
    </body>
</html>
<?php }
}
?>