<?php
include 'db.php';
include 'mail.php';
$email = $_POST["email"];
sendEmail($email, 'Atur ulang kata sandi', 'Halo dunia');