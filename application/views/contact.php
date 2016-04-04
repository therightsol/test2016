<?php
include 'includes/head.inc';


$loggedInUser = $this->session->userdata('loggedInUser');

include 'includes/header.inc';
?>

<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Contact <span class="normal-font">us</span></h1>
                <div class="bread-crumb"><a href="#">Home</a> / <a href="#" class="current">Contact Us</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Contact Section-->
    <section class="contact-section extended" style="background-image:url(images/background/map-image.jpg);">
    	<div class="auto-container">
			<div class="inner-container">
                    	
                <div class="sec-title text-center">
                    <div class="text">Lorem ipsum dolor sit amet, quas elitr voluptaria ei eos. Quo eu decore nusquam iudicabit, eos an aliquam maiorum. Ei eum simul integre, no eum quem fabellas, duo phaedrum consequat efficiantur ex. Ne vis nusquam. </div>
                </div>
                
                <!--Contact Info-->
                <div class="contact-info row clearfix">
                	<!--Info COlumn-->
                    <div class="info-column col-lg-4 col-md-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon"><span class="flaticon-location"></span></div>
                            <h4>ADDRESS</h4>
                            Mirpur New Bazar Road,<br> 
                            Block-c, Dhaka-1210
                        </div>
                    </div>
                    
                    <!--Info COlumn-->
                    <div class="info-column col-lg-4 col-md-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon"><span class="flaticon-technology"></span></div>
                            <h4>Phone</h4>
                            (732) 803-01 03, (732) 806-01 04, (880)172380129
                        </div>
                    </div>
                    
                    <!--Info COlumn-->
                    <div class="info-column col-lg-4 col-md-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon"><span class="flaticon-interface"></span></div>
                            <h4>Email</h4>
                            <a href="mailto:info@companyname.com">info@companyname.com</a>,
                            <a href="mailto:otheremail@gmail.com">otheremail@gmail.com</a>
                        </div>
                    </div>
                </div>
                
                <!--Form Container-->
                <div class="contact-form-container wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2500ms">
                <?php if ($success == ''){ ?>
                    <?php if ($error != ''){ ?>
                        <div class="alert alert-danger">
                            Temporary Error!<br>
                            kindly try again
                        </div>
                    <?php } ?>
                    <form method="post" action="<?php echo $root; ?>contact" id="contact-form">
                        
                        <div class="row clearfix">
                            <div class="column col-md-6 col-sm-12 col-xs-12">
                            	<div class="form-group">
                                	<input type="text" name="name" required value="" placeholder="Name">
                                    <span class="text-danger"><?php if (form_error('name') ) { echo form_error('name'); } ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required value="" placeholder="Email">
                                    <span class="text-danger"><?php if (form_error('email') ) { echo form_error('email'); } ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="number" value="" placeholder="Phone">
                                    <span class="text-danger"><?php if (form_error('number') ) { echo form_error('number'); } ?></span>
                                </div>
                            </div>
                            
                            <div class="column col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" required placeholder="Your Message"></textarea>
                                    <span class="text-danger"><?php if (form_error('message') ) { echo form_error('message'); } ?></span>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-12 col-xs-12">
                                <div class="text-center"><button type="submit" name="submit" class="theme-btn btn-style-two">SEND Message</button></div>
                            </div>
                        
                        </div>
                        <?php }else{ ?>
                            <div class="alert alert-success">
                                Thank you for Contact us!
                            </div>
                        <?php } ?>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
<?php
include 'includes/footer.inc';
?>