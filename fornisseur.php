<?PHP
class Fornisseur{
	private $Nom;
	private $Email;
	private $Num_tel;
    private $Date; 
	private $Adresse;
	function __construct($Nom,$Email,$Num_tel,$Date,$Adresse){
		$this->Nom=$Nom;
		$this->Email=$Email;
		$this->Num_tel=$Num_tel;
		$this->Date=$Date;
        $this->Adresse=$Adresse;
	}
	
	function getNom(){
		return $this->Nom;
	}
	function getEmail(){
		return $this->Email;
	}
	function getNum_tel(){
		return $this->Num_tel;
	}
	function getDate(){
		return $this->Date;
	}
    function getAdresse(){
		return $this->Adresse;
	}

	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setEmail($Email){
		$this->Email;
	}
	function setNum_tel($Num_tel){
		$this->Num_tel=$Num_tel;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	
}

?>