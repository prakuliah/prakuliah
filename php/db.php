<?php
$c = new mysqli("localhost", "prakuliah", "HelloWorld@123", "prakuliah");
if ($c->connect_error) {
	echo "Connection failed: " . $conn->connect_error;
} else {
	echo "Connected successfully";
}