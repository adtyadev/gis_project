<?php
// Create database connection using config file
include_once("config.php");

$id_disaster = $_POST['id_disaster'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "DELETE FROM `disaster` WHERE `disaster`.`id_disaster` = $id_disaster");

$data=array();

	$data[]=array(
		'message_success'=>"Data added successfuly",
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>