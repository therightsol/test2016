
<?php 
include 'includes/header.inc'; ?>


</script>


	<meta name="keywords" content="estate agent,estate agency,estate agents,london estate agent,london estate agents,surrey estate agents,foxtons,foxton,london property,estate agent in london,estate agents in London,estate agents in Central London,london rental properties,rental properties,properties to rent,letting,lettings,london lettings,real estate agent uk,uk property website,property search uk,Estate Agent,Estate Agency,new homes">
	<meta name="description" content="London and Surrey Estate Agent Foxtons listing London property for sale. Leading UK real estate agents in London dealing with properties for sale, long lettings, short term rental property and New Homes in the UK. London letting agents">
	<meta property="og:image" content="<?php echo $root; ?>foxtons-static.global.ssl.fastly.net/img/foxtons_og_preview.png">
	<style>
		.table_tr{
			text-align:right !important;
			padding-right:6px !important;
		}
		h4.cta{
			margin-top:10px !important;
		}
		#homepage_intro li{
			padding-right:15px;
			height:590px;
		}
		.small_screen .masthead_subheader{
			display:none;
		}
		ul.ticklist {
			margin-bottom:5px !important;
		}
		
		#search_history_properties .card{
			float:left;
			transition:.3s ease;
		}
	</style>
</head>

<body class="index homepage">
    <?php
     $loggedInUser = $this->session->userdata('loggedInUser');
     if ($loggedInUser == 'admin') {
                             ?>
<div id="wrapper">
<div id="overlay" class="overlay"></div>
<?php include 'includes/header_second.inc'	?>
	
<div style="height: 10%;"></div>


<div class="box_border" style="margin: 30px 50px 0px 50px;">
		<div class="box_holder gradient" style="padding-bottom:0 !important;">
                       
                       
			<div id="myfoxtons_form">
                              <?php if ($view == 'add'){ ?>
			<form action="<?php echo $root; ?>Add_slider" enctype="multipart/form-data" method="post" name="myfoxtons_form">
			

			<h3>Slider</h3>
                        <?php if ($saved == ''){ ?>
                            
                            
			<fieldset class="default">
			<ol>
                        <li>
                            <label>Page Name</label>
                            <select name="page_name">
                                <option value="home">Home</option>
                            </select>
                            <span  style="color:red !important ;"><?php if($_POST){echo form_error('page_name');} ?></span>
			</li>
                        <li>
                            <label>Image</label>
                            <input name="userfile" required="" class="long_field" type="file" >
                            <?php if ($pic_error != ''){ ?>
                        <span style="color: red !important;"><?php echo $pic_error; ?></span>
                        <?php } ?>
                        </li>
                        <li>
				<label>Image alt</label>
				<input id="name" name="img_alt" class="input" type="text" value="<?php if($_POST){ echo set_value('img_alt'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('img_alt');} ?></span>
			</li>
			<li>
				<label>Heading</label>
				<input id="name" name="heading" class="input" type="text" value="<?php if($_POST){ echo set_value('heading'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('heading');} ?></span>
			</li>
                        <li>
				<label>Sub heading</label>
				<input id="name" name="sub_heading" class="input" type="text" value="<?php if($_POST){ echo set_value('sub_heading'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('sub_heading');} ?></span>
			</li>
                        <li>
				<label>First description</label>
				<input id="name" name="first_des" class="input" type="text" value="<?php if($_POST){ echo set_value('first_des'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('first_des');} ?></span>
			</li>
                        <li>
				<label>Second description</label>
				<input id="name" name="sec_des" class="input" type="text" value="<?php if($_POST){ echo set_value('sec_des'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('sec_des');} ?></span>
			</li>
                        <li>
				<label>Third description</label>
				<input id="name" name="third_des" class="input" type="text" value="<?php if($_POST){ echo set_value('third_des'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('third_des');} ?></span>
			</li>
                        <li>
				<label>Button Name</label>
				<input id="name" name="button_name" class="input" type="text" value="<?php if($_POST){ echo set_value('button_name'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('button_name');} ?></span>
			</li>
                        <li>
				<label>Page href</label>
				<input id="name" name="href" class="input" type="text" value="<?php if($_POST){ echo set_value('href'); } ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('href');} ?></span>
			</li>
                        <li>
				<label>&nbsp;</label>
				<input type="submit" class="button" value="Submit" style="background-color:#2A7FFF;color:#fff; ">
			</li>
			</ol>
                            
			</fieldset>

                        <?php }else{ ?>
                        <div class="alert alert-success"><h2>Successfully Added</h2></div>
                        <?php } ?>
			
                              
			</form>
                            <?php }elseif($view == 'update'){
                                //echo '<tt><pre>'.var_export($slider_value, true).'</tt></pre>';
                                ?>
                            <form action="<?php echo $root; ?>add_slider/update_slider/<?php echo $slider_value->ID;  ?>" enctype="multipart/form-data" method="post" name="myfoxtons_form">
			

			<h3>Slider</h3>
                        <?php if ($saved != ''){ ?>
                            <p style="color: green">Successfully added</p>
                        <?php } ?>
                            
			<fieldset class="default">
			<ol>
                        <li>
                            <label>Page Name</label>
                            <select name="page_name">
                                <option value="home">Home</option>
                            </select>
                            <span  style="color:red !important ;"><?php if($_POST){echo form_error('page_name');} ?></span>
			</li>
                        <li>
                            <label>Image</label>
                            <input name="userfile"  class="long_field" type="file" >
                            <?php if ($img_error != ''){ ?>
                        <span style="color: red !important;"><?php echo $img_error; ?></span>
                        <?php } ?>
                        </li>
                        <li>
				<label>Image alt</label>
				<input id="name" name="img_alt" class="input" type="text" value="<?php echo $slider_value->img_alt;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('img_alt');} ?></span>
			</li>
			<li>
				<label>Heading</label>
				<input id="name" name="heading" class="input" type="text" value="<?php echo $slider_value->heading;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('heading');} ?></span>
			</li>
                        <li>
				<label>Sub heading</label>
				<input id="name" name="sub_heading" class="input" type="text" value="<?php echo $slider_value->sub_heading;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('sub_heading');} ?></span>
			</li>
                        <li>
				<label>First description</label>
				<input id="name" name="first_des" class="input" type="text" value="<?php echo $slider_value->first_description;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('first_des');} ?></span>
			</li>
                        <li>
				<label>Second description</label>
				<input id="name" name="sec_des" class="input" type="text" value="<?php echo $slider_value->sec_description;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('sec_des');} ?></span>
			</li>
                        <li>
				<label>Third description</label>
				<input id="name" name="third_des" class="input" type="text" value="<?php echo $slider_value->third_description;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('third_des');} ?></span>
			</li>
                        <li>
				<label>Button Name</label>
				<input id="name" name="button_name" class="input" type="text" value="<?php echo $slider_value->button_text;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('button_name');} ?></span>
			</li>
                        <li>
				<label>Page href</label>
				<input id="name" name="href" class="input" type="text" value="<?php echo $slider_value->button_url;  ?>">
                                <span  style="color:red !important ;"><?php if($_POST){echo form_error('href');} ?></span>
			</li>
                        <li>
				<label>&nbsp;</label>
				<input type="submit" class="button" value="Update" style="background-color:#2A7FFF;color:#fff; ">
			</li>
			</ol>
                            
			</fieldset>

			
			
                             
			</form>
                            
                         <?php } ?>
			</div>

		<div id="why_register" style="float:right;width:45%;min-width:200px;margin:-40px 12px 0 0;">


			


				
					<p><img src="<?php echo $root; ?>foxtons-static.global.ssl.fastly.net/img/myfoxtons_list_preview.gif" style="margin-left:12px;" alt=""></p>

				<h4 style="margin-bottom:12px;">Property searching made easier</h4>

				<ul class="ticklist">
					<li>Save, rate &amp; comment on your favourite properties</li>
					<li>Save searches for quicker searching</li>
					<li>Manage email alerts of latest homes</li>
					<li>Access your saved details from home or work, or via mobile</li>
					<li>Contact us about properties with one click</li>
				</ul>
				<!--<p class="cta"><a href="about.php">More about My Foxtons</a> or <a href="../myfoxtons/index.html">view a demo account</a></p>!-->
				<p class="cta"><a href="<?php echo $root; ?>about">More about HVC</a></p>


			
		</div>

		<div style="clear:both;"></div>





		</div>
	</div>







    



<?php include 'includes/footer.inc'; ?>


<!-- WOW Async Tracking Code End -->





<script>
/* LP Mobile JS Configuration */
var _LP_CFG_={app_id:"64337664-2",options:{chatDisabled:true}};
</script>

<script>
	$(document).ready(function(){
		FOXTONS.MastheadSlider.play();
		//FOXTONS.History.outputValuationPrompt();
		$("#masthead_overlay img").trigger("unveil"); // force lazy load of masthead images immediately
		
		FOXTONS.History.outputSearches();
		FOXTONS.History.getLastSearch();
		
		$("#search_keyword_value,#search_submit").focus(function(e){
			$("#search_type_selector div").stop().slideUp('fast');
		});
		$("#search_type_selected").click(function(e){
			e.preventDefault();
			$("#search_type_selector div").stop().slideToggle('fast');
		});
		$("#search_type_selector div a").click(function(e){
			e.preventDefault();
			FOXTONS.Search.setHomepageSearchType($(this));
		});
		
		// other search forms
		$("#search_forms a").click(function(e){
			e.preventDefault();
			$("#search_forms a").parent().removeClass("selected");
			$("#search_forms li").show();
			$(this).parent().addClass("selected");
			// what form?
			var search_form = $(this).data("search_form");
			document.searchform.search_form.value = search_form;
			if( search_form == "keyword" ){
				$("#search_card").removeClass('advanced_search');
			}else{
				$("#search_card").addClass('advanced_search');
			}
			$("#search_keyword_holder").hide().fadeIn();
		});
	});
	
	// Search dropdown and search buttons
	FOXTONS.Search.setHomepageSearchType = function($this){
		var f = document.searchform;
		// update UI
		var search_type = $this.data("search_type");
		$("#search_type_selected").text( $this.text());
		if(FOXTONS.Design.isMobile()){
			$("#search_type_selected").css({"background-image":"none"})
		}
		$this.addClass("selected").siblings().removeClass("selected");
		
		// update form
		f.search_type.value = search_type;
		f.sold.value = $this.data("sold") ? "only":"1";
		if( $("#search_card").hasClass('advanced_search') ){
			f.location.disabled = true;
			f.submit_type.disabled = true;
			document.searchform.submit();
		}else{
			f.location.disabled = false;
			f.submit_type.disabled = false;
			$("#search_type_selector div").hide();
		}
	}
		
</script>
   <?php } else{ ?>
        <div style="text-align:center;margin-top:150px;">
    
    You do not have sufficient permissions to access this page 
    <br />  <br /> <br />
    <a href="<?php echo base_url(); ?>home" style="color:#2A7FFF" > Go Back to Home</a>
</div>
<?php
     } ?>
  
</body>


</html>
