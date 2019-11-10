<?php
// Create database connection using config file
include_once("config.php");
$id_incident = $_POST['id_incident'];
    $id_province=$_POST['id_province'];
	$id_disaster=$_POST['id_disaster'];
	$link_video=$_POST['link_video'];
	$link_audio=$_POST['link_audio'];

// Fetch all users data from database
mysqli_query($mysqli, "UPDATE `incident` SET `id_province` = '$id_province',`id_disaster` = '$id_disaster' ,`link_video`='$link_video', `link_audio`='$link_audio' WHERE `incident`.`id_incident` = '$id_incident';");

$data=array();

	$data[]=array(
		'message_success'=>"Data edited successfuly"
	);

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>