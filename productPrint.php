<?php
$sku = (isset($_GET['sku']))?$_GET['sku']:'LES001.3';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" dir="ltr" lang="en-gb">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="index, follow" name="robots">
	<meta content="" name="keywords">
	<meta content="Comfortable-Fit Four-Prong Diamond Solitaire Engagement Ring Presentation" name="description">
	<title>Comfortable-Fit Four-Prong Diamond Solitaire Engagement Ring</title>
	<link type="image/x-icon" rel="shortcut icon" href="images/favicon.ico">
	
	<link type="text/css" href="css/template.css" rel="stylesheet">
</head>
<body class="contentpane">
<div id="WzTtDiV" style="visibility: hidden; position: absolute; overflow: hidden; padding: 0px; width: 0px; left: 0px; top: 0px; z-index: 1010;"></div>

<script src="lib/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="js/wz_tooltip.js" type="text/javascript"></script>
<script src="js/tip_balloon.js" type="text/javascript"></script>

<!-- Add blockUI JS file -->
<script src="js/jquery.blockUI.js" language="javascript"></script>

<!--[if IE 5]>
<style type="text/css">
/* place css box model fixes for IE 5* in this conditional comment */
.thrColFixHdr #sidebar1 { width: 180px; }
.thrColFixHdr #sidebar2 { width: 190px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css">
/* place css fixes for all versions of IE in this conditional comment */
.thrColFixHdr #sidebar2, .thrColFixHdr #sidebar1 { padding-top: 30px; }
.thrColFixHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->

<script type="text/javascript">
window.onload = function()
{

}
</script>


<style media="print" type="text/css">
<!--
.vmNoPrint { display: none }

.move_logo {
	padding: 0px;
	margin-right: -40px;
	margin-left: -35px;
	margin-top: -14px;
}

body {
	background-image: url(css/images/layout/white_bg.png);
	margin-top: 0px;
}

/* *** Search Box *** */
-->
</style>


<div id="WzTtDiV" style="padding: 0px; overflow: hidden; visibility: hidden; position: absolute; width: 0px; left: 0px; top: 0px;"></div>

<!-- begin print code -->
<div style="text-align:center;margin-top:15px;">
	<!-- Logo -->

	<img style="border-width:0px;margin-left:40px;" id="imgLogo" name="printLogo" src="css/print_test_files/logo_print.png">

	<!-- Photo -->
	<div>
		<img style="border-width:0px; width:330px;height:330px;" src="css/images/transp_80.png" id="mainview">
	</div>

	<div align="center" style="margin-top:5px;">
	<!-- Title -->
		<table width="460" align="center"><tbody>
			<tr align="center" id="trPageTitle">
				<td valign="top"><div class="pdp_productName_wt">Comfortable-Fit Four-Prong Diamond Solitaire Engagement Ring Presentation</div></td>
			</tr>
			<tr>
				<td align="center"><div class="pdp_stamp"><img border="0" src="css/images/stamps/1939_stamp.png"></div></td>
			</tr>
			<tr>
				<td align="center"><div class="pdp_detail_wt"><span class="styleNo">　</span>
				<p id="description">　</p>
				<p>Please contact a Retailer for item pricing and further customization options.</p>
				</div></td>
			</tr>
			<tr align="center">
				<td valign="top"><img border="0" src="css/print_test_files/col_div.png"></td>
			</tr>
		</tbody></table>

		<!-- Description --><!-- Footer Text -->
		<table width="460"><tbody>
		<tr align="center">
			<td valign="bottom" style="height:100%">
				<div class="pdp_detail_wt">
				</div>
			</td>
		</tr>
		<tr align="center">
			<td valign="bottom" style="height:100%">
				<span class="vmNoPrint">
				<a title="" onclick="javascript:window.print(); return false;" href="javascript:void(0)">
				<img border="0" align="middle" onmouseout="UnTip()" onmouseover="Tip(' Print ')" name="Print" alt="" src="css/print_test_files/printButton.png">
				</a>
				</span>
			</td>
		</tr>
		</tbody></table>
	</div>
</div>

<!-- end_new code -->



<script>
var aryMoreView = [];
var aryMarchBands = [];

$(document).ready(function(){
	
	getDetails('<?php echo $sku; ?>');
});

/* 
 * This function to be request data source of products
 */
function getDetails(sku) {
	$.blockUI({
		message: "Loading......", 
		css: { 
			border: 'none', 
			padding: '15px', 
			backgroundColor: '#000', 
			'-webkit-border-radius': '10px', 
			'-moz-border-radius': '10px', 
			opacity: .5, 
			color: '#fff' 
		} 
	}); 
	
	$.ajax({
		type: "GET",
		url: "getProductDetail.php",
		data: {"sku":sku},
		dataType: "json",
		success: function(data) {
		
			var product_sku = data['sku'];
			var product_img = data['img'];
			var description = data['description'];
			var short_desc = data['short-desc'];
			var more_views = data['more-views'];
			var matching_bands = data['matching-bands'];
			var similar_products = data['similar-products'];
			
			if (product_img != '') {
				$('#mainview').attr('src', product_img);
			}
			
			if (product_sku != '') {
				$('.styleNo').html(product_sku);  
			}
			
			if (description != '') {
				$('#description').html(description);
			}
			
			for (var i=0; i<more_views.length; i++) {
				aryMoreView.push(more_views[i]);
			}
			
			$.unblockUI();
			
			window.print();
		},
		failure: function(errMsg) {
			alert(errMsg);
			$.unblockUI();
		}
		
	});
}
</script>

</body>
</html>
