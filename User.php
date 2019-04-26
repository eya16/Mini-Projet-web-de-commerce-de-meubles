<?php 
include 'dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $role;
    public $conn;	
    private $email; 
	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
      //   $this->email=$email;
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}
function getDate()
	{
		return $this->email;
		
	}

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from users where user_name='$login' && user_pass='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>