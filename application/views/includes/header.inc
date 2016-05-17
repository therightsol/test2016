<?php $loggedInUser = $this->session->userdata('loggedInUser'); ?>



<body>


<div class="page-wrapper">
 	
    <!-- Preloader -->
    
    
 	
    <!-- Main Header -->
    <header class="main-header">
    	<!-- Header Upper -->
    	<div class="header-upper">
        	<div class="auto-container clearfix">
            	<!-- Logo -->
                <div class="logo">
                    <a href="<?php echo $root; ?>Home">
                        <img src="<?php echo $root; ?>assets/images/project_logo.png" alt="logo"></a>
                 </div>
                 
                 <!--Info Outer-->
                 <div class="info-outer">
                 	<!--Info Box-->
                    <div class="info-box">
                    	<div class="icon"><span class="flaticon-interface"></span></div>
                        <strong>EMAIL</strong>
                        <a id="header_mail" href="mailto:alishanvr@gmail.com">alishanvr@gmail.com</a>
                    </div>
                    <!--Info Box-->
                    <div class="info-box">
                    	<div class="icon"><span class="flaticon-technology"></span></div>
                        <strong>Call Now</strong>
                        <a id="company_phone1" class="phone" href="#">(732) 803-01 03</a>
                    </div>
                    <!--Info Box-->
                    <div class="info-box social-box">
                    	<div class="social-links-one clearfix">
                        	<a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                            <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                            <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                 </div>
                
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">

                <!--Outer Box-->
                <div class="outer-box clearfix">

                    <!--Search Box-->
                    <div class="search-box">
                    	<!--Toggle Btn-->
                    	<div class="search-box-toggle"><span class="fa fa-search"></span></div>

                    	<form method="get" action="<?php echo base_url().'search_organization' ?>">
                        	<div class="form-group">
                            	<input type="search" name="search" value="" placeholder="Search here...">
                                <button type="submit"><span class="icon flaticon-tool"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Main Menu -->
                    <nav class="main-menu">

                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                                <li><a href="<?php echo $root; ?>Home">Home</a></li>
<?php $username = $this->session->userdata('username'); ?>


                                <li><a href="<?php echo $root; ?>Contact">Contact Us</a></li>

                                  <li <?php if (!empty($username) && $loggedInUser == 'is_organization') { ?> class="dropdown" <?php } ?> ><a href="<?php echo $root; ?>campaigns_view/all">Campaign</a>
                                    <?php $username = $this->session->userdata('username');
                                         if (!empty($username) && $loggedInUser == 'is_organization') { ?>
                                      <ul class="submenu-dropdown">
                                        <li><a href="<?php echo $root; ?>Campaign_add">Add new Campaign</a></li>
                                        
                                        <li><a href="<?php echo $root; ?>Campaign_update/view">Update/Delete Campaign</a></li>
                                    </ul>
                                    <?php } ?>
                                </li>
                                
                               <!-- <li <?php// if (!empty($username)) { ?> class="dropdown" <?php// } ?> ><a href="<?php //echo $root; ?>Causes/view">Cause</a>
                                    <?php //$username = $this->session->userdata('username');
                                         //if (!empty($username)) { ?>
                                    <ul class="submenu-dropdown">
                                        <li><a href="<?php// echo $root; ?>Causes/view">Cause View</a></li>
                                        <li><a href="<?php //echo $root; ?>Add_Causes">Add new Cause</a></li>
                                        <li><a href="<?php //echo $root; ?>Cause_update/view">Update/Delete Cause</a></li>
                                    </ul>
                                         <?php //} ?>
                                </li> -->
                                <li <?php if (!empty($username) && $loggedInUser == 'is_organization') { ?> class="dropdown" <?php } ?> ><a href="<?php echo $root; ?>Donations/all">Donation</a>
                                 <?php $username = $this->session->userdata('username');
                                 if (!empty($username) && $loggedInUser == 'is_organization') { ?>
                                    <ul class="submenu-dropdown">
                                        <li><a href="<?php echo $root; ?>Donation_adds">Add Donations Ads</a></li>
                                        <li><a href="<?php echo $root; ?>Donation_update/view">Update/Delete My donation Ads</a></li>

                                    </ul>
                                     <?php } ?>
                                </li>
                                <?php if($loggedInUser == 'is_member' || $loggedInUser == 'is_organization'){ ?>
                                <li class=""><a href="<?php echo $root; ?>profile">Profile</a>
                                    <?php } ?>
                                    <?php if($loggedInUser){ ?>
                                <li class=""><a href="<?php echo $root; ?>logout">Logout</a>

                                </li>
                            <?php }else{ ?>
                                <li class="dropdown"><a href="#">Register</a>
                                    <ul class="submenu-dropdown">
                                        <li><a href="<?php echo $root; ?>Register_member">Register as member</a></li>
                                        <li><a href="<?php echo $root; ?>Register_organization">Register as organization</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="<?php echo $root; ?>">Login</a>
                                    <ul class="submenu-dropdown">
                                        <li><a href="<?php echo $root; ?>Login/Login_organization">Login as organization</a></li>
                                        <li><a href="<?php echo $root; ?>Login/Login_member">Login as member</a></li>
                                    </ul>
                                </li>
                            <?php } ?>

                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div><!-- Header Lower End-->
        
    </header><!--End Main Header -->