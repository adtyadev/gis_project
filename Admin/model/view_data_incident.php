<?php
// Create database connection using config file
include_once("config.php");

$id_incident = $_POST['id_incident'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT incident.id_incident, incident.id_province, incident.id_disaster,incident.link_video,incident.link_audio,incident.link_img
from incident
WHERE incident.id_incident='$id_incident'");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_incident'=>$row['id_incident'],
		'id_province'=>$row['id_province'],
		'id_disaster'=>$row['id_disaster'],
		'link_video'=>$row['link_video'],
		'link_audio'=>$row['link_audio'],
		'link_img'=>$row['link_img']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>