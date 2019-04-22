<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['date']) and isset($_POST['adresse'])){
$client1=new client($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['date'],$_POST['adresse']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$client1C=new clientC();
$client1C->ajouterClient($client1);
 header('Location: Gestions des clients.php');
   
}else{
	echo "vérifier les champs";
}
//*/

?>