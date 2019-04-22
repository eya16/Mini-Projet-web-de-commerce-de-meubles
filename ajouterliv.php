<?PHP
include "../core/livreurC.php";
include "../entites/livreur.php";
if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['secteur'])){

  
$pr=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['secteur']);

//var_dump($pr);
$prC=new livreurC();
$prC->ajouterlivreur($pr);
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livreur ajouté");
location="ajouterlivreur.php";
</script>
</script>
<body>
</body>
</html>
 <?php
}
else{
	echo "vérifier les champs";

 ?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Une erreur c'est produit lors de l'ajout de livreur veuiller verifier les champs saisie !");
location="Gestions des livreurs.php";
</script>
</script>
<body>
</body>
</html>
 <?php
}
 ?>