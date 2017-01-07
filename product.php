<?php
$page = isset($_GET["page"])?$_GET["page"]:"1";
$category = isset($_GET["category"])?$_GET["category"]:'1.1.1';

list($categoryID, $styleID, $shapeID) = explode('.', $category);

$categorys[1] = "Engagement";

$ringStyle[1] = "Solitaires";
$ringStyle[2] = "3 stone";
$ringStyle[3] = "matching sets";
$ringStyle[4] = "fashion forward";

$DiamondShape[1][1] = "Round";
$DiamondShape[1][2] = "Princess";
$DiamondShape[1][3] = "Asscher";
$DiamondShape[1][4] = "Emerald & RADIANT";
$DiamondShape[1][5] = "Oval";
$DiamondShape[1][6] = "Pear Shape";
$DiamondShape[1][7] = "Marquise";
$DiamondShape[1][8] = "Cushion";

$DiamondShape[2][1] = "FAVORITES";
$DiamondShape[2][2] = "Round";
$DiamondShape[2][3] = "Emerald Cut";
$DiamondShape[2][4] = "Princess Cut";
$DiamondShape[2][5] = "Asscher Cut";
$DiamondShape[2][6] = "Cushion Cut";
$DiamondShape[2][7] = "Oval Cut";
$DiamondShape[2][8] = "Marquise Cut";
$DiamondShape[2][9] = "Baguettes";
$DiamondShape[2][10] = "Trillion";
$DiamondShape[2][11] = "Pear Shape";
$DiamondShape[2][12] = "Tapered Bullets";
$DiamondShape[2][13] = "Trapezoids";
$DiamondShape[2][14] = "Half Moon";

$DiamondShape[3][1] = "MATCHING SETS";

$DiamondShape[4][1] = "FAVORITES";
$DiamondShape[4][2] = "Round Centers";
$DiamondShape[4][3] = "Emerald Cut Centers";
$DiamondShape[4][4] = "Princess Cut Centers";
$DiamondShape[4][5] = "Asscher Cut Centers";
$DiamondShape[4][6] = "Cushion Cut Centers";
$DiamondShape[4][7] = "Oval Cut Centers";
$DiamondShape[4][8] = "Marquise Cut Centers";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
	<?php require_once('include.header.php'); ?>
<body class="thrColFixHdr">
<script type="text/javascript" src="js/wz_tooltip.js"></script>
<script>// Cross Browser DOM
// copyright Stephen Chapman, 4th Jan 2005
// you may copy this code but please keep the copyright notice as well
var aDOM = 0, ieDOM = 0, nsDOM = 0; var stdDOM = document.getElementById;
if (stdDOM) aDOM = 1; else {ieDOM = document.all; if (ieDOM) aDOM = 1; else {
var nsDOM = ((navigator.appName.indexOf('Netscape') != -1) && (parseInt(navigator.appVersion) ==4)); if (nsDOM) aDOM = 1;}}
function xDOM(objectId, wS) {
if (stdDOM) return wS ? document.getElementById(objectId).style:
document.getElementById(objectId);
if (ieDOM) return wS ? document.all[objectId].style: document.all[objectId];
if (nsDOM) return document.layers[objectId];
}                  
// More Object Functions
// copyright Stephen Chapman, 18th Jan 2005
// you may copy these functions but please keep the copyright notice as well
function setObjVis(objectID,vis) {var objs = xDOM(objectID,1); objs.visibility = vis;} function toggleObjVis(objectID) {var objs = xDOM(objectID,1); var vis = objs.visibility;  objs.visibility = (vis == "visible" || vis == "show") ? 'hidden' : 'visible';} function moveObjTo(objectID,x,y) {var objs = xDOM(objectID,1); objs.left = x; objs.top = y;}function moveObjBy(objectID,x,y) {var obj = xDOM(objectID,0);var objs = xDOM(objectID,1); if (obj.offsetLeft != null) {var l = obj.offsetLeft; var t = obj.offsetTop; objs.left = l+x; objs.top = t+y;} else if (objs.pixelLeft != null) {objs.pixelLeft += x; objs.pixelTop += y;} else obj.moveBy(x,y);}function moveObjLayer(objectID,z) {var objs = xDOM(objectID,1); objs.zIndex = z;}

 
var categorys = <?php echo json_encode($categorys); ?>,
	ringStyle = <?php echo json_encode($ringStyle); ?>,
	DiamondShape = <?php echo json_encode($DiamondShape); ?>,
	currentCat = '<?php echo $categorys[$categoryID]; ?>',
	currentStyle = '<?php echo $ringStyle[$styleID]; ?>',
	currentShape = '<?php echo $DiamondShape[$styleID][$shapeID]; ?>';
</script>

<div id="catContainer">
<div class="catSidebar">
	<div id="subnavmenu" style="visibility: visible;">
		<div class="sidebar_bc">HOME > ENGAGEMENT</div>
	</div>

	<div style="height: 100%; visibility: visible;" class="CollapsiblePanelGroup" id="CollapsiblePanelGroup5">
		<div class="CollapsiblePanel CollapsiblePanelClosed">
		<div tabindex="0" class="CollapsiblePanelTab"><span class="CollapsiblePanelTab1"><img src="css/images/sideMenu/solitaires.png"></span></div>
			<div class="CollapsiblePanelContent" style="display: none; visibility: visible; height: 0px;"><div id="sidebarNav">
				<ul>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.1', this)" class="active">ROUND</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.2', this)">PRINCESS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.3', this)">ASSCHER</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.4', this)">EMERALD &amp; RADIANT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.5', this)">OVAL</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.6', this)">PEAR SHAPE</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.7', this)">MARQUISE</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.1.8', this)">CUSHION</a></li>
				</ul>
			</div></div>
		</div>
		<div class="CollapsiblePanel CollapsiblePanelClosed">
			<div tabindex="0" class="CollapsiblePanelTab"><img src="css/images/sideMenu/3stone.png"></div>
			<div class="CollapsiblePanelContent" style="display: none; margin-top: 0px; visibility: visible; height: 0px;"><div id="sidebarNav">
				<ul>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.1', this)">FAVORITES</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.2', this)">ROUND</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.3', this)">EMERALD CUT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.4', this)">PRINCESS CUT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.5', this)">ASSCHER CUT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.6', this)">CUSHION CUT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.7', this)">OVAL CUT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.8', this)">MARQUISE CUT</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.9', this)">BAGUETTES</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.10', this)">TRILLION</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.11', this)">PEAR SHAPE</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.12', this)">TAPERED BULLETS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.13', this)">TRAPEZOIDS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.2.14', this)">HALF MOON</a></li>
				</ul>
			</div></div>
		</div>

		<div class="CollapsiblePanel CollapsiblePanelClosed">
			<div tabindex="0" class="CollapsiblePanelTab"><img src="css/images/sideMenu/matching_sets.png"></div>
			<div class="CollapsiblePanelContent" style="display: none; margin-top: 0px; visibility: visible; height: 0px;"><div id="sidebarNav">
				<ul>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.3.1', this)">MATCHING SETS</a></li>
				</ul>
		   </div></div>
		</div>
		<div class="CollapsiblePanel CollapsiblePanelClosed">
		<div tabindex="0" class="CollapsiblePanelTab"><img src="css/images/sideMenu/fashion_fwd.png"></div>
			<div class="CollapsiblePanelContent" style="display: none; visibility: visible; height: 0px;"><div id="sidebarNav">
				<ul>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.1', this)">FAVORITES</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.2', this)">ROUND CENTERS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.3', this)">EMERALD CUT CENTERS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.4', this)">PRINCESS CUT CENTERS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.5', this)">ASSCHER CUT CENTERS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.6', this)">CUSHION CUT CENTERS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.7', this)">OVAL CUT CENTERS</a></li>
					<li><a href="javascript:void(0);" onclick="changeCategory('1.4.8', this)">MARQUISE CUT CENTERS</a></li>
				</ul>
			</div></div>
		</div>
	</div>

</div>
<div id="gridContainer" style="visibility: visible;">
<script>
window.onload = function()
{
setObjVis("gridContainer", "visible");
setObjVis("CollapsiblePanelGroup5", "visible");
setObjVis("subnavmenu", "visible");
}
</script>


<table class="grid_border"></table>

<div id="pagination-clean"></div>

</div></div>

<script language="JavaScript" type="text/javascript">
var cpg1 = new Spry.Widget.CollapsiblePanelGroup("CollapsiblePanelGroup1");
var cpg2 = new Spry.Widget.CollapsiblePanelGroup("CollapsiblePanelGroup2", { contentIsOpen: false });
var cpg2_ = new Spry.Widget.CollapsiblePanelGroup("CollapsiblePanelGroup2_", { contentIsOpen: false, openPanelKeyCode:34, closePanelKeyCode:33});
var cpg3 = new Spry.Widget.CollapsiblePanelGroup("CollapsiblePanelGroup3", { contentIsOpen: false, enableAnimation: false });
var cpg = new Spry.Widget.CollapsiblePanelGroup("CollapsiblePanelGroup5", { contentIsOpen: false });
var cpg4 = new Spry.Widget.CollapsiblePanelGroup("CollapsiblePanelGroup4", { contentIsOpen: false });
</script>

<script>
$(document).ready(function(){
	getProduct('<?php echo $page; ?>');
});

/* 
 * This function to be request data source of products
 */
function getProduct(page) {
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
		type: "POST",
		url: "getProducts.php",
		data: {"page": page, "category": [currentCat,currentStyle,currentShape]},
		dataType: "json",
		success: function(data) {
			var products = data.products;
			var page_total = data.page_total;
			var current_page = data.page;
			
			
			
			genTable(products, page_total, current_page);
			$.unblockUI();
		},
		failure: function(errMsg) {
			//alert(errMsg);
			$.unblockUI();
		}
		
	});
}

/* 
 * This function to be generate grid of product table
 */
function genTable(products, page_total, current_page) {
	var maxItm = 9;
	var $tr1 = $("<tr>");
	var $tr2 = $("<tr>");
	var $tr3 = $("<tr>");
	var $td = [];
	
	$td.push($("<td rowspan='2' colspan='2'>"));
	$td.push($("<td width='150'>"));
	$td.push($("<td width='150'>"));
	$td.push($("<td width='150'>"));
	$td.push($("<td>"));
	$td.push($("<td rowspan='2' colspan='2'>"));
	$td.push($("<td width='150'>"));
	$td.push($("<td width='150'>"));
	$td.push($("<td width='150'>"));
	
	var imgSize = ['322','150','150','150','150','322','150','150','150'];
	
	var sku = '';
	var img = '';
	var index = '';
	var shortDesc = '';
	
	if (products.length >= maxItm) {
		// add element 
		for (var i=0; i<9; i++) {
		
			sku = products[i]['sku'];
			img = products[i]['img'];
			index = products[i]['index'];
			
			$a = $('<a>');
			$a.append($('<img width="'+imgSize[i]+'" height="'+imgSize[i]+'" border="0" alt="" src="'+img+'">'));
			$a.append($('<p>'+sku+'</p>'));
			$td[i].append($a);
		}
		
		// add element event
		for (var i=0; i<9; i++) {
			$td[i].children('a').each(function (index, value) {
				var sku2 = products[i]['sku'];
				var shortDesc2 = products[i]['short-desc'];
				
				$(this)
				.mouseenter(function() {
					Tip('<b>'+sku2+'</b><br /><br />'+shortDesc2);
				})
				.mouseleave(function() {
					UnTip();
				})
				.click(function() {
					window.open('index.php?category_id=productDetails&sku='+sku2,'_blank');
				});
			});
		}
		
	} else {
		// add element
		$(products).each(function(prod_idx) {
			if (prod_idx>8) return false;
			sku = products[prod_idx]['sku'];
			img = products[prod_idx]['img'];
			index = products[prod_idx]['index'];
			
			$a = $('<a>');
			$a.append($('<img width="'+imgSize[prod_idx]+'" height="'+imgSize[prod_idx]+'" border="0" alt="" src="'+img+'">'));
			$a.append($('<p>'+sku+'</p>'));
			$td[prod_idx].append($a);
			
		});
		
		// add element event
		$(products).each(function(prod_idx) {
			if (prod_idx>8) return false;
			$td[prod_idx].children('a').each(function (index, value) {
				var sku2 = products[prod_idx]['sku'];
				var shortDesc2 = products[prod_idx]['short-desc'];
				
				$(this)
				.mouseenter(function() {
					Tip('<b>'+sku2+'</b><br /><br />'+shortDesc2);
				})
				.mouseleave(function() {
					UnTip();
				})
				.click(function() {
					window.open('index.php?category_id=productDetails&sku='+sku2,'_blank');
				});
			});
		});
		
		for (var i=products.length; i<9; i++) {
			img = (imgSize[i] == '150')?'css/images/161_transp.png':'"css/images/322_transp.png"';
			$td[i].append($('<img width="'+imgSize[i]+'" height="'+imgSize[i]+'" border="0" alt="" src="'+img+'">'));
		}
	}
	
	for (var i=0; i<=3; i++) {
		$tr1.append($td[i]);
	}
	for (var i=4; i<=5; i++) {
		$tr2.append($td[i]);
	}
	for (var i=6; i<=8; i++) {
		$tr3.append($td[i]);
	}
	
	$(".grid_border").empty();
	$(".grid_border").append($tr1);
	$(".grid_border").append($tr2);
	$(".grid_border").append($tr3);
	
	// Gen pagination
	
	var start_page = 1;
	var prev_page = (current_page - 1 > 0)?current_page - 1:1;
	var next_page = (current_page + 1 > page_total)?current_page:current_page + 1;
	var end_page = page_total;
	var $ul = $("<ul>");
	var $li_Start = $('<li class="previous"><a title="Start" href="javascript:void(0);" onclick="getProduct('+start_page+')">«« Start</a></li>');
	var $li_Prev = $('<li class="previous"><a title="Prev" href="javascript:void(0);" onclick="getProduct('+prev_page+')">« Prev</a></li>');
	
	//var $li_Next = $("<li class='next-off'>Next »</li>");
	//var $li_End = $("<li class='next-off'>End »»</li>");
	var $li_Next = $('<li class="next"><a title="Next" href="javascript:void(0);" onclick="getProduct('+next_page+')">Next »</a></li>');
	var $li_End = $('<li class="next"><a title="End" href="javascript:void(0);" onclick="getProduct('+end_page+')">End »»</a></li>');
	
	
	$ul.append($li_Start);
	$ul.append($li_Prev);
	
	for (var i=1; i<=page_total; i++) {
		if (i == current_page) {
			$ul.append($('<li class="active">'+i+'</li>'));
		} else {
			$ul.append($('<li><a class="pagenav" href="javascript:void(0);" onclick="getProduct('+i+')"><strong>'+i+'</strong></a></li>'));
		}
	}
	
	$ul.append($li_Next);
	$ul.append($li_End);
	
	$("#pagination-clean").empty();
	$("#pagination-clean").append($ul);
}

/* 
 * This function to be change the category
 */
function changeCategory(category, e) {
	var category = category.split(".");
	
	var categoryID = category[0],
		styleID = category[1],
		shapeID = category[2];
		
	currentCat = categorys[categoryID];
	currentStyle = ringStyle[styleID];
	currentShape = DiamondShape[styleID][shapeID];
	
	getProduct('1');
	$('.CollapsiblePanelContent').find('.active').removeClass('active');
	e.className = "active";
}
</script>

</body>
</html>
