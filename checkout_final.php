<?php
   
  include_once "../entities/produit.php";
  include_once "../core/produitC.php";
  include_once "../core/commandeC.php";
  include_once "../entities/commande.php";

  include_once "../core/clientC.php";
  include_once "../entities/clients.php";

  require ('pdf/fpdf.php');
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
  

  $produitC=new produitC();
  $produit1=$produitC->recupererpanier($_SESSION['id']);
  
  $tab=array();
  $somme=0;

  foreach ($produit1 as $row) 
  {
    array_push($tab,$row['prix']*$row['quantite']);
    $somme+=$row['prix']*$row['quantite'];
  }
  
  if(isset($_POST['validercommande']) && !empty($_POST['secteur']) )
  {
    $secteur=$_POST['secteur'];
    $dateactuelle = date("Y-m-d");

    $commande1C=new commandeC();
    $commande1= new commande($dateactuelle,$somme,'en cours',$secteur,5,$_SESSION['id']);
    $commande1C->ajoutercommande($commande1);

    $lastID=$commande1C->recupererdernierID();
    $max=$lastID->fetch();
    $max_row=$max["max"];
    

    $clientC=new clientC();
    $client1=$clientC->recupererclient($_SESSION['id']);
    $client=$client1->fetch();
    $mail=$client["Email"];
   

    //$clientC->mailcommande($mail,$somme,$dateactuelle);

    $produit1=$produitC->recupererpanier($_SESSION['id']);
    
    foreach($produit1 as $row)
    {
      $produit2=new produit($row["id"],$row["nom"],$row["prix"],$row["quantite"],"Test");
      $produitC->ajoutercontenupanier($produit2,$max_row,$_SESSION['id']);
    }
     header('Location: testpdf.php');;
  } 
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wapi</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">Aide</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="#"></a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : </h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<h1>Wapi</h1>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="register.html">REGISTER</a>
				</div>
			<div class="cart box_1">
				<a href="checkout.php">
					<h3>(<span id="simpleCart_quantity" class="simpleCart_quantity">
					    <?php
				          $produit=new produitC;
				          $count=$produit->countpanier($_SESSION['id']);
				          foreach($count as $row)
				            {
				              echo '<div>'.$row["cnt"].'</div>';
				            }
				          ?>
					</span> items)<img src="images/bag.png" alt="" ></h3>
				</a>
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="checkout.php">Panier</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
			<ul class="megamenu skyblue" style="width: 1280px;" >
<li class="grid"><a class="color2" href="#">   Acceuil </a> </li>
			<li class="active grid"><a class="color1" href="index.html">Cuisines</a></li>
			<li class="grid"><a class="color2" href="#">Dressings</a> </li>
		<li class="active grid"><a class="color1" href="index.html">	Meuble Salle de bain </a> </li>
            
			<li class="grid"><a class="color2" href="women.php">  	Salon</a>
				<div class="megapanel" style="width: 500px;" "float: right";>
				
						
							<div class="h_nav">
								<ul>
									<li><a href="women.php">Séjour</a></li>
									<li><a href="women.html">Tables basses</a></li>
									<li><a href="women.html">Tables TV</a></li>
                                    <li><a href="women.html">Salle à manger</a></li> 
								</ul>	
							</div>							
					
                 
                    </div>
					<li class="active grid"><a class="color1" href="index.html"> Meuble de jardin </a> </li>
        <li class="grid"><a class="color2" href="#"> 	   Accessoires et décoration </a> </li>
   </ul>
    </div>
    </div>
    </div>
    
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	
	<!-- start content -->
	<div class="col-md-9 w_content">
		<div class="women">
			
		     <div class="clearfix"></div>	
		</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul>
	</div>
</div>
</div>
<div class="container">
	<div class="check">
			 <div class="col-md-3 cart-total">
			 		   <form method="POST" action="checkout_final.php">
			 <div class="price-details">
				 <h3  style="color:rgb(132, 198, 65)">Les  Détails</h3> 
				 <span style="color:rgb(132, 144, 65)">Total</span>
				 <span class="total1"> <?php echo $somme." DT"; ?></span>
				 
				 <span style="color:rgb(132, 144, 65)">Delivery Charges</span>
				 <span class="total1"><?php echo ($somme*1.18)." DT"; ?></span>
				 <span style="color:rgb(132, 144, 65)">Date</span>
				 <span class="total1"><?php $date = new DateTime(); echo $date->format('Y-m-d H:i:s');?></span>
				 <span style="color:rgb(132, 144, 65)">Secteur</span>
				 <span>
				 <select name="secteur">
                  <option value="Ariana">
                    Ariana
                  </option>
				  <option value="Ben Arous">
                    Ben Arous
                  </option>
				  <option value="Manouba">
                    Manouba
                  </option>
				  <option value="Sokra">
                    Sokra
                  </option>
				 <option value="Sfax">
                    Sfax
                  </option>
                  <option value="Ghazela">
                    Ghazela
                  </option>
                  <option value="Bardo">
                     Bardo
                  </option>
                  <option value="El Manar">
                    El Manar
                  </option>
                  <option value="El Menzah">
                    El Menzah
                  </option>
				  <option value="Lac">
                    Lac
                  </option>
                </select>
				 </span>
				 <div class="clearfix"></div>
			 </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li class="last_price"><span><?php echo ($somme*1.18)." DT"; ?></span></li>
			   <div class="clearfix"> </div>
			 </ul><br>
			 <br>
	 
			 <button  name="validercommande">Valider la commande</button>
			 
			
			
			
			
</form>
			
		
			 
			</div>
		 <div class="col-md-9 cart-items">
		 			 <h1>Mon Panier </h1>
				
						                <?PHP
									$produit2C=new produitC();
									$panier=$produit2C->recupererpanier($_SESSION['id']);
						foreach($panier as $row)
						{
						  $id=$row['id'];
						  $chemin="images/produit".$id.".jpg"
									?>
			 <div class="cart-header">
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo $chemin; ?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?PHP echo $row['nom']; ?></a></h3>
						<ul class="qty">
							<li><p>Prix : <?PHP echo $row['prix']." TND" ; ?></p></li>
							<li><p>Quantité : <?PHP echo $row['quantite']; ?></p></li>
						</ul>

							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>
					   </div>
					   <div class="clearfix"></div>

				  </div>
			 </div>
						  <?PHP
				}
?>
		 </div>


			<div class="clearfix"> </div>
	 </div>
	 </div>
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="register.html">Register</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="buy.html">Payment</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>

		</div>
		<div class="clearfix"> </div>
			<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
</body>
</html>
<?php
}
?>