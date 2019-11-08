<?php
// Create database connection using config file
include_once("config.php");

$id_cluster = $_POST['id_cluster'];
$cluster = $_POST['cluster'];
$id_disaster=$_POST['id_disaster'];
$cluster_information=$_POST['cluster_information'];

// Fetch all users data from database
mysqli_query($mysqli, "UPDATE `cluster` SET `cluster` = '$cluster',`id_disaster` = '$id_disaster' ,`cluster_information`='$cluster_information' WHERE `cluster`.`id_cluster` = '$id_cluster';");

$data=array();

	$data[]=array(
		'message_success'=>"Data deleted successfuly"
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>