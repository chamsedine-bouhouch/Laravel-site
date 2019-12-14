<?php

function ServiceFilter($conn,$cat,$type){
	// cat 1
	// type => tableau
	$cat = mysqli_real_escape_string($conn,$cat);
	if(is_array($type)){
		if(count($type) > 1){
		for($i=0;$i<count($array);$i++){
			$type[$i] = mysqli_real_escape_string($conn,$type[$i]);
			if($i == 0){
				$typeQuery = "AND type = '$type[$i]' ";
			}
			elseif($i == count($type)-1){
				$typeQuery .= "OR type = '$type[$i]'";
			}
			else{
				$typeQuery .= "OR type = '$type[$i]' ";
			}
		}
							}
		else{
			$type = mysqli_real_escape_string($conn,$type);
			$typeQuery = "AND type = '$type'";
		}
						}
		else{
			$typeQuery = "AND type = '$type'";
		}
	   
	$serviceArray = [];
	$categoryQuery = "SELECT * FROM Services WHERE categorie = '$cat' ORDER BY prix ASC";
	$queryResult = mysqli_query($conn,$categoryQuery);
	while($service = mysqli_fetch_assoc($queryResult)){
		if(!in_array($service["id"],$serviceArray)){
			array_push($serviceArray,$service);
		}
	}
	return $serviceArray; //type tableau
}
$x = new mysqli("localhost","root","","db");
$xe = ServiceFilter($x,"worker","hardworker");
for($i=0;$i<count($xe);$i++){
	$donnees = $xe[$i];
	echo '
<p>
    <strong>Categorie</strong> : '. $donnees['categorie'] .' <br />
   Type: '. $donnees['type'] .' <br/>
   Titre:  '.$donnees['titre'] .' euros !<br />
   Description: '. $donnees['description'] .' <br/>
   Prix: '. $donnees['prix'] .' <br />

   </p>
		';
}
?>