<?PHP
include "../config.php";
class clientC {
 /* function afficherClient ($client){
		echo "Nom: ".$client->getNom()."<br>";
		echo "Prénom: ".$client->getPrenom()."<br>";
		echo "Email: ".$client->getEmail()."<br>";
		echo "mot de passe: ".$client->getMdp()."<br>";
        echo "sexe: ".$client->getSexe()."<br>";
        echo "num: ".$client->getNum()."<br>";
		echo "adresse: ".$client->getAdresse()."<br>";
		echo "confmdp: ".$client->getConfmdp()."<br>";

	} */
	
	function ajouterClient($client){
		$sql="insert into client (nom,email,num,datee,adresse) values ( :nom,:email,:num,:datee,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    
        $nom=$client->getNom();
        $email=$client->getEmail();
        $num=$client->getNum();
        $datee=$client->getDate();
        $adresse=$client->getAdresse();
            
            
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':num',$num);
    	$req->bindValue(':datee',$datee);
		$req->bindValue(':adresse',$adresse);

	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    } 
    
	
	function chercher($tarif){
		$sql="SELECT * from client where email='".$tarif."'";
		$db = config::getConnexion();
		try{ 
		$liste=$db->query($sql);
		return $liste;
		} 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function afficher(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
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
		$sql="DELETE FROM client where nom='".$Nom."'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$Nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function modifier($clientC,$nom){
		$sql="UPDATE client SET nom=:nomm , email=:email, num=:num, datee=:datee, adresse=:adresse WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
       $nomm=$clientC->getNom();
        $email=$clientC->getEmail();
        $num=$clientC->getNum();
        $datee=$clientC->getDate();
        $adresse=$clientC->getAdresse();
    
		$datas = array(':nomm'=>$nomm, ':nom'=>$nom ,':email'=>$email, ':num'=>$num ,':datee'=>$datee , ':adresse'=>$adresse);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':num',$num);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':adresse',$adresse);
	

		
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
		$sql="SELECT * from client where nom='".$cin."'";
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