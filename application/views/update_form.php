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
        
                <h1 style="font-weight:bold;"> Update Cause</h1>
            
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
                            You have successfully update Your Cause <br />
                           
                        </div> 
        <?php  }else{ ?>
        
                  <h1 style="color:#eb5310;font-weight:bold;">
                      Update Your Cause Here
                  </h1>
              </div>
              <div class="col-sm-6 col-sm-offset-3">
                    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <br />
        <br />
         
          
                    
                
        <form action="<?php echo $root; ?>Cause_update/update/<?php echo $rec['cause_id']; ?>" method="post" >
           
            <div class="form-body">
                <div class="form-group  ">
                    <label class="control-label" style="color:#ffffff">Title</label>
                    <input class="form-control" placeholder="Enter your Cause Title " type="text" name="title" value=" <?php echo $rec['cause_title']; ?> ">
                    
                </div>
                 <div>
                <?php
                    if($_POST){
                     if (form_error('title') != '') { ?>
                                            <span  style="color:#ff0000 !important ;">
                                                <?php echo form_error('title'); ?>
                                            </span>
                    
                    <?php }}?>
                </div>
                
                <div class="form-group">
                    <label class="control-label" style="color:#ffffff">Short Description</label>
                                          
                        <input class="form-control" type="text" placeholder = "Enter some lines Abut Your cause" name="shdescription" value=" <?php echo $rec['cause_short_description']; ?> "/>
                    
                </div>
                <div>
                <?php
                    if($_POST){
                     if (form_error('shdescription') != '') { ?>
                                            <span  style="color:#ff0000 !important ;">
                                                <?php echo form_error('shdescription'); ?>
                                            </span>
                    
                     <?php }}?>
                </div>
               
                <div class="form-group ">
                    <label class="control-label" style="color:#ffffff">Long Description</label>
                    <br />
                    <textarea cols="75" rows="10" name="lgdescription"><?php echo $rec['cause_long_description']; ?></textarea>
                        
                  
                </div>
                 <div>
                <?php
                    if($_POST){
                     if (form_error('lgdescription') != '') { ?>
                                            <span  style="color:#ff0000 !important ;">
                                                <?php echo form_error('lgdescription'); ?>
                                            </span>
                    
                     <?php } }?>
                </div>
                
                <div class="form-group">
                    <label class="control-label" style="color:#ffffff">Amount Required</label>
                    
                        <input class="form-control" placeholder="Use integers only(20000)" type="text" name="amount" value=" <?php echo $rec['total_required_amount']; ?>" >
                    
                </div>
                <?php
                    if($_POST){
                     if (form_error('amount') != '') { ?>
                                            <span   style="color:#ff0000 !important ;">
                                                <?php echo form_error('amount'); ?>
                                            </span>
                    
                     <?php } }?>
                <div class="form-group">
                    <label class="control-label" style="color:#fffffff">Cause End Date</label>
                    
                    <input name="date"   type="text" class="form-control date" value="<?php echo $rec['cause_last_date']; ?>" >
                </div>
                 <?php
                    if($_POST){
                     if (form_error('date') != '') { ?>
                                            <span  style="color:#ff0000 !important ;">
                                                <?php echo form_error('date'); ?>
                                            </span>
                    
                     <?php } }?>
                
                
            
            <div class="col-sm-6 col-sm-offset-4">
            <div class="form-actions">
                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Update My cause</button>
                
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
    