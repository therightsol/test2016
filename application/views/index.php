<?php
include 'includes/head.inc';




include 'includes/header.inc';
?>

    <!--Main Slider-->
    <section class="main-slider revolution-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <?php foreach($slider as $key => $value){ ?>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo $root; ?>uploads/slider/<?php echo $value['image_dimension'] ?>"  data-saveperformance="off"  data-title="">
                            <img src="<?php echo $root; ?>uploads/slider/<?php echo $value['image_dimension'] ?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


                            <div class="tp-caption sfl sfb tp-resizeme"
                                 data-x="left" data-hoffset="15"
                                 data-y="center" data-voffset="-100"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h3 class="bg-theme">Helping children by donate us!!</h3></div>

                            <div class="tp-caption sfr sfb tp-resizeme"
                                 data-x="left" data-hoffset="15"
                                 data-y="center" data-voffset="-40"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="bg-dark-theme text-uppercase">Change a Child’s Life</h1></div>

                            <div class="tp-caption sfl sfb tp-resizeme"
                                 data-x="left" data-hoffset="15"
                                 data-y="center" data-voffset="23"
                                 data-speed="1500"
                                 data-start="1500"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2 class="bg-dark-theme">Change the future of their entire family</h2></div>

                            <div class="tp-caption sfl sfb tp-resizeme"
                                 data-x="left" data-hoffset="15"
                                 data-y="center" data-voffset="100"
                                 data-speed="1500"
                                 data-start="2000"
                                 data-easing="easeOutExpo"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.3"
                                 data-endspeed="1200"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"> <!--<a href="#" class="theme-btn rounded-btn">Donate Now</a> --></div>


                        </li>

                    <?php } ?>


                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>


    <!--Urgent Cause Section-->
    <section class="urgent-cause" style="background-image:url(<?php echo $root; ?>assets/images/parallax/image-1.jpg);">
        <div class="auto-container">
           <!-- <div class="row clearfix">
                 <?php
           // foreach($viewdon as $key => $value)
            //foreach($viewcause as $key => $value)
                ?>
                
                <div class="column col-lg-4 col-md-6 col-xs-12">
                    <article class="inner-box">
                        <h2 class="text-uppercase">Urgent <span class="normal-font">Cause</span></h2>
                        <h3 class="theme_color">Donate $45 now to <?php //echo $value['cause_title']; ?></h3>
                        <p><?php //echo $value['cause_short_description']; ?></p>
                        <a href="<?php //echo $root; ?>Donation_form/donation/<?php //echo $value['cause_id']; ?>" class="theme-btn btn-style-one">Donate</a>
                        <a href="<?php //echo $root ; ?>Causes" class="theme-btn btn-style-two">View More Causes</a>
                    </article>
                </div>

              
                <div class="column circular-graph col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box">
                        <div class="graph-outer">
                              <?php// $a =$value['total_required_amount'];

                                  //$b =$value['amount_collected'];
                                  // $c = 100;
                                   // $completed = ($b*$c)/$a;
                            ?>
                            <input type="text" class="dial" data-fgColor="#fb5e1c" data-bgColor="none" data-width="220" data-height="220" data-linecap="round"  value="<?php echo $completed ?>">
                            <div class="inner-text"><span class="exbold-font"></span><sub></sub><br><span class="status">Completed</span></div>
                        </div>
                    </div>
                </div>

               
                <div class="column col-lg-3 col-md-12 col-xs-12">
                    <div class="inner-box">
                        <ul class="cause-list">

                            <li class="clearfix"><span class="pull-left">Cash -</span> <strong class="pull-right">$45,800</strong></li>
                            <li class="clearfix"><span class="pull-left">In Progress -</span> <strong class="pull-right"><?php //echo $value['amount_in_progress']; ?></strong></li>
                            <li class="clearfix"><span class="pull-left">Sponsor -</span> <strong class="pull-right">$85,000</strong></li>
                        </ul>
                        <div class="total-collected">$<?php //echo $value['amount_collected']; ?> <sub>Collected</sub></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
-->

    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Column-->
                <div class="column icon-left-column col-md-8 col-sm-6 col-xs-12 col-md-offset-2">
                    <article class="inner-box">
                        <div class="icon"><img src="<?php echo $root; ?>assets/images/icons/icon-1.png" alt=""></div>
                        <h3 style="color:#fa6628">Donator</h3>
                        <p style="color:#000">Lorem ipsum dolor sit amet et siu amet audiam copiosaei mei purto timeam mea ne Ei justo.</p>
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


    <!--Default Section-->



    <!--Causes Section
    <section class="causes-section grid-view bg-light-grey">
        <div class="auto-container">

            <div class="sec-title clearfix">
                <div class="pull-left">
                    <h2>RECENT <span class="normal-font">Causes</span></h2>

                </div>
                <div class="pull-right padd-top-20">
                    <a href="<?php //echo $root ?>Causes" class="theme-btn btn-style-two">See all causes</a>
                </div>
            </div>
            <div class="row clearfix">

                
                <?php
       // foreach($viewcause as $key => $value){ ?>
                <div class="column cause-column col-md-3 col-sm-6 col-xs-12 wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <article class="inner-box text-center hvr-bounce-in">
                        <figure class="image-box">
                            <a href="#"><img src="<?php// echo $root.$value['cause_image_path']; ?>" alt=""></a>
                            <div class="cause-title"><?php //echo $value['cause_title']; ?></div>
                        </figure>
                        <div class="content-box">
                            <div class="donation-progress-box">
                                <div class="donation-values">
                                    Donation :  <span class="value">$<?php //echo $value['amount_collected']; ?></span> / <span class="value">$<?php echo $value['total_required_amount']; ?></span>
                                </div>
                                <div class="donation-progress-bar">
                                    <div class="inner-bar" data-value-collected="<?php //echo $value['amount_collected']; ?>" data-value-total="<?php echo $value['total_required_amount']; ?>"></div>
                                </div>
                            </div>
                            <div class="text"><?php// echo $value['cause_short_description']; ?></div>
                            <a href="<?php// echo $root; ?>Donation_form/donation/<?php //echo $value['cause_id']; ?>" class="theme-btn btn-style-two">Donate</a>
                        </div>
                    </article>
                </div>

           
-->



           
        
<?php// } ?>
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

                   <p style="margin-left:200px;">
                   It's not how much we give but how much love we put into giving.”
                   <h3 style="margin-left:200px;">― Mother Teresa </h3></p>

                </div>
                <!--Column-->
                <div class="column col-md-3 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
    </section>


    <!--Events Section
    <section class="events-section upcoming-events">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Upcoming <span class="normal-font">Event</span></h2>
                <div class="text">Lorem ipsum dolor sit amet, cum at inani interesset, nisl fugit munere ad mel,vix an omnium </div>
            </div>
            <div class="row clearfix">

                
                <div class="column event-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <figure class="image-box">
                            <a href="#"><img src="<?php //echo $root; ?>assets/images/resource/featured-image-7.jpg" alt=""></a>
                        </figure>
                        <div class="content-box">
                            <h3><a href="#">Clean Water for Children</a></h3>
                            <div class="event-info">13-14 Feb in Sanfransico, CA</div>
                            <div class="text">Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae seo eum in simul homero. Duo consul probatus no qu alterum sit at no simple dummy.</div>
                            <a href="#" class="theme-btn btn-style-two">Read More</a>
                        </div>
                    </article>
                </div>

               
                <div class="column event-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <figure class="image-box">
                            <a href="#"><img src="<?php //echo $root; ?>assets/images/resource/featured-image-8.jpg" alt=""></a>
                        </figure>
                        <div class="content-box">
                            <h3><a href="#">Clean Water for Children</a></h3>
                            <div class="event-info">13-14 Feb in Sanfransico, CA</div>
                            <div class="text">Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae seo eum in simul homero. Duo consul probatus no qu alterum sit at no simple dummy.</div>
                            <a href="#" class="theme-btn btn-style-two">Read More</a>
                        </div>
                    </article>
                </div>

                
                <div class="column event-column links-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <div class="vertical-links-outer">
                            <a href="#" class="link-block"><strong>Togather we can change the</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            <a href="#" class="link-block"><strong>Urgent Clothe Needed</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            <a href="#" class="link-block active"><strong>Little Help Can Make Them</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                            <a href="#" class="link-block"><strong>Share Your Happiness</strong><span class="desc">Lorem ipsum dolor sit amet et siu amet sio audiam si copiosaei mei purto </span></a>
                        </div>
                    </article>
                </div>


            </div>
        </div>
    </section>

 -->
    <!--Two Column Fluid -->
    <section class="two-column-fluid">


        <div class="outer clearfix">


            <article class="column text-column">

                <div class="content-box pull-right">
                    <h2>Our <span class="normal-font">IMPACT</span></h2>
                    <div class="bigger-text">Lorem ipsum dolor sit amet, cum at inani interesset, nisl</div>
                    <div class="text">We’re extremely proud of what we’ve achieved together with charities, individuals, philanthropists and schools since the Big Give was founded in 2007, and here are some fact from our achivemnet.</div>
                    <br>

                    <div class="clearfix">
                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-technology-1"></span></div>
                            <div class="lower-box">
                                <h4>$<span class="count-text" data-stop="7845910" data-speed="1500"><?php echo $total_Donations ?></span></h4>
                                <span class="title">Donation Ads</span>
                            </div>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-sheet"></span></div>
                            <div class="lower-box">
                                <h4>$<span class="count-text" data-stop="13360" data-speed="1500"><?php echo $total_causes ?></span></h4>
                                <span class="title">Total Causes</span>
                            </div>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><span class="flaticon-favorite"></span></div>
                            <div class="lower-box">
                                <h4>$<span class="count-text" data-stop="78459" data-speed="1500"><?php echo $total_campaigns ?></span></h4>
                                <span class="title">Campaigns Ads</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </article>

            <article class="column text-column dark-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url(<?php echo $root; ?>assets/images/background/image-2.jpg);">

                <div class="content-box pull-left">
                    <h3>Sponsor This Project</h3>
                    <h2>Help us to create  shelter for homeless  childrean on Africa</h2>
                    <div class="text">We’re extremely proud of what we’ve achieved together with charities, individuals, philanthropists and schools since the Big Give was founded in 2007, and here are some fact from our achivemnet.</div>
                    <a href="<?php echo $root; ?>Campaigns_view" class="theme-btn btn-style-one">View Campaign</a>
                    <a href="<?php echo $root ?>Donations" class="theme-btn btn-style-three">Donation Ads</a>
                </div>

                <div class="clearfix"></div>
            </article>

        </div>

    </section>


    <!--Blog News Section
    <section class="blog-news-section latest-news">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2 style="color:#fa6628">Latest <span class="normal-font">Campaign Ads</span></h2>
                <div class="text" style="color:#ffffff" > </div>
            </div>
            <div class="row clearfix">
                <?php
            //foreach($viewcamp as $key => $value)
            //{
                ?>


                
                <div class="column blog-news-column col-lg-3 col-md-3 col-sm-4 col-xs-12" style="text-align:center">
                    <article class="inner-box">
                        <figure class="image-box">
                            <a href="#"><img class="img-responsive" style="height: 200px;" src="<?php// echo $root.$value['campaign_image_path']; ?>" alt=""></a>
                        </figure>
                        <div class="content-box">
                            <div class="post-info clearfix">
                                <div class="post-time" style="font-weight:bold;margin-left:20px;"><?php //echo $value['campaign_insert_date']; ?></div>
                                <div class="post-options clearfix">
                                    <a href="#" class="comments-count" ><span class="icon flaticon-interface-1"></span> 6</a>
                                    <a href="#" class="fav-count" style="margin-right:20px;"><span class="icon flaticon-favorite"></span> 14</a>
                                </div>
                            </div>
                            <h3><a href="<?php// echo $root; ?>Campaigns_view"><?php// echo $value['campaign_title']; ?></a></h3>
                            <div class="text"><?php// echo $value['campaign_short_description']; ?></div>
                            <a href="<?php// echo $root; ?>Campaigns_view/view/<?php //echo $value['campaign_id']; ?>" class="theme-btn btn-style-two">Read More</a>
                            <br />
                            <br />
                        </div>
                    </article>
                </div>
<?php //} ?>




            </div>
        </div>
    </section>
-->

    <!--Contact Section-->
    <?php
    $loggedInUser = $this->session->userdata('loggedInUser');
    ?>



    <!--Contact Section-->
    <section class="contact-section extended" style="background-image:url(assets/images/background/map-image.jpg);">
    	<div class="auto-container">

			<div class="inner-container">

                <h1 style="text-align:center;font-weight:bold;">Contact <span>us</span></h1>


                <div class="sec-title text-center">
                    <div class="text">Lorem ipsum dolor sit amet, quas elitr voluptaria ei eos. Quo eu decore nusquam iudicabit, eos an aliquam maiorum. Ei eum simul integre, no eum quem fabellas, duo phaedrum consequat efficiantur ex. Ne vis nusquam. </div>
                </div>

                <!--Contact Info-->
                <div class="contact-info row clearfix">
                	<!--Info COlumn-->
                    <div class="info-column col-lg-4 col-md-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon"><span class="flaticon-location"></span></div>
                            <h4>ADDRESS</h4>
                            <span class="com_address">
                              Mirpur New Bazar Road,<br>
                            Block-c, Dhaka-1210
                            </span>

                        </div>
                    </div>

                    <!--Info COlumn-->
                    <div class="info-column col-lg-4 col-md-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon"><span class="flaticon-technology"></span></div>
                            <h4>Phone</h4>
                            <span id="com_phone">
                                (732) 803-01 03, (732) 806-01 04, (880)172380129
                            </span>
                        </div>
                    </div>

                    <!--Info COlumn-->
                    <div class="info-column col-lg-4 col-md-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon"><span class="flaticon-interface"></span></div>
                            <h4>Email</h4>
                            <span id="com_mail">

                            </span>
                        </div>
                    </div>
                </div>

                <!--Form Container-->
                <div class="contact-form-container wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2500ms">
                <?php if ($success == ''){ ?>
                    <?php if ($error != ''){ ?>
                        <div class="alert alert-danger">
                            Temporary Error!<br>
                            kindly try again
                        </div>
                    <?php } ?>
                    <form method="post" action="<?php echo $root; ?>contact" id="contact-form">

                        <div class="row clearfix">
                            <div class="column col-md-6 col-sm-12 col-xs-12">
                            	<div class="form-group">
                                	<input type="text" name="name" required value="" placeholder="Name">
                                    <span style="color:#ff0000"><?php if($_POST){ if(form_error('name') ) { echo form_error('name'); } } ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required value="" placeholder="Email">
                                    <span style="color:#ff0000"><?php if($_POST){ if(form_error('email') ) { echo form_error('email'); } } ?></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="number" value="" placeholder="Phone">
                                    <span style="color:#ff0000"><?php if($_POST){ if(form_error('number') ) { echo form_error('number'); } } ?></span>
                                </div>
                            </div>

                            <div class="column col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" required placeholder="Your Message"></textarea>
                                    <span style="color:#ff0000"><?php if($_POST){ if(form_error('message') ) { echo form_error('message'); } } ?></span>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-xs-12">
                                <div style="color:#ff0000"><button type="submit" name="submit" class="theme-btn btn-style-two">SEND Message</button></div>
                            </div>

                        </div>
                        <?php }else{ ?>
                            <div class="alert alert-success">
                                Thank you for Contact us!
                            </div>
                        <?php } ?>
                    </form>
                </div>

            </div>
        </div>
    </section>

<?php
include 'includes/footer.inc';
?>
