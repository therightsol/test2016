<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Recent <span class="normal-font">Campaign</span></h1>
                <div class="bread-crumb"><a href="<?php echo $root;?>Home">Home</a> / <a href="#" class="current">Recent Campaign</a></div>
            </div>
        </div>
        <!--Down Arrow-->
        <div class="down-arrow scroll-to-target" data-target=".scroll-to-this"></div>
    </section>
    
    
    <!--Causes Section-->
    
    <section class="causes-section grid-view">
    	<div class="auto-container">
        	
        	<div class="row clearfix">
                
                <!--Cause Column-->
                 <?php 
        foreach($viewcamp as $key => $value){ ?>
                <div class="column cause-column col-md-3 col-sm-6 col-xs-12" >
                   
                	<article class="inner-box text-center hvr-bounce-in" style="height:430px;">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $root.$value['campaign_image_path']; ?>" alt="" class="img-responsive"></a>
                            <div class="cause-title"><?php echo $value['campaign_title']; ?></div>
                        </figure>
                        <div class="content-box">
                        	
                            <div class="text"><?php echo $value['campaign_short_description']; ?></div>
                            <a href="<?php echo $root; ?>Campaigns_view/view/<?php echo $value['campaign_id']; ?>" class="theme-btn btn-style-two" style=";color:#eb5310 !important">View Detail</a>
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
                <?php foreach ($links as $link) { ?>
                    <?php echo  $link; ?>
                <?php } ?>
            </ul>
        </div>
                    
        </div>
    </section>
    
    
               
				
                
           
    
    <?php
    include 'includes/footer.inc';
    ?>
</html>
