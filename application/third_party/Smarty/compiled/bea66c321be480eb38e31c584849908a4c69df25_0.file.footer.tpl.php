<?php /* Smarty version 3.1.27, created on 2017-02-02 16:46:36
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\layouts\partials\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123615893545c1a2b63_51937729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bea66c321be480eb38e31c584849908a4c69df25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\layouts\\partials\\footer.tpl',
      1 => 1486050385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123615893545c1a2b63_51937729',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5893545c2336e0_56145073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5893545c2336e0_56145073')) {
function content_5893545c2336e0_56145073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123615893545c1a2b63_51937729';
?>
<!-- /#wrap -->
<footer class="Footer bg-dark dker">
    <p>2016 &copy; Metis Bootstrap Admin Template</p>
</footer>
<!-- /#footer -->
<!-- #helpModal -->
<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal -->
<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <iframe id="modal-frame" width="100%" height="100%"  src=""></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /#helpModal -->

<!--Bootstrap -->
<?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/lib/bootstrap/js/bootstrap.js");?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $('.data-table').dataTable();


    
    $('.btn-form-modal').click(function(e){
        e.preventDefault();
        // get the url to open
        var url = $(this).attr('href');
        if(url){
            console.log("Launching modal and changing the iframe url to "+url);
            $('#modal-frame').attr('src' , url);
            $("#formModal").modal();
        }
    });
<?php echo '</script'; ?>
>
<!-- MetisMenu -->
<?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/lib/metismenu/metisMenu.js");?>
"><?php echo '</script'; ?>
>
<!-- Screenfull -->
<?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/lib/screenfull/screenfull.js");?>
"><?php echo '</script'; ?>
>


<!-- Metis core scripts -->
<?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/js/core.js");?>
"><?php echo '</script'; ?>
>
<!-- Metis demo scripts -->
<?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/js/app.js");?>
"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo base_url("assets/dashboard/js/style-switcher.js");?>
"><?php echo '</script'; ?>
>
<?php }
}
?>