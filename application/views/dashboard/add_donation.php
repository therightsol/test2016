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
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						Add Donation  <small>ads</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo $root; ?>dashboard">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Donation</a>
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
				<div class="portlet box grey">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-reorder"></i>Donation
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
						<form action="<?php echo $root; ?>dashboard/add_donation" method="post"  enctype="multipart/form-data" id="upload">

							<div class="form-body">

								<?php if($data_saved == 'yes'){?>
									<div class="alert alert-success">
										You have successfully Add Your Donation Ad <br />

									</div>
								<?php  }else{ ?>
								<div class="form-group  ">

									<label class="control-label">Title</label>
									<input class="form-control" placeholder="Enter your Donation Title " type="text" name="title">

								</div>
								<div>
									<?php
									if($_POST){
										if (form_error('title') != '') { ?>
											<span   style="color:red !important ;">
                                                <?php echo form_error('title'); ?>
                                            </span>

										<?php }}?>
								</div>

								<div class="form-group">
									<label class="control-label">Short Description</label>

									<input class="form-control" type="text" placeholder = "Enter some lines About Donation" name="shdescription"/>

								</div>
								<div>
									<?php
									if($_POST){
										if (form_error('shdescription') != '') { ?>
											<span   style="color:red !important ;">
                                                <?php echo form_error('shdescription'); ?>
                                            </span>

										<?php }}?>
								</div>

								<div class="form-group ">
									<label class="control-label">Long Description</label>
									<br />
									<textarea cols="75" class="form-control" rows="10" name="lgdescription"></textarea>


								</div>
								<div>
									<?php
									if($_POST){
										if (form_error('lgdescription') != '') { ?>
											<span   style="color:red !important ;">
                                                <?php echo form_error('lgdescription'); ?>
                                            </span>

										<?php }}?>
								</div>

								<div class="form-group">
									<label class="control-label">Amount Required</label>

									<input class="form-control" placeholder="Type required Amount here" type="text" name="amount">

								</div>
								<div>
									<?php
									if($_POST){
										if (form_error('amount') != '') { ?>
											<span   style="color:red !important ;">
                                                <?php echo form_error('amount'); ?>
                                            </span>

										<?php } }?>
								</div>
								<div class="form-group">
									<label class="control-label">End Date</label>

									<input name="date"   type="text" class="form-control date">
								</div>
								<div>

								</div>
								<div class="form-group">
									<input type="file" name="file" id="image" />
								</div>


								<div class="row">
									<div class="col-sm-6 col-sm-offset-4">
										<button type="submit" class="btn">Add Donation</button>

									</div>
									<?php } ?>
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
	$('#reg').validate();
</script>
