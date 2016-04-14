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
                                       <a href="#" class="theme-btn btn-style-two">Contact Us</a></div>
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
            	<h2><span class="text-capitalize">How can you <span class="normal-font">help us ?</span></span></h2>
            </div>
        	<div class="row clearfix">
                
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Icon Box-->
                    <div class="icon-heading-column">
                        <article class="inner-box">
                        	<div class="column-count">01</div>
                            <h3><span class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-4.png" alt=""></span> Donator</h3>
                            <p>Lorem ipsum dolor sit amet amet audiam copiosaei  mei purto time am mea ne ei <a href="#" class="read-more">Read More</a></p>
                            
                        </article>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Icon Box-->
                    <div class="icon-heading-column">
                        <article class="inner-box">
                        	<div class="column-count">02</div>
                            <h3><span class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-5.png" alt=""></span> Fundrising</h3>
                            <p>Lorem ipsum dolor sit amet amet audiam copiosaei  mei purto time am mea ne ei <a href="#" class="read-more">Read More</a></p>
                            
                        </article>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Icon Box-->
                    <div class="icon-heading-column">
                        <article class="inner-box">
                        	<div class="column-count">03</div>
                            <h3><span class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-6.png" alt=""></span> Volunteer</h3>
                            <p>Lorem ipsum dolor sit amet amet audiam copiosaei  mei purto time am mea ne ei <a href="#" class="read-more">Read More</a></p>
                            
                        </article>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    <!--Intro Section-->
    <section class="subscribe-intro">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
                <div class="column col-md-9 col-sm-12 col-xs-12">
                	<h2>Subcribe for Newsletter</h2>
                    There are many variations of passages of Lorem Ipsum available but the majority have 
                </div>
                <!--Column-->
                <div class="column col-md-3 col-sm-12 col-xs-12">
                	<div class="text-right padd-top-20">
                		<a href="#" class="theme-btn btn-style-three">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            <div class="col-lg-8 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo"><a href="index-2.html"><img src="images/project_logo.png" class="img-responsive" alt=""></a></div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, eu me seo <br>laboramus, iudico dummy  text.</p>
                                    </div>
                                    
                                    <ul class="contact-info">
                                    	<li><span class="icon fa fa-map-marker"></span> 60 Grant Ave. Carteret NJ 0708</li>
                                        <li><span class="icon fa fa-phone"></span> (880) 1723801729</li>
                                        <li><span class="icon fa fa-envelope-o"></span> example@gmail.com</li>
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
                            <div class="col-lg-4 col-sm-6 col-xs-12 column">
                                <h2>Our Project</h2>
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="#">Water Surve</a></li>
                                        <li><a href="#">Education for all</a></li>
                                        <li><a href="#">Treatment</a></li>
                                        <li><a href="#">Food Serving</a></li>
                                        <li><a href="#">Cloth</a></li>
                                        <li><a href="#">Selter Project</a></li>
                                        <li><a href="#">Help Orphan</a></li>
                                    </ul>
        
                                </div>
                            </div>
                    	</div>
                    </div><!--Two 4th column End-->
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	<div class="col-lg-7 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget news-widget">
                                	<h2>Latest News</h2>	
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                    <div class="news-post">
                                    	<div class="icon"></div>
                                        <div class="news-content"><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                        <div class="time">July 2, 2014</div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                	<h2>Quick Links</h2>
                                    <ul>
                                        <li><a href="#">Water Surve</a></li>
                                        <li><a href="#">Education for all</a></li>
                                        <li><a href="#">Treatment</a></li>
                                        <li><a href="#">Food Serving</a></li>
                                        <li><a href="#">Cloth</a></li>
                                        <li><a href="#">Selter Project</a></li>
                                        <li><a href="#">Help Orphan</a></li>
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
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/knob.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
 
</html>