<?PHP
include "../config.php";
class FornisseurC {

	
	function ajouterFornisseur($fornisseur){
		$sql="insert into fornisseur (Nom,Email,Num_tel,Date,Adresse) values (:Nom,:Email,:Num_tel,:Date,:Adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Nom=$fornisseur->getNom();
        $Email=$fornisseur->getEmail();
        $Num_tel=$fornisseur->getNum_tel();
        $Date=$fornisseur->getDate();
        $Adresse=$fornisseur->getAdresse();
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Num_tel',$Num_tel);
		$req->bindValue(':Date',$Date); 
    	$req->bindValue(':Adresse',$Adresse);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficher(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fornisseur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimer($Nom){
		$sql="DELETE FROM fornisseur where Nom= :Nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Nom',$Nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier($FornisseurC,$Nom){
		$sql="UPDATE fornisseur SET Nom=:Nomm, Email=:Email,Num_tel=:Num_tel,Date=:Date, Adresse=:Adresse WHERE Nom=:Nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       $Nomm=$FornisseurC->getNom();
        $Email=$FornisseurC->getEmail();
        $Num_tel=$FornisseurC->getNum_tel();
        $Date=$FornisseurC->getDate();
        $Adresse=$FornisseurC->getAdresse();
		$datas = array(':Nomm'=>$Nomm, ':Nom'=>$Nom, ':Email'=>$Email,':Num_tel'=>$Num_tel,':Date'=>$Date,':Adresse'=>$Adresse);
		$req->bindValue(':Nomm',$Nomm);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Num_tel',$Num_tel);
		$req->bindValue(':Date',$Date);
    		$req->bindValue(':Adresse',$Adresse);


		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	} 
    function recuperer($cin){
		$sql="SELECT * from fornisseur where Nom='".$cin."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
     function trieNom(){
		$sql="SELECT * from fornisseur group by Nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
    function trieDate(){
		$sql="SELECT * from fornisseur group by Date";
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

?>