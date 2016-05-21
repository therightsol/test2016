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
			
						
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						Managed Data <small>managed members</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
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
                    <div class="portlet box grey">
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
