<?php
include 'db.php';
mysqli_set_charset($c, "utf8");
$name = $_POST["name"];
$id = intval($_POST["id"]);
$items = [];
$sql = "SELECT * FROM " . $name . " WHERE id=" . $id;
$results = $c->query($sql);
if ($results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($items, $row);
	}
	echo json_encode($items);
} else {
	echo -1;
}