<?php
include "../core/livreurC.php";
$lC=new livreurC();
$t=$lC->supprimerlivreur($_GET['delid']);
if ($t==1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("livreur supprimé ");
location="Gestions des livreurs.php";
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
alert("livreur supprimé");
location="Gestions des livreurs.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
?>