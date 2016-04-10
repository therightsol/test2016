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
                        Add Hospital <small>prifile</small>
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
            <div class="tab-pane active" id="tab_2">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>Hospital
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo $root; ?>dashboard/add_hospital" class="form-horizontal validate">
                            <div class="form-body">
                                <h3 class="form-section">Hospital Info</h3>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" required class="form-control" placeholder="Name">
																<span class="help-block">
																	Provide Hospital Name
																</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="hidden" id="#loc_lat" name="lat" >
                                                <input type="hidden" id="#loc_lon" name="lon" >
                                                <input type="text" required class="form-control" id="doc_address" name="address" >
                                                <span class="help-block">
                                                    This field has error.
                                                </span>
                                            </div>
                                        </div>
                                        <div id="doc_map" style="width: 500px; height: 400px;"></div>
                                    </div>
                                    <!--/span-->

                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
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
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
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
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Profile Picture</label>
                                            <div class="controls col-md-9">
                                                        <span class="btn btn-default btn-file">
                                                            Browse <input type="file" name="userfile">
                                                        </span>
                                                        <span class="file_name">
                                                            Upload Profile Pic
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <div class="select2-container select2_category form-control" id="s2id_autogen5"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Category 1</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6" tabindex="1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="select2_category form-control select2-offscreen" data-placeholder="Choose a Category" tabindex="-1">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Membership</label>
                                            <div class="col-md-9">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <div class="radio"><span><input type="radio" name="optionsRadios2" value="option1"></span></div>
                                                        Free </label>
                                                    <label class="radio-inline">
                                                        <div class="radio"><span class="checked"><input type="radio" name="optionsRadios2" value="option2" checked=""></span></div>
                                                        Professional </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <h3 class="form-section">Address</h3>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address 1</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address 2</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Post Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option>Country 1</option>
                                                    <option>Country 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
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
    $('.validate').validate();
    $('#doc_map').locationpicker({
        location: {latitude: 31.55460609999999, longitude: 74.35715809999999},
        radius: 300,
        inputBinding: {
            latitudeInput: $('#loc_lat'),
            longitudeInput: $('#loc_lon'),
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
