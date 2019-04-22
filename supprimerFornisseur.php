<?PHP
include "../core/fornisseurC.php";
$fornisseur1C=new FornisseurC();
if (isset($_GET["Nom"])){
    
	$fornisseur1C->supprimer($_GET["Nom"]);
	header('Location: afficherFornisseur.php');
}

?>