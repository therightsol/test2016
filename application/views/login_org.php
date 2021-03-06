<?php
include 'includes/head.inc';


$loggedInUser = $this->session->userdata('loggedInUser');

include 'includes/header.inc';
?>
<div class="">

    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="portlet box red">
                <br />
                <br />
                <br />
                <div class="portlet-title">
                    <div class="col-sm-12">
                        <div class="caption" style="background-color">
                            <span style="color:#ffffff;font-size: 2em;">Login Here As an Organization</span>
                        </div>
                        
                    </div>
                </div>
               <br />
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="<?php echo $root; ?>Login/Login_organization" id="reg" method="post">
                        <?php if($loggedInUser  == ''){ ?>
                        <br />
                        <br />
                        <div class="form-body">
                            
                            <?php if ($record_found != '') { ?>
                                <strong> <span style="color:#ff0000">
                                                Sorry! User name or password is Incorrect. Please try again
                                        </span></strong>
                            <?php }

                            if ($is_banned != '') { ?>
                                <div class="alert " style="color:#ff0000">
                                    You are banned by Admin
                                </div>
                            <?php }elseif ($is_email_approved != '') { ?>
                                <div class="alert alert-info">
                                    Sorry! Your Email Address is not verified <br>
                                    Kindly Verify you email address!
                                </div>
                            <?php }
                            elseif ($is_admin_approved != '') { ?>
                                <div class="alert alert-info">
                                    Sorry! Your account is not active <br>
                                    Kindly wait for Admin approval <strong>or</strong> send us email
                                    <a href="<?php echo $root; ?>contact">here</a>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label class="control-label"   style="color:#ffffff;">User Name</label>
                                <input class="form-control" placeholder="Enter Your User Name" type="text" name="username">
                                <?php
                                if($_POST){
                                    if (form_error('username') != '') { ?>
                                        <span style="color:#ff0000">
                                                        <?php echo form_error('username'); ?>
                                                    </span>
                                    <?php } }?>
                            </div>

                            <div class="form-group">
                                <label class="control-label" style="color:#ffffff;">Password</label>

                                <input class="form-control" placeholder="Password" type="password" name="password">
                                <?php if($_POST){
                                    if (form_error('password') != '') { ?>
                                        <span style="color:#ff0000">
                                                            <?php echo form_error('password'); ?>
                                                        </span>
                                    <?php } }?>

                            </div>
                            <?php }else{ ?>
                                <div class="alert alert-danger col-sm-8 col-md-offset-2" style="margin-top: 8%; margin-bottom: 10%;">
                                    You are already logged in!<br>
                                </div>
                            <?php } ?>



                        </div>
                        <div class="col-sm-8 col-sm-offset-5">

                            <div class="form-actions">
                                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Login</button>
                            </div>
                        </div>
                        <a class="" href="<?php echo base_url('reset_password') ?>" >Forget Password?</a>

                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<br />
<?php
include 'includes/footer.inc';
?>
<script>
    $('#reg').validate();
</script>