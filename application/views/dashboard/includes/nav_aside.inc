<ul class="page-sidebar-menu">
    <li class="sidebar-toggler-wrapper">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone">
        </div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>

    <li class="start ">
        <a href="#">
            <i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
        </a>
         <a href="<?php echo $root; ?>dashboard/update">
            <i class="fa fa-edit"></i>
					<span class="title">
						Update Profile
					</span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo $root; ?>dashboard/general">
            <i class="fa fa-bookmark-o"></i>
					<span class="title">
						General
					</span>
        </a>

    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-user"></i>
					<span class="title">
						Users
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo $root; ?>dashboard/member">

								Member
							</a>
            </li>
            <li>
                <a href="<?php echo $root; ?>dashboard/organization">

                    Organization

                </a>
            </li>
            <li>
                <a href="<?php echo $root; ?>dashboard/all_users">

                    All

                </a>
            </li>
            <li>
                <a  href="javascript:;">

                    Add New
<span class="arrow ">
					</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo $root; ?>dashboard/add_member">
                            Member
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $root; ?>dashboard/add_organization">
                            Organization
                        </a>
                    </li>
                </ul>
            </li>

         </ul>

    </li>
    <li class="">
        <a  href="javascript:;" >
            <i class="fa fa-venus-double"></i>
					<span class="title">
						Donation
					</span>
            <span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo $root; ?>dashboard/approve_donation">
                    Edit
                </a>
            </li>
            <li>
                <a href="<?php echo $root; ?>dashboard/add_donation">
                    Add
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="<?php echo $root; ?>dashboard/slider_images">
            <i class="fa fa-image"></i>
					<span class="title">
						Slider Images
					</span>
        </a>
    </li>
 
    <li class="">
        <a  href="javascript:;" >
            <i class="fa fa-venus-double"></i>
					<span class="title">
						Campaign
					</span>
            <span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo $root; ?>dashboard/campaigns">
                    Update / Delte
                </a>
            </li>
            <li>
                <a href="<?php echo $root; ?>dashboard/add_campaigns">
                    Add
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="<?php echo $root; ?>dashboard/logout">
            <i class="fa fa-clone"></i>
					<span class="title">
						Logout
					</span>
        </a>

    </li>
    <!--<li class="">
        <a href="javascript:;">
            <i class="fa fa-cogs"></i>
					<span class="title">
						Layouts
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/layout_session_timeout.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
                    Session Timeout</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_idle_timeout.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
                    User Idle Timeout</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_language_bar.html">
                    Language Switch Bar</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_horizontal_sidebar_menu.html">
                    Horizontal & Sidebar Menu</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_horizontal_menu1.html">
                    Horizontal Menu 1</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_horizontal_menu2.html">
                    Horizontal Menu 2</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_search_on_header.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
                    Search Box On Header</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_sidebar_toggler_on_header.html">
                    Sidebar Toggler On Header</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_sidebar_reversed.html">
							<span class="badge badge-roundless badge-success">
								new
							</span>
                    Right Sidebar Page</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_sidebar_fixed.html">
                    Sidebar Fixed Page</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_sidebar_closed.html">
                    Sidebar Closed Page</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_disabled_menu.html">
                    Disabled Menu Links</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_blank_page.html">
                    Blank Page</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_boxed_page.html">
                    Boxed Page</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_boxed_not_responsive.html">
                    Non-Responsive Boxed Layout</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_promo.html">
                    Promo Page</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_email.html">
                    Email Templates</a>
            </li>
            <li>
                <a href="../../../metronic_admin/layout_ajax.html">
                    Content Loading via Ajax</a>
            </li>
        </ul>
    </li>
    <li id="frontend-link" class="tooltips" data-placement="right" data-original-title="Frontend&nbsp;Theme For&nbsp;Metronic&nbsp;Admin">
        <a href="http://keenthemes.com/preview/index.php?theme=metronic_frontend" target="_blank">
            <i class="fa fa-gift"></i>
					<span class="title">
						Frontend Theme
					</span>
        </a>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-bookmark-o"></i>
					<span class="title">
						UI Features
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/ui_general.html">
                    General</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_buttons.html">
                    Buttons & Icons</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_typography.html">
                    Typography</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_modals.html">
                    Modals</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_extended_modals.html">
                    Extended Modals</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_tabs_accordions_navs.html">
                    Tabs, Accordions & Navs</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_datepaginator.html">
							<span class="badge badge-roundless badge-success">
								new
							</span>
                    Date Paginator</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_bootbox.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
                    Bootbox Dialogs</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_tiles.html">
                    Tiles</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_toastr.html">
                    Toastr Notifications</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_tree.html">
                    Tree View</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_nestable.html">
                    Nestable List</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_ion_sliders.html">
                    Ion Range Sliders</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_noui_sliders.html">
                    NoUI Range Sliders</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_jqueryui_sliders.html">
                    jQuery UI Sliders</a>
            </li>
            <li>
                <a href="../../../metronic_admin/ui_knob.html">
                    Knob Circle Dials</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-table"></i>
					<span class="title">
						Form Stuff
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/form_controls.html">
                    Form Controls</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_layouts.html">
                    Form Layouts</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_component.html">
                    Form Components</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_editable.html">
							<span class="badge badge-roundless badge-warning">
								new
							</span>
                    Form X-editable</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_wizard.html">
                    Form Wizard</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_validation.html">
                    Form Validation</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_image_crop.html">
							<span class="badge badge-roundless badge-important">
								new
							</span>
                    Image Cropping</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_fileupload.html">
                    Multiple File Upload</a>
            </li>
            <li>
                <a href="../../../metronic_admin/form_dropzone.html">
                    Dropzone File Upload</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-sitemap"></i>
					<span class="title">
						Pages
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/page_portfolio.html">
                    <i class="fa fa-briefcase"></i>
							<span class="badge badge-warning badge-roundless">
								new
							</span>
                    Portfolio</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_timeline.html">
                    <i class="fa fa-clock-o"></i>
							<span class="badge badge-info">
								4
							</span>
                    Timeline</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_coming_soon.html">
                    <i class="fa fa-cogs"></i>
                    Coming Soon</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_blog.html">
                    <i class="fa fa-comments"></i>
                    Blog</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_blog_item.html">
                    <i class="fa fa-font"></i>
                    Blog Post</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_news.html">
                    <i class="fa fa-coffee"></i>
							<span class="badge badge-success">
								9
							</span>
                    News</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_news_item.html">
                    <i class="fa fa-bell"></i>
                    News View</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_about.html">
                    <i class="fa fa-group"></i>
                    About Us</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_contact.html">
                    <i class="fa fa-envelope-o"></i>
                    Contact Us</a>
            </li>
            <li>
                <a href="../../../metronic_admin/page_calendar.html">
                    <i class="fa fa-calendar"></i>
							<span class="badge badge-important">
								14
							</span>
                    Calendar</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-gift"></i>
					<span class="title">
						Extra
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/extra_profile.html">
                    User Profile</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_lock.html">
                    Lock Screen</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_faq.html">
                    FAQ</a>
            </li>
            <li>
                <a href="../../../metronic_admin/inbox.html">
							<span class="badge badge-important">
								4
							</span>
                    Inbox</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_search.html">
                    Search Results</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_invoice.html">
                    Invoice</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_pricing_table.html">
                    Pricing Tables</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_404_option1.html">
                    404 Page Option 1</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_404_option2.html">
                    404 Page Option 2</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_404_option3.html">
                    404 Page Option 3</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_500_option1.html">
                    500 Page Option 1</a>
            </li>
            <li>
                <a href="../../../metronic_admin/extra_500_option2.html">
                    500 Page Option 2</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="active" href="javascript:;">
            <i class="fa fa-leaf"></i>
					<span class="title">
						3 Level Menu
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    Item 1
							<span class="arrow">
							</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#">Sample Link 2</a>
                    </li>
                    <li>
                        <a href="#">Sample Link 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    Item 1
							<span class="arrow">
							</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#">Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#">Sample Link 1</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Item 3 </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;">
            <i class="fa fa-folder-open"></i>
					<span class="title">
						4 Level Menu
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i> Item 1
							<span class="arrow">
							</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            Sample Link 1
									<span class="arrow">
									</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><i class="fa fa-remove"></i> Sample Link 1</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-external-link"></i> Sample Link 2</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bell"></i> Sample Link 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-globe"></i> Item 2
							<span class="arrow">
							</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-external-link"></i> Sample Link 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bell"></i> Sample Link 1</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-folder-open"></i>
                    Item 3 </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-user"></i>
					<span class="title">
						Login Options
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/login.html">
                    Login Form 1</a>
            </li>
            <li>
                <a href="../../../metronic_admin/login_soft.html">
                    Login Form 2</a>
            </li>
        </ul>
    </li>
    <li class="active ">
        <a href="javascript:;">
            <i class="fa fa-th"></i>
					<span class="title">
						Data Tables
					</span>
					<span class="selected">
					</span>
					<span class="arrow open">
					</span>
        </a>
        <ul class="sub-menu">
            <li class="active">
                <a href="table_basic.html">
                    Basic Datatables</a>
            </li>
            <li>
                <a href="../../../metronic_admin/table_responsive.html">
                    Responsive Datatables</a>
            </li>
            <li>
                <a href="../../../metronic_admin/table_managed.html">
                    Managed Datatables</a>
            </li>
            <li>
                <a href="../../../metronic_admin/table_editable.html">
                    Editable Datatables</a>
            </li>
            <li>
                <a href="../../../metronic_admin/table_advanced.html">
                    Advanced Datatables</a>
            </li>
            <li>
                <a href="../../../metronic_admin/table_ajax.html">
                    Ajax Datatables</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-file-text"></i>
					<span class="title">
						Portlets
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/portlet_general.html">
                    General Portlets</a>
            </li>
            <li>
                <a href="../../../metronic_admin/portlet_draggable.html">
                    Draggable Portlets</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-map-marker"></i>
					<span class="title">
						Maps
					</span>
					<span class="arrow ">
					</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="../../../metronic_admin/maps_google.html">
                    Google Maps</a>
            </li>
            <li>
                <a href="../../../metronic_admin/maps_vector.html">
                    Vector Maps</a>
            </li>
        </ul>
    </li>
    <li class="last ">
        <a href="../../../metronic_admin/charts.html">
            <i class="fa fa-bar-chart-o"></i>
					<span class="title">
						Visual Charts
					</span>
        </a>
    </li>-->
</ul>