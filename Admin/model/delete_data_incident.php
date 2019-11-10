<?php
// Create database connection using config file
include_once("config.php");

$id_incident = $_POST['id_incident'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "DELETE FROM `incident` WHERE `incident`.`id_incident` = $id_incident");

$data=array();

	$data[]=array(
		'message_success'=>"Data deleted successfuly",
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>