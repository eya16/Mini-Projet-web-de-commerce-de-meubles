<html>
 <style type="text/css">  


.date
 { text-align: center ;
}

</style>

   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Modifier une commande </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


   

</head>

<body>

<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['idCom'])){
	$commandeController=new commandeC();
    $result=$commandeController->recuperercommande($_GET['idCom']);
	foreach($result as $row){
		$idCom=$row['idCom'];
		$nomproduit=$row['nomproduit'];
		$dateEmis=$row['dateEmis'];
		$EtatCom=$row['EtatCom'];
		$email=$row['email'];
        $prix=$row['prix'];

?>

<br><br><br><br><br><br><br>
<form method="POST">
<table>
<caption>Modifier commande</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="idCom" value="<?PHP echo $idCom ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomproduit" value="<?PHP echo $nomproduit ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="dateEmis" value="<?PHP echo $dateEmis ?>"></td>
</tr>
<tr>
<td>Etat</td>
<td><input type="text" name="EtatCom" value="<?PHP echo $EtatCom ?>"></td>
</tr>
<tr>
<td>ta</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>ta</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['idCom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['idCom'],$_POST['nomproduit'],$_POST['dateEmis'],$_POST['EtatCom'],$_POST['email'],$_POST['prix']);
	$commandeController->modifiercommande($commande,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: Gcommande.php');
}
?>
</body>
</html>