<?php
// Create database connection using config file
include_once("config.php");

$id_region = $_POST['id_region'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "DELETE FROM `region` WHERE `region`.`id_region` = $id_region");

$data=array();

	$data[]=array(
		'message_success'=>"Data deleted successfuly",
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>