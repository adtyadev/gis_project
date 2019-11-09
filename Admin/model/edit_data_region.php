<?php
// Create database connection using config file
include_once("config.php");
$id_region = $_POST['id_region'];
$id_province = $_POST['id_province'];
$id_disaster = $_POST['id_disaster'];
$id_cluster =  $_POST['id_cluster'];
$region = $_POST['region'];
$longitude = $_POST['longitude'];
$latitude =  $_POST['latitude'];

// Fetch all users data from database
mysqli_query($mysqli, "UPDATE `region` SET `id_province` = '$id_province',`id_disaster` = '$id_disaster' ,`id_cluster`='$id_cluster', `region`='$region', `longitude`='$longitude', `latitude`='$latitude' WHERE `region`.`id_region` = '$id_region';");

$data=array();

	$data[]=array(
		'message_success'=>"Data edited successfuly"
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>