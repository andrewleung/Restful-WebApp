<?php
$category_id = (isset($_GET['category_id']) && !empty($_GET['category_id']))?$_GET['category_id']: 'engagement';
switch ($category_id) {
	case 'engagement':
	case 'yours_truly':
	case 'my_tray':
	case 'login':
		$menu_color = "bk";
		break;
	case 'productDetails':
		$menu_color = "wt";
		break;
	default:
		$menu_color = "bk";
		break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
	<?php require_once('include.header.php'); ?>
<body class="thrColFixHdr">

<div style="visibility: hidden; position: absolute; overflow: hidden; padding: 0px; width: 533px; left: 805px; top: 67px;" id="WzTtDiV"><div id="WzBoDy" style="position: relative; z-index: 0; top: 0px; border-color: rgb(51, 51, 51); border-style: solid; border-width: 1px; background: none repeat scroll 0% 0% rgb(204, 204, 204); padding: 3px; text-align: left; opacity: 0; width: 525px;"><table style="position:relative;margin:0px;padding:0px;border-width:0px;left:0px;top:0px;line-height:normal;width:auto;" border="0" cellpadding="0" cellspacing="0"><tbody style="position:relative;margin:0px;padding:0px;border-width:0px;left:0px;top:0px;line-height:normal;width:auto;"><tr><td id="WzBoDyI" style="position: relative; margin: 0px; padding: 0px; border-width: 0px; left: 0px; top: 0px; line-height: normal; width: auto; color: rgb(51, 51, 51); font-family: Lucida Fax,Times New Roman,Book Antiqua,Palatino Linotype,sans-serif; font-size: 8pt; font-weight: normal; text-align: left;"><strong>Find out more about selecting the right jewelry, from the trusted perspective.</strong></td></tr></tbody></table></div></div><div style="visibility: hidden; position: absolute; overflow: hidden; padding: 0px; width: 0px; left: 0px; top: 0px;" id="WzTtDiV"></div>
<style type="text/css">
.notice {margin:5px 0;padding:10px;border:1px solid #dedeb9;background:#ffffd4;text-align:center;}
</style>
<!--[if lte IE 6]><div class="notice"><strong>Notice:</strong> You're using an out of date browser. To view this page properly, we recommend using a modern, standards-compliant browser - such as <a href="http://www.microsoft.com/ie">IE 7</a>, <a href="http://www.firefox.com">Firefox</a>, or <a href="http://www.apple.com/safari/">Safari</a>. All of which are 100% free.</div><![endif]-->


<?php
echo '<style type="text/css">';
if ($menu_color == "bk") {
	echo 'body  { background-image: url(css/images/layout/bg_slice.gif); } ';
	echo '#navlist li, #navlist a:link, #navlist a:visited { color: #616161; } ';
} else {
	echo 'body { background-image: url(css/images/layout/white_bg.png); margin-top: 0px; } ';
	echo '#navlist li, #navlist a:link, #navlist a:visited { color: #999999; } ';
}
echo '</style>';
?>
<div id="container">
	<?php require_once('include.menu.php'); ?>
	
	<?php
	switch ($category_id) {
		case 'engagement':
			require_once('engagement.php');
			break;
		case 'yours_truly':
			require_once('yours_truly.php');
			break;
		case 'my_tray':
			require_once('my_tray.php');
			break;
		case 'login':
			require_once('login.php');
			break;
		case 'productDetails':
			require_once('productDetails.php');
			break;
		default:
			require_once('engagement.php');
			break;
	}
	
	?>
	
	
	<?php require_once('include.footer.php'); ?>
</div>
</body>

<script type="text/javascript">
$(document).ready(function() {
	if ($('.fancybox').exists())
	{
		$('.fancybox').fancybox({
			'width'  	: 1017,           // set the width
			'height' 	: 600,           // set the height
			'fitToView'	: false,
			'type'   	: 'iframe'       // tell the script to create an iframe
		  });
	}
});
</script>

</html>
