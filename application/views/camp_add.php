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
        
      
                <h1 style="font-weight:bold;">Campaing</h1>
                
            </div>
        </div>
    </section>
      
      <!-- page title end -->
      <div class="row">
          <div class="container">
              <div class="col-sm-7 col-sm-offset-3">
                          <br />
                           <br /> <br />
                          <?php if($data_saved == 'yes'){?>
             <div class="alert alert-success" style="text-align:center">
                            You have successfully Add Your Campaing <br />
                            
                           
                        </div> 
        <?php  }else{ ?>
                  <h1 style="color:#eb5310;font-weight:bold;">
                      Add New Campaing Here
                  </h1>
              </div>
              <div class="col-sm-6 col-sm-offset-3">
                    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <br />
        <br />
        
        <form action="<?php echo $root; ?>Campaing_add" method="post"  enctype="multipart/form-data" id="upload">
           
            <div class="form-body">
                <div class="form-group  ">
                    
                    <label class="control-label">Title</label>
                    <input class="form-control" placeholder="Enter your Campaing Title " type="text" name="title">
                    
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
                                          
                        <input class="form-control" type="text" placeholder = "Enter some lines Abut Your campaing" name="shdescription"/>
                    
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
                    <textarea cols="75" rows="10" name="lgdescription"></textarea>
                        
                  
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
                    <label class="control-label">Campaing End Date</label>
                    
                    <input name="date"   type="date" class="form-control">
                </div>
                <div>
                <?php
                    if($_POST){
                     if (form_error('date') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('date'); ?>
                                            </span>
                    
                     <?php } }?>
                </div>
                <div class="form-group">
                    <input type="file" name="file" id="image" />
                </div>
                
            
            <div class="col-sm-6 col-sm-offset-4">
            <div class="form-actions">
                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Add My campaing</button>
                
            </div>
            </div>
            
         


        </form>
       
</div>
        <?php } ?>
        <!-- END FORM-->
    </div>
                  
              </div>
          </div>
      </div>
      <br />
      <br /><br />
    <?php
    include 'includes/footer.inc';
    ?>
    