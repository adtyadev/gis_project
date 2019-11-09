
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * from `province` ");

$data=array();

while ($row = mysqli_fetch_array($result)) {
	$data[]=array(
		'id_province'=>$row['id_province'],
		'province'=>$row['province'],
		'longitude'=>$row['longitude'],
		'latitude'=>$row['latitude']
	);
}
//encode json data
$data_json = json_encode($data);
echo $data_json;

?>