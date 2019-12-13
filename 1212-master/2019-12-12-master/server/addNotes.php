<?php
include("db_conn.php");
data_default_timezone_set('Asia/Taipei');
$userEmail = $_POST['userEmail'];
$type = $_POST['noteType'];
$title = $_POST['title'];
$description = $_POST['description'];

// $userEmail = $_GET['userEmail'];
// $type = $_GET['noteType'];
// $title = $_GET['title'];
// $description = $_GET['description'];

$sql = "INSERT INTO `note` (`userEmail`, `type`, `title`, `description`) VALUES ('$userEmail', '$type', '$title', '$description')";

$rv = mysqli_query($link, $sql);
if($rv == false){
    $outData = array("ststus" => "fail");
}else{
    $outData = array("ststus" => "success");
}

echo json_encode($outData, JSON_UNESCAPED_UNICODE);