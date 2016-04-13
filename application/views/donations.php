<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>

    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Donat<span class="normal-font">ion</span></h1>
                <div class="bread-crumb"><a href="#">Home</a> / <a href="#" class="current">Donate</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                
                
                <!--Column-->
                <div class="column default-text-column with-margin col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box padd-right-20">
                		<h2>YOU can deliver <br><span class="normal-font text-lowercase">Health and Hope to the World</span></h2>
                        <p>Project C.U.R.E. meets global health challenges at the community level every day by delivering critical medical supplies to hospitals, rural clinics and community health centers in need in developing countries. Your gift will give the most vulnerable patients, families and children around the world access to healthcare and access to hope.</p>
                        <p>Please complete your secure donation below. Have questions or need help? Call <strong><a href="#">720-490-4011</a></strong> or email <strong><a href="mailto:give@projectcure.org">give@projectcure.org</a></strong>.</p>
                    </article>
                </div>
                
                
                <!--Column-->
                <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box">
                        	<img src="<?php echo $root; ?>assets/images/resource/featured-image-1.jpg" alt="">
                        </figure>
                    </article>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Donation Section-->
    <section class="donation-section">
    	<div class="auto-container">
        	<div class="donation-form-outer">
            	<form method="post" action="http://wp1.themexlab.com/html/giving-hands/contact.html">
                	
                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>How Much Would you like to Donate?</h3>
                        
                        <div class="row clearfix">
                        	<div class="form-group col-lg-7 col-md-12 col-xs-12 clearfix">
                            	
                                <div class="radio-select">
                                	<input type="radio" name="sel-amount" id="amount-1">
                                    <label for="amount-1">$10</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" name="sel-amount" id="amount-2" checked>
                                    <label for="amount-2">$25</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" name="sel-amount" id="amount-3">
                                    <label for="amount-3">$50</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" name="sel-amount" id="amount-4">
                                    <label for="amount-4">$100</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" name="sel-amount" id="amount-5">
                                    <label for="amount-5">$150</label>
                                </div>
                                
                                <div class="radio-select">
                                	OR
                                </div>
                                
                            </div>
                            
                            <div class="form-group col-lg-5 col-md-8 col-xs-12 padd-top-20">
                            	
                                <input type="text" name="other-amount" value="" placeholder="Other Amount">
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <hr>
                    
                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>Billing Information</h3>
                        
                        <div class="row clearfix">
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">First Name <span class="required">*</span></div>
                                <input type="text" name="fname" value="" placeholder="First Name" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Last Name <span class="required">*</span></div>
                                <input type="text" name="lname" value="" placeholder="Last Name" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Email <span class="required">*</span></div>
                                <input type="email" name="emailadress" value="" placeholder="Email" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Phone <span class="required">*</span></div>
                                <input type="text" name="phone" value="" placeholder="Phone" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Address 1 <span class="required">*</span></div>
                                <input type="text" name="adressone" value="" placeholder="Address 1" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Address 2 <span class="required">*</span></div>
                                <input type="text" name="adresstwo" value="" placeholder="Address 2" required>
                            </div>
                            
                            <div class="form-group col-lg-4 col-md-4 col-xs-12">
                            	<div class="field-label">City <span class="required">*</span></div>
                                <select name="city">
                                    <option value="LHR">Lahore</option>
                                    <option value="KHI">Karachi</option>
                                    <option value="ISB">Islamabad</option>
                                    <option value="Gujrawala">Gujrawala</option>
                                    <option Value="fsd">Faisalabad</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-lg-4 col-md-4 col-xs-12">
                            	<div class="field-label">State / Province <span class="required">*</span></div>
                                <select name="prov">
                                    <option value="other">other</option>
                                     <option value="sindh">Sindh</option>
                                    <option value="Punjab">Punjab</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-lg-4 col-md-4 col-xs-12">
                            	<div class="field-label">Zip / Postal Code <span class="required">*</span></div>
                                <input type="text" name="zcode" value="" placeholder="Zip Code" required>
                            </div>
                            
                        </div>
                    </div>
                    
                    <hr>
                    
                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>Payment Information</h3>
                        
                        <div class="payment-option-logo"><img class="img-responsive" src="<?php echo $root; ?>assets/images/resource/payment-logos.png" alt=""></div>
                        <br>
                        
                        <div class="row clearfix">
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Card Number <span class="required">*</span></div>
                                <input type="text" name="crnumber" value="" placeholder="Card Number" required>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Card Holder Name <span class="required">*</span></div>
                                <input type="text" name="chnumber" value="" placeholder="Card Holder Name" required>
                            </div>
                            
                            
                            
                            <div class="form-group col-lg-3 col-md-3 col-xs-12">
                            	<div class="field-label">Expire Date <span class="required">*</span></div>
                                <select name="edate">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="051">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-lg-3 col-md-3 col-xs-12">
                            	<div class="field-label">&nbsp;</div>
                                <select name="eyear">
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-lg-4 col-md-4 col-xs-12">
                            	<div class="field-label">Security Code (CVC) <span class="required">*</span></div>
                                <input type="text" name="name" value="" placeholder="Security Code" required>
                            </div>
                            
                        </div>
                    </div>
                    
                    <hr>
                    
                    <div class="text-right"><button type="submit" class="theme-btn btn-style-one">Donate Now</button></div>
                    
                </form>
            </div>
        </div>
    </section>
    
    

    <?php
    include 'includes/footer.inc';
    ?>