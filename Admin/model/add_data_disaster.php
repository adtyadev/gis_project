<?php  
include_once('config.php');

	$disaster = $_POST['disaster'];
    $detail_information = $_POST['detail_information'];
    $data=array();
	$result = mysqli_query($mysqli, "INSERT INTO disaster(disaster,detail_information) VALUES('$disaster','$detail_information')");
	$data[]=array(
		'message_success'=>"Data disaster added successfully"
	);
	$data_json = json_encode($data);
	echo $data_json;
?>