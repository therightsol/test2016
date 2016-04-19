<?php
include 'includes/head.inc';
$loggedInUser = $this->session->userdata('loggedInUser');
include 'includes/header.inc';
?>
<br />
    <div class="container">
        <div class="col-sm-12">
            <div class="portlet box red">

                <div class="portlet-title">
                    <div class="caption" style="background-color">
                        <span style="color:#eb5310;font-size: 2em;"> Profile </span>
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="row">
                        <?php if($loggedInUser == 'is_member'){ ?>
                        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">


                            <br>

                        </div>
                        <div class="col-md-12" >



                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Member Area<span class="text-info pull-right" >May 05,2014,03:00 pm </span></h3>

                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3" align="center" id="img_div">
                                            <img alt="User Pic" src="
                                                    <?php
                                            if($profile_record[0]['profile_image_path'] == ''){
                                                echo $root.'upload_imgs/no-image.jpg';
                                            }else{
                                                echo $root.$profile_record[0]['profile_image_path'];
                                            } ?>
                                                    " class="img-circle img-responsive">
                                            <button id="change_btn" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Change</button>
                                        </div>


                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td><?php echo $profile_record[0]['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone No</td>
                                                    <td>
                                                        <?php echo $profile_record[0]['phone_number'] ?>
                                                    </td>

                                                </tr>

                                                <tr>
                                                <tr>
                                                    <td>Joining date</td>
                                                    <td>
                                                        <?php echo date('d M Y',$profile_record[0]['joining_date']); ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php }elseif($loggedInUser == 'is_organization'){  ?>

                            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">


                                <br>

                            </div>
                        <?php if($record_not_inserted != 'yes'){ ?>
                            <div  class="col-xs-12" >



                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo $profile_record[0]['username'] ?><span class="text-info pull-right" >May 05,2014,03:00 pm </span></h3>

                                    </div>




                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3 " align="center" style="min-height: 450px;">
                                                <div class="" align="center" style="min-height: 132px;" id="img_div">
                                                    <img alt="User Pic" src="
                                                    <?php
                                                    if($profile_record[0]['profile_image_path'] == ''){
                                                        echo $root.'upload_imgs/no-image.jpg';
                                                    }else{
                                                        echo $root.$profile_record[0]['profile_image_path'];
                                                    } ?>
                                                    " class="img-circle img-responsive">
                                                    <button id="change_btn" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Change</button>
                                                </div>
                                                <div class="col-md-12">
                                                    <ul class="nav nav-pills nav-stacked">
                                                        <li class="active"><a data-toggle="pill"  href="#profile">Profile</a></li>
                                                        <li><a data-toggle="pill"  href="#history">Bank account</a></li>
                                                        <li><a data-toggle="pill"  href="#iqama">Add Bank account</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class=" col-md-9 asdf asdf col-lg-9 ">
                                                <div class="tab-content">
                                                    <div id="profile" class="tab-pane fade in active">
                                                        <table class="table table-user-information">
                                                            <tbody>
                                                            <tr>
                                                                <td>Email:</td>
                                                                <td><?php echo $profile_record[0]['email'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone No</td>
                                                                <td>

                                                                    <a class="phn" data-name="phone_number" data-pk="<?php echo $profile_record[0]['uid']; ?>" >
                                                                        <?php echo $profile_record[0]['phone_number'] ?>
                                                                    </a>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                            <tr>
                                                                <td>Joining date</td>
                                                                <td>
                                                                    <?php echo date('d M Y',$profile_record[0]['joining_date']); ?>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                    <div id="history" class="tab-pane fade">
                                                        <div style="height: 450px; overflow: scroll">

                                                                <table class="table table-user-information">
                                                                    <thead>
                                                                    <tr>
                                                                        <td>#</td>
                                                                        <th>Bank Title</th>
                                                                        <th>Bank Number</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    $i = 1;
                                                                    foreach($bank_rec as $key => $value){ ?>
                                                                    <?php if($value['um_title'] == 'bank_title'){ ?>
                                                                        <tr>
                                                                                <td><?php echo $i; ?></td>
                                                                            <td>
                                                                                <?php
                                                                                    echo $value['um_value'];
                                                                                  ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                    echo $value['um_key']; ?>

                                                                            </td>
                                                                        </tr>
                                                                    <?php $i++; }  ?>
                                                                        <?php   }
                                                                    ?>
                                                                    </tbody>
                                                                </table>


                                                        </div>

                                                    </div>
                                                    <div id="iqama" class="tab-pane fade">
                                                        <form action="<?php echo $root; ?>profile"  id="validate" method="post">
                                                            <div id="bnk">
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Back Account Number</label>

                                                                            <input class="form-control" required placeholder="" type="number" name="bnk_num">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Bank Account Title</label>

                                                                            <input class="form-control" required  placeholder="" type="text" name="bnk_title">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Bank Name</label>

                                                                            <input class="form-control" required  placeholder="" type="text" name="bnk_name">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Branck Code</label>

                                                                            <input class="form-control" required placeholder="" type="number" name="bnk_code">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Bank Branch Address</label>

                                                                            <input class="form-control" required  placeholder="" type="text" name="bnk_address">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Swift Code</label>

                                                                            <input class="form-control" required  placeholder="" type="text" name="bnk_swift">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-sm-offset-4">
                                                                    <div class="form-actions">
                                                                        <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Submit</button>

                                                                    </div>
                                                                </div>
                                                                <hr style="color: white;">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <?php }else{ ?>
                            <div style="margin-top: 10%; margin-bottom: 10%;" class="alert alert-danger">
                                Your Profile is not updated by admin!
                            </div>
                        <?php } ?>
                            </div>
                        <?php } ?>
                    <div id="myModal" class="modal fade in" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Upload Image</h4>
                                    <div class="modal-body">
                                        <div class="row">
                                            <form id="upload" action="<?php echo $root; ?>upload_pic/do_upload" method="post">
                                                <p>Chose image</p>
                                                <div class="col-md-12">
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
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
    <br />
    <br /> 
        </div>
            <?php
    include 'includes/footer.inc';
    ?>

<script>
    function updateClock ( )
    {
        var currentTime = new Date ( );
        var currentHours = currentTime.getHours ( );
        var currentMinutes = currentTime.getMinutes ( );
        var currentSeconds = currentTime.getSeconds ( );

        // Pad the minutes and seconds with leading zeros, if required
        currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
        currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

        // Choose either "AM" or "PM" as appropriate
        var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

        // Convert the hours component to 12-hour format if needed
        currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

        // Convert an hours component of "0" to "12"
        currentHours = ( currentHours == 0 ) ? 12 : currentHours;

        // Compose the string for display
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;


        $(".text-info").html(currentTimeString);

    }
    $(document).ready(function() {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        $('tr').hover(function(){
            $(this).find('.edit').show();
        },function() {
            $(this).find('.edit').hide();
        });

        $('.phn').editable({
            type: 'text',
            url: '<?php echo $root; ?>dashboard/editable/user/uid',
            success: function(response, newValue){
                if(response.status == 'error') return response.msg;
            }
        });

        $('#image').picEdit();

        $('[data-toggle="tooltip"]').tooltip();

        $('#myModal').on('hidden.bs.modal', function () {

            $.ajax({
                url: "<?php echo $root.'upload_pic/get_img_name'; ?>",
                success: function(e){
                    $('.img-circle').attr('src', e);
                }

            });


        });
        $('#change_btn').hide();
        $('#img_div').hover(function(){
            $('#change_btn').show();
        },function(){
            $('#change_btn').hide();
        });
        setInterval('updateClock()', 1000);


    });
</script>
<script>
    $('#validate').validate();

</script>