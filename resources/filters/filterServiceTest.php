<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=alloo_db;charset=utf8', 'root', '');

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function ServiceFilter($conn,$cat,$type){
	// cat 1
	// type => tableau
	$cat = $cat;
	$typeQuery= ''; 
	if(is_array($type)){
		if(count($type) > 1){
		for($i=0;$i<count($type);$i++){
			// $type[$i] = mysqli_real_escape_string($conn,$type[$i]);
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
			$type = $type;
			$typeQuery = "AND type = '$type'";
		}
						}
	   
	$serviceArray = [];
	$categoryQuery = "SELECT * FROM services WHERE categorie = '$cat' $typeQuery  ORDER BY prix ASC";
	$queryResult = $conn->query($categoryQuery);
	while($data = $queryResult->fetch()){
		if(!in_array($data,$serviceArray)){
			array_push($serviceArray,$data);
		}
	}
	return $serviceArray; //type tableau
}



// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM services');


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Categorie</strong> : <?php echo $donnees['categorie']; ?><br />
   Type: <?php echo $donnees['type']; ?> <br/>
   Titre:  <?php echo $donnees['titre']; ?> euros !<br />
   Description: <?php echo $donnees['description']; ?> <br/>
   Prix: <?php echo $donnees['prix']; ?> <br />

   </p>
<?php
}
   
    $cat = "électricité";
     $type ='';
     // $type = ["dépannage","installation"];
    $filtredArray = [];
    $filtredArray = ServiceFilter($bdd,$cat,$type);
    foreach ($filtredArray as $value) {
    echo $value['titre'];  	
    }

  
$reponse->closeCursor(); // Termine le traitement de la requête

?>