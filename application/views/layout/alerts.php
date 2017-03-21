<?php 
if (is_array($alerts)){
    
    foreach ($alerts as $alert);?>
    {
        <div class="alert alert-($alert.type) fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            ($alert.message)
       </div> 
    <?php } ?>
}
endif 

?>

<div class="alert alert-($alert.type) fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
($alert.message)

</div>