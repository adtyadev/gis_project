<?php
// Create database connection using config file
include_once("config.php");

$id_province = $_POST['id_province'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM `province` where province.id_province = '$id_province' ");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_province'=>$row['id_province'],
		'province'=>$row['province'],
		'longitude'=>$row['longitude'],
		'latitude'=>$row['latitude']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>