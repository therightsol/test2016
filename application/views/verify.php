<?php
include 'includes/head.inc';




include 'includes/header.inc';
?> 
<br />
<br />
<br />
<div class="row">
    
<div class="container">
    <div class="col-sm-10 col-sm-offset-1">
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <span style="color:#eb5310;font-size: 2em;"> Verify Email Address </span>
        </div>
        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <br />
        <br />

        <?php
        $email = $this->session->userdata('email');
        $isempty = empty($email);
            // if user is not loggedint only then user can reset password. so,
        ?>

            <div class="row">


                <div class="col-md-12">
                    <?php if ($email_verify != 'yes'){
                        if($email_alredy_verified != ''){ ?>
                            <div class="alert alert-success">
                                Your email address Already verified.
                            </div>

                        <?php }
                        if($base_enc_username == 'yes'){ ?>
                            <div class="alert" style="color:#ff0000">
                                Email not verified because of some internal error. ERROR #1001
                            </div>
                        <?php }

                        if($uid_empty == 'yes'){ ?>

                            <div class="alert" style="color:#ff0000">
                                Email not verified because of some internal error. ERROR #1002
                            </div>

                        <?php }

                        if($user_notfound == 'yes') { ?>
                            <div class="alert" style="color:#ff0000">
                                Email not verified because of some internal error. ERROR #1003
                            </div>
                        <?php }
                    }else{ ?>
                        <div class="alert alert-success">
                            Your email have been successfully verified.
                        </div>
                    <?php } ?>

                </div>

            </div>






        <!-- END FORM-->
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


