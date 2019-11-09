<?php
// Create database connection using config file
include_once("config.php");

$id_province = $_POST['id_province'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "DELETE FROM `province` WHERE `province`.`id_province` = $id_province");

$data=array();

	$data[]=array(
		'message_success'=>"Data added successfuly",
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>