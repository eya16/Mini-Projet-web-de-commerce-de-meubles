<?PHP
include "../config.php";
class PanierC {
function afficherPanier($panier){
		echo "idproduit: ".$panier->getidproduit()."<br>";
		echo "nomproduit: ".$panier->getnomproduit()."<br>";
		echo "qt: ".$panier->getqt()."<br>";
		

	}

	function ajouterPanier($panier){
		$sql="insert into panier (idproduit,nomproduit,qt) values (:idproduit, :nomproduit,:qt)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idproduit=$panier->getidproduit();
        $nomproduit=$panier->getnomproduit();
        $qt=$panier->getqt();
        
		
	
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':qt',$qt);
		
		
		
  
            $req->execute();
	
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
        
		function supprimerpanier($idproduit){
		$sql="DELETE FROM panier where idproduit=:idproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idproduit',$idproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierpanier($panier,$idproduit){
		$sql="UPDATE panier SET idproduit=:idproduit, nomproduit=:nomproduit,qt=:qt WHERE idproduit=:idproduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idproduit=$panier->getidproduit();
        $nomproduit=$panier->getnomproduit();
        $qt=$panier->getqt();
        
		$datas = array(':idproduit'=>$idproduit, ':idprod'=>$idprod, ':nomproduit'=>$nomproduit,':qt'=>$qt);
		
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':idprod',$idprod);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':qt',$qt);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
         catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
		
	}

	function afficherpaniers(){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}



	function afficherPanier1(){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		$sql="SElECT * From panier where idproduit='1'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }	


function supprimerpanier($idproduit){
		$sql="DELETE FROM panier where idproduit=:idproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idproduit',$idproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	function recupererpanier($idproduit){
		$sql="SELECT * from panier where idproduit=$idproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


?>