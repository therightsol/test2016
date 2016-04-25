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
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                    
                        <!-- Search Form -->
                        <div class="widget search-box">
                            
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search">
                                    <button type="submit"><span class="icon flaticon-tool"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Latest Posts</h3></div>
                            
                            <div class="post">
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur</a></h4>
                                <div class="post-info"><span class="icon fa fa-clock-o"></span> 11/01/2015 </div>
                            </div>
                            
                             <div class="post">
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur</a></h4>
                                <div class="post-info"><span class="icon fa fa-clock-o"></span> 11/01/2015 </div>
                            </div>
                            
                             <div class="post">
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur</a></h4>
                                <div class="post-info"><span class="icon fa fa-clock-o"></span> 11/01/2015 </div>
                            </div>
                            
                        </div>
                        
                      
                        
                        
                        
                                
                    </aside>
                
                    
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
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Icon Box-->
                    <div class="icon-heading-column">
                        <article class="inner-box">
                        	<div class="column-count"></div>
                            <h3 style="color:#ffffff"><span class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-4.png" alt=""></span> Donator</h3>
                            <p>Lorem ipsum dolor sit amet amet audiam copiosaei  mei purto time am mea ne ei </p>
                            
                        </article>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Icon Box-->
                    <div class="icon-heading-column">
                        <article class="inner-box">
                        	<div class="column-count"></div>
                            <h3 style="color:#ffffff"><span class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-5.png" alt=""></span> Fundrising</h3>
                            <p>Lorem ipsum dolor sit amet amet audiam copiosaei  mei purto time am mea ne ei </p>
                            
                        </article>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Icon Box-->
                    <div class="icon-heading-column">
                        <article class="inner-box">
                        	<div class="column-count"></div>
                            <h3 style="color:#ffffff"><span class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-6.png" alt=""></span> Volunteer</h3>
                            <p>Lorem ipsum dolor sit amet amet audiam copiosaei  mei purto time am mea ne ei </p>
                            
                        </article>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
   <?php
    include 'includes/footer.inc';
    ?>