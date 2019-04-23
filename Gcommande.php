<?PHP
include_once "../Entities/produit.php";
include_once "../Core/produitC.php";
include_once "../Core/commandeC.php";
include_once "../Entities/commande.php";
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{

$commande1C=new commandeC();
$commandes=$commande1C->recuperercommandes();
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <style type="text/css">  


.date
 { text-align: center ;
}

</style>

   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>gestion des commandes </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


   

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h1>Wapi</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="Gestion des clients.html">
                                <i class="fas fa-chart-bar"></i>Gestion des clients</a>
                        </li>
                        <li>
                            <a href="Gestions des produits.html">
                                <i class="fas fa-table"></i>Gestion des produits</a>
                        </li>
                        <li>
                            <a href="Gcommande.php">
                                <i class="far fa-check-square"></i>Gestion des commandes</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Gestion des livraison</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Gestion des evenements</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Gestion des publicitées</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Gestion du service aprés vente</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Gestion des promotions</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                  <h1>Wapi</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="Gestions des clients.html">
                                <i class="fas fa-group (alias)"></i>Gestions des clients</a>
                        </li>
                        <li>
                            <a href="Gestion des produits.html">
                                <i class="fas fa-th-list"></i>Gestions des produits</a>
                        </li>
                        <li>
                            <a href="Gcommande.php">
                                <i class="fas fa-shopping-cart"></i>Gestions des commandes</a>
                                

                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-bell"></i>Gestions des évenements</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-bookmark"></i>Gestions des promotions</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-bullhorn"></i>Gestions des publicitées</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-suitcase"></i>Gestions du service aprés vente</a>
                        </li>

                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="chercher" placeholder="Recherche..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>   
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                           
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Islem Oueslati</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                      
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Islem Oueslati</a>
                                                    </h5>
                                                    <span class="email"></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Compte</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Paramétres</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Deconexion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            
                                <!--  Data table-->
                            <br><br><br><br>
                      
 



<table class="table table-bordered table-striped mb-none"  id="myTable2" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
							<thead>
								<tr>
													<th style="color:rgb(44, 172, 171)">ID client</th>
													<th style="color:rgb(44, 172, 171)">ID commande</th>
													<th style="color:rgb(44, 172, 171)">Contenu</th>
													<th style="color:rgb(44, 172, 171)">Date commande</th>
													<th style="color:rgb(44, 172, 171)">Total</th>
													<th style="color:rgb(44, 172, 171)">Adresse</th>
													<th style="color:rgb(44, 172, 171)">Valider</th>
													<th style="color:rgb(44, 172, 171)">Annulee</th>
													<th style="color:rgb(44, 172, 171)">PDF</th>
													<th style="color:rgb(44, 172, 171)">Trier</th>
												</tr>
												 <?php foreach ($commandes as $row)
                                     {
                                    ?>
									
                                    <tr>

                                        <td><?php echo $row["idClient"] ; ?></td>
                                        <td><?php echo $row["idCommande"] ; ?></a></td>

                                        <td>

											  <form method="POST" action="affichercontenucommande.php">
											        <button name="contenu" ><img src="images/eyes.png"></button>
											        <input type="hidden" value="<?PHP echo $row['idCommande']; ?>" name="idCommande">
											  </form> 										    
										  </td>

                                        <td><?php echo $row["dateCommande"] ; ?></td>
                                        <td><?php echo $row["montantCommande"]." TND" ; ?></td>
                                        
                                        <td><?php echo $row["lieuLivraison"] ; ?></td>
                                       
                                                  

										  <td>

											  <form method="POST" action="validercommande.php">
											        <button name="valider" ><img src="images/valider.png"></button>
											        <input type="hidden" value="<?PHP echo $row['idCommande']; ?>" name="idCommande">
											  </form> 	

										  <td> 
											  <form method="POST" action="supprimercommande.php">
											        <button name="supprimer" ><img src="images/Corbeille1.png"></button>
											        <input type="hidden" value="<?PHP echo $row['idCommande']; ?>" name="idCommande">
											  </form> 
											  
											    
											  </td>
											   <td>
											     
											        <form method="POST" action="imprimer.php">
       	                                        <button name="imprimer" ><img src="images/shredder.png"></button>
		   
                                                  </form>
												  
												  
												  </td>
												  <td>
											   <button >
                                            <a href="trieD.php"> <img src="images/go-top-up-arrow-function-512.png" width="30px;"> </a> </button> 
    <button >
                                            <a href="triec.php"> <img src="images/decroi.png" width="30px;"> </a> </button> 
											  
										  </td>
										  
										  

										  
										  </tr>
                                        

       </form>
                               </tr>
							   
									
                                    <?php } ?>
</thead>






										</tr>
									</tbody>
									
									
									
									
									
					</table>
								<form  action="statistiques.php">
       	                                          <button name="statistiques" ><img src="images/poll.png"></button>
		                        </form><form  action="historique.php">
       	                                          <button name="historiques">Historiques</button>
		                        </form>
								
								
								
												  
												  
												 
												  
												  												  
</td>
<!-- <script> 
function myFunction() {
  alert("Votre Produit a été ajouté !");
  window.location="/Gestions%20des%20produits.html";
  
}
</script> -->

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
  }
?>
