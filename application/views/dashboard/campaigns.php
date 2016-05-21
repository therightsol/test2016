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
                                        Title
                                    </th>
                                    <th>
                                        Description
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
									<td>
										Delete
									</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($campaign){
                                    $i = 1;
                                    foreach($campaign as $key => $value){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $value['cmp_value']; ?>
                                        </td>
                                        <td>
											<a class="causes" data-name="campaign_title" data-pk="<?php echo $value['campaign_id']; ?>" >
												<?php echo $value['campaign_title']; ?>
											</a>
                                        </td>
                                        <td>

											<a class="causes" data-name="campaign_short_description" data-pk="<?php echo $value['campaign_id']; ?>" >
												<?php echo $value['campaign_short_description']; ?>
											</a>

                                        </td>
										<td>
											<a class="date" data-type="date" data-name="campaign_insert_date" data-pk="<?php echo $value['campaign_id']; ?>" >
												<?php echo $value['campaign_insert_date']; ?>
											</a>
										</td>
										<td>
											<a class="date" data-type="date" data-name="campaign_last_date" data-pk="<?php echo $value['campaign_id']; ?>" >
												<?php echo $value['campaign_last_date']; ?>
											</a>
										</td>
                                        <td>
                                            <a href="<?php echo base_url().$value['campaign_image_path']; ?>" rel="prettyPhoto[unusual]" >
                                                <img style="height: 50px;" src="<?php echo base_url().$value['campaign_image_path']; ?>">

                                            </a>
                                        </td>
										<td>
											<a class="delete" data-id="<?php echo $value['campaign_id']; ?>" data-column="campaign_id" href="#"><i class="fa fa-close"></i> </a>
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
        $('.causes').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/campaign/campaign_id',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
            }
        });
		$('.date').editable({
			format: 'dd/MM/yyyy',
			viewformat: 'dd/MM/yyyy',
			datepicker: {
				weekStart: 1
			},
			url: '<?php echo $root; ?>dashboard/editable/campaign/campaign_id',
			success: function(response, newValue){
				if(response.status == 'error') return response.msg;
			}
		});
        $("a[rel^='prettyPhoto']").prettyPhoto();
		$('.privilege').editable({
			url: '<?php echo $root; ?>dashboard/all_users',
			success: function(response, newValue){
				if(response.status == 'error') return response.msg;
			}
		});
		$('.delete').click(function(){
			var id = $(this).data('id');
			var column = $(this).data('column');
			var element = $(this);
			if(confirm('are you sure')){
				$.ajax({
					url:  "<?php echo $root; ?>dashboard/delete/campaign/",
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
	});
</script>
