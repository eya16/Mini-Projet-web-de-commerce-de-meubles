<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include "../entities/login.php";

$logR=$_POST['l'];
$pwdR=$_POST['pwd'];

$dbcon= config::getConnexion();
$user=new User($logR,$pwdR,$dbcon);
$liste=$user->Logedin($dbcon,$logR,$pwdR);

var_dump($liste);

$vide=false;
if (!empty($logR) && !empty($pwdR)){
    
    foreach($liste as $row){ 
        $vide=true;
    if ($row['user_name']==$logR && $row['user_pass']==$pwdR){
        
        header("location: afficherFornisseur.php") ;
       
        }
    
}

if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
      } 
}     
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire <br>" ; 

      echo "$pwdR";
     ?> <a href="login.html">Retour au formulaire</a>     <?php 
}  

?> 
</body>
</html>