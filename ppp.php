<?php
$panier = new panier();
$pourcentage =0;
?>
<title>Check-out</title>
<!-- BREADCRUMBS -->
<div class="bcrumbs">
    <div class="container">
        <ul>
            <li><a href="?controller=pages&action=home">Accueil</a></li>
            <li>Check-out</li>
        </ul>
    </div>
</div>

<?php
//ob_start();
//session_start();
if(empty($_SESSION['login']) )
{
  echo "<script> location.href='http://localhost/sayderma/sayderma/?controller=pages&action=loginpage'; </script>";
}
else {

  ?>


<div class="shop-single">
    <div class="container">
        <div class="row">
          <form id="discount-coupon-form" action="?controller=promocode&action=appliquerCO" method="post">
            <div class="col-md-12 col-sm-12">
                <div class="redirect-login"><em class="fa fa-edit"></em> &nbsp; &nbsp; <span>Avez-vous un coupon? </span> &nbsp;&nbsp;&nbsp; <input class="input-text" id="coupon_code" name="coupon_code" value="">&nbsp;&nbsp;&nbsp;
                  <button type="submit" title="Apply Coupon" name="couponcode" class="btn-black"><span><span>Apply Coupon</span></span></button>
                </div>
            </div>
          </form>


            <div class="col-md-9 col-sm-8">
                <!-- HTML -->
                <div>
                    <h4 class="account-title"><span class="fa fa-chevron-right"></span>Méthode de Check-out</h4>
                    <div class="account-form">
                        <form method="POST" role="form" name="chekoutForm" action="controllers/commandeController.php">
                          <input type="text" name="couponcode" value="<?php if (isset($_GET['couponcode']))echo $_GET['couponcode']; ?>" hidden>
                            <ul class="form-list row">
                                <input type="hidden" name="total" value ="<?php echo $panier->total() ?>">
				<input type="hidden" name="liv" value ="<?php echo $panier->liv() ?>">


                                <div class="redirect-login" >Votre adresse de livraison actuel est: <b><?php echo $_SESSION['adresse'].' '.$_SESSION['ville'].' '.$_SESSION['zip']  ?></b></div>


                                    <p>
                                        <input id="checkB" name="checkB" type="checkbox" class="input-chkbox" onclick="check()" >
                                        <label> Ajouter une autre adresse de livraison? </label>
                                    </p>

                                    <div id="hide" hidden>
                                <p>
                            <!-- HTML -->
                                    <form id="shipping-zip-form">
                                        <ul class="form-list row">
                                            <li class="col-md-12 col-sm-12">

                                            </li>

                                            <li class="col-md-3 col-sm-3">
                                                <label >N° <em>*</em></label>
                                                <input type="number" min="1" max="100" name="nRue" id="nRue" class="input-text">
                                            </li>
                                            <li class="col-md-9 col-sm-9">
                                                <label >Rue <em>*</em></label>
                                                <input type="text" class="input-text" name="rue" id="rue">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label>Ville</label>
                                                <select  name="ville" id="ville">
                                        <option value="">Selectionnez une ville</option>
                                        <option value="Ariana">Ariana</option>
                                        <option value="Beja">Beja</option>
                                        <option value="Ben arous">Ben arous</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Gabes">Gabés</option>
                                        <option value="Gafsa">Gafsa</option>
                                        <option value="Jendouba">Jendouba</option>
                                        <option value="Kairouan">Kairouan</option>
                                        <option value="Kasserine">Kasserine</option>
                                        <option value="Kebili">Kebili</option>
					<option value="Kef">Kef</option>
                                        <option value="Mahdia">Mahdia</option>
                                        <option value="Manouba">Manouba</option>
                                        <option value="Medenine">Medenine</option>
                                        <option value="Monastir">Monastir</option>
                                        <option value="Nabeul">Nabeul</option>
					<option value="Sfax">Sfax</option>
                                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                                        <option value="Siliana">Siliana</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Tataouine">Tataouine</option>
                                        <option value="Tozeur">Tozeur</option>
                                        <option value="Tunis">Tunis</option>
					<option value="Zaghouan">Zaghouan</option>
                                </select>
                                            <li class="col-md-6 col-sm-6">
                                                <label >Zip/Code Postal <em>*</em></label>
                                                <input type="number" min="1000" max="3000" class="input-text" name="zip" id="zip">
                                            </li>





                                    </p> </div>

                                    &nbsp;
                                    &nbsp;
                                    <p>
                                        <input id="direct-transfer"  type="radio" name="optradio" value="Virement banquaire" class="input-chkbox" required>
                                        <label> Virement bancaire direct </label>
                                    </p>
                                    <div id="direct-transfer-msg" class="transfer-guide">
                                        <p>Effectuez votre paiement directement dans notre compte bancaire.<br>Banque: BIAT<br><a href="https://www.google.tn/maps/place/BIAT/@36.8509287,10.1480132,18z/data=!4m5!3m4!1s0x0:0x9e74041512235eb1!8m2!3d36.8510196!4d10.1485468" target="blank"> Agence Menzah 9</a><br> RIB:&nbsp;12 203 0004505 001354 61</p>
                                                </div>

                                    <p>
                                        <input id="cheque-transfer" type="radio" name="optradio" value="Chèque" class="input-chkbox">
                                        <label> Paiement par chèque </label>
                                    </p>
                                    <div id="cheque-transfer-msg" class="transfer-guide">
                                        <p>Veuillez envoyer votre chèque au nom de "<b> Sayderma </b>", <a href="https://www.google.tn/maps/place/Sayderma/@36.8476721,10.1523185,17z/data=!3m1!4b1!4m5!3m4!1s0x12fd33443c3bf0bf:0xe96289c404c922dd!8m2!3d36.8476721!4d10.1545072" target="blank">à l'adresse de la boutique.</a></p>
                                                </div>

                                    <p>
                                        <input id="paypal-transfer" type="radio" name="optradio" value="Paypal" class="input-chkbox">
                                        <label class="pay-pal"> PayPal <img alt="PayPal Acceptance Mark" src="images\basic\AM_mc_vs_ms_ae_UK.png">
                                            <a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup', 'WIPaypal', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700');
                                                    return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">Qu'est-ce que PayPal?</a>
                                        </label>
                                    </p>
                                    <div id="paypal-transfer-msg" class="transfer-guide">
                                                    <p>Payer via PayPal; Vous pouvez payer avec votre carte de crédit si vous n'avez pas de compte PayPal.</p>
                                                </div>

                                </li>
                            </ul>
                            <div class="buttons-set">
                                <input class="btn-black" type="submit" id="confirm" name="confirm" value="Passer la commande">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="side-widget space50">
                    <h3> <span> Votre commande </span></h3>

                    <div>
                        <table class="cart-table">


                            <?php
                            $ids = array_keys($_SESSION['panier']);
                            if (empty($ids)) {
                                $produits = array();
                            } else {

                                $produits=$panier->findAll($ids);
                            }

                            foreach ($produits as $produit):
                                ?>
                                <tr>
                                    <td>
                                        <div class="item-img col-md-5 col-sm-5">
                                            <a href="#"><img src="<?php echo $produit->image; ?>" class="img-responsive" alt=""/></a>
                                        </div>
                                        <div class="item-info col-md-7 col-sm-7">
                                            <h4><?php echo $produit->nom ?> </h4>
                                            Qté: <?php echo $_SESSION['panier'][$produit->id]?>
                                        </div>

                                    </td>
                                    <td>
                                        <a href="controllers/panierController.php?delP=<?php echo $produit->id; ?>" > <i class="fa fa-trash-o"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tfoot>
                                <tr>
                                    <th>Total du panier</th>
                                    <td>
                                        <div class=""><?php echo number_format($panier->total(), 3, ',', ' ') . " TTC"; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Frais de livraison</th>
                                    <td>
                                        <div class=""><?php echo number_format($panier->liv(), 3, ',', ' ') . " TTC"; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total de la commande</th>
                                    <td>
                                        <div class=""><?php
                                        if (isset ($_POST['coupon_code']))
                                        {
                                          echo number_format($panier->newtotal($_POST['coupon_code']), 3, ',', ' ') . " TTC";
                                        }
                                        else if (isset ($_GET['couponcode']))
                                        {
                                          echo number_format($panier->newtotal($_GET['couponcode']), 3, ',', ' ') . " TTC";
                                        }
                                        else
                                        {
                                          echo number_format($panier->newtotal(), 3, ',', ' ') . " TTC";
                                        } ?>
                                      </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix space20"></div>
<?php } ?>
<script type="text/javascript">
function check() {
    if(document.getElementById('checkB').checked)
    {
        document.getElementById('hide').hidden=false;
    document.getElementById('nRue').required=true;
    document.getElementById('rue').required=true;
    document.getElementById('ville').required=true;
    document.getElementById('zip').required=true;
    }
     if(!document.getElementById('checkB').checked)
    {
    document.getElementById('hide').hidden=true;
    document.getElementById('nRue').required=false;
    document.getElementById('rue').required=false;
    document.getElementById('ville').required=false;
    document.getElementById('zip').required=false;
    }


};
</script>
