<?php  
include_once('config.php');

	$region=$_POST['region'];
    $id_province=$_POST['province'];
	$id_disaster=$_POST['disaster'];
	$id_cluster=$_POST['cluster'];
	$longitude=$_POST['longitude'];
	$latitude=$_POST['latitude'];
    $data=array();
	$result = mysqli_query($mysqli, "INSERT INTO `region` ( `region`, `id_province`, `id_disaster`,`id_cluster`,`longitude`,`latitude`) VALUES ( '$region', '$id_province', '$id_disaster','$id_cluster','$longitude','$latitude')");
	$data[]=array(
		'message_success'=>"Data disaster added successfully"
	);
	$data_json = json_encode($data);
	echo $data_json;
?>