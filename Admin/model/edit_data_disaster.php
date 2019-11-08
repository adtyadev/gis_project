<?php
// Create database connection using config file
include_once("config.php");

$id_disaster = $_POST['id_disaster'];
$detail_information = $_POST['detail_information'];
$disaster=$_POST['disaster'];
// Fetch all users data from database
mysqli_query($mysqli, "UPDATE `disaster` SET `detail_information` = '$detail_information',`disaster` = '$disaster' WHERE `disaster`.`id_disaster` = '$id_disaster';");

$data=array();


	$data[]=array(
		'message_success'=>"Data deleted successfuly",
	);


//encode json data
$data_json = json_encode($data);
echo $data_json;

?>