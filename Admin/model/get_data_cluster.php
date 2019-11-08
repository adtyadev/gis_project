
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT cluster.id_cluster,disaster.id_disaster, disaster.disaster, cluster.cluster, cluster.cluster_information from `cluster`, `disaster` WHERE cluster.id_disaster = disaster.id_disaster ");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_cluster'=>$row['id_cluster'],
		'id_disaster'=>$row['id_disaster'],
		'disaster'=>$row['disaster'],
		'cluster'=>$row['cluster'],
		'cluster_information'=>$row['cluster_information']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>