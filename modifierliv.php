<?PHP
include "../core/livreurC.php";
include "../entites/livreur.php";
$dbcon= config::getConnexion();

$cin = $_GET['cin'] ;
$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'] ;
$secteur = $_POST['secteur'] ;

try {
	$stmt = $dbcon->prepare("UPDATE livreur SET nom=:nom,prenom=:prenom,secteur=:secteur WHERE cin=:cin") ;
	$stmt->bindParam(":cin", $cin) ;
	$stmt->bindParam(":nom", $nom) ;
	$stmt->bindParam(":prenom", $prenom) ;
	$stmt->bindParam(":secteur", $secteur) ;
	$stmt->execute() ;
	
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livreur modifié");
location="Gestions des livreurs.php";
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
location="Gestions des livreurs.php";
</script>
</script>
<body>
</body>
</html>
<?php
}

 ?>	