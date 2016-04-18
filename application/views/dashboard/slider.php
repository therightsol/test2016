
<?php include 'includes/header.inc'; 

if($this->session->userdata('loggedInUser') == 'admin'){
    if($this->session->userdata('admin_dashboard') == 'approve'){
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/nav.inc'; ?>
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slider</h1>
                        <?php
                        $i = 1;
                        foreach($db_slider as $key => $value){ ?>
                        <div class="col-md-12">
                            <h3 class="text-primary" ><?php echo $i . ' ) ' .  $value['page_name']; ?> page slider</h3>
                        </div>
                        <div class="col-md-12"  style="margin-top: 5px; border-bottom: 1px solid black">
                            <img src="<?php echo $root.$value['img_path']; ?>" class="img-responsive" />
                        
                        <div class="col-md-8 col-md-offset-4" style="" >
                            <a class="btn btn-primary" style="margin: 20px;" href="<?php echo $root;?>add_slider/update_slider/<?php echo $value['ID'] ?>" target="__blank" >Update</a>
                            <a class="btn btn-danger" href="<?php echo $root;?>dashboard/delete_slider/<?php echo $value['ID'] ?>" >Delete</a>
                        </div>
                        </div>  
                        <?php $i++; } ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
  <script src="<?php echo $root; ?>admin_assest/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $root; ?>admin_assest/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $root; ?>admin_assest/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $root; ?>admin_assest/dist/js/sb-admin-2.js"></script>
</body>

</html>
<?php } else{
     redirect('dashboard/login');
}

    }else{
     redirect();
} ?>