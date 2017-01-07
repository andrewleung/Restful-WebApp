<div id="header">
<div class="mm_bk">
<?php
if ($menu_color == "bk") {
?>





<ul>
	<li><a href="index.php?category_id=engagement" class="eng"><img onmouseover="Tip('<strong>View all of our Engagement Rings.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/eng.png" alt="View Engagement Rings" name="eng" border="0"></a></li>
	<li><a href="#" class="wed"><img onmouseover="Tip('<strong>View all of our Wedding Bands.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/wedding.png" border="0"></a></li>
	<li><a href="#" class="jewl"><img onmouseover="Tip('<strong>View all of our Jewelry, Earrings and Pendants.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/jewelry.png" border="0"></a></li>
	<li><a href="#" class="col_yt"><img onmouseover="Tip('<strong>View special products or commemorate special events with Collections.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/gift_gallery.png" border="0"></a></li>	
	<li><a href="index.php?category_id=yours_truly" class="yt"><img onmouseover="Tip('<strong>customize any of the rings you see to make them Truly Yours.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/yt.png" border="0"></a></li>	
	<li><a href="http://" class="nobg"><img src="css/images/nav/bk/logo_blk.png" class="move_logo" align="top" border="0" hspace="10"></a></li>
	<li><a href="#" class="since"><img onmouseover="Tip('<strong>Learn about the company, and its 70-year tradition of handcrafted jewelry on 47th Street in New York City.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/since39.png" border="0"></a></li>
	<li><a href="#" class="in_log"><img onmouseover="Tip('<strong>Find out more about selecting the right jewelry, from the trusted perspective.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/insight.png" border="0"></a></li>
	<li><a href="index.php?category_id=my_tray" class="mytray"><img onmouseover="Tip('<strong>While you\'re browsing, you can save products that catch your eye to your Tray for reference later.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/mytray.png" border="0"></a></li>
	<li><a href="index.php?category_id=login" class="in_log"><img onmouseover="Tip('<strong>Login to your Account.</strong>')" onmouseout="UnTip()" src="css/images/nav/bk/login.png" border="0"></a></li>
	<li>
		<div id="searchform_wrapper">
		   <div id="search_box">
				<form id="search_form" method="post" action="index.php?page=shop.browse&amp;option=com_virtuemart&amp;Itemid=32">
					<input name="keyword" id="s" value=" SEARCH" onfocus="if (this.value==this.defaultValue) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" type="text">
					<input name="Search" id="Search" value=" SEARCH" type="hidden">
					<input src="css/images/nav/bk/go.png" id="go" alt="Search" title="Search" height="19" type="image" width="23">
					<a style="padding-top:8px; padding-bottom:0px;" href="http://www.facebook.com/pages/"><img src="css/images/layout/facebook.png"></a>
					<a style="padding-top:8px; padding-bottom:0px;" href="http://www.twitter.com/"><img src="css/images/layout/twitter.png" alt="Follow on Twitter"></a>
					<a style="padding-top:8px; padding-bottom:0px;" href="http://tumblr.com/"><img src="css/images/layout/tumblr.png" alt="Tumblr"></a>
					<a style="padding-top:6px; padding-bottom:0px;" href="http://www.flickr.com/photos/"><img src="css/images/layout/flickr.png" alt="Flickr"></a>
					<a style="padding-top:0px; padding-bottom:0px;" href="http://catalogs.html"><img src="css/images/layout/catalogs.png" alt="catalog"></a>
				</form>
			</div>
		</div>
	</li>
</ul>
<?php
} else {
?>
<ul>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','eng','css/images/nav/wt/eng_over.png','',1)" onclick="MM_nbGroup('down','group1','eng','css/images/nav/wt/eng_over.png',1)" class="eng" target="_top" href="index.php?category_id=engagement"><img width="99" height="14" border="0" name="eng" alt="" src="css/images/nav/wt/eng.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;View all of our Engagement Rings.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','wed','css/images/nav/wt/wed_over.png','',1)" onclick="MM_nbGroup('down','group1','wed','css/images/nav/wt/wed_over.png',1)" class="wed" target="_top" href="#"><img border="0" name="wed" src="css/images/nav/wt/wed.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;View all of our Wedding Bands.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','jewely','css/images/nav/wt/jewely_over.png','',1)" onclick="MM_nbGroup('down','group1','jewely','css/images/nav/wt/jewely_over.png',1)" class="jewl" target="_top" href="#"><img border="0" name="jewely" src="css/images/nav/wt/jewely.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;View all of our Jewelry, Earrings and Pendants.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','collect','css/images/nav/wt/gift_gallery_over.png','',1)" onclick="MM_nbGroup('down','group1','collect','css/images/nav/wt/gift_gallery_over.png',1)" class="col_yt" target="_top" href="#"><img border="0" name="collect" src="css/images/nav/wt/gift_gallery.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;View special products or commemorate special events with Collections.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','yt','css/images/nav/wt/yt_over.png','',1)" onclick="MM_nbGroup('down','group1','yt','css/images/nav/wt/yt_over.png',1)" class="yt" target="_top" href="index.php?category_id=yours_truly"><img border="0" name="yt" src="css/images/nav/wt/yt.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;you can customize any of the rings you see to make them Truly Yours.&lt;/strong&gt;')"></a></li>
	<li><a class="nobg" href="http://"><img hspace="10" border="0" align="top" class="move_logo" src="css/images/nav/wt/logo_wt.png"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','since39','css/images/nav/wt/since39_over.png','',1)" onclick="MM_nbGroup('down','group1','since39','css/images/nav/wt/since39_over.png',1)" class="since" target="_top" href="#"><img width="80" height="14" border="0" name="since39" src="css/images/nav/wt/since39.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;Learn about the company, and its 70-year tradition of handcrafted jewelry on 47th Street in New York City.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','insight','css/images/nav/wt/insight_over.png','',1)" onclick="MM_nbGroup('down','group1','insight','css/images/nav/wt/insight_over.png',1)" class="in_log" target="_top" href="#"><img border="0" name="insight" src="css/images/nav/wt/insight.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;Find out more about selecting the right jewelry, from the trusted perspective.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','mytray','css/images/nav/wt/mytray_over.png','',1)" onclick="MM_nbGroup('down','group1','mytray','css/images/nav/wt/mytray_over.png',1)" class="mytray" target="_top" href="index.php?category_id=my_tray"><img border="0" name="mytray" src="css/images/nav/wt/mytray.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;While you\'re browsing, you can save products that catch your eye to your Tray for reference later.&lt;/strong&gt;')"></a></li>
	<li><a onmouseout="MM_nbGroup('out')" onmouseover="MM_nbGroup('over','login','css/images/nav/wt/login_over.png','',1)" onclick="MM_nbGroup('down','group1','login','css/images/nav/wt/login_over.png',1)" class="in_log" target="_top" href="index.php?category_id=login"><img border="0" name="login" src="css/images/nav/wt/login.png" onmouseout="UnTip()" onmouseover="Tip('&lt;strong&gt;Login to your Account.&lt;/strong&gt;')"></a><a onmouseout="MM_nbGroup('out')" onclick="MM_nbGroup('down','group1','login','css/images/nav/wt/login_over.png',1)" class="in_log" target="_top" href="http://index.php?option=com_virtuemart&amp;loginlink=true&amp;Itemid=32&amp;vmcchk=1"></a>
	</li>
	<li>
					<div id="searchform_wrapper">
						<div id="search_box">
							<form action="index.php?page=shop.browse&amp;option=com_virtuemart&amp;Itemid=32" method="post" id="search_form">
								<input type="text" onblur="if (this.value=='') this.value=this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value=''" maxlength="50" value=" SEARCH" id="s" name="keyword">
								<input type="hidden" value="Search" id="Search" name="Search">
								<input type="hidden" value="0" name="limitstart">
								<input width="23" type="image" height="19" title="" alt="" id="go" src="css/images/nav/wt/go.png">
							</form>
						</div>
	<a href="http://www.facebook.com/pages/" style="padding-top:8px; padding-bottom:0px;"><img src="css/images/layout/facebook.png"></a>
	<a href="http://www.twitter.com/" style="padding-top:8px; padding-bottom:0px;"><img alt="" src="css/images/layout/twitter.png"></a>
	<a href="http://tumblr.com" style="padding-top:8px; padding-bottom:0px;"><img alt="" src="css/images/layout/tumblr.png"></a>
	<a href="http://www.flickr.com/photos/" style="padding-top:6px; padding-bottom:0px;"><img alt="" src="css/images/layout/flickr.png"></a>
	<a href="/catalogs.html" style="padding-top:0px; padding-bottom:0px;"><img alt="" src="css/images/layout/catalogs.png"></a>
					</div>
	</li>
</ul>
<?php
}
?>
</div>
</div>
<script type="text/javascript" src="js/wz_tooltip.js"></script>
