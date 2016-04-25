<?php
include 'includes/head.inc';




include 'includes/header.inc';
?> 
<br />
<br />
<br />
<div class="">
    
<div class="container">
    <div class="col-sm-10 col-sm-offset-1">
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption" style="background-color">
            <span style="color:#ffffff;font-size: 2em;"> Register Here As an organization </span>
        </div>
        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        
       
        
        <form action="<?php echo $root; ?>Register_organization" id="validate" method="post">
            <?php if($data_saved == ''){ ?>
            <br />
            <br />
            <div class="form-body">
                <?php

                if($user_found != ''){?>
                    <div class="alert alert-danger">
                        Username Not available <br>
                        Kindly Choose Other Username
                    </div>
                <?php } if($email_found != ''){ ?>
                    <div class="alert alert-danger">
                        Email already Taken <br>
                        Kindly Choose Other Email Address
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input class="form-control" minlength="4" required placeholder="Enter your Name" value="<?php if($_POST){ echo $_POST['username']; } ?>" type="text" name="username">
                            <span style="color:#ff0000" ><?php if (form_error('username') ) { echo form_error('username'); } ?></span>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email Address</label>

                            <input class="form-control" required type="email" placeholder = "Someone@example.com" value="<?php if($_POST){ echo $_POST['emailadress']; } ?>" name="emailadress"/>
                            <span style="color:#ff0000"><?php if (form_error('emailadress') ) { echo form_error('emailadress'); } ?></span>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Password</label>

                            <input class="form-control" minlength="6" required placeholder="Password" type="password" value="<?php if($_POST){ echo $_POST['password']; } ?>" name="password">

                            <span style="color:#ff0000"><?php if (form_error('password') ) { echo form_error('password'); } ?></span>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>

                            <input class="form-control" minlength="8" required placeholder="+92-333-1234567" type="number"  value="<?php if($_POST){ echo $_POST['contact']; } ?>" name="contact">
                            <span style="color:#ff0000"><?php if (form_error('contact') ) { echo form_error('contact'); } ?></span>

                        </div>
                    </div>
                </div>
                <h2 style="color:white">Add Bank Account</h2>
                <div id="bnk">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Account Number</label>

                                <input class="form-control" placeholder="" type="number"  value="<?php if($_POST){ echo $_POST['bnk_num']; } ?>" name="bnk_num">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Account Title</label>

                                <input class="form-control"  placeholder="" type="text"  value="<?php if($_POST){ echo $_POST['bnk_title']; } ?>" name="bnk_title">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Name</label>

                                <input class="form-control"  placeholder="" type="text" value="<?php if($_POST){ echo $_POST['bnk_name']; } ?>" name="bnk_name">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Branch Code</label>

                                <input class="form-control" placeholder="" type="number" value="<?php if($_POST){ echo $_POST['bnk_code']; } ?>" name="bnk_code">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Branch Address</label>

                                <input class="form-control"  placeholder="" type="text" value="<?php if($_POST){ echo $_POST['bnk_address']; } ?>" name="bnk_address">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Swift Code</label>

                                <input class="form-control"  placeholder="" type="text" value="<?php if($_POST){ echo $_POST['bnk_swift']; } ?>" name="bnk_swift">

                            </div>
                        </div>
                    </div>
                    <hr style="color: white;">
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-5">
            <div class="form-actions">
                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Submit</button>
                
            </div>
            </div>
            <?php }else{ ?>
            <br /> <br />
                <div class="alert-info">
                    <br />
                    <div class="alert alert-success">
                        Your account has been successfully created. Kindly check your email to continue. <br />
                    </div>
                    <div class="alert alert-warning">
                        Your request will not continue until you confirm your account.
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
    $('#validate').validate();

</script>


