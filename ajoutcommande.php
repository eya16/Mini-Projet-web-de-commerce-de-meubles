<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['idCom']) and isset($_POST['nomproduit']) and isset($_POST['dateEmis']) and isset($_POST['EtatCom']) and isset($_POST['email']) and  isset($_POST['prix'])){
$Commande1=new commande($_POST['idCom'],$_POST['nomproduit'],$_POST['dateEmis'],$_POST['EtatCom'],$_POST['email'],$_POST['prix']);
//Partie2
/*
var_dump($Produit1);
}
*/
//Partie3
$Commande1C=new commandeC();
$Commande1C->ajouterCommande($Commande1);
header('Location: Gcommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>