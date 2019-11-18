<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if ($results->num_rows > 0) {
	$row = $results->fetch_assoc();
	if ($row["password"] != $password) {
		echo -2;
	} else {
		echo 1;
	}
} else {
	$results = $c->query("SELECT * FROM employers WHERE email='" . $email . "'");
	if ($results->num_rows > 0) {
		$row = $results->fetch_assoc();
		if ($row["password"] != $password) {
			echo -2;
		} else {
			echo 2;
		}
	} else {
		echo -1;
	}
}
