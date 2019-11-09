<?php
// Create database connection using config file
include_once("config.php");

$id_province = $_POST['id_province'];
$province = $_POST['province'];
$longitude=$_POST['longitude'];
$latitude=$_POST['latitude'];
// Fetch all users data from database
mysqli_query($mysqli, "UPDATE `province` SET `province` = '$province',`longitude` = '$longitude',`latitude`='$latitude' WHERE `province`.`id_province` = '$id_province';");

$data=array();

	$data[]=array(
		'message_success'=>"Data deleted successfuly",
	);


//encode json data
$data_json = json_encode($data);
echo $data_json;

?>