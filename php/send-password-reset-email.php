<?php
include 'db.php';
include 'mail.php';
include 'uuid.php';
include 'common.php';
$email = $_GET["email"];
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if (!$results || $results->num_rows <=0) {
	// Email not registered
	echo -1;
	return;
}
$row = $results->fetch_assoc();
$name = $row["first_name"] . " " . $row["last_name"];
$resetID = "" . time() . "-" . generateUUID();
$c->query("UPDATE users SET email_reset_id='" . $resetID . "' WHERE id=" . $row["id"]);
sendEmail('danaoscompany@gmail.com', 'Atur Ulang Kata Sandi', "Hello world");