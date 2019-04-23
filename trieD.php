<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
                                                        include 'User.php';

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Gestions des clients</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>
<body> 
      <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Gestions%20des%20clients.php">
                                <i class="fas fa-chart-bar"></i>Gestion des clients</a>
                        </li>
                        <li>
                            <a href="gestionp.html">
                                <i class="fas fa-table"></i>Gestion des produits</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Gestion des commandes</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Gestion des livraison</a>
                        </li>
                        <li>
                            <a href="yosra/Gestions%20des%20evenements.php">
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
                            <a href="yosra/Gestions%20des%20promotions.php">
                                <i class="fas fa-map-marker-alt"></i>Gestion des promotions</a>
                        </li>
                          <li>
                            <a href="afficherFornisseur.php">
                                <i class="fas fa-map-marker-alt"></i>Gestion des fornisseurs</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
          <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Gestions%20des%20clients.php">
                                <i class="fas fa-group (alias)"></i>Gestions des clients</a>
                        </li>
                        <li>
                            <a href="gestionp.html">
                                <i class="fas fa-th-list"></i>Gestions des produits</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="fas fa-shopping-cart"></i>Gestions des commandes</a>
                        </li>
                        <li>
                            <a href="yosra/Gestions%20des%20evenements.php">
                                <i class="fas fa-bell"></i>Gestions des évenements</a>
                        </li>
                        <li>
                            <a href="yosra/Gestions%20des%20promotions.php">
                                <i class="fas fa-bell"></i>Gestions des promotions</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-bullhorn"></i>Gestions des publicitées</a>
                        </li>
                         <li>
                            <a href="map.html">
                                <i class="fas fa-suitcase"></i>Gestions du service aprés vente</a>
                        </li>
 <li>
                            <a href="afficherFornisseur.php">
                                <i class="fas fa-suitcase"></i>Gestions des fornisseurs </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside> 
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
                                       
                                        <div class="content">
                                            <?PHP  
                                                        if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                                                        { 
                                                            ?> 
                                            <a class="js-acc-btn" href="#"> <?PHP echo $_SESSION['l'] ; ?> </a>
                                                                <?PHP
                                                        } 
                                                        ?> 
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <?PHP  
                                                        if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                                                        { 
                                                            ?> 
                                                            <a href="#"> <?PHP echo $_SESSION['l'] ; ?>  </a>   
                                                        <?PHP
                                                        } 
                                                        ?> 
                                                     </h5>
                                                     <?PHP  
                                                        if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                                                        { 
 $c=new Database();
$conn=$c->connexion();
$user=new User($_SESSION['l'],$_SESSION['p'],$conn);
$u=$user->Logedin($conn,$_SESSION['l'],$_SESSION['p']); 
                                                            foreach($u as $t){
                                                                 
	
	
	                                              $_SESSION['user_email']=$t['user_email'];
                                                                ?> 
                                                            
                                                    <span class="email"> <?PHP echo  $_SESSION['user_email']; ?> </span>
                                                      <?PHP
                                                        } 
                                                        }
                                                        ?> 
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power" ></i>Deconexion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div> </div>
            </header>
            <!-- END HEADER DESKTOP-->

            
                                <!--  Data table-->
                            <br><br><br><br>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Client</h3>
                               
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                      <button >
                                            <a href="trieD.php"> <img src="images/go-top-up-arrow-function-512.png" width="30px;"> </a> </button> 
    <button >
                                            <a href="triec.php"> <img src="images/decroi.png" width="30px;"> </a> </button> 
											 
     
											 
                                    </div>
                                   
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                            <a class="zmdi zmdi-plus" href="client.html" > Ajouter</a> </button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                           
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>  
                                     
                                
         <?PHP
include "../core/clientC.php";
$client1C=new clientC();
$liste=$client1C->trieD();

//var_dump($listeEmployes->fetchAll());
?>
                                 <div class="table-responsive table-responsive-data2">
                                     <form method="get"> 
                                    <table class="table table-data2">
                                        <thead>
<tr>
 <td>id</td>   
<td>Nom</td>
<td>Email</td>
<td> etat </td>    
<!-- <td>Num</td> --> 
<td>Date</td>
<td> Adresse</td>
<td>valider </td>
    <td> PDF </td>
    
</tr>
                                        </thead>
                                        
<?PHP
foreach($liste as $row){
	?>
	<tr>
     	<td><?PHP echo $row['id']; ?></td>
	<td ><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><?PHP echo $row['datee']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
        
        <td>  <form method="POST" action="validerclient.php">
											        <button name="valider" ><img src="images/valider.png"></button>
											        <input type="hidden" value="<?PHP echo $row['nom']; ?>" >
											  </form> 
	</td>
       
       <td> 
                                                    <div class="table-data-feature">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
    <a href="supprimerClient.php?nom=<?PHP echo $row['nom']; ?>" class="zmdi zmdi-delete">
    
</a>
 </button>

 <button class="item" data-toggle="tooltip" data-placement="top" title="Editer">
    <a href="modifierClient.php?nom=<?PHP echo $row['nom']; ?>" class="zmdi zmdi-edit">
     
</a>
 </button>

  <button class="item" data-toggle="tooltip" data-placement="top" title="Detail">
     
      <a href="detail_client.php?nom=<?php echo $row['nom'];?> "  target="_blank" class="zmdi zmdi-eye"> 
</a>
                                                        </button> </div> </td> 
            
	<?PHP
}
        ?> 
</table>
                                         </form> 
                                      
                                     <!-- END DATA TABLE-->
                            </div> 
                             
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Wappi. All rights reserved. by <a href="https://colorlib.com">Minds blowers</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> 
    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->