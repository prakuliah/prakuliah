<?php

function sendEmail($to, $subject, $message) {
	$from = 'admin@prakuliah.com';
	$headers = 'From: ' . $from . "\r\n" .
		'Reply-To: ' . $from . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}