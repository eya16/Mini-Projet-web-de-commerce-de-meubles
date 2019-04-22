<?PHP
include "../entities/Categorie.php";
include "../core/CategorieC.php";

if (isset($_POST['nomcategorie']) and isset($_POST['souscat'])){
$Categorie1=new Categorie($_POST['nomcategorie'],$_POST['souscat']);
//Partie2
/*
var_dump($Produit1);
}
*/
//Partie3
$Categorie1C=new CategorieC();
$Categorie1C->ajouterCategorie($Categorie1);
header('Location: Gcategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>