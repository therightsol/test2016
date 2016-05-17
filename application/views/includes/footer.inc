<!--Intro Section-->
    <section class="subscribe-intro">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
                <div class="column col-md-9 col-sm-12 col-xs-12">
                	<h2>Save A Soul</h2>
                    The value of life is not in its duration, but in its donation. You are not important because of how long you live, you are important because of how effective you live. 

                </div>
                <!--Column-->
                <div class="column col-md-3 col-sm-12 col-xs-12">
                	
                </div>
            </div>
        </div>
    </section>
	
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(<?php echo $root; ?>assets/images/background/footer-bg.jpg);">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            <div class="col-lg-8 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo"><a href="<?php echo $root; ?>Home"><img src="<?php echo $root; ?>assets/images/project_logo.png" class="img-responsive" alt=""></a></div>
                                    <div class="text">
                                        <p id="des"></p>
                                    </div>
                                    
                                    <ul class="contact-info">
                                    	<li><span class="icon fa fa-map-marker"></span>
                                            <span class="com_address"></span>
                                        </li>
                                        <li><span class="icon fa fa-phone"></span>
                                            <span id="company_phone3">
                                              (880) 1723801729
                                            </span>

                                        </li>
                                        <li><span class="icon fa fa-envelope-o"></span>
                                            <span id="com_mail2">
                                                
                                            </span>

                                        </li>
                                    </ul>
                                    
                                    <div class="social-links-two clearfix">
                                    	<a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                        <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a>
                                        <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                          
                   
                     <!--Footer Column-->
                            <div class="col-lg-4 col-sm-6 col-xs-12 column">
                            <img src="<?php echo $root;?>assets/images/gallery/image-15.jpg" alt="mission img" width="180" style="padding-top: 70px;">
                            </div>
                    	</div>
                    </div><!--Two 4th column E
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	<div class="col-lg-7 col-sm-12 col-xs-12 column" style="padding-top: 40px;">
                                    <h2> Our Mission </h2>
                                     <p>
                                   Our mission is simple,By providing a community with safe drinking water, disease rates can drop by up to 88% virtually overnight! Child mortality rates can drop up to 90%- overnight! Clean water also plays an incredibly critical role in effectively treating and managing HIV/AIDS in rural communities
                                </p>
                            </div>
                               
                            
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                	<h2>Quick Links</h2>
                                    <ul>
                                        <li><a href="<?php echo $root ; ?>Donations">Donation Ads</a></li>
                                        <li><a href="<?php echo $root ; ?>Campaigns_view">Campaign Ads</a></li>
                                    
                                        
                                        <li><a href="<?php echo $root ; ?>Contact">Contact US</a></li>
                                    </ul>
        
                                </div>
                            </div>
                    	</div>
                    </div><!--Two 4th column End-->
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2016 &copy; Designed by <a href="http://therightsol.com/">TR Solutions</a></div>
            </div>
        </div>
        
    </footer>    
    


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="<?php echo $root; ?>assets/js/jquery.js"></script> 
<script src="<?php echo $root; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $root; ?>assets/js/revolution.min.js"></script>
<script src="<?php echo $root; ?>assets/js/jquery.appear.js"></script>
<script src="<?php echo $root; ?>assets/js/knob.js"></script>
<script src="<?php echo $root; ?>assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo $root; ?>assets/js/jquery.fancybox-media.js"></script>
<script src="<?php echo $root; ?>assets/js/validate.js"></script>
<script src="<?php echo $root; ?>assets/js/wow.js"></script>
<script src="<?php echo $root; ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>assets/js/picedit.min.js"></script>
<script src="<?php echo $root; ?>admin_assets/scripts/xeditable.min.js" type="text/javascript"></script>

<script>
    $.ajax({
        url: "<?php echo $root; ?>generals",
        dataType: 'json',
        cache:true,
        success: function(result){
            console.log(result);
            var logo = result[0]['company_logo_header'];
            var base_url = "<?php echo $root; ?>";
            $('.logo img').attr('src', base_url+logo);
            $('#header_mail').attr('href', 'mailto:'+result[0]['contact_email_header']).html(result[0]['contact_email_header']);
            $('.facebook').attr('href',result[0]['facebook_url_header']);
            $('.twitter').attr('href',result[0]['twitter_url_header']);
            $('.google-plus').attr('href',result[0]['gplus_url_header']);
            $('.linkedin').attr('href',result[0]['linkedin_url_header']);
            $('.com_address').html(result[0]['company_address']);
            $('#company_phone1').html(result[0]['company_phone1']);
            $('#company_phone3').html(result[0]['company_phone3']);
            $('#com_phone').html(result[0]['company_phone1']+', '+result[0]['company_phone2']+', '+result[0]['company_phone3']);
            $('#com_mail').html(result[0]['company_email_1']+', '+result[0]['company_email_2']);
            $('#com_mail2').html(result[0]['company_email_2']);
            $('#des').html(result[0]['company_short_description']);
    }});
</script>

</body>
 
</html>
