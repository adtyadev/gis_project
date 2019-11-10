<?php  
include_once('config.php');

    $id_province=$_POST['id_province'];
	$id_disaster=$_POST['id_disaster'];
	$link_video=$_POST['link_video'];
	$link_audio=$_POST['link_audio'];
	$link_img=$_POST['link_img'];

    $data=array();
	$result = mysqli_query($mysqli, "INSERT INTO `incident` ( `id_province`, `id_disaster`, `link_video`,`link_audio`,`link_img`) VALUES ( '$id_province', '$id_disaster', '$link_video','$link_audio','$link_img')");
	$data[]=array(
		'message_success'=>"Data disaster added successfully"
	);
	$data_json = json_encode($data);
	echo $data_json;
?>