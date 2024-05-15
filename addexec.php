<?php
include('connn.php');

if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    exit();
}

$file = $_FILES['image']['tmp_name'];
$image = addslashes(file_get_contents($file));
$image_name = addslashes($_FILES['image']['name']);
move_uploaded_file($file, "photos/" . $_FILES["image"]["name"]);

$location = "photos/" . $_FILES["image"]["name"];
$caption = $_POST['caption'];

$mysqli = new mysqli("localhost", "root", "", "data");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("INSERT INTO photos (location,title, caption) VALUES (?, ?,?)");
$stmt->bind_param("sss", $location,$title, $caption);
$stmt->execute();

$stmt->close();
$mysqli->close();

header("location: index.php");
exit();
?>
