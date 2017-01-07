<!-- Custom scrollbars CSS -->
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />

<?php
$sku = (isset($_GET['sku']))?$_GET['sku']:'LES001.3';
?>
<div id="split_pg1">
	<div class="pdp_full">
		<img width="330" height="330" src="css/images/transp_80.png" id="mainview">
	</div>
	<div class="yui-panel-container shadow" id="matchPanel_c" style="z-index: 2; left: 45px; top: 430px; ">
		<div class="yui-panel-container shadow" style="z-index: 2; visibility: inherit;">
			<div id="matchPanel" class="yui-module yui-overlay yui-panel" style="visibility: inherit; width: 365px;">
				<div class="hd" style="cursor: auto;" id="matchPanel_h"></div>
				<div class="bd">
					<a href="javascript:void(0)" id="matchHref0"><img width="80" height="80" border="0" id="match2" src="css/images/transp_80.png" alt=""></a>
					<a href="javascript:void(0)" id="matchHref1"><img width="80" height="80" border="0" id="match2" src="css/images/transp_80.png" alt=""></a>
					<a href="javascript:void(0)" id="matchHref2"><img width="80" height="80" border="0" id="match2" src="css/images/transp_80.png" alt=""></a>
					<a href="javascript:void(0)" id="matchHref3"><img width="80" height="80" border="0" id="match3" src="css/images/transp_80.png" alt=""></a>
				</div>
				<a class="container-close" href="#">Close</a>
				<span class="container-close">&nbsp;</span>
			</div>
			<div class="underlay"></div>
		</div>
		<div class="underlay"></div>
	</div>
    <div class="pdp_moreViews"></div>
    <div id="pdp_nav">
		<ul>
			<li><a class="more_views" href="javascript:showMoreView()" id="more_views"><span class="inner">More Views</span></a></li>
			<li><a class="matching" href="javascript:showMatchView()" id="matching"><span class="inner">Matching Bands</span></a></li>
			<li><a class="print" href="javascript:void(0)" ><span class="inner">Print</span></a></li>
		</ul>
    </div>
</div>

<div id="split_pg2">
  	<div class="pdp_productName_wt">
        <p>Comfortable-Fit Four-Prong Diamond Solitaire Engagement Ring Presentation</p>
	</div>
    <div class="pdp_stamp"><img border="0" src="css/images/stamps/1939_stamp.png"></div>
    <div class="pdp_detail_wt">
		<span class="styleNo">　</span>
		<p id="description">　</p>
		<p>Please contact a Retailer for item pricing and further customization options.
			<span> <img vspace="5" border="0" src="css/images/layout/col_div.png"></span>
			<span> <img border="0" src="css/images/layout/collections_pdp.png"> </span><br>
			<span class="pdp_detail_wt"></span><br>
			<span><img vspace="5" border="0" src="css/images/layout/col_div.png"></span>
		</p>
	</div>
    <div id="pdp_action">
		<ul>
			<li><a class="add_to_tray" href="index.php?page=shop.product_details&amp;flypage=Copy of flypage.tpl&amp;id=80175&amp;task=view&amp;option=com_virtuemart&amp;Itemid=32&amp;manufacturer_id=1&amp;func=cartAdd&amp;Itemid=32&amp;miniTrayVisible=true&amp;quantity[]=1&amp;product_id=73652&amp;prod_id[]=73652" id="add_to_tray"><span class="inner">ADD TO TRAY &gt;</span></a></li>
			<li><a onclick="void window.open('index.php?page=shop.product_details&amp;flypage=Copy+of+flypage.tpl&amp;product_id=73652&amp;category_id=&amp;id=80175&amp;task=view&amp;tag=1&amp;option=com_virtuemart&amp;Itemid=32&amp;tmpl=component&amp;sendphoto=true', '', 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=450,height=500,directories=no,location=no');return false;" href="index.php?page=shop.product_details&amp;flypage=Copy+of+flypage.tpl&amp;product_id=73652&amp;category_id=&amp;id=80175&amp;task=view&amp;tag=1&amp;option=com_virtuemart&amp;Itemid=32&amp;tmpl=component"><span class="inner">SEND PHOTO  &gt;</span></a></li>
			<li><a class="lbOn" href="make_it_truly_yours.php"><span class="inner">MAKE IT TRULY YOURS &gt;</span></a></li>
			<li class="noborder">
	<!--        <a name="fb_share" type="icon_link" share_url="index.php?page=shop.product_details&amp;flypage=Copy of flypage.tpl&amp;id=80175&amp;task=view&amp;option=com_virtuemart&amp;Itemid=32&manufacturer_id=1&Itemid=32&product_id=73652&prod_id[]=73652" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
		-->    </li>

		</ul>
    </div>
    <div align="center">
		<a href="index.php?page=shop.cart&amp;option=com_virtuemart&amp;task=find_a_retailer&amp;statecode=statecode&amp;zipcode=zipcode&amp;Itemid=32"><img width="160" vspace="20" height="25" border="0" alt="Click here to fina a Retailer." src="css/images/pdp_find_retailer.png"></a>
    </div>
</div>

<div id="split_pg_div"><img width="6" height="478" border="0" src="css/images/content_div.png"></div>


<div id="pdp_options">
<div class="pdp_txtLt"> MORE CATEGORY PRODUCTS</div>
<div class="pdp_txtRt"><a href="index.php?page%3Dshop.browse%26subcategory1%3D1.1.1%26category_id%3D0%26task%3DshowDiamondShape&amp;option=com_virtuemart&amp;Itemid=32">BROWSE CATEGORY PRODUCTS &gt;</a></div>
</div>


<div id="related_box">
      <div id="thumbs_other"></div>
</div>


<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var aryMoreView = [];
var aryMarchBands = [];

$(document).ready(function(){
	
	getDetails('<?php echo $sku; ?>');
	
	$('.container-close').click(function() {
		$('#matchPanel_c').css('visibility','hidden');
	});
	
	
});

/* 
 * This function to be request data source of products
 */
function getDetails(sku) {

	initMatchHre();
	$('#matchPanel_c').css('visibility','hidden');
	
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
			aryMoreView = [];
			aryMoreView.length = 0;
			aryMarchBands = [];
			aryMarchBands.length = 0;
			
			if (product_img != '') {
				$('#mainview').attr('src', product_img);
				aryMoreView.push(product_img);
			}
			
			if (product_sku != '') {
				$('.styleNo').html(product_sku);
				$('.print').click(function() {
					window.open('productPrint.php?sku='+product_sku, '', 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=480,height=600,directories=no,location=no');
					return false;
				});
			}
			
			if (description != '') {
				$('#description').html(description);
			}
			
			for (var i=0; i<more_views.length; i++) {
				aryMoreView.push(more_views[i]);
			}
			
			if (matching_bands.length > 0) {
				for (var i=0; i<matching_bands.length; i++) {
					aryMarchBands.push(matching_bands[i]['img']);
				}
			} else {
				aryMarchBands.push(matching_bands['img']);
			}
			
			
			$('#thumbs_other').html('');
			for (var i=0; i<similar_products.length; i++) {
				var similarSKU = similar_products[i]['sku'];
				var similarImg = similar_products[i]['img'];
				
				$('<a class="related">')
				.html(
					$('<img width="80" height="80" border="0" alt="'+similarSKU+'" src="'+similarImg+'">')
				)
				.appendTo('#thumbs_other');
			}
			
			if (similar_products.length > 0) {
				$('#thumbs_other').children('a').each(function (index, value) {
					var similarDesc = similar_products[index]['short-desc'];
					var similarSKU = similar_products[index]['sku'];
					
					$(this)
					.mouseenter(function() {
						Tip('<b>'+similarSKU+'</b><br /><br />'+similarDesc);
					})
					.mouseleave(function() {
						UnTip();
					})
					.click(function() {
						getDetails(similarSKU);
					});
				});
								
				$("#related_box").mCustomScrollbar({
					scrollInertia:550,
					horizontalScroll:true,
					mouseWheelPixels:119,
					scrollButtons:{
						enable:true,
						scrollType:"pixels",
						scrollAmount:119
					},
					callbacks:{
						//onScroll:function(){ snapScrollbar(); }
					}
				});
			}			
			$.unblockUI();
		},
		failure: function(errMsg) {
			alert(errMsg);
			$.unblockUI();
		}
		
	});
}


function initMatchHre() {
	for (var i=0; i<4; i++) {
		var defaultImg = $('<img width="80" height="80" border="0" id="match'+i+'" src="css/images/transp_80.png" alt="">');
		$('#matchHref' + i).attr("href","javascript:void(0)");
		$('#matchHref' + i).html(defaultImg);
	}
}

function showMoreView() {
	initMatchHre();
	
	for (var i=0; i<aryMoreView.length; i++) {
		var tempImg = $('<img width="80" height="80" border="0" id="match'+i+'" src="'+aryMoreView[i]+'" alt="">');
		$('#matchHref' + i).attr("href","javascript:changeMainView('"+aryMoreView[i]+"')");
		$('#matchHref' + i).html(tempImg);
	}
	
	$('#matchPanel_c').css('visibility','visible');
}

function showMatchView() {
	initMatchHre();
	
	for (var i=0; i<aryMarchBands.length; i++) {
		var tempImg = $('<img width="80" height="80" border="0" id="match'+i+'" src="'+aryMarchBands[i]+'" alt="">');
		$('#matchHref' + i).attr("href","javascript:changeMainView('"+aryMarchBands[i]+"')");
		$('#matchHref' + i).html(tempImg);
	}
	
	$('#matchPanel_c').css('visibility','visible');
}

function changeMainView(product_img) {
	if (product_img != '') {
		$('#mainview').attr('src', product_img);
	}
}
</script>
  

  
