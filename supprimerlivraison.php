<?php
include "../core/livraisonC.php";
$livC=new livraisonC();
$t=$livC->supprimerlivraison($_GET['delid']);
if ($t==1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livraison  supprimé ");
location="Gestions des livraisons.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
else {
echo "" ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livraison supprimé");
location="Gestions des livraisons.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
?>