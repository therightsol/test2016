<?php 
        include 'includes/head.inc';
        include 'includes/header.inc';
        ?>

      <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $root; ?>assets/images/background/page-title-bg.jpg);">
    	
        <div class="auto-container">
        	<div class="sec-title">
                    <br />
        <br />
        <br />
        
                <h1 style="font-weight:bold;"> Update Donation</h1>
            
            </div>
        </div>
    </section>
      
      <!-- page title end -->
      <div class="row">
          <div class="container">
              <div class="col-sm-6 col-sm-offset-3">
                          <br />
                                   <br /> <br />
                          <?php if($data_saved == 'yes'){?>
             <div class="alert alert-success" style="text-align:center">
                            You have successfully update Your Donation Add <br />
                            Please wait For Admin approval
                        </div> 
        <?php  }else{ ?>
        
                  <h1 style="color:#eb5310;font-weight:bold;">
                      Update Your Donation Ad 
                  </h1>
              </div>
              <div class="col-sm-6 col-sm-offset-3">
                    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <br />
        <br />
         
          
                    
                
        <form action="<?php echo $root; ?>Donation_update/update/<?php echo $rec['donation_id']; ?>" method="post" >
           
            <div class="form-body">
                <div class="form-group  ">
                    <label class="control-label">Title</label>
                    <input class="form-control" placeholder="Enter your Donation Title " type="text" name="title" value=" <?php echo $rec['donation_title']; ?> ">
                    
                </div>
                 <div>
                <?php
                    if($_POST){
                     if (form_error('title') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('title'); ?>
                                            </span>
                    
                    <?php }}?>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Short Description</label>
                                          
                        <input class="form-control" type="text" placeholder = "Enter some lines Abut Your Donation Ad" name="shdescription" value=" <?php echo $rec['donation_short_description']; ?> "/>
                    
                </div>
                <div>
                <?php
                    if($_POST){
                     if (form_error('shdescription') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('shdescription'); ?>
                                            </span>
                    
                     <?php }}?>
                </div>
               
                <div class="form-group ">
                    <label class="control-label">Long Description</label>
                    <br />
                    <textarea cols="75" rows="10" style="resize:none" name="lgdescription"><?php echo $rec['donation_long_description']; ?></textarea>
                        
                  
                </div>
                 <div>
                <?php
                    if($_POST){
                     if (form_error('lgdescription') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('lgdescription'); ?>
                                            </span>
                    
                     <?php } }?>
                </div>
                
                <div class="form-group">
                    <label class="control-label">Amount Required</label>
                    
                        <input class="form-control" placeholder="Type required Amount here" type="text" name="amount" value=" <?php echo $rec['total_required_amount']; ?>" >
                    
                </div>
                <?php
                    if($_POST){
                     if (form_error('amount') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('amount'); ?>
                                            </span>
                    
                     <?php } }?>
                <div class="form-group">
                    <label class="control-label">Cause End Date</label>
                    
                    <input name="date"   type="date" class="form-control" value="<?php echo $rec['donation_last_date']; ?>" >
                </div>
                 <?php
                    if($_POST){
                     if (form_error('date') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('date'); ?>
                                            </span>
                    
                     <?php } }?>
               
                
            
            <div class="col-sm-6 col-sm-offset-4">
            <div class="form-actions">
                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Update My Donation Ad</button>
                
            </div>
            </div>
            
         

         
        </form>
       
</div>
                
        <!-- END FORM-->
    
          <?php }?> 
        </div>
                  
              </div>
          </div>
      </div>
      
      <br />
      <br /><br />
    <?php
    include 'includes/footer.inc';
    ?>
    
