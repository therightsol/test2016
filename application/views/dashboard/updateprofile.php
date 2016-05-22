<?php include 'includes/header.inc' ?>
<!-- END HEAD -->
<?php
$loggedInUser = $this->session->userdata('loggedInUser');
$username = $this->session->userdata('username');

?>
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
                       
               
            <div class="row" style="margin-top: 8%;">
				<div class="col-md-12">
					<table id="user" class="table table-bordered table-striped">
					<tbody>
					<tr>
						<td style="width:15%">
							Username
						</td>
						<td style="width:50%">
                                                    
							<a class="admin_edit" data-name="username" href="#" id="username" data-type="text" data-pk="<?php echo $admin_data[0]['uid']; ?>" data-original-title="Enter username" data-value="<?php echo $admin_data[0]['username']; ?>"><?php echo $admin_data[0]['username']; ?></a>
						</td>
						
					</tr>

					<tr>
						<td>
							Email
						</td>
						<td>
							<a class="admin" href="#" data-name="email" data-type="text" data-pk="<?php echo $admin_data[0]['uid']; ?>" data-value="<?php echo $admin_data[0]['email']; ?>" ><?php echo $admin_data[0]['email']; ?></a>
						</td>

					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<a class="admin_edit" href="#" data-name="password"  data-type="text" data-pk="<?php echo $admin_data[0]['uid']; ?>" data-value="" >******</a>
						</td>

					</tr>
					<tr>
						<td>
							Phone Number
						</td>
						<td>

							<a class="admin" href="#" data-name="phone_number" data-type="text" data-pk="<?php echo $admin_data[0]['uid']; ?>" data-value="<?php echo $admin_data[0]['phone_number']; ?>" ><?php echo $admin_data[0]['phone_number']; ?></a>

						</td>
						
					</tr>

					
					</tbody>
					</table>
				</div>
			</div>
  
</div>


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
    $('.admin').editable({
        url: '<?php echo $root; ?>dashboard/editable/user/uid',
        success: function(response, newValue){
        }
    });
    $('.admin_edit').editable({
        url: '<?php echo $root; ?>dashboard/update',
        success: function(response, newValue){
        }
    });
	$('#reg').validate();
</script>
                      