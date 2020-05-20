<?php


if(isset($_POST["send"])) { 
	$name = $_POST["Name"];
	$email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $phone = $_POST["Phone"];
	$content = $_POST["Message"];

	$toEmail = "vidalakistrajk@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}

?>
