<?php
require_once('lib/PHPMailer_v5.1/class.phpmailer.php');

$customerName = (isNotEmpty($_POST['customerName']))?$_POST['customerName']:'';
$customerEmail = (isNotEmpty($_POST['customerEmail']))?$_POST['customerEmail']:'';
$customerPhone = (isNotEmpty($_POST['customerPhone']))?$_POST['customerPhone']:'';
$customerCity = (isNotEmpty($_POST['customerCity']))?$_POST['customerCity']:'';
$customerState = (isNotEmpty($_POST['customerState']))?$_POST['customerState']:'';
$customerZip = (isNotEmpty($_POST['customerZip']))?$_POST['customerZip']:'';
$styleNumbers = (isNotEmpty($_POST['styleNumbers']))?$_POST['styleNumbers']:'';
$comments = (isNotEmpty($_POST['comments']))?$_POST['comments']:'';
//$form_id = (isNotEmpty($_POST['form_id']))?$_POST['form_id']:'';

$ToAddress = "@gmail.com";

$Subject = "Customer Inquiry";

$BodyContent = "<html>
<body>
<p>Customer Information</p>
<p>Name: ".$customerName."</p>
<p>Email: ".$customerEmail."</p>
<p>Phone: ".$customerPhone."</p>
<p>City: ".$customerCity."</p>
<p>State: ".$customerState."</p>
<p>Zip: ".$customerZip."</p>
<p>Style Numbers: ".$styleNumbers."</p>
<p>Comment: ".$comments."</p>
</body>
</html>";
			   

$mail= new PHPMailer();          
$mail->IsSMTP();                 
$mail->SMTPAuth = true;          
$mail->SMTPSecure = "ssl";       
$mail->Host = "smtp.gmail.com";  
$mail->Port = 465;               
$mail->CharSet = "UTF-8";               

$mail->Username = "@gmail.com";  	//Gmail account
$mail->Password = "";  			//Gmail password

$mail->From = "@gmail.com"; 
$mail->FromName = "";           
$mail->Subject = $Subject;    
$mail->Body = $BodyContent;  
$mail->IsHTML(true);                     
$mail->AddAddress($ToAddress, $ToAddress);         

if(!$mail->Send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
}
else {
   echo "Message sent!";
}


function isNotEmpty($val) {
	$notEmpty = false;
	if (isset($val) && !empty($val)) {
		$notEmpty = true;
	}
	
	return $notEmpty;
}
?>
