<?php  
include_once('config.php');

	$id_disaster = $_POST['id_disaster'];
	$cluster = $_POST['cluster'];
    $cluster_information = $_POST['cluster_information'];
    $data=array();
	$result = mysqli_query($mysqli, "INSERT INTO `cluster` ( `id_disaster`, `cluster`, `cluster_information`) VALUES ( '$id_disaster', '$cluster', '$cluster_information')");
	$data[]=array(
		'message_success'=>"Data disaster added successfully"
	);
	$data_json = json_encode($data);
	echo $data_json;
?>