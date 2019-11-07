<?php
// Create database connection using config file
include_once("config.php");

$id_disaster = $_POST['id_disaster'];
$detail_information = $_POST['detail_information'];
$disaster=$_POST['disaster'];
// Fetch all users data from database
mysqli_query($mysqli, "UPDATE `disaster` SET `detail_information` = '$detail_information',`disaster` = '$disaster' WHERE `disaster`.`id_disaster` = '$id_disaster';");

$retrive_data = mysqli_query($mysqli, "SELECT * FROM `disaster` where disaster.id_disaster = '$id_disaster' ");

$data=array();

while ($row = mysqli_fetch_array($retrive_data)) {
	$data[]=array(
		'id_disaster'=>$row['id_disaster'],
		'disaster'=>$row['disaster'],
		'detail_information'=>$row['detail_information'],
		'message_success'=>"Data deleted successfuly",
	);
}

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>