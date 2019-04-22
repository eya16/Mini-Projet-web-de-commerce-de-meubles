<?PHP
class client{
	private $nom;
	private $prenom;
	private $email;
	private $mdp;
    private $confmdp;
    private $sexe;
    private $datee; 
    private $adresse; 
    private $num; 
	function __construct($nom,$email,$num,$date,$adresse){
		$this->nom=$nom;
		$this->num=$num;
		$this->email=$email;
        $this->datee=$date;
        $this->adresse=$adresse;
   
	}
	
	function getNom(){
		return $this->nom;
	}
    function getNum(){
		return $this->num;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getMdp(){
		return $this->mdp;
	}
   
    function getConfmdp(){
		return $this->confmdp;
	}
    function getSexe(){
		return $this->sexe;
	}
     function getDate(){
		return $this->datee;
	}
     function getAdresse(){
		return $this->adresse;
	}
    
    
    
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
      function setConfmdp($confmdp){
		$this->confmdp=$confmdp;
	}  
    function setSexe($sexe){
		$this->sexe=$sexe;
	}
    function setDate($date){
		$this->datee=$date;
	}
    function setAdresse($adresse){
		$this->adresse=$adresse;
	}
    function setNum($num){
		$this->num=$num;
	}
}

?>