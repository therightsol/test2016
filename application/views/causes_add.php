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
        <?php $username = $this->session->userdata('username');
                                         if (!empty($username)) { ?>
        
      
                <h1 style="font-weight:bold;">Cause</h1>
                
            </div>
        </div>
    </section>
      
      <!-- page title end -->
      <div class="">
          <div class="container">
                          <br />
                           <br /> <br />
                          <?php if($data_saved == 'yes'){?>
             <div class="alert alert-success">
                            You have successfully Add Your Cause <br />
                           
                        </div> 
        <?php  }else{ ?>
                  <h1 class="text-center" style="color:#eb5310;font-weight:bold;">
                      Add New Cause Here
                  </h1>
              <div class="col-sm-6 col-sm-offset-3">
                    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <br />
        <br />
        
        <form action="<?php echo $root; ?>Add_Causes" method="post"  enctype="multipart/form-data" id="upload">
           
            <div class="form-body">
                <div class="form-group  ">
                    
                    <label class="control-label" style="color:#ffffff">Title</label>
                    <input class="form-control" placeholder="Enter your Cause Title " type="text" name="title">
                    
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
                    <label class="control-label" style="color:#ffffff">Short Description</label>
                                          
                        <input class="form-control" type="text" placeholder = "Enter some lines Abut Your cause" name="shdescription"/>
                    
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
                    <label class="control-label" style="color:#ffffff">Long Description</label>
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
                    <label class="control-label" style="color:#ffffff">Amount Required</label>
                    
                        <input class="form-control" placeholder="Use integers only(20000)" type="text" name="amount">
                    
                </div>
                 <div>
                <?php
                    if($_POST){
                     if (form_error('amount') != '') { ?>
                                            <span   style="color:red !important ;">
                                                <?php echo form_error('amount'); ?>
                                            </span>
                    
                     <?php } }?>
                </div>
                <div class="form-group">
                    <label class="control-label" style="color:#ffffff">Cause End Date</label>
                    
                    <input name="date"   type="text" class="form-control date">
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
                    <input type="file" name="file" id="image" required="" />
                </div>
                
            
            <div class="col-sm-6 col-sm-offset-4">
            <div class="form-actions">
                <button type="submit" class="btn" style="background-color:#eb5310!important;color:#FFFFFF;padding-left:20px;padding-right:20px;font-weight:bold;">Add My cause</button>
                
            </div>
            </div>
            
         


        </form>
       
</div>
</div>
</div>
                                         <?php } }else{?>
            


      <div class="col-sm-6 col-sm-offset-3">
            <div class="alert" style="text-align: center;color:#ff0000">
                
                <strong>  You do not have sufficient permissions to access this page </strong><br />
                
            </div>
      </div>
            <br /><br />
                  <?php }?>
        <!-- END FORM-->
   
      <br />
      <br /><br />
          </div>
<br>
<br>
<br>
    <?php
    include 'includes/footer.inc';
    ?>
    