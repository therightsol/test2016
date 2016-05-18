<?php
include 'includes/head.inc';
include 'includes/header.inc';
?>



<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    <div class="auto-container">
        <div class="sec-title">
            <h1>Donat<span class="normal-font">ion</span></h1>
            <div class="bread-crumb"><a href="#">Home</a> / <a href="#" class="current">Donate</a></div>
        </div>
    </div>
</section>



<section class="donation-section">
    <div class="auto-container">
        <div class="row">
            <?php if(empty($bank_rec)) : ?>

                <div style="margin-top: 25px;" class="col-md-6 col-md-offset-3">
                    <div class="alert alert-info">
                        No bank record found.
                    </div>
                </div>
            <?php else:


                ?>

            <div class="col-md-12" style="margin-top: 25px">
                <table class="table table-user-information table-bordered table-striped">

                    <tr>
                        <td>#</td>
                        <td>Bank Title</td>
                        <td>Bank Name</td>
                        <td>Bank Code</td>
                        <td>Bank Swift</td>
                        <td>Bank Number</td>
                        <td>Bank Address</td>
                    </tr>




                    <?php


                    $i = 1;
                    $c = 1;
                    //echo '<pre>' . var_export($bank_rec, true) . '</pre>'; exit;
                    foreach($bank_rec as $value){

                        //echo '<pre>' . var_export($value, true) . '</pre>'; exit;
                            if( (($i ) % 7 == 0) || $i == 1 ){
                                echo '<tr>';
                        ?>


                            <td><?php echo $c; ?></td>


                            <?php } if($value['um_title'] == 'bank_title') { ?>
                                <td>
                                    <?php echo $value['um_value']; ?>
                                </td>
                            <?php } ?>


                            <?php if($value['um_title'] == 'bank_name') { ?>
                                <td>
                                    <?php echo $value['um_value']; ?>
                                </td>
                            <?php } ?>


                            <?php if($value['um_title'] == 'bank_code') { ?>
                                <td>
                                    <?php echo $value['um_value']; ?>
                                </td>
                            <?php } ?>

                            <?php if($value['um_title'] == 'bank_swift') { ?>
                                <td>
                                    <?php echo $value['um_value']; ?>
                                </td>
                            <?php } ?>


                            <?php if($value['um_title'] == 'bank_number') { ?>
                                <td>
                                    <?php echo $value['um_value']; ?>
                                </td>
                            <?php } ?>

                            <?php if($value['um_title'] == 'bank_address') {   ?>
                                <td>
                                    <?php echo $value['um_value']; ?>
                                </td>
                            <?php }

                            if( ($i ) % 7 == 0 || $i == 1 ){
                                $c++;

                            }
                       $i++;
                            if( ($i ) % 7 == 0 ){
                                echo '</tr>';

                            }
                            }
                        ?>

                </table>

            </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php
include 'includes/footer.inc';
?>
