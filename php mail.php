<?php
	$to      = 'to_mail@example.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: from_mail@example.com' . "\r\n" .
		'Reply-To: from_mail@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	$mail = mail($to, $subject, $message, $headers);
	if($mail)
	{
		echo 'success';
	}
?> 