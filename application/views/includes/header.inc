
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
                        <a id="header_contact" class="phone" href="#">(0800) 123-456-78</a>
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

                        <form method="get" action="<?php echo $root; ?>search_organization">
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

                                <li class="current"><a href="<?php echo $root; ?>Home">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="dropdown"><a href="#">Cause</a>
                                    <ul class="submenu-dropdown">
                                        <li><a href="#">Cause Grid View</a></li>
                                        <li><a href="#">Cause List View</a></li>
                                        <li><a href="#">Cause Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul class="submenu-dropdown">
                                        <li><a href="#">Our Volunteers</a></li>
                                        <li class="dropdown"><a href="#">Events</a>
                                            <ul class="submenu-dropdown">
                                                <li><a href="#">Events Two Column</a></li>
                                                <li><a href="#">Event Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <?php if($loggedInUser){ ?>
                                    <li class=""><a href="<?php echo $root; ?>logout">Logout</a>
                                    <li class=""><a href="<?php echo $root; ?>profile">Profile</a>
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

                                <li><a href="<?php echo $root; ?>contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- Header Lower End-->

    </header><!--End Main Header -->