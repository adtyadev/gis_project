<?php
// Create database connection using config file
include_once("config.php");

$id_cluster = $_POST['id_cluster'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM `cluster` where cluster.id_cluster = '$id_cluster' ");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_cluster'=>$row['id_cluster'],
		'id_disaster'=>$row['id_disaster'],
		'cluster'=>$row['cluster'],
		'cluster_information'=>$row['cluster_information']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>