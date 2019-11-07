<?php
// Create database connection using config file
include_once("config.php");

$id_disaster = $_POST['id_disaster'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM `disaster` where disaster.id_disaster = '$id_disaster' ");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_disaster'=>$row['id_disaster'],
		'disaster'=>$row['disaster'],
		'detail_information'=>$row['detail_information']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>