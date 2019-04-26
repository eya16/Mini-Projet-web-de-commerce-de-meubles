

<?php

session_start();
 include 'User.php';
include "UserC.php"; 

$user1 = new user(); 
if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['mdp']) and isset($_POST['confmdp'])){
$user1=new User($_POST['name'],$_POST['mdp'],0,$_POST['email']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$userC1=new userC();
$userC1->ajouterus($user1);
 header('Location: login.html');
   
}else{
	echo "vérifier les champs";
}
//*/

?>