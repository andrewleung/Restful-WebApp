<div id="split_pg1">
	<div class="pdp_full">
		<div id="trayContainer">
			<div class="pdp_productName">My Tray</div>
			<div class="pdp_stamp"><img border="0" src="css/myTray_files/1939_bk_stamp.png"></div>
			<div class="pdp_detail">You haven't added anything to your tray. <br><br>
			Please browse products and select "ADD TO TRAY" To add items to your tray.</div>
		</div>
	</div>
</div>

<div id="split_pg2" >
			<style type="text/css">
/* SCROLLING DIV */
div.scroll {
	height: 285px;
	width: 300px;
	overflow: auto;
	border: none;
	margin-left: auto;
	margin-right: auto;
	padding-top: 20px;
	padding-right: 0px;
	padding-bottom: 5px;
	padding-left: 60px;
}
ul.results {
	list-style-type: none;
	list-style-image: inherit;
	list-style-position: inside;
	margin-left: -30px;
	margin-top: -20px;
	font-size: 12px;
	text-align: left;
}

ul.results li {
	font-style: normal;
}
ul.results li .store{ font-style: italic; }
ul.results li .rt_name {
	font-size: 14px;
	font-weight: bold;
	color: #EAD489;
	display: block;
	font-style: normal;
}
ul.results li .address {
	font-size: 12px;
	font-weight: bold;
	color: #FFF;
	display: block;
	font-style: normal;
}
ul.results li .site {
	font-size: 12px;
	font-weight: bold;
	color: #FFF;
	display: block;
	font-style: normal;
}
ul.results li a {
	font-size: 12px;
	font-weight: bold;
	color: #EAD489
}

</style>
<script>
function contactRetailer(retailer_id)
{
  document.retailer_form.task.value = "submit_contact_retailer";
  document.retailer_form.retailer_id.value = retailer_id;
  document.retailer_form.customerName.value = document.getElementById("customer_name").value;
  document.retailer_form.customerEmail.value = document.getElementById("customer_email").value;
  document.retailer_form.customerPhone.value = document.getElementById("customer_phone").value;
  document.retailer_form.comments.value = document.getElementById("mycomments").value;
  document.retailer_form.signUpNewsletter.value = document.getElementById("signUpNewsletter").checked;
  document.retailer_form.submit();
}

function textlen(x,y){
  var thelength = x.value.length;
  window.status=thelength+' of '+y+' maximum characters.';
}

function maxtext(x,y){
tempstr = x.value
  if(tempstr.length > y){
    x.value = tempstr.substring(0,y);
  }
  textlen(x,y);
}

function validateEmail( strValue) {
/************************************************
DESCRIPTION: Validates that a string contains a
  valid email pattern.

 PARAMETERS:
   strValue - String to be tested for validity

RETURNS:
   True if valid, otherwise false.

REMARKS: Accounts for email with country appended
  does not validate that email contains valid URL
  type (.com, .gov, etc.) or valid country suffix.
*************************************************/
var objRegExp  = /^[^@]+@[^@]+.[a-z]{2,}$/i;

  //check for valid email
  return objRegExp.test(strValue);
}

function validateNotEmpty( strValue ) {
/************************************************
DESCRIPTION: Validates that a string is not all
  blank (whitespace) characters.

PARAMETERS:
   strValue - String to be tested for validity

RETURNS:
   True if valid, otherwise false.
*************************************************/
   var strTemp = strValue;
   strTemp = trimAll(strTemp);
   if(strTemp.length > 0){
     return true;
   }
   return false;
}

function trimAll( strValue ) {
/************************************************
DESCRIPTION: Removes leading and trailing spaces.

PARAMETERS: Source string from which spaces will
  be removed;

RETURNS: Source string with whitespaces removed.
*************************************************/
 var objRegExp = /^(\s*)$/;

    //check for all spaces
    if(objRegExp.test(strValue)) {
       strValue = strValue.replace(objRegExp, '');
       if( strValue.length == 0)
          return strValue;
    }

   //check for leading &amp; trailing spaces
   objRegExp = /^(\s*)([\W\w]*)(\b\s*$)/;
   if(objRegExp.test(strValue)) {
       //remove leading and trailing whitespace characters
       strValue = strValue.replace(objRegExp, '$2');
    }
  return strValue;
}

function validate() {
	var customerName = document.form_login.customerName.value;
	var customerEmail = document.form_login.customerEmail.value;
	var customerState = document.form_login.customerState.value;
	var customerZip = document.form_login.customerZip.value;
	var comments = document.form_login.comments.value;
	
	if ( (validateNotEmpty(customerName) == false ) ) {
 		document.form_login.customerName.focus();
		alert("Name is empty!");
 		return false;
 	}
	
	if ( (validateNotEmpty(customerEmail) == false ) ) {
 		document.form_login.customerEmail.focus();
		alert("Email is empty!");
 		return false;
 	}
	if ( (validateEmail(customerEmail) == false ) ) {
		document.form_login.customerEmail.focus();
		alert("Email is not valid!");
		return false;
	}
	
	if ( (validateNotEmpty(customerState) == false ) ) {
 		document.form_login.customerState.focus();
		alert("State is empty!");
 		return false;
 	}
	
	if ( (validateNotEmpty(customerZip) == false ) ) {
 		document.form_login.customerZip.focus();
		alert("Zip is empty!");
 		return false;
 	}
	
	if ( (validateNotEmpty(comments) == false ) ) {
 		document.form_login.comments.focus();
		alert("Comment is empty!");
 		return false;
 	}

	document.forms['form_login'].submit();	
	$("#split_pg1").hide("fast"); // added  
	$("#split_pg2").hide("fast"); // added  
	$("#split_pg_div").hide("fast"); // added  
	$('#register_form').fadeIn(1600);	 // added 
	return false;
}
</script>

<div id="contact_retailer">
	<form onsubmit="return validate();" class="conLogin" id="form_login" name="form_login" method="post" action="email.php" target="submitFormFrame">
		<input type="hidden" value="com_virtuemart" name="option">
		<input type="hidden" value="shop.cart" name="page">
		<input type="hidden" value="submit_contact_retailer" name="task" id="task">
		<input type="hidden" value="" name="retailer_id" id="retailer_id">

		<ul>
			<li>
				<div align="center" class="pdp_productName">Customer Information</div>
			</li>
			<li id="li_1">
				<label for="element_1" class="description"><div align="center">YOUR NAME*</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="customerName" id="element_1"></div>
			</li>
			<li id="li_2">
				<label for="element_2" class="description"><div align="center">YOUR EMAIL ADDRESS*</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="customerEmail" id="element_2"></div>
			</li>
			<li id="li_3">
				<label for="element_3" class="description"><div align="center">YOUR PHONE</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="customerPhone" id="element_3"></div>
			</li>
			<li id="li_4">
				<label for="element_4" class="description"><div align="center">YOUR CITY</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="customerCity" id="element_4"></div>
			</li>
			<li id="li_5">
				<label for="element_5" class="description"><div align="center">YOUR STATE*</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="customerState" id="element_5"></div>
			</li>
			<li id="li_6">
				<label for="element_6" class="description"><div align="center">YOUR ZIPCODE*</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="customerZip" id="element_6"></div>
			</li>
			<li>
				<div align="center" class="pdp_productName"><img border="0" src="css/myTray_files/1939_bk_stamp.png"></div>
			</li>
			<li>
				<div align="center" class="pdp_productName">Style Information</div>
			</li>
			<li id="li_7">
				<label for="element_7" class="description"><div align="center">STYLE NUMBERS INTERESTED IN:</div></label>
				<div align="center"><input type="text" value="" maxlength="55" class="element text medium" name="styleNumbers" id="element_7"></div>
			</li>
			<li id="li_8">
				<label for="element_8" class="description"><div align="center">YOUR COMMENT OR QUESTION*</div></label>
				<div>
					<div align="center"><textarea cols="40" rows="4" name="comments" id="element_8"></textarea></div>
				</div>
			</li>
			<li>
				<div align="center" style="margin-top:5px">will be notified regarding this matter.</div>
			</li>
			<li>
				<div align="center" style="color:#FFE794; font-size:11px">* Required Fields</div>
			</li>

			<div align="center">
				<a href="#">
				</a>
			</div>

			<li class="buttons">
				<div align="center">
					<input type="hidden" value="form_login" name="form_id">
					<span style="float:left; margin-left:70px">
						<a href="javascript:document.form_login.reset()"><img border="0" src="css/images/forms/cancel.png" alt="Clear" id="cancelForm"></a>
					</span>
					<span style="float:right; margin-right:70px">
						<input type="image" name="submit" src="css/images/forms/submit.png" id="saveForm">
					</span>
				</div>
			</li>

			<li>
				<div align="center">
				<script src="http://www.google.com/recaptcha/api/challenge?k=6LeMKN4SAAAAALwRXf60mWj4OeEzrAtvYkCEyl_r" type="text/javascript"></script><script src="http://www.google.com/recaptcha/api/js/recaptcha.js" type="text/javascript"></script>
				</div>
			</li>
		</ul>

		<input type="hidden" name="op2" value="login">
		<input type="hidden" name="return" value="">
		<input type="hidden" value="1" name="">
	</form>

</div>
</div>
<iframe name="submitFormFrame" id="submitFormFrame" width="0" height="0" frameborder="0" style="display:none;" ></iframe>

<div id="register_form" style="display:none;">
<form class="conLogin" id="form_login" name="login" method="post" action="">
	<div class="form_description">
		<h2 align="center" class="form_description">THANK YOU</h2>
		<p align="center"><img width="293" height="21" src="css/images/forms/form_stamp.png"></p>
	</div>

	<ul>
		<li id="li_1">
			<label for="element_1" class="description">
				<div align="center">Your information has been sent.</div>
			</label>
			<div>
				<div align="center"></div>
			</div>
		</li>

		<li id="li_2">
			<label for="element_2" class="description">
				<div align="center">You may be contacted directly.</div>
			</label>
			<div>
				<div align="center"></div>
			</div>
		</li>

		<li id="li_3">
			<label for="element_2" class="description">
			<div align="center">Other destinations:</div>
			</label>
		</li>

		<div align="center">
			<a href="index.php?option=com_virtuemart&amp;page=shop.browse&amp;id=0&amp;category_id=1&amp;Itemid=32"><img vspace="2" border="0" alt="" src="css/images/links/engagement.png" onmouseout="UnTip()" onmouseover="Tip('View all of our Engagement Rings.')"></a>
		</div>

		<div align="center">
			<a href="index.php?option=com_virtuemart&amp;page=shop.browse&amp;id=0&amp;category_id=2&amp;Itemid=32"><img vspace="2" border="0" alt="" src="css/images/links/wedding.png" onmouseout="UnTip()" onmouseover="Tip('View all of our Wedding Bands.')"></a>
		</div>

		<div align="center">
			<a href="index.php?option=com_virtuemart&amp;page=shop.browse&amp;id=0&amp;category_id=3&amp;Itemid=32"><img vspace="2" border="0" alt="" src="css/images/links/jewelry.png" onmouseout="UnTip()" onmouseover="Tip('View all of our Jewelry, Earrings and Pendants.')"></a>
		</div>

		<div align="center">
			<a href="index.php?option=com_virtuemart&amp;page=shop.browse&amp;task=listCollection&amp;Itemid=32"><img vspace="2" border="0" alt="" src="css/images/links/gift_gallery.png" onmouseout="UnTip()" onmouseover="Tip('View special products or commemorate special events with Collections.')"></a>
		</div>

		<div align="center">
			<a href="index.php?option=com_virtuemart&amp;noimage=yours_truly&amp;Itemid=32"><img vspace="2" border="0" alt="" src="css/images/links/yours_truly.png" onmouseout="UnTip()" onmouseover="Tip('you can customize any of the rings you see to make them Truly Yours.')"></a>
		</div>

		<li>
			<div align="center"></div>
		</li>

		<div align="center">
			<a href="/press/press.html"><img vspace="2" border="0" alt="" src="css/images/links/since_1939.png" onmouseout="UnTip()" onmouseover="Tip('Learn about the company, and its 70-year tradition of handcrafted jewelry on 47th Street in New York City.')"></a>
		</div>

		<div align="center">
			<a href="index.php?option=com_virtuemart&amp;noimage=insight&amp;Itemid=32"><img vspace="2" border="0" alt="" src="css/images/links/insight.png" onmouseout="UnTip()" onmouseover="Tip('Find out more about selecting the right jewelry, from the trusted perspective.')"></a>
		</div>
	</ul>
	<input type="hidden" name="op2" value="login">
	<input type="hidden" name="return" value="">
	<input type="hidden" value="1" name="">
</form>
</div>

<div id="split_pg_div"><img width="5" height="550" border="0" align="middle" src="css/myTray_files/myTray_div.png"></div>

<br class="clearfloat">
