
<?php
// Create database connection using config file
include_once("config.php");

    $id_province=$_POST['id_province'];
	$id_disaster=$_POST['id_disaster'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT region.region,region.id_cluster, cluster.cluster from `region`,`cluster` WHERE region.id_cluster=cluster.id_cluster AND region.id_disaster='$id_disaster' AND region.id_province = '$id_province' ");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	
		$data[]=array(
				'cluster'=>$row['cluster'],
				'region'=>$row['region']
	);	
	}
	
//encode json data
$data_json = json_encode($data);
echo $data_json;
?>