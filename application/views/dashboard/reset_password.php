<?php include 'includes/header.inc'; ?>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<img src="<?php echo $root; ?>admin_assets/img/logo-big.png" alt=""/>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<?php if($page_link == 'reset_password'){ ?>
		<div class="">
			<div class="row">

				<div class="col-md-12">


					<?php if($email_sent == ''){ ?>


						<?php if($email_not_verified == 'yes'){ ?>
							<div class="form-body">
								<div class="alert alert-warning">
									Provided email is not verified.<br />
									You already have sent an email to verify at the time of registration.<br />
									Kindly check and click on verification link.
								</div>
							</div>
						<?php } ?>


						<!-- BEGIN FORM-->
                    <form class="login-form" action="<?php echo $root; ?>reset_password" method="post">

						<div class="form-body">

							<div class="form-group <?php if(form_error('email') != '' || $email_not_verified == 'yes' || $not_found == 'yes'){ ?> has-error <?php } ?>">
								<label class="control-label bold" for="email">Your E-mail<i class="required glyphicon glyphicon-asterisk"></i></label>
								<div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
									<input type="text" class="form-control" data-inputmask="'alias': 'email'" placeholder="someone@somedomain.com" name="email" id="email" maxlength="255"
											<?php if (filter_input_array(INPUT_POST)) { ?> value="<?php echo set_value('email'); ?>" <?php } ?> />
								</div>
								<?php if (form_error('email') != '') { ?>
									<div class="help-block">
										Enter a valid email address.
									</div>
								<?php } ?>
								<?php if ($email_not_verified == 'yes') { ?>
									<div class="help-block">
										Provided email is not verified.<br />
									</div>
								<?php } ?>
								<?php if ($not_found == 'yes') { ?>
									<div class="help-block">
										Provided email is not registered. <br />

									</div>
								<?php } ?>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn green_light">Send</button>
							<button type="reset" id="reset" class="btn default">Reset</button>
						</div>
						</form>
						<!-- END FORM-->
					<?php }else{ ?>
						<div class="form-body">
							<div class="alert alert-success">

								An email has been sent to you. Kindly open your inbox and click on provided link.

							</div>
						</div>
					<?php } ?>


				</div>

			</div>
		</div>

	<?php } else if ($page_link == 'show_password_form'){?>

		<div class="section">
			<div class="">
				<div class="row">
					<div class="wow fadeInDown">
						<div class="col-md-12">
							<?php if($showform == 'yes') { ?>

								<div class="portlet box green_light">
									<div class="portlet-title">
										<div class="caption">
											Reset Password !
										</div>
									</div>
									<div class="portlet-body form">


										<!-- BEGIN FORM-->
                                        <form class="login-form" action="<?php echo $root; ?>reset_password/update" method="post">

										<div class="form-body">

											<div class="form-group <?php if(form_error('password') != ''){ ?> has-error <?php } ?>">
												<label class="control-label bold" for="password">Password<i class="required glyphicon glyphicon-asterisk"></i></label>
												<div class="input-group col-xs-12">
                                            <span class="input-group-addon">
                                                <i class="fa fa-star"></i>
                                            </span>
													<input type="password" class="form-control" data-toggle="password" data-placement="after" placeholder="Password" maxlength="255" name="password" id="password"
															<?php if(filter_input_array(INPUT_POST)){ ?> value="<?php echo set_value('password');?>" <?php } ?> />
												</div>
												<?php if(form_error('password') != ''){ ?>
													<div class="help-block">
														<ul>
															<li> Password should contains at least 8 characters.</li>
															<li> Password should contains at least 1 number.</li>
															<li> Password should contains at least 1 uppercase letter.</li>
															<li> Password should contains at least 1 special character.</li>
															<li> Password should matched with Re-type password field.</li>
														</ul>
													</div>
												<?php } ?>
											</div>

											<div class="form-group <?php if(form_error('conf_password') != ''){ ?> has-error <?php } ?>">
												<label class="control-label bold" for="conf_password">Re-type Password<i class="required glyphicon glyphicon-asterisk"></i></label>
												<div class="input-group col-xs-12">
                                            <span class="input-group-addon">
                                                <i class="fa fa-star"></i>
                                            </span>
													<input type="password" class="form-control" placeholder="Password" data-toggle="password" data-placement="after" maxlength="255" name="conf_password" id="conf_password"
															<?php if(filter_input_array(INPUT_POST)){ ?> value="<?php echo set_value('conf_password');?>" <?php } ?> />
												</div>
												<?php if(form_error('conf_password') != ''){ ?>
													<div class="help-block">
														Password and Re-type password should be matched.
													</div>
												<?php } ?>
											</div>

										</div>
										<div class="form-actions">
											<button type="submit" class="btn green_light">Update</button>
											<button type="reset" id="reset" class="btn default">Reset Form</button>
										</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							<?php } else {
								if($base_enc_username == 'yes'){ ?>
									<div class="alert alert-danger">
										Password can not be updated because your account is not found. <br />
										It is because you might changed URL. <br />
										Internal Error. ERROR #1001
									</div>
								<?php }
								if($uid_empty == 'yes'){ ?>
									<div class="alert alert-danger">
										Password can not be updated because your account is not found. <br />
										It is because you might changed URL. <br />
										Internal Error. ERROR #1002
									</div>
								<?php }
								if($user_notfound == 'yes') { ?>
									<div class="alert alert-danger">
										Password can not be updated because your account is not found. <br />
										It is because you might changed URL. <br />
										Internal Error. ERROR #1003
									</div>
								<?php }
								if($user_token_error == 'yes'){ ?>
									<div class="alert alert-danger">
										Password can not be updated because your account is not found. <br />
										It is because you might changed URL. <br />
										Internal Error. ERROR #1004
									</div>
								<?php }
								if($token_expired == 'yes'){ ?>
									<div class="form-body">
										<div class="alert alert-danger">
											Token has been expired.<br />
											If you want to reset your password. <br />
											Kindly click to <strong><a href="<?php echo $root; ?>reset_password">Reset</a></strong> and get new link in your email.
										</div>
									</div>
								<?php }
								if($password_update == 'yes'){ ?>
									<div class="form-body">
										<div class="alert alert-success">
											Your password has successfully been updated.<br />
											Kindly <strong><a href="<?php echo $root; ?>dashboard/login">Login</a></strong> to continue.
										</div>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>

	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	<div class="copyright">
		2016 &copy; Save a soul. Admin Dashboard Develop by <a href="#" >Trsolutions</a> .
	</div>
</div>
<?php include 'includes/footer_files.inc'; ?>
<script>
	jQuery(document).ready(function() {
		App.init();
	});
</script>
<script>
    $('input').keyup(function(){
        //console.log($(this).parent());
        var $this = $(this);

        if($this.attr('id') === 'email'){
            var regExp = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            if (regExp.test($this.val())){
                // Do whatever if it passes.
                $this.parents('.form-group').removeClass('has-error').children('.help-block').remove();
            }else{
                // Do whatever if it fails.
                if(!$this.parents('.form-group').hasClass('has-error')){
                    $this.parents('.form-group').addClass('has-error').append('<span class="help-block">Enter a valid email address.</span>');
                }
            }
        }else if($this.attr('id') === 'password'){
            var regExp = /^((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,})$/;

            var result = regExp.test($this.val());
            //console.log(result);

            if(result === true){
                $this.parents('.form-group').removeClass('has-error').children('.help-block').hide('slow', function(){$this.parents('.form-group').children('.help-block').remove();});
            }else{
                if(!$this.parents('.form-group').hasClass('has-error')){
                    $this.parents('.form-group').addClass('has-error')
                        .append('<span class="help-block"><ul><li> Password should contains at least 8 characters.</li><li> Password should contains at least 1 number.</li><li> Password should contains at least 1 uppercase letter.</li><li> Password should contains at least 1 special character.</li><li> Password should matched with Re-type password field.</li></ul></span>');
                }
            }
        }else if($this.attr('id') === 'conf_password'){
            var password = $('#password').val();

            if($this.val() !== password){
                if(!$this.parents('.form-group').hasClass('has-error')){
                    $this.parents('.form-group').addClass('has-error').append('<span class="help-block">Password not match.</span>');
                }
            }else{
                $this.parents('.form-group').removeClass('has-error').children('.help-block').remove();
            }
        }
    });


    $('#reset').click(function(){
        $('.help-block').remove();
        $('.form-group').removeClass('has-error');
    });


    $(':input').inputmask();


    $(function(){
        $('#password').passwordstrength({
            'minlength': 8,
            'number'   : true,
            'capital'  : true,
            'special'  : true,
            'labels'   : {
                'general'   : 'The password must have :',
                'minlength' : 'At leaset {{minlength}} characters',
                'number'    : 'At least one number',
                'capital'   : 'At least one uppercase letter',
                'special'   : 'At least one special character'
            }
        });
    });


</script>