<?php include 'includes/header.inc' ?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php include 'includes/nav_top.inc' ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <?php include 'includes/nav_aside.inc' ?>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
           
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Add Member <small>prifile</small>
                    </h3>
                    <ul class="page-breadcrumb breadcrumb">
                 
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo $root; ?>dashboard">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Member</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Add</a>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="tab-pane active" id="tab_2">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>Member
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo $root; ?>dashboard/add_member" id="reg" method="post" >
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
                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="alert-info">
                                    <div class="alert alert-success">
                                        Member Added Successfully . <br />
                                    </div>
                                </div>
                            <?php } ?>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include 'includes/footer.inc' ?>
<!-- END FOOTER -->

<?php include 'includes/footer_files.inc' ?>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        FormWizard.init();
    });
</script>

<script>
    $('#reg').validate();
</script>
