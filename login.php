<?php 
include '../config.php';
class User{
	private $login;
    private $pwd;
    public $conn;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		
		$conn= config::getConnexion();
		
		
	}
	function getLogin()
	{
		return $this->login;
	}
    function getMotDePasse()
	{
		return $this->pwd;
		
	}
	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from userss where user_name='$login' && user_pass='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	

	}
	

	?>