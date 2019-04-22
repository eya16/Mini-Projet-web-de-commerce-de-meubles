

<?PHP
include "../entities/Categorie.php";
include "../core/CategorieC.php";

$categorieC=new CategorieC();
if (isset($_POST["nomcategorie"])){
    $categorieC->supprimerCategorie($_POST["nomcategorie"]);
    header('Location:  Gcategorie.php');
}

?>
	