<?PHP
include "../entities/Produit.php";
include "../core/ProduitC.php";

if (isset($_POST['idproduit']) and isset($_POST['nomproduit']) and isset($_POST['description']) and isset($_POST['prix']) and isset($_POST['qt']) and  isset($_POST['categorie'])){
$Produit1=new Produit($_POST['idproduit'],$_POST['nomproduit'],$_POST['description'],$_POST['prix'],$_POST['qt'],$_POST['categorie'],$_FILES['image']['name']);
//Partie2
/*
var_dump($Produit1);
}
*/
//Partie3
$Produit1C=new ProduitC();
$Produit1C->ajouterProduit($Produit1);
header('Location: front/index.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>