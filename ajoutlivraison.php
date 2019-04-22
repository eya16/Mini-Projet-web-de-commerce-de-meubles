<?PHP
include "../entites/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['idclient']) and isset($_POST['nom']) and isset($_POST['adresse']) and isset($_POST['numtel']) and isset($_POST['numcommande'])){
$livraison1=new livraison($_POST['idclient'],$_POST['nom'],$_POST['adresse'],$_POST['numtel'] ,$_POST['numcommande']);
//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: ajoutlivraison.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>