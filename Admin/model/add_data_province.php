<?php  
include_once('config.php');

	$province = $_POST['province'];
	$longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $data=array();
	$result = mysqli_query($mysqli, "INSERT INTO `province` ( `province`, `longitude`, `latitude`) VALUES ( '$province', '$longitude', '$latitude')");
	$data[]=array(
		'cek'=>"$province",
		'message_success'=>"Data disaster added successfully"
	);
	$data_json = json_encode($data);
	echo $data_json;
?>