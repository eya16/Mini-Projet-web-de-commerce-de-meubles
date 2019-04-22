  <HTML>
<head>
</head>
<body>
<?PHP
include 'C:\wamp64\www\khaoula\core\ProduitC.php';
include 'C:\wamp64\www\khaoula\entities\Produit.php';
if (isset($_GET['idproduit'])){
    $ProduitC=new ProduitC();
    $result=$ProduitC->recupererProduit($_GET['idproduit']);
    foreach($result as $row){
        $idproduit=$row['idproduit'];
        $nomproduit=$row['nomproduit'];
        $description=$row['description'];
        $prix=$row['prix'];
        $qt=$row['qt'];
        $image=$row['image'];
        $categorie=$row['categorie'];

?>

<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="number" name="nbH" value="<?PHP echo $nbH ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="tarifH" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
    }
}
if (isset($_POST['modifier'])){
    $produit=new Produit($_POST['idproduit'],$_POST['nomproduit'],$_POST['description'],$_POST['qt'],$_POST['categorie'],$_POST['prix'],$_POST['image']);
    $produitC->modifierProduit($Produit,$_POST['idproduit']);
    echo $_POST['idproduitn'];
    header('Location: Gproduit.php');
}
?>
</body>
</HTMl>



