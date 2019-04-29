<?php
header("Access-Control-Allow-Origin: *"); 
$mysqli = new mysqli('127.0.0.1', 'root', '233supmff', 'test'); 

$sql = "select * from users";
$res = $mysqli->query($sql);

$arr = array();
while ($row = $res->fetch_assoc()) {
	$arr[] = $row;
}
$res->free();

$mysqli->close();

echo (json_encode($arr));

?>
