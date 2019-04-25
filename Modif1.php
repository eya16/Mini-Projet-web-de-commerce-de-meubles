<?php  

include "reclamations.php";
        $recl=new reclamations();
	$msg=$recl->VuReclamaion($_POST["ID"]);
$recl=new reclamations();
$info=$recl->afficherreclamtion2($_POST["ID"]);
foreach($info as $row){

	if($msg='ok')  
	{  

require 'php-mailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mjdalijebali5@gmail.com';                 // SMTP username
$mail->Password = 'rectangle';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('WAPI@esprit.tn', 'WAPI');
$mail->addAddress($row['email'], 'USER');     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Reclamation';
$mail->Body    ="Welcome ".$row['email']." your reclamation has been traited" ;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}	
  
		echo 'Reclamation updated'; 
}

	 
}

	header('Location: ../views/tableau reclamtion.php')
 ?>