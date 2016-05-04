<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Recent <span class="normal-font">Donation Ads</span></h1>
                <div class="bread-crumb"><a href="<?php echo $root; ?>Home">Home</a> / <a href="#" class="current">Recent Donation Ads</a></div>
            </div>
        </div>
    </section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	<div class="row clearfix">
                      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Causes Section-->
                    <section class="causes-section no-padd-bottom no-padd-top list-view">
                        
                        <div class="clearfix">
            	
                <!--Content Side-->	
                <?php 
                
        foreach($viewdonation as $key => $value){ 
           
            if($value['is_approved'] == 1){
            ?>
              
                            
                            <!--Cause Column-->
                            <div class="column cause-column">
                                <article class="inner-box clearfix">
                                    <figure class="image-box">
                                        <a href="#"><img src="<?php echo $root.$value['donation_image_path']; ?>" alt=""></a>
                                    </figure>
                                    <div class="content-box">
                                        <div class="cause-title"><?php echo $value['donation_title']; ?></div>
                                        <div class="donation-progress-box">
                                            <div class="donation-values">
                                                Donation :  <span class="value">$<?php echo $value['amount_collected']; ?></span> / <span class="value">$<?php echo $value['total_required_amount']; ?></span>
                                            </div>
                                            <div class="donation-progress-bar">
                                                <div class="inner-bar" data-value-collected="<?php echo $value['amount_collected']; ?>" data-value-total="<?php echo $value['total_required_amount']; ?>"></div>
                                            </div>
                                        </div>
                                        <div class="text"><?php echo $value['donation_short_description']; ?></div>
                                        <a href="<?php echo $root; ?>Donation_form/donation/<?php echo $value['donation_id']; ?>" class="theme-btn btn-style-two">Donate</a>
                                    </div>
                                </article>
                            </div>
                            
                          
                            
        <?php
            }
            
            else{ ?>
                       
                            
                           
        <?php } } ?>
                        <!-- Styled Pagination -->
                            <div class="styled-pagination text-center margin-bott-40">
                                <ul>
                                    <?php foreach ($links as $link) { ?>
                                        <?php echo  $link; ?>
                                    <?php } ?>
                                </ul>
                            </div>
                    </section>
                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar	
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                    -->
                        <!-- Search Form -->
                        
                        <!-- Recent Posts 
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
                       
                        
                       
                      
               
                
                
            </div>
        </div>
    </div>
    
    -->
       </div>
                </div>
    </div>
    <!--Urgent Cause Section-->
    <section class="urgent-cause" style="background-image:url(<?php echo $root; ?>assests/images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
               <?php  foreach($viewdonation as $key => $value)
                   ?>
                   
                <!--Column-->
                <div class="column col-lg-6 col-md-6 col-xs-12">
                	<article class="inner-box">
                		<h2 class="text-uppercase">Urgent <span class="normal-font">Donation</span></h2>
                        <h3 class="theme_color">Donate now to <?php echo $value['donation_title']; ?></h3>    
                        <p><?php echo $value['donation_short_description']; ?>... </p>
                        <a href="<?php echo $root; ?>Donation_form/donation/<?php echo $value['donation_id']; ?>" class="theme-btn btn-style-one">Donate</a>
                        
                    </article>
                </div>
                
                <!--Column-->
                <div class="column circular-graph col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="graph-outer">
                            <?php $a =$value['total_required_amount'];
                           
                                  $b =$value['amount_collected'];
                                   $c = 100;
                                    $completed = ($b*$c)/$a;
                            ?>
                            <input type="text" class="dial" data-fgColor="#fb5e1c" data-bgColor="none" data-width="220" data-height="220" data-linecap="round"  value="<?php echo $completed ?>">
                            <div class="inner-text"><span class="exbold-font"><?php //echo //$completed ?></span><sub>%</sub><br><span class="status">Completed</span></div>
                        </div>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-lg-3 col-md-12 col-xs-12">
                    <div class="inner-box">
                        <ul class="cause-list">
                        	
                            <li class="clearfix"><span class="pull-left">Cash -</span> <strong class="pull-right">$45,800</strong></li>
                            <li class="clearfix"><span class="pull-left">In Progress -</span> <strong class="pull-right">$<?php echo $value['amount_in_progress']; ?></strong></li>
                            <li class="clearfix"><span class="pull-left">Sponsor -</span> <strong class="pull-right">$85,000</strong></li>
                        </ul>
                        <div class="total-collected">$<?php echo $value['amount_collected']; ?> <sub>Collected</sub></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

         
  
    
 
    <?php
    include 'includes/footer.inc';
    ?>
    