<?php 

class InccriptionC {
	
		public function ajouterA($i){
try {
	
 $dbcon = config::getConnexion();


	$stmt = $dbcon->prepare("insert into userss (user_name,user_pass,email) values (:login,:pwd,:email)") ;
	
    $login=$i->getLogin();
    $pwd=$i->getPwd();
    $email=$i->getEmail();
 
	$stmt->bindParam(":login", $login) ;
	$stmt->bindParam(":pwd", $pwd) ;
	$stmt->bindParam(":email", $email) ;
	$stmt->execute() ;
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
}
}
} 
?> 
