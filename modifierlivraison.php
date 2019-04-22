<?php
        include "../core/livraisonC.php";
        $editid =$_GET['editid'] ;
        $pC=new livraisonC();
        $listelivraison =$pC->recupererlivraison($editid);
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
    <title>Modification d'une livraison</title>

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

<style type="text/css">
    .hide {
  display: none;
}
</style>
<script language="JavaScript" type="text/javascript">
 function CloseAndRefresh() 
  {
     opener.location.reload(true);
     self.close();
  }
</script>

</head>

<body>
    <?PHP
                                            foreach($listelivraison as $row){
                                            ?>

      <form action="modifierlivv.php?id=<?php echo $row['id'];?>" method="post" nctype="multipart/form-data">
        <br>
        <br>
        
   
                
                                    <div class="col col-md-3">
                                                    <label class=" form-control-label">Nom</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input" name="nom" placeholder="Nom de client.." class="form-control" required="required" value="<?php echo $row['nom'];?>" >

                                                </div>
                                            </div>
                                        </div>
                                            
                                     <hr>
                                     <div class="col col-md-3">
                                                    <label class=" form-control-label">Prenom</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input" name="prenom" placeholder="prenom de client.." class="form-control" required="required" value="<?php echo $row['prenom'];?>" >

                                                </div>
                                            </div>
                                        </div>
                                              <div class="col col-md-3">
                                                    <label class=" form-control-label">adresse</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input" name="adresse" placeholder="adresse.." class="form-control" required="required" value="<?php echo $row['adresse'];?>" >
                                     </div>
                                            </div>
                                        </div>

                                                <hr>
                                                 <div class="col col-md-3">
                                                    <label class=" form-control-label">Code postal</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="number" id="number-input" name="codepostal" placeholder="code postale de client.." class="form-control" required="required" value="<?php echo $row['codepostal'];?>" >

                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                                 <div class="col col-md-3">
                                                    <label class=" form-control-label">num tel</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="number" id="number-input" name="numtel" placeholder="numero de telephone.." class="form-control" required="required" value="<?php echo $row['numtel'];?>" >
                                     </div>
                                            </div>
                                        </div>
                                        <hr>
                                         <div class="col col-md-3">
                                                    <label class=" form-control-label">mail</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="mail" id="mail-input" name="mail" placeholder="mail de client.." class="form-control" placeholder="prenom.nom@gmail.com" pattern="[a-zA-Z]*.[a-zA-Z]*@gmail.com" required="required" value="<?php echo $row['mail'];?>" >

                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                         <div class="col col-md-3">
                                                    <label class=" form-control-label">num commmande</label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="number" id="number-input" name="numcommande" placeholder="num de commmande.." class="form-control" required="required" value="<?php echo $row['numcommande'];?>" >
                                     </div>
                                            </div>
                                        </div>


                                         <?PHP
}
?>
                                                <hr>
                 
                        
                                    <div class="card-footer" align="center">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="controle();CloseAndRefresh();return:true;" >

                                            <i class="fa fa-dot-circle-o"></i> Editer
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>

                                        <a href="Gestions des livraisons.php" class="btn btn-secondary">Retour </a>




                                    </div>


</form>

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
    <script src="js/controle.js" ></script>
</body>

</html>