<?PHP
include "../core/livreurC.php";
include "../entites/livreur.php";
$dbcon= config::getConnexion();

$id = $_GET['id'] ;
$nom = $_POST['nom'] ;
$adresse = $_POST['adresse'] ;
$codepostal = $_POST['codepostal'] ;
$numtel = $_POST['numtel'] ;
$mail = $_POST['mail'] ;
$numcommande = $_POST['numcommande'] ;
$prenom = $_POST['prenom'] ;


try {
	$stmt = $dbcon->prepare("UPDATE livraison SET id=:id,nom=:nom,prenom=:prenom,adresse=:adresse,codepostal=:codepostal,numtel=:numtel,mail=:mail,numcommande=:numcommande where id=:id") ;

	$stmt->bindParam(":id", $id) ;
	$stmt->bindParam(":nom", $nom) ;
	$stmt->bindParam(":prenom", $prenom) ;
	$stmt->bindParam(":adresse", $adresse) ;
	$stmt->bindParam(":codepostal", $codepostal) ;
	$stmt->bindParam(":numtel", $numtel) ;
	$stmt->bindParam(":mail", $mail) ;
	$stmt->bindParam(":numcommande", $numcommande) ;
	$stmt->execute() ;
	
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livraison modifié");
location="Gestions des livraisons.php";
</script>
</script>
<body>
</body>
</html>
 
 <?php
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
  ?>

<!DOCTYPE html>
<html>
<script type="text/javascript">
alert(" veuiller verifier les champs saisie !");
location="Gestions des livraisons.php";
</script>
</script>
<body>
</body>
</html>
<?php
}

