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
						Managed Organization <small>managed organizations</small>
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
                            <a href="#">organization</a>
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
                                <i class="fa fa-cogs"></i>Organizations
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="content">
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
									<th>
										Bank Accounts
									</th>

									<th>
										Delete
									</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($organizations){
                                    $i = 1;
                                    foreach($organizations as $key => $value){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $value['username']; ?>
                                        </td>
                                        <td>

											<a class="phn" data-name="email" data-pk="<?php echo $value['uid']; ?>" >
												<?php echo $value['email']; ?>
											</a>
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
                                            <img style="height: 50px;" src="<?php echo base_url().$value['profile_image_path']; ?>">
                                        </td>
										<td>
											<button  type="button" class="btn btn-primary btn-sm area_button" data-toggle="modal" data-uid="<?php echo $value['uid']; ?>"   data-target="#myModal">
												View
											</button>
										</td>
										<td>
											<a class="delete" data-id="<?php echo $value['uid']; ?>" data-column="uid" href="#"><i class="fa fa-close"></i> </a>
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
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Modal title</h4>
								</div>
								<div class="modal-body">

									<div class="row">
										<div class="col-md-12">
											<h2>Banck Account Detail</h2>
											<table class="table table-user-information" id="test">
												<thead>
												<tr>
													<td>#</td>
													<th>Bank Title</th>
													<th>Bank Number</th>
                                                    <th>Edit/view</th>
                                                    <th>Add</th>
												</tr>
												</thead>
												<tbody id="content">

												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

								</div>
							</div>
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
		$('.area_button').click(function () {
			$('#test').find('tbody').html('');
			var uid = $(this).data('uid');
			$.ajax({
				url:  "<?php echo $root; ?>dashboard/organization",
				type: 'post',
				data: {'id': uid}, //for example {id:id,name:name}
				success : function(resp){

					$('#test').find('tbody').append(resp);

				},
				error : function(resp){ console.log(resp) }
			});
		});

		$('.delete').click(function(){
			var id = $(this).data('id');
			var column = $(this).data('column');
			var element = $(this);
			if(confirm('are you sure')){
				$.ajax({
					url:  "<?php echo $root; ?>dashboard/delete/user/",
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

        $('#content').dataTable();

        $('.phn').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/user/uid',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
            }
        });
		$('.unapproved').editable({
			type: 'text',
			url: '<?php echo $root; ?>dashboard/editable/user/uid',
			success: function(response, newValue){
				if(response.status == 'error') return response.msg;
				location.reload();
			}
		});


	});
</script>
