<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Campaign <span class="normal-font">Details</span></h1>
                <div class="bread-crumb"><a href="#">Home</a> / <a href="#" class="current">campaign</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container" >
        	<div class="row clearfix" >
            	
                <!--Content Side-->	
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Causes Details Section-->
                    <section class="causes-section cause-details no-padd-bottom no-padd-top">
                                
                        <!--Cause Column-->
                        <div class="column cause-column padd-right-20" style="text-align:center" >
                            <article class="inner-box">
                                <figure class="image-box">
                                    <a href="#"><img src="<?php echo $root.$rec['campaign_image_path']; ?> " alt=""></a>
                                </figure>
                                <div class="content-box">
                                   
                                    
                                    
                                  
                                    <div class="sec-title margin-bott-20">
                                        <h2><?php echo $rec['campaign_title']; ?></h2>
                                    </div>
                                    <hr /> 
                                    <div class="bigger-text">
                                        <p><?php echo $rec['campaign_short_description']; ?></p>
                                        <br>
                                    </div>
                                   
                                    <div class="text" >
                                        <p><?php echo $rec['campaign_long_description']; ?></p>
                                        
                                    	<br>    
                                    </div>
                                    
                                    <div class="col-sm-7  text-right padd-top-20">
                                       <a href="<?php echo $root; ?>Contact" class="theme-btn btn-style-two">Contact Us</a></div>
                                    <br />
                                <br/><br />
                                <br/>
                                </div>
                                
                            </article>
                        </div>
                            
                    </section>
                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->	
                
                        
                        <!-- Recent Posts -->
                       
                        
                      
                        
                        
                        
                 
                
                    
                </div>
                <!--Sidebar-->
                
                
            </div>
        </div>
    </div>
    
    
    <!--Default Section-->
    <section class="default-section no-padd-top">
    	<div class="auto-container">
        
        	<div class="sec-title margin-bott-30">
            	<h2 style="color:#fa6628"><span class="text-capitalize">How can you <span class="normal-font">help us ?</span></span></h2>
            </div>
        	<div class="row clearfix">
                
                <!--Column-->
                
                   <div class="column icon-left-column col-md-8 col-sm-6 col-xs-12 col-md-offset-2">
                    <article class="inner-box">
                        <div class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-1.png" alt=""></div>
                        <h3 style="color:#fa6628">Donator</h3>
                        <p style="color:#ffffff">Lorem ipsum dolor sit amet et siu amet audiam copiosaei mei purto timeam mea ne Ei justo.</p>
                      <div class="form-actions">
                          <a href="<?php echo $root; ?>All_organization" class="btn pull-right" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Click To Donate</a>
                            </div>
                    </article>
                </div>
                
                
                <!--Column-->
               
                
                <!--Column-->
              
                
            </div>
        </div>
    </section>
    
    
   <?php
    include 'includes/footer.inc';
    ?>