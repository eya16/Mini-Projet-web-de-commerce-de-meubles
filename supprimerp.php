

<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["idproduit"])){
    $produitC->supprimerProduit($_POST["idproduit"]);
    header('Location:  Gproduit.php');
}

 
            echo "<div class='alert alert-block alert-success'>
            <button type='button' class='close' data-dismiss='alert'>
            <i class='ace-icon fa fa-times'></i>
            </button>
            <i class='ace-icon fa fa-check green'></i>
            Produit Supprimé  avec 
            <strong class='red'>succès</strong>
            </div>";
           
?>
	