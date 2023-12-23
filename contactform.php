<?php
    $name = $_POST['name']
	$applicant_email = $_POST['email'}
	$message = $_POST['message']
	
	$email_from = 'Applicant'email@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "Username: $name.\n".
	              "User Email: $applicant_email.\n".
				  "User Message: $message.\n";
	
	$to = "louiseraphael.lrdc@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers = "Reply to: $applicant_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: index.html");
?>
