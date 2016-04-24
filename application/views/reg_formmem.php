<?php
include 'includes/head.inc';




include 'includes/header.inc';
?> 
<br />
<br />
<br />
<div class="">
    
<div class="container">
    <div class="col-sm-6 col-sm-offset-3">
<div class="portlet box red">
    <br />
    <div class="portlet-title">
        <div class="caption" style="text-align: center;">
            <span style="color:#ffffff;font-size: 2em;"> Register Here As a member </span>
        </div>
        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <br />
       
        
        <form action="<?php echo $root; ?>register_member" id="reg" method="post" >
           <?php if($data_saved == ''){ ?>
            <div class="form-body">
             
                <?php

                    if($user_found != ''){?>
                        <div class="alert alert-danger">
                            Username Not available <br>
                            Kindly Chose Other Username
                        </div>
                    <?php } if($email_found != ''){ ?>
                    <div class="alert alert-danger">
                        Email already Token <br>
                        Kindly Chose Other Email Address
                    </div>
                 <?php } ?>
                <div class="form-group  <?php if($_POST){ if (form_error('username') != '') { ?> has-error <?php } } ?> ">
                    <label class="control-label">Username</label>
                    <input class="form-control" minlength="4" required placeholder="Enter your Name " value="<?php if($_POST){ echo $_POST['username']; } ?>" type="text" name="username">
                    <span class="text-danger"><?php if (form_error('username') ) { echo form_error('username'); } ?></span>

                </div>

                <div class="form-group  <?php if($_POST){ if (form_error('emailadress') != '' || $email_found == 'no') { ?> has-error <?php } } ?> ">
                    <label class="control-label">Email Address</label>
                                          
                        <input class="form-control" required type="email" placeholder = "Someone@example.com" value="<?php if($_POST){ echo $_POST['emailadress']; } ?>" name="emailadress"/>
                    <span class="text-danger"><?php if (form_error('emailadress') ) { echo form_error('emailadress'); } ?></span>

                </div>

                <div class="form-group  <?php if($_POST){ if (form_error('password') != '' ) { ?> has-error <?php } } ?> ">
                    <label class="control-label">Password</label>
                    
                        <input class="form-control" minlength="6" required placeholder="Password" type="password" value="<?php if($_POST){ echo $_POST['password']; } ?>" name="password">
                    <span class="text-danger"><?php if (form_error('password') ) { echo form_error('password'); } ?></span>


                </div>
                
                <div class="form-group  <?php if($_POST){ if (form_error('contact') != '' ) { ?> has-error <?php } } ?> ">
                    <label class="control-label">Contact Number</label>
                    
                        <input class="form-control" minlength="8" required placeholder="+92-333-1234567" type="nu" value="<?php if($_POST){ echo $_POST['contact']; } ?>" name="contact">
                    <span class="text-danger"><?php if (form_error('contact') ) { echo form_error('contact'); } ?></span>
                </div>
                <!--<div class="form-group">
                    <label class="control-label">UPload Your profile image</label>
                     <input name="userfile"  class="long_field" type="file" >
                </div>-->
                
            </div>
            <div class="col-sm-6 col-sm-offset-5">
            <div class="form-actions">
                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Submit</button>
                
            </div>
            </div>
            <?php }else{ ?>
               <div class="alert-info">
                   <div class="alert alert-success">
                       Your account has been successfully created. Kindly check your email to continue. <br />
                       <br />
                   </div>
                   <div class="alert alert-warning">
                       Your request will not continue until you confirm your account.
                       <br />
                   </div>
               </div>
            <br /> <br />
            <?php } ?>
        </form>
        <!-- END FORM-->
    </div>
</div>
</div>
</div>
</div>
<br />
<br /> <?php
    include 'includes/footer.inc';
    ?>
<script>
    $('#reg').validate();
</script>

