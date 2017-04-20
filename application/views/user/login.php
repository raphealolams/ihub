<body class="login">
   <div>
     <div class="login_wrapper">
       <div class="animate form login_form">
         <section class="login_content">
          <strong> <?php echo $message?> </strong>
           <?php echo form_open()?>
             <h1>Login Area</h1>
             <div>
               <input type="text" class="form-control" name="username" placeholder=" Someone@something.com" />
                 <?php echo form_error('username')?>
             </div>
             <div>
               <input type="password" class="form-control" name="password" placeholder="password " />
             <?php echo form_error('password')?>
             </div>
             <div>
               <input type="submit" class="btn btn-success" name="login" value="login" />
           </div >
             <div class="clearfix"></div>

             <div class="separator">
               <p class="change_link">Forget Password?
                 <strong><a href="<?php echo site_url('register/forgot')?>" class="to_register"> Reset Password </a></strong>
               </p>
               <div class="clearfix"></div>
               <br />
             </div>
           <?php echo form_close()?>
         </section>
       </div>
       </div>
       </div>
       </body>
