<?php
// Create database connection using config file
include_once("config.php");

//$id_incident = $_POST['id_incident'];
$id_province = 1;
$id_disaster = 1;
// Fetch all incident data from database
$result = mysqli_query($mysqli, "SELECT incident.link_video, incident.link_audio,incident.link_img
from incident
WHERE incident.id_province='$id_province' AND incident.id_disaster='$id_disaster' LIMIT 1" );

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]= array(

						'link_video'=>$row['link_video'],
						'link_audio'=>$row['link_audio'],
						'link_img'=>$row['link_img']
						
	);
}

$result = mysqli_query($mysqli, "SELECT `detail_information` FROM `disaster` where disaster.id_disaster = '$id_disaster' LIMIT 1");

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(

						'detail_information'=>$row['detail_information']

		
	);
}

$result = mysqli_query($mysqli, "SELECT * FROM `cluster` where cluster.id_disaster = '$id_disaster' ORDER BY `cluster`.`cluster` ASC ");

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(

					'cluster'=>$row['cluster'],
					'cluster_information'=>$row['cluster_information']

	);
}

//encode json data
$data_json = json_encode($data);
echo $data_json;

?>