<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>


  <!--Causes Section-->
    
    <section class="causes-section grid-view">
    	<div class="auto-container">
        	
        	<div class="row clearfix">

                <!--Cause Column-->
            <?php foreach ($results as $key => $value){ ?>
                <div class="column cause-column col-md-3 col-sm-6 col-xs-12" >
                   
                	<article class="inner-box text-center hvr-bounce-in" style="height:520px;">
                		<figure class="image-box">
                        	<a href="#"><img src="<?php echo $root.$value['profile_image_path']; ?>" alt=""></a>
                            <div class="cause-title"></div>
                        </figure>
                        <div class="content-box">
                        	
                            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                
                                
                            </div>
                            <a href="" class="theme-btn btn-style-two" style=";color:#eb5310 !important">Donate</a>
                        </div>
                    </article>
                </div>
               
            <?php } ?>

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





<br />
    <?php
    include 'includes/footer.inc';
    ?>
    
