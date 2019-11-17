<?php
include 'db.php';
include 'query.php';
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$latitude = doubleval($_POST["latitude"]);
$longitude = doubleval($_POST["longitude"]);
$googleUserID = $_POST["google_user_id"];
$facebookUserID = $_POST["facebook_user_id"];
$profilePicture = $_POST["profile_picture"];
$lastIP = $_POST["last_ip"];
$deviceName = $_POST["device_name"];
$lastAccess = date('Y:m:d H:i:s');
if (queryString($c, "users", "email", $email)) {
	echo -1;
} else if (query($c, "users", "phone", $phone)) {
	echo -2;
} else {
	$c->query("INSERT INTO users (first_name, last_name, email, password, phone, profile_picture, latitude, longitude, google_user_id, facebook_user_id, last_ip, device_name, last_access) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $password . "', '" . $phone . "', '" . $profilePicture . "', " . $latitude . ", " . $longitude . ", '" . $googleUserID . "','" . $facebookUserID . "', '" . $lastIP . "', '" . $deviceName . "', '" . $lastAccess . "')");
	$id = mysqli_insert_id($c);
	echo json_encode($c->query("SELECT * FROM users WHERE id=" . $id)->fetch_assoc());
}