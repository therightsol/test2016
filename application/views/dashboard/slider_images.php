<?php include 'includes/header.inc' ?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed"  ng-app="app">
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
	<!-- END SIDEBAR -->
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
						Managed Data <small>managed members</small>
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
							<a href="#">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">users</a>
							<i class="fa fa-angle-right"></i>
						</li>
                        <li>
                            <a href="#">Member</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box purple">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Members
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">

							<div>
								<?php foreach($slider as $key => $value){ ?>
										<img class="img-responsive img-thumbnail" src="<?php echo $root.'uploads/slider/'.$value['image_dimension']; ?>" >
								<?php } ?>
							</div>

							<div id="respons" class="alert alert-info">

							</div>
							<form  id="slider" enctype="multipart/form-data" class="dropzone_style" >
								<div class="dz-message" data-dz-message><span style="color: red; font-size: 20px;">Drop Images here to upload</span></div>

							</form>

                        </div>

                    </div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include 'includes/footer.inc'; ?>
<!-- END FOOTER -->
<?php include 'includes/footer_files.inc'; ?>
<script>
	jQuery(document).ready(function() {
		App.init();
		TableAdvanced.init();
	});
</script>
<script>
	$(document).ready(function(){
        $('.unapproved').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/user/uid',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
                location.reload();
            }
        });
        $("a[rel^='prettyPhoto']").prettyPhoto();
		$('.privilege').editable({
			url: '<?php echo $root; ?>dashboard/all_users',
			success: function(response, newValue){
				if(response.status == 'error') return response.msg;
			}
		});

	});
</script>
<!--<script>
	$(document).ready(function(){
		var fileList = new Array;
		var i =0;
		var myDropzone = new Dropzone(form1, {
			uploadMultiple: true,
			addRemoveLinks: true,
			acceptedFiles: 'image/jpeg,image/png',
			maxFilesize: 2,
			success: function(file, serverFileName){
				fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
				console.log(fileList);
				i++;
				$('#respons').html(serverFileName)
			},
			removedfile: function(file) {
				var rmvFile = "";
				for(f=0;f<fileList.length;f++){

					if(fileList[f].fileName == file.name)
					{
						rmvFile = fileList[f].serverFileName;

					}

				}

				if (rmvFile){
					$.ajax({
						url: "<?php /*echo base_url().'/dashboard/delete_images'; */?>",
						type: "POST",
						data: { "fileList" : rmvFile },
						success:function(response){
							console.log(response);
						}
					});
				}
			}
		});
	});
</script>-->
<script>
	$(document).ready(function() {
		Dropzone.autoDiscover = false;
		var fileList = new Array;
		var i =0;
		$("#slider").dropzone({
			uploadMultiple: true,
			addRemoveLinks: true,
			init: function() {

				// Hack: Add the dropzone class to the element
				$(this.element).addClass("dropzone");

				this.on("success", function(file, serverFileName) {
					fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
					//console.log(fileList);
					i++;

				});
				this.on("removedfile", function(file) {
					var rmvFile = "";
					for(f=0;f<fileList.length;f++){

						if(fileList[f].fileName == file.name)
						{
							rmvFile = fileList[f].serverFileName;

						}

					}

					if (rmvFile){
						$.ajax({
							url: "<?php echo base_url().'/dashboard/delete_images'; ?>",
							type: "POST",
							data: { "fileList" : rmvFile }
						});
					}
				});

			},
			url: "<?php echo base_url(); ?>dashboard/upload_slider"
		});

	});
</script>
