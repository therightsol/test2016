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
                            <table class="table table-striped table-bordered table-hover" id="content">
                                <thead>
                                <tr>
                                    <th style="width1:8px;">
                                        S.No
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone Number
                                    </th>
                                    <th>
                                        Join Date
                                    </th>
                                    <th>
                                        Profile
                                    </th>
									<td>
										privileges
									</td>
									<th>
										Status
									</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($all){
                                    $i = 1;
                                    foreach($all as $key => $value){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $value['username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['email']; ?>
                                        </td>
                                        <td>
                                            <a class="phn" data-name="phone_number" data-pk="<?php echo $value['uid']; ?>" >
                                                <?php echo $value['phone_number']; ?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo date('d M Y', $value['joining_date']); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url().$value['profile_image_path']; ?>" rel="prettyPhoto[unusual]" >
                                                <img style="height: 50px;" src="<?php echo base_url().$value['profile_image_path']; ?>">

                                            </a>
                                        </td>

										<td>
											<a style="color: #006dcc;" href="#" class="privilege" data-type="select" data-source="[{value: 'is_admin', text: 'admin'},{value: 'is_member', text: 'Member'},{value: 'is_organization', text: 'Organization'},{value: 'banned', text: 'Banned'}]" data-name="privilege" data-pk="<?php echo $value['uid']; ?>"
                                               data-value="<?php if($value['is_approved_by_admin'] == 2){ echo 'banned'; }elseif($value['is_admin'] == 1){ echo 'is_admin'; }elseif($value['is_member'] == 1){ echo 'is_member'; }elseif($value['is_organization'] == 1){ echo 'is_organization'; } ?>" data-original-title="Select Privilege">
                                                <?php if($value['is_approved_by_admin'] == 2){ echo 'banned'; }elseif($value['is_admin'] == 1){ echo 'Admin'; }elseif($value['is_member'] == 1){ echo 'Member'; }elseif($value['is_organization'] == 1){ echo 'Organization'; } ?>
											</a>
										</td>
										<td>
											<?php if($value['is_approved_by_admin'] == 1){ ?>
												<span class="label label-sm label-success">
													Approved
												</span>
											<?php }elseif($value['is_approved_by_admin'] == 2){ ?>
                                                <span class="label label-sm label-danger">
													Bannded
												</span>
											<?php }else{ ?>
                                                <a href="#" class="unapproved label label-sm label-default" data-type="select" data-source="[{value: '1', text: 'approve'}]" data-name="is_approved_by_admin" data-pk="<?php echo $value['uid']; ?>" data-original-title="Approve Organization">
                                                    Not Approve
                                                </a>
                                            <?php } ?>
										</td>
                                    </tr>

                                <?php $i++; } }else{
                                    echo 'no Record found';
                                } ?>
                                </tbody>
                            </table>
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
                if(response.status == 'error'){
					return response.msg;
				}
				else{

				}

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
