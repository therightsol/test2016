
	<title>
			Calculate your Zakat - Save A Soul
		</title>
	<?php 
        include 'includes/head.inc'; ?>
	

	

	<!-- Needs to be in the header for Google Map API functionality -->
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='/-/js/jquery-1.6.4.min.js'>\x3C/script>")</script>
	<script src="/themes/third_party/cartthrob/scripts/jquery.form.js"></script>

	
		<script type="text/javascript">
			function fmtNumber(value)
			{
				result=Math.floor(value)+".";
				var cents=100*(value-Math.floor(value))+0.5;
				result += Math.floor(cents/10);
				result += Math.floor(cents);
				return result;
			}
			function fmtMoney(value)
			{
				return "$"+fmtNumber(value);
			}
			$(function() {
				$('.finput').focus(function(){
					if (this.value == this.defaultValue){  
						this.value = '';  
					}  
				});
				$('.finput').blur(function(){
					if (this.value == '' || /[^\d\.]/g.test(this.value)){
						this.value = "0";
					}
				});
				$('.calculator').click(function(e){
					var total = 0;
					$('.finput').each(function(){
						total = total + parseFloat(this.value);
					})
					//var computed_amount = (total >= 2600) ? total * 0.025 : 0;
					//var computed_amount = (total >= 4650) ? total * 0.025 : 0;
					//var computed_amount = (total >= 3900) ? total * 0.025 : 0;
					var computed_amount = (total >= 3550) ? total * 0.025 : 0;
					$('#total').val(fmtMoney(total));
					$('.computed_amount').val(fmtMoney(computed_amount));
					$('[name=x:donation_amount]').val(fmtNumber(computed_amount));
					$('[name=price]').val(fmtNumber(computed_amount));
					e.preventDefault();
				});
				$('.reset').click(function(e){
					$('.finput').each(function(){
						this.value = "0";
					});
					$('#total').val('');
					$('.computed_amount').val('');
					$('[name=x:donation_amount]').val('');
					e.preventDefault();
				});

				$('#donate').click(function(){
					if (($('[name=x:donation_amount]').val() == "0.00" || $('.computed_amount').val() == '')){
						alert("Please compute your zakat first.");
						return false;
					}else{
						window.parent.location.href='/donate/cart/';
						return true;
					}
				});
			});
		</script>
		
	
	
	<script>
		jQuery(document).ready(function($){
			$(".add").click(function(){
				$("#cart").html("updating...");
				var form = $(this).parents("form");
				$.post(
					form.attr("action"),
					form.serialize(),
					function(data) {
						form.find("input[name=XID]").val(data.XID);
						$('#cart').load('http://www.zakat.org/cart/mini_cart'); 
					},
					"json"
				);
				return false; 
			});
		}); 
		</script>
	<style data-c2c="c2c_print_container_style" media="print" type="text/css">span.skype_c2c_print_container {} span.skype_c2c_container {display:none !important;} .skype_c2c_menu_container {display:none !important;}</style><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/telemetry.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/menu_handler.js"></script></head>
<?php





include 'includes/header.inc';
?> 
<br />
<br />
<br />
<div class="row">
    <div class="container">
        <div class="col-sm-6 col-sm-offset-2>

	<section class="clearfix wrapper" id="content_area">

		<article class="clearfix" id="article">
			
					<section class="block clearfix zakat_calculator" id="content">
						
						<h1 id="calculator" style="color:#eb5310 !important">Zakat Calculator</h1>
						<p>This year's nisab value is $3,550.</p>

<table class="zakat_calculator" >
	<tbody><tr>
		<td class="label" style="text-align:left">Cash on hand and in bank accounts (savings, checking, etc.) </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		<td class="label" style="text-align:left">Refundable deposits (e.g. on rented apartment) </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		<td class="label" style="text-align:left">Non-delinquent loans (money you loaned to others) </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		
	</tr>

	<tr>
		<td class="label" style="text-align:left">Gold, Silver and Precious Items </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		<td class="label" style="text-align:left">Shares, stocks, bonds, IRA, pension plans, options, etc. </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		<td class="label" style="text-align:left">Business cash on hand and in banks plus invoices due. </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		<td class="label" style="text-align:left">Net value of business inventory and trade goods </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>

	<tr>
		<td class="label" style="text-align:left">Net income you are entitled to as of Zakat due date (e.g. your next paycheck that you worked for already) </td>
		<td>
			<input type="input" name="" value="0" id="" class="finput" style="background-color:#3d3d3d;color:#eb5310">
		</td>
	</tr>
</tbody></table>
                                                <br />
                                                <br />
                                                <div class="col-sm-7 col-sm-offset-5">
<div class="float_right">
	<a href="#" class="reset button btn btn-danger" style="background-color:#eb5310">Reset</a>
	<a href="#" class="calculator btn btn-danger" style="background-color:#eb5310">Calculate</a>
	<!-- <input type="button" class="calculator float_right" name="calculator" value="Calculate" id="calculator"> -->
</div>
                                                </div>


<table class="zakat_calculator">

	<tbody><tr>
                <td class="label" style="text-align:left">Total subject to Zakat:</td>
		<td>
			<input type="text" name="total" value="" id="total" readonly="readonly" style="background-color:#3d3d3d !important;color:#eb5310 !important">
		</td>
	</tr>

	<tr class="zakat_due">
		<td class="label" style="text-align:left">Your Zakat Due:</td>
		<td>
			<input type="text" class="computed_amount" name="computed_amount" value="" id="computed_amount" readonly="readonly" style="background-color:#3d3d3d !important;color:#eb5310">
		</td>
	</tr>
		
</tbody></table>

<p>Once you have calculated your zakat, copy the total and paste the amount in the donations page to donate.</p>

<!--<p><a href="https://interland3.donorperfect.net/weblink/weblink.aspx?name=zakat&id=1&how_did_you_hear=zakat_web" class="donate" target="_blank">Donate Now</a></p>-->
<p><a href="#" class="donate" target="_blank">Donate Now</a></p>
</div>
    </div>
        </div>
						
					</section>
				
		</article>

				
	

</section>
	<section class="block clearfix" id="share">
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4dee6a8e18b30bc1"></script>
</section>

<br />
<br /> <?php
    include 'includes/footer.inc';
    ?>		


		
		
		
		
			

<!-- custom functions -->
<script src="/-/js/functions.js"></script>
<!-- responsive design -->
<script src="/-/js/respond.min.js"></script>
<!-- FlexSlider -->
<script src="/-/js/jquery.flexslider-min.js"></script>
<!-- ToolTipsy -->
<script src="/-/js/tooltipsy.min.js"></script>
<!-- Needed for Accordion on FAQ Page -->
<script src="/-/js/jquery.easing.1.3.js"></script>
<!-- FitVids -->

<script src="/-/js/jquery.fitvids.js"></script>

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16377422-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  











</div></div><div class="skype_c2c_menu_container notranslate" id="skype_c2c_menu_container" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" data-fp="{4E1B0A0C-2FA9-45D3-AD17-29569D03033C}" data-murl="https://pipe.skype.com/Client/2.0/" data-p2murl="https://c2c-p2m-secure.skype.com/p2m/v1/push" data-uiid="1" data-uilang="en" style="display: none;"><div class="skype_c2c_menu_click2call"><a class="skype_c2c_menu_click2call_action" id="skype_c2c_menu_click2call_action" target="_self">Call</a></div><div class="skype_c2c_menu_click2sms"><a class="skype_c2c_menu_click2sms_action" id="skype_c2c_menu_click2sms_action" target="_self">Send SMS</a></div><div class="skype_c2c_menu_push_to_mobile"><a class="skype_c2c_menu_push_to_mobile_action" id="skype_c2c_menu_push_to_mobile_action" target="_blank">Call from mobile</a></div><div class="skype_c2c_menu_add2skype"><a class="skype_c2c_menu_add2skype_text" id="skype_c2c_menu_add2skype_text" target="_self">Add to Skype</a></div><div class="skype_c2c_menu_toll_info"><span class="skype_c2c_menu_toll_callcredit">You'll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div></div></body><iframe allowtransparency="true" frameborder="0" id="abs-top-frame" src="chrome-extension://flliilndjeohchalpbbcdekjklbdgfkk/html/top.html?1459455208277#minimized" style="position: fixed !important; z-index: 2147483647 !important; overflow: hidden !important; top: 0px !important; left: 0px !important; right: 0px !important; width: 138px !important; height: 13px !important; max-height: none !important; min-height: 0px !important; margin: 0px auto !important; padding: 0px !important; border: 0px !important; display: block !important; background-color: transparent !important;"></iframe></html>