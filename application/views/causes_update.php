    <?php 
        include 'includes/head.inc';
        
        include 'includes/header.inc';
        ?>
<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
            
        	<div class="sec-title">
                <h1>Recent <span class="normal-font">Causes</span></h1>
                <div class="bread-crumb"><a href="<?php echo $root;?>Home">Home</a> / <a href="#" class="current">Recent Causes</a></div>
            </div>
        </div>
        <!--Down Arrow-->
        <div class="down-arrow scroll-to-target" data-target=".scroll-to-this"></div>
    </section>
    
  
    <!--Causes Section-->
    
    <section class="causes-section grid-view">
    	<div class="auto-container">
        	   <?php $username = $this->session->userdata('username');
                                         if (!empty($username)) { ?>
        	<div class="row clearfix">
                
                <!--Cause Column-->
                 <?php 
        foreach($viewcause as $key => $value){ ?>
                <div class="column cause-column col-md-3 col-sm-6 col-xs-12" >
                   
                	<article class="inner-box text-center hvr-bounce-in" style="height:500px;">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $root.$value['cause_image_path']; ?>" alt=""></a>
                            <div class="cause-title"><?php echo $value['cause_title']; ?></div>
                        </figure>
                        <div class="content-box">
                        	<div class="donation-progress-box">
                            	<div class="donation-values">
                                	Donation :  <span class="value"><?php echo $value['amount_collected']; ?></span> / <span class="value"><?php echo $value['total_required_amount']; ?></span>
                                </div>
                                
                                	<div class="inner-bar" data-value-collected="68214" data-value-total="85870"></div>
                                
                            </div>
                            <div class="text"><?php echo $value['cause_short_description']; ?></div>
                            <a href="<?php echo $root; ?>Cause_update/update/<?php echo $value['cause_id']; ?>" class="theme-btn btn-style-two" style=";color:#eb5310 !important">Update</a>
                            <br />
                            <br />
                            <a href="<?php echo $root; ?>Cause_update/delete_cause/<?php echo $value['cause_id']; ?>" class="theme-btn btn-style-two" style=";color:#eb5310 !important"> Delete</a>
                        </div>
                    </article>
                </div>
                <?php } ?>
               
                    </article>
                </div>
                
            </div>
        

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center margin-bott-40">
                <ul>
                    <li><a class="prev" href="#"><span class="fa fa-angle-left"></span>&ensp;Prev</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">....</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">11</a></li>
                    <li><a href="#">12</a></li>
                    <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
                    
        </div>
    </section>
    
    <!--Urgent Cause Section-->
    <section class="urgent-cause" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
                
                <!--Column-->
                <div class="column col-lg-6 col-md-6 col-xs-12">
                	<article class="inner-box">
                		<h2 class="text-uppercase">Urgent <span class="normal-font">Cause</span></h2>
                        <h3 class="theme_color">Donate $45 now to feed a Syrian Children</h3>    
                        <p>Every individual has the right to eat at least one meal a day. Due to the on-going refugee crisis in Syria tens of thousands... </p>
                        <a href="#" class="theme-btn btn-style-one">Donate</a>
                        <a href="#" class="theme-btn btn-style-two">View Details</a>
                    </article>
                </div>
                
                <!--Column-->
                <div class="column circular-graph col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="graph-outer">
                            <input type="text" style="background-color:#eb5310;color:#fff;font-weight:bold;text-align:center" class="dial" data-fgColor="#fb5e1c" data-bgColor="" data-width="220" data-height="220" data-linecap="round"  value="92">
                            <div class="inner-text"><span class="exbold-font">92</span><sub>%</sub><br><span class="status">Completed</span></div>
                        </div>
                    </div>
                </div>
                
                <div class="column col-lg-3 col-md-12 col-xs-12">
                	<div class="inner-box">
                        <ul class="cause-list">
                            <li class="clearfix"><span class="pull-left">Dontators -</span> <strong class="pull-right">78</strong></li>
                            <li class="clearfix"><span class="pull-left">Dontators -</span> <strong class="pull-right">78</strong></li>
                            <li class="clearfix"><span class="pull-left">Cash -</span> <strong class="pull-right">$45,800</strong></li>
                            <li class="clearfix"><span class="pull-left">In Progress -</span> <strong class="pull-right">$12,400</strong></li>
                            <li class="clearfix"><span class="pull-left">Sponsor -</span> <strong class="pull-right">$85,000</strong></li>
                        </ul>
                    	<div class="total-collected">$1,25,850 <sub>Collected</sub></div>
                    </div>
				</div>
                
            </div>
        </div>
                                         <?php } else{ ?>
        <div class="col-sm-6 col-sm-offset-3">
            <div class="alert alert-danger" style="text-align: center">
                
                <strong>  You do not have sufficient permissions to access this page </strong><br />
                
            </div>
      </div>
            <br /><br />
            <br />
                  <?php }?>
    </section>
    <br/>
     <?php
    include 'includes/footer.inc';
    ?>