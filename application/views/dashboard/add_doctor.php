<?php include 'includes/header.inc' ?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php include 'includes/nav_top.inc' ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <?php include 'includes/nav_aside.inc' ?>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN STYLE CUSTOMIZER -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler">
                </div>
                <div class="toggler-close">
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
						<span>
							THEME COLOR
						</span>
                        <ul>
                            <li class="color-black current color-default" data-style="default">
                            </li>
                            <li class="color-blue" data-style="blue">
                            </li>
                            <li class="color-brown" data-style="brown">
                            </li>
                            <li class="color-purple" data-style="purple">
                            </li>
                            <li class="color-grey" data-style="grey">
                            </li>
                            <li class="color-white color-light" data-style="light">
                            </li>
                        </ul>
                    </div>
                    <div class="theme-option">
						<span>
							Layout
						</span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Header
						</span>
                        <select class="header-option form-control input-small">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Sidebar
						</span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Sidebar Position
						</span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
						<span>
							Footer
						</span>
                        <select class="footer-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END STYLE CUSTOMIZER -->
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Add Doctor <small>prifile</small>
                    </h3>
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="btn-group">
                            <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#">Action</a>
                                </li>
                                <li>
                                    <a href="#">Another action</a>
                                </li>
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">Separated link</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo $root; ?>dashboard">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Doctor</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Add</a>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box blue" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-reorder"></i> Add Doctor -
								<span class="step-title">
									Step 1 of 4
								</span>
                            </div>
                            <div class="tools hidden-xs">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="<?php echo $root; ?>dashboard/add_doctor" method="post" enctype="multipart/form-data" class="form-horizontal" id="submit_form">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">

                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
													1
												</span>
												<span class="desc">
													<i class="fa fa-check"></i> Profile Setup
												</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab5" data-toggle="tab" class="step">
												<span class="number">
													2
												</span>
												<span class="desc">
													<i class="fa fa-check"></i> About
												</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
													3
												</span>
												<span class="desc">
													<i class="fa fa-check"></i> Location Setup
												</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
													4
												</span>
												<span class="desc">
													<i class="fa fa-check"></i> Clinic Setup
												</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
													5
												</span>
												<span class="desc">
													<i class="fa fa-check"></i> Confirm
												</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success">
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                You have some form errors. Please check below.
                                            </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                Your form validation is successful!
                                            </div>
                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Provide Profile details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Name
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="name"/>
														<span class="help-block">
															Enter Doctor Name
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Qualification
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="qualification" />
														<span class="help-block">
															Provide Qualification.
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Contact Number
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="number" class="form-control" name="contact_no"/>
														<span class="help-block">
															Confirm contact no
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="radio-list">
                                                            <label>
                                                                <input type="radio" checked name="gender" value="male" data-title="Male"/>
                                                                Male </label>
                                                            <label>
                                                                <input type="radio" name="gender" value="female" data-title="Female"/>
                                                                Female </label>
                                                        </div>
                                                        <div id="form_gender_error">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"> **********
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="checkbox-list">
                                                            <label>
                                                                <input type="checkbox" name="featured" value="featured" /> Featured Doctor </label>
                                                            <label>
                                                                <input type="checkbox" name="is_verified" value="is_verified" /> Verified Doctor</label>
                                                        </div>
                                                        <div id="form_payment_error">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Speciality
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select name="doc_spe[]" multiple="multiple" id="doc_spe" class="form-control" >
                                                        </select>
														<span class="help-block">
															tag specialities
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Speciality
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select name="med_pro[]" multiple="multiple" id="med_pro" class="form-control" ></select>
														<span class="help-block">
															tag procedures
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Profile Picture</label>
                                                    <div class="controls col-md-9">
                                                        <span class="btn btn-default btn-file">
                                                            Browse <input type="file" name="userfile">
                                                        </span>
                                                        <span class="file_name">

                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                <h3 class="block">Provide About details</h3>
                                                <textarea id="edit" name="about"></textarea>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <h3 class="block">Provide Location details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">city
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="search_city" required name="city_name"></select>
														<span class="help-block">
															Provide city
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Area
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="search_area" required name="search_area"></select>
														<span class="help-block">
															Provide area
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="hidden" id="#lat" name="lat" >
                                                        <input type="hidden" id="#lon" name="lon" >
                                                        <input type="text" class="form-control" id="doc_address" name="address"/>
														<span class="help-block">
															Provide full address
														</span>
                                                        <div id="doc_map" style="width: 500px; height: 400px;"></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <h3 class="block">Provide clinic Information</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Clinic Name
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="clinic_name"/>
														<span class="help-block">
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Starting time
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="start_time"/>
														<span class="help-block">
                                                            Provide Start time
														</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">End time
													<span class="required">
														*
													</span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="" class="form-control" name="end_time"/>
														<span class="help-block">
                                                            Provide End time
														</span>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <a href="javascript:;" class="btn default button-previous">
                                                        <i class="m-icon-swapleft"></i> Back </a>
                                                    <a href="javascript:;" class="btn blue button-next">
                                                        Continue <i class="m-icon-swapright m-icon-white"></i>
                                                    </a>
                                                    <button type="submit" class="btn green button-submit">
                                                        Submit <i class="m-icon-swapright m-icon-white"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include 'includes/footer.inc' ?>
<!-- END FOOTER -->

<?php include 'includes/footer_files.inc' ?>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        FormWizard.init();
    });
</script>

<script>
    $('#doc_map').locationpicker({
        location: {latitude: 31.55460609999999, longitude: 74.35715809999999},
        radius: 300,
        inputBinding: {
            latitudeInput: $('#lat'),
            longitudeInput: $('#lon'),
            locationNameInput: $('#doc_address')
        },
        enableAutocomplete: true
    });
    $('#doc_address').click(function(){
       $(this).val('')
    });
    $('#edit').froalaEditor({
        // Set the image upload URL.
        imageManagerLoadURL: '<?php echo $root; ?>get_images',
        imageManagerDeleteURL: '<?php echo $root; ?>delete_image',
        imageUploadURL: '<?php echo $root; ?>upload/do_upload'
    });
    $("#doc_spe").select2({
        ajax: {
            url: "<?php echo $root; ?>search/doctor_speciality",
            type: "POST",
            dataType: 'json',
            delay: 250,
            data: function (params) {
/*
                var dataa = 'male';
                data  += '|'+params.term;
*/
                return {
                    doc_spe: params.term

                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true

        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 1
    });
    $("#med_pro").select2({
        ajax: {
            url: "<?php echo $root; ?>search/med_procedure",
            type: "POST",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                /*
                 var dataa = 'male';
                 data  += '|'+params.term;
                 */
                return {
                    med_pro: params.term

                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true

        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 1
    });
    $("#search_city").select2({
        ajax: {
            url: "<?php echo $root; ?>search/city_name",
            type: "POST",
            dataType: 'json',
            delay: 250,
            data: function (params) {

                /*
                 var dataa = 'male';
                 data  += '|'+params.term;
                 */
                return {
                    city_name: params.term

                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true

        },
        escapeMarkup: function (markup) { return markup; }
    });
    $("#search_area").select2({
        ajax: {
            url: "<?php echo $root; ?>search/search_area",
            type: "POST",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                var city_val = $('#search_city').val();

                var dataa = city_val+','+params.term;

                return {
                    search_area: dataa
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true

        },
        escapeMarkup: function (markup) { return markup; }
    });
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        $('.file_name').html(label);
        console.log(numFiles);
        console.log(label);
    });
</script>
