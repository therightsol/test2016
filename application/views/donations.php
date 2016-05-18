<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>

    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Donat<span class="normal-font">ion</span></h1>
                <div class="bread-crumb"><a href="#">Home</a> / <a href="#" class="current">Donate</a></div>
            </div>
        </div>
    </section>
    
    
  
    
    
    <!--Donation Section-->
    <section class="donation-section">
    	<div class="auto-container">
        	<div class="donation-form-outer">
            	<form method="post" action="<?php echo $root . 'donation_form/donation/' . $id; ?>">
                	<?php if(isset($response)){
                        if($response == 'success'){ ?>
                    <div class="alert alert-success">
                        Thank you - your payment received successfully.
                    </div>
                    <?php }else{ ?>
                            <div class="alert alert-danger">
                                <?php echo $response; ?>
                            </div>
                       <?php }
                    } ?>

                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>How Much Would you like to Donate?</h3>
                        
                        <div class="row clearfix">
                        	<div class="form-group col-lg-7 col-md-12 col-xs-12 clearfix">
                            	
                                <div class="radio-select">
                                	<input type="radio" value="10" name="sel-amount" id="amount-1">
                                    <label for="amount-1">$10</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio"  value="25" name="sel-amount" id="amount-2" checked>
                                    <label for="amount-2">$25</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" value="50"  name="sel-amount" id="amount-3">
                                    <label for="amount-3">$50</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" value="100"  name="sel-amount" id="amount-4">
                                    <label for="amount-4">$100</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" value="150"  name="sel-amount" id="amount-5">
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
                                <label>Month</label>
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
                                <label>Year</label>
                                <select name="eyear">
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>

                                </select>
                            </div>
                            
                            <div class="form-group col-lg-4 col-md-4 col-xs-12">
                            	<div class="field-label">Security Code (CVC) <span class="required">*</span></div>
                                <br />
                                <input type="text" name="cvv" value="" placeholder="Security Code" required>
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
