<?PHP
class Panier{
	private $idproduit;
	private $nomproduit;	
	private $qt;
	

		
		function __construct($idproduit,$nomproduit,$qt){
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->qt=$qt;
		}
	
	function getidproduit(){
		return $this->idproduit;
	}
	function getnomproduit(){
		return $this->nomproduit;
	}

	
	function getqt(){
		return $this->qt;
	}
	
	
	function setnomproduit($nomproduit){
		$this->nomproduit=$nomproduit;
	}
	
	function setqt($qt){
		$this->qt=$qt;
	}
	
	
	
}

?>