<?php
include 'includes/head.inc';




include 'includes/header.inc';
?>
<div class="container" >
    <div class="row" >
        <div class="col-md-12">
            <br />
            <br />
         <h1 style="color:#fa6628">Organizations!</h1>    
         <br />
         <br />
           <table class="table  table-bordered table-hover" id="localtable" style="text-align: center">
                        <thead style="color:#ffffff;">
                        <tr>
                            <th style="text-align:center">S.No</th>
                            <th style="text-align:center">Organization Name</th>
                            <th style="text-align:center">Donations Ads</th>
                            <th style="text-align:center">Causes</th>
                           
                        </tr>
                        </thead>
                        <tbody style="color:#eb5310;">
                           <?php
                            $i = 1;
                        foreach($viewdon as $key => $value){

                                ?>
                                <tr class="gradeU">
                                    <?php
                                    
                                    if($value['is_organization'] == '1'){
                                          
                                        
                                         ?>
                                    <td class="text-center"><a href=""  data-toggle="tooltip" data-placement="top" title="Update"><?php echo $i; ?></a> </td>
                                    <td><?php
                                    
                                            
                                            
                                    echo $value['username']; 
                                    ?></td>
                                    <td>
                                         <a href="#" data-toggle="tooltip" data-placement="top" title="View Information" >
                                           View All Donations Ads
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="View Information" >
                                           View All Causes Ads
                                        </a>
                                    </td>
                                    
                                </tr>
                        <?php    $i++; } } ?>
                        </tbody>
                    </table>
            
            
            
            
            
        </div>
    </div> 
</div>
<br />
<br />
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<?php
include 'includes/footer.inc';
?>
