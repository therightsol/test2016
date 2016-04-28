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
						Add Campaign <small></small>
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
							<a href="#">Campaign</a>
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
							<i class="fa fa-reorder"></i>Campaign
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
						<form action="<?php echo $root; ?>dashboard/add_campaigns" method="post"  enctype="multipart/form-data" id="upload">

							<div class="form-body">

								<?php if($data_saved == 'yes'){?>
									<div class="alert alert-success">
										You have successfully Add Your Campaign <br />

									</div>
								<?php  }else{ ?>
								<div class="form-group  ">

									<label class="control-label">Title</label>
									<input class="form-control" placeholder="Enter your Campaing Title " type="text" name="title">

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

									<input class="form-control" type="text" placeholder = "Enter some lines Abut Your campaing" name="shdescription"/>

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
									<textarea cols="75" rows="10" class="form-control" name="lgdescription"></textarea>


								</div>
								<div>
									<?php
									if($_POST){
										if (form_error('lgdescription') != '') { ?>
											<span   style="color:red !important ;">
                                                <?php echo form_error('lgdescription'); ?>
                                            </span>

										<?php } }?>
								</div>



								<div class="form-group">
									<label class="control-label">Campaing End Date</label>

									<input name="date"   type="date" class="form-control">
								</div>
								<div>
									<?php
									if($_POST){
										if (form_error('date') != '') { ?>
											<span   style="color:red !important ;">
                                                <?php echo form_error('date'); ?>
                                            </span>

										<?php } }?>
								</div>
								<div class="form-group">
									<input type="file" name="file" id="image" />
								</div>


								<div class="row">
									<div class="col-sm-6 col-sm-offset-4">
										<button type="submit" class="btn">Add Campaign</button>

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
