<?php
include "../core/clientC.php";
$client1C=new clientC();
	
// include "../config.php";
$x=$_GET["id"];
$liste=$client1C->recuperer($_GET["id"]);
foreach ($liste as $row)
{
    if ($row["etat"] == "active")
    {
 $e="désactivé"; 
$sql= " UPDATE  client SET etat = '".$e."'  where id=$x ; ";

	$db = config::getConnexion();
		
		$liste=$db->query($sql);

		
header("location: Gestions des clients.php");
    } 
    else 
    {
        $e="active"; 
$sql= " UPDATE  client SET etat = '".$e."'  where id=$x ; ";

	$db = config::getConnexion();
		
		$liste=$db->query($sql);

		
header("location: Gestions des clients.php");
    }
}
?>