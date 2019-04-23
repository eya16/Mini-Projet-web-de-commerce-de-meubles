<?PHP
class pub{
	private $id_pub;
	private $titre_pub;
	private $image;
	private $date_d_pub;
	private $date_f_pub;
	private $desc_pub;
	function __construct($id_pub,$titre_pub,$image,$date_d_pub,$date_f_pub,$desc_pub){
		$this->id_pub=$id_pub;
		$this->titre_pub=$titre_pub;
		$this->image=$image;
		$this->date_d_pub=$date_d_pub;
		$this->date_f_pub=$date_f_pub;
		$this->desc_pub=$desc_pub;
	}
	
	function getid(){
		return $this->id_pub;
	}
	function gettitre(){
		return $this->titre_pub;
	}
	function getimage(){
		return $this->image;
	}
	function getdated(){
		return $this->date_d_pub;
	}
	function getdatef(){
		return $this->date_f_pub;
	}
	function getdesc(){
		return $this->desc_pub;
	}
    function setid($id_pub){
		$this->id_pub=$id_pub;
	}
	function settitre($titre_pub){
		$this->titre_pub=$titre_pub;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setdated($date_d_pub){
		$this->date_d_pub=$date_d_pub;
	}
	function setdatef($date_f_pub){
		$this->date_f_pub=$date_f_pub;
	}
	function setdesc($desc_pub){
		$this->desc_pub=$desc_pub;
	}
	
}

?>