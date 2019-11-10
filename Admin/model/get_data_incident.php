
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT incident.id_incident
,province.province, disaster.disaster, incident.link_audio,incident.link_video,incident.link_img
FROM incident,province,disaster
WHERE incident.id_province = province.id_province AND incident.id_disaster=disaster.id_disaster
");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_incident'=>$row['id_incident'],
		'province'=>$row['province'],
		'disaster'=>$row['disaster'],
		'link_video'=>$row['link_video'],
		'link_audio'=>$row['link_audio'],
		'link_img'=>$row['link_img']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>