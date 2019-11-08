<?php
// Create database connection using config file
include_once("config.php");

$id_cluster = $_POST['id_cluster'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "DELETE FROM `cluster` WHERE `cluster`.`id_cluster` = $id_cluster");

$data=array();

	$data[]=array(
		'message_success'=>"Data added successfuly",
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>