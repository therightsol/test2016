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
						Managed Data <small>managed datata general</small>
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
							<a href="#">General</a>
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
                                <i class="fa fa-cogs"></i>Managed Content
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
                                        Content
                                    </th>
                                    <th>
                                        Setting
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($generals){ ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            company logo header
                                        </td>
                                        <td id="logo_td">
                                            <img src="<?php echo base_url().$generals[0]['company_logo_header'] ?>" />
                                            <div id="change_logo" style="display: none">
                                                <button id="change_btn"  class="btn btn-default"  data-toggle="modal" data-target="#myModal">Change</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            contact email header
                                        </td>
                                        <td>
                                            <a class="con" data-name="contact_email_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['contact_email_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            contact cell header
                                        </td>
                                        <td>
                                            <a class="con" data-name="contact_cell_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['contact_cell_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            facebook url
                                        </td>
                                        <td>
                                            <a class="con" data-name="facebook_url_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['facebook_url_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            twitter url
                                        </td>
                                        <td>
                                            <a class="con" data-name="twitter_url_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['twitter_url_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            gplus url
                                        </td>
                                        <td>
                                            <a class="con" data-name="linkedin_url_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['linkedin_url_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            linkedin url
                                        </td>
                                        <td>
                                            <a class="con" data-name="twitter_url_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['twitter_url_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            company address
                                        </td>
                                        <td>
                                            <a class="con" data-name="company_address" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['company_address'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            company phone 1
                                        </td>
                                        <td>
                                            <a class="con" data-name="twitter_url_header" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['twitter_url_header'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            company phone 2
                                        </td>
                                        <td>
                                            <a class="con" data-name="company_phone2" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['company_phone2'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            company phone 3
                                        </td>
                                        <td>
                                            <a class="con" data-name="company_phone3" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['company_phone3'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            company email 1
                                        </td>
                                        <td>
                                            <a class="con" data-name="company_email_1" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['company_email_1'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            13
                                        </td>
                                        <td>
                                            company email 2
                                        </td>
                                        <td>
                                            <a class="con" data-name="company_email_2" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['company_email_2'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            company short description
                                        </td>
                                        <td>
                                            <a class="con" data-type="textaera" data-name="company_short_description" data-pk="<?php echo $generals[0]['gid']; ?>" >
                                                <?php echo $generals[0]['company_short_description'] ?>
                                            </a>

                                        </td>
                                    </tr>
                                <?php }else{
                                    echo 'no Record found';
                                } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-envelope"></i>Email Setting
							</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
								<thead>
								<tr>
									<th style="width1:8px;">
										S.No
									</th>
									<th>
										config
									</th>
									<th>
										Setting
									</th>
								</tr>
								</thead>
								<tbody>
								<?php if($notifications){ ?>
									<tr class="odd gradeX">
										<td>
											1
										</td>
										<td>
											Admin Email Address
										</td>
										<td>
											<a class="noti" data-name="email_address" data-pk="<?php echo $notifications[0]['nid']; ?>" >
												<?php echo $notifications[0]['email_address'] ?>
											</a>

										</td>
									</tr>
									<tr class="odd gradeX">
										<td>
											2
										</td>
										<td>
											Application Password
										</td>
										<td>
											<a class="noti" data-name="email_password" data-pk="<?php echo $notifications[0]['nid']; ?>" >
												<?php echo $notifications[0]['email_password'] ?>
											</a>

										</td>
									</tr>
									<tr class="odd gradeX">
										<td>
											3
										</td>
										<td>
											Smtp Host
										</td>
										<td>
											<a class="noti" data-name="email_host" data-pk="<?php echo $notifications[0]['nid']; ?>" >
												<?php echo $notifications[0]['email_host'] ?>
											</a>

										</td>
									</tr>
									<tr class="odd gradeX">
										<td>
											4
										</td>
										<td>
											SMTP Port
										</td>
										<td>
											<a class="noti" data-name="email_port" data-pk="<?php echo $notifications[0]['nid']; ?>" >
												<?php echo $notifications[0]['email_port'] ?>
											</a>

										</td>
									</tr>
									<tr class="odd gradeX">
										<td>
											5
										</td>
										<td>
											SMTP Crypto
										</td>
										<td>
											<a class="noti" data-name="smtp_crypto" data-pk="<?php echo $notifications[0]['nid']; ?>" >
												<?php echo $notifications[0]['smtp_crypto'] ?>
											</a>

										</td>
									</tr>
									<tr class="odd gradeX">
										<td>
											6
										</td>
										<td>
											Protocol
										</td>
										<td>
											<a class="noti" data-name="protocol" data-pk="<?php echo $notifications[0]['nid']; ?>" >
												<?php echo $notifications[0]['protocol'] ?>
											</a>

										</td>
									</tr>
								<?php } ?>
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
<div id="myModal" class="modal fade in" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Image</h4>
                <div class="modal-body">
                    <div class="row">
                        <form action="<?php echo $root; ?>upload_pic/do_upload" method="post">
                            <p>Chose image</p>
                            <input type="hidden" value="<?php echo $generals[0]['gid']; ?>" name="id">
                            <div class="col-md-12 text-center">
                                <input type="file" name="userfile" id="image">
                            </div>
                            <div class="col-md-6 col-md-offset-5">
                                <input type="submit" name="submit" value="upload" class="btn btn-default">
                            </div>
                        </form>
                    </div>

                </div>
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
		$('#Form').validate();
        $('#image').picEdit();
        $('#logo_td').hover(function(){
            $('#change_logo').show(500);
        },function(){
            $('#change_logo').hide(100);
        });

		$('.delete').click(function(){
			var id = $(this).data('id');
			var column = $(this).data('column');
			var element = $(this);
			if(confirm('are you sure')){
				$.ajax({
					url:  "<?php echo $root; ?>dashboard/delete/city/",
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

		$('#button').click(function(){
			$('.add_new').toggle("slow");

		});
		$('.noti').editable({
			type: 'text',
			url: '<?php echo $root; ?>dashboard/editable/notification/nid',
			success: function(response, newValue){
				if(response.status == 'error') return response.msg;
			}
		});
        $('.con').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/general/gid',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
            }
        });

	});
</script>
