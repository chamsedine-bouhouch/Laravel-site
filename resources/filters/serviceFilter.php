<?php

function ServiceFilter($conn,$cat,$type){
	// cat 1
	// type => tableau
	$cat = mysqli_real_escape_string($conn,$cat);
			$type = mysqli_real_escape_string($conn,$type);
			$typeQuery = "AND type = '$type'";
	   
	$serviceArray = [];
	$categoryQuery = "SELECT * FROM services WHERE categorie = '$cat' $typeQuery ORDER BY prix ASC";
	$queryResult = mysqli_query($conn,$categoryQuery);
	while($service = mysqli_fetch_assoc($queryResult)){
		if(!in_array($service["id"],$serviceArray)){
			array_push($serviceArray,$service);
		}
	}
	return $serviceArray; //type tableau
}
$x = new mysqli("localhost","root","","db");
$xe = ServiceFilter($x,"worker","notgoodworker");
var_dump($xe);
?>