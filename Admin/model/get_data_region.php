
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT region.id_region, province.province, cluster.cluster,disaster.disaster,region.region,region.longitude,region.latitude
from province,cluster,disaster,region
WHERE region.id_province = province.id_province AND region.id_cluster=cluster.id_cluster AND region.id_disaster=disaster.id_disaster");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_region'=>$row['id_region'],
		'province'=>$row['province'],
		'disaster'=>$row['disaster'],
		'cluster'=>$row['cluster'],
		'region'=>$row['region'],
		'longitude'=>$row['longitude'],
		'latitude'=>$row['latitude']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>