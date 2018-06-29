<?php
if(isset($_REQUEST['submit'])) {
    //echo 'Success';
	$email_to="svmuralikrishnan@gmail.com";
	$email_subject="Message from a Potential Client";
	$name=$_REQUEST["name"];
	$uemail=$_REQUEST["email"];
	$email_from="webquiz@000webhostapp.com";
	$phone=$_REQUEST["phone"];
	$message=$_REQUEST["message"];

	/*$email_message="Form details below:\n\n";
	$email_message.="Name: ".$name."\n";
	$email_message.="Email: ".$uemail."\n";
	$email_message.="Phone: ".$phone."\n";
	$email_message.="Message: ".$message."\n";*/

	//$headers="From: ".$email_from."\r\nReply-To: ".$uemail."\r\nX-Mailer: PHP/".phpversion()."\r\n Organization: Creative Touche\r\n";
	//$headers.="MIME-Version: 1.0\r\nContent-type: text/plain; charset=iso-8859-1\r\nX-Priority: 3\r\n";
	$headers="MIME-Version: 1.0\r\n";
	$headers.="From: ".$email_from."".$email_subject."\r\n";
	$headers.="Content-type: text/html; charset=ISO-8859-1\r\n";
	$headers.="X-Priority: 3\r\n";
	$headers.="X-Mailer: smail-PHP".phpversion()."\r\n";
	$msg='<html><body><div><h2>'.$email_subject.'</h2><br/>';
	$msg.='<strong>Name: </strong>'.$name.'<br/>';
	$msg.='<strong>Email-id: </strong>'.$uemail.'<br/>';
	$msg.='<strong>Phone No: </strong>'.$phone.'<br/>';
	$msg.='<strong>Message: </strong>'.$message.'<br/></div></body></html>';

	if(mail($email_to,$email_subject,$msg,$headers)) {
		include '../thankyou.html';
	}
	else {
		echo "Error ".error_get_last()['message'];
	}
}
?>
