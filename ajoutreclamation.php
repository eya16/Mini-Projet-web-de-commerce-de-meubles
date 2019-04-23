<?PHP
include "../entites/reclamation.php";
include "reclamations.php";


$recl=new reclamation($_POST['name'],$_POST['subject'],$_POST['message'],$_POST['email']);
$reclamation=new reclamations();



$var= $_POST['choix'];


switch ($var) {
	case 'sugg':
		$reclamation->ajouterSUGG($recl);
		break;
	case 'Reclamation':
	$reclamation->ajouterReclamaion($recl);
	
}

//header('Location: index.html');
	

?>
