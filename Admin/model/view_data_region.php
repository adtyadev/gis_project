<?php
// Create database connection using config file
include_once("config.php");

$id_region = $_POST['id_region'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT region.id_region, region.id_province, region.id_cluster,region.id_disaster,region.region,region.longitude,region.latitude
from region
WHERE region.id_region='$id_region'");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_region'=>$row['id_region'],
		'id_province'=>$row['id_province'],
		'id_disaster'=>$row['id_disaster'],
		'id_cluster'=>$row['id_cluster'],
		'region'=>$row['region'],
		'longitude'=>$row['longitude'],
		'latitude'=>$row['latitude']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>