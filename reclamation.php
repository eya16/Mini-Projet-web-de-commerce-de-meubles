<?PHP
class reclamation{
	
	private $nom;
	private $sujet;
	private $message;
	private $email;



 function __construct($nom,$sujet,$message,$email)
{
   $this->nom=$nom;
   $this->sujet=$sujet;
   $this->message=$message;
   $this->email=$email;
    }


	/********************************************************/

	function getNAME(){
		return $this->nom;
	}

	function getsujet(){
		return $this->sujet;
	}

    function getemail(){
		return $this->email;
	}
	function getmessage(){
		return $this->message;
	}


	function setTName($Username){
		$this->nom=$Username;
	}

	function setTEMAIL($sujet){
		$this->sujet=$sujet;
	}

	function setTIMAGE($mail){
		$this->email=$mail;
	}

	function setmessage($message){
		$this->message=$message;
	}

}
?>