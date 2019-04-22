<?PHP
include "../core/clientC.php";
$client1C=new clientC();
if (isset($_GET["nom"])){
    
	$client1C->supprimer($_GET["nom"]);
    	header('location: Gestions des clients.php');

}

?>