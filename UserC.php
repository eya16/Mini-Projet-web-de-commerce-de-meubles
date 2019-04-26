<?PHP
include "../config.php";
class userC {
 
function ajouterus($client){
		$sql="insert into users (user_name,user_pass,user_email) values ( :nom, :email, :date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    
        $nom=$client->getLog();
        $email=$client->getPWD();
               $date=$client->getDate();

            
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
				$req->bindValue(':date',$date);

	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
}
?> 
    