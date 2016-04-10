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
			<?php include 'includes/theme_option.inc' ?>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Basic Datatables <small>basic datatable samples</small>
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
							<a href="../../../metronic_admin/index-2.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Data Tables</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Basic Datatables</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Medical Procedures
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="#" data-toggle="dropdown">
										Columns <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_2_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><input type="checkbox" checked data-column="0">Rendering engine</label>
										<label><input type="checkbox" checked data-column="1">Browser</label>
										<label><input type="checkbox" checked data-column="2">Platform(s)</label>
										<label><input type="checkbox" checked data-column="3">Engine version</label>
										<label><input type="checkbox" checked data-column="4">CSS grade</label>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group">
									<button id="button" class="btn green">
										Add New <i class="fa fa-plus"></i>
									</button>
								</div>

							</div>
							<form id="form" action="<?php echo $root; ?>dashboard/city" method="post">

								<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
									<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											Procedures
										</th>
										<th style="width:10%">
											Delete
										</th>
										<th style="width:10%">
											Add Area
										</th>
									</tr>
									</thead>
									<tbody>
									<tr class="add_new" style="display: none;">

										<td>*</td>
										<td>
											<input type="text" class="form-control" required name="city" />
											<div class="text-danger">
												<?php if(form_error('city')){ echo form_error('city'); } ?>
											</div>
										</td>
										<td><input type="submit" class="btn btn-sm btn-success" value="submit" /> </td>
                                        <td></td>
									</tr>

									<?php
									$i = 1;
									foreach($city as $key => $value){ ?>
										<tr>

											<td>
												<?php echo $i; ?>
											</td>
											<td>
												<a class="city" data-name="city_name" data-pk="<?php echo $value['city_id']; ?>" >
													<?php echo $value['city_name']; ?>
												</a>
											</td>
											<td>
												<i style="cursor: pointer; float: none;" data-id="<?php echo $value['city_id']; ?>" data-column="city_id" class="fa close delete"></i>
											</td>
                                            <td>
                                                <a href="<?php echo $root.'dashboard/city/'.$value['city_id']; ?>"><i class="fa fa-plus-square-o"></i> </a>
                                            </td>
										</tr>
										<?php $i++; } ?>

									</tbody>

								</table>
							</form>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
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
   // initiate layout and plugins
   App.init();

});
</script>
<script>
    $(document).ready(function(){
		$('#Form').validate();


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


		$('#button').click(function(){
			$('.add_new').toggle("slow");

		});
        $('.city').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/city/city_id',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
            }
        });

    });
</script>
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
