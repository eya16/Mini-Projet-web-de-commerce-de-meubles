<?PHP
include "../entities/fornisseur.php";
include "../core/fornisseurC.php";

if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['date']) and isset($_POST['adresse'])){
$Fornisseur1=new Fornisseur($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['date'],$_POST['adresse']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$FornisseurC=new fornisseurC();
$FornisseurC->ajouterFornisseur($Fornisseur1);
 header('Location: afficherFornisseur.php');
   
echo "c bon";	
}else{
	echo "vérifier les champs";
}
//*/

?>