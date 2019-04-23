<?php  
include "../entities/pube.php";
include "../core/pubC.php";
if (isset($_POST['like'])){
	$pub1C=new pubC();
$pub1C->nbvu($_GET['id']);
header('Location: index.php');
}

else echo "non valide";

?>