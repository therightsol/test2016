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
							<?php if($success == 'yes'){ ?>
								<div class="alert alert-success" style="margin-top: 30px;">
									<p class="text-center">Successfully Approved.</p>
								</div>
							<?php }
							if($error != ''){ ?>
								<div class="alert alert-danger" style="margin-top: 30px;">
									<p class="text-center">Error! </p>
								</div>
							<?php } ?>
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
                                        Title
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Required Amount
                                    </th>
                                    <th>
                                        Inserted Date
                                    </th>
									<td>
										End Date
									</td>
									<td>
										Image
									</td>
									<th>
										Approved
									</th>
									<td>
										Delete
									</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($donation){
                                    $i = 1;
                                    foreach($donation as $key => $value){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $value['dm_value']; ?>
                                        </td>
                                        <td>
											<a class="donation" data-name="donation_title" data-pk="<?php echo $value['donation_id']; ?>" >
												<?php echo $value['donation_title']; ?>
											</a>
                                        </td>
                                        <td>
											<a class="donation" data-name="donation_short_description" data-pk="<?php echo $value['donation_id']; ?>" >
												<?php echo $value['donation_short_description']; ?>
											</a>
                                        </td>
										<td>
											<a class="donation" data-name="total_required_amount" data-pk="<?php echo $value['donation_id']; ?>" >
												<?php echo $value['total_required_amount']; ?>
											</a>
										</td>
										<td>
											<a class="date" data-type="date" data-name="donation_insert_date" data-pk="<?php echo $value['donation_id']; ?>" >
												<?php echo $value['donation_insert_date']; ?>
											</a>
										</td>
										<td>
											<a class="date" data-type="date" data-name="donation_last_date" data-pk="<?php echo $value['donation_id']; ?>" >
												<?php echo $value['donation_last_date']; ?>
											</a>
										</td>
                                        <td>
												<a href="<?php echo base_url().$value['donation_image_path']; ?>" rel="prettyPhoto[unusual]" >
													<img style="height: 50px;" src="<?php echo base_url().$value['donation_image_path']; ?>">

												</a>
                                        </td>


										<td>
											<a style="color: #006dcc;" href="#" class="status" data-type="select" data-source="[{value: '1', text: 'approved'},{value: '2', text: 'unapproved'},{value: 'not_set', text: 'not set'}]" data-name="is_approved" data-pk="<?php echo $value['dm_id']; ?>"
											   data-value="<?php if($value['is_approved'] == 1){ echo '1'; }elseif($value['is_approved'] == 2){ echo '2'; }else{ echo 'not_set'; } ?>" data-original-title="Status">
												<?php if($value['is_approved'] == 1){ echo 'approved'; }elseif($value['is_approved'] == 2){ echo 'unapproved'; }else{ echo 'not set'; } ?>
											</a>
										</td>
										<td>
											<a class="delete" data-id="<?php echo $value['donation_id']; ?>" data-column="donation_id" href="#"><i class="fa fa-close"></i> </a>
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
<div class="modal fade notification_email" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog " style="width: 300px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Notification</h4>
			</div>
			<div class="modal-body">
				Do you want to sent notification to user?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="sent_notification" class="btn btn-primary">Sent</button>
			</div>
		</div>
	</div>
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
        $('.donation').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/donation/donation_id',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
                location.reload();
            }
        });
		$('.date').editable({
			format: 'dd/MM/yyyy',
			viewformat: 'dd/MM/yyyy',
			datepicker: {
				weekStart: 1
			},
			url: '<?php echo $root; ?>dashboard/editable/donation/donation_id',
			success: function(response, newValue){
				if(response.status == 'error') return response.msg;
			}
		});
        $("a[rel^='prettyPhoto']").prettyPhoto();

		$('.delete').click(function(){
			var id = $(this).data('id');
			var column = $(this).data('column');
			var element = $(this);
			if(confirm('are you sure')){
				$.ajax({
					url:  "<?php echo $root; ?>dashboard/delete/donation/",
					type: 'post',
					data: {'id': id, 'column':column}, //for example {id:id,name:name}
					success : function(resp){
						if(resp == 'yes'){
							$(element).parent('td').parent('tr').hide();
						}
					},
					error : function(resp){}
				});
			}

		});
		$('.status').editable({
			url: '<?php echo $root; ?>dashboard/editable_notification/donation/donation_id',
			success: function(response, newValue){
				if(response.status == 'error'){
					return response.msg;
				}
				else{
                    if(response != 'not_set'){
                        $('.notification_email').modal('show');
                        $('.modal-body').html('Do you want to sent notification to user?');
                        $('#sent_notification').click(function(){
                            $('.modal-body').html('Please Wait <i class="fa fa-spin fa-spinner"></i>');
                            $.ajax({
                                url:  "<?php echo $root; ?>dashboard/send_notification",
                                type: 'post',
                                data: {'value': response}, //for example {id:id,name:name}
                                success : function(resp){
                                    $('.modal-body').html(resp);
                                },
                                error : function(resp){}
                            });
                        });
                    }

				}

			}
		});

	});
</script>
