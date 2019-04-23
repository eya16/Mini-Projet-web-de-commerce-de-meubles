<?php
include "../core/commandeC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les commandes </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">idcommande</th>
													      <th scope="col">date</th>
													      <th scope="col">montantCommande</th>
													      <th scope="col">etatcom</th>
													      <th scope="col">lieu</th>
													      <th scope="col">prix</th>
													  
													      
													    
													      <th scope="col">action</th>
													</tr>
													
		<?php
	$commandess=new commandeC();
$listcommandes=$commandess->recuperercommandes();
		foreach($listcommandes as $row) {
			?>
		  <tr>
												      <td> <?php echo $row["idCommande"] ; ?></td> 
												      <td> <?php echo $row["dateCommande"] ; ?></td> 
												       <td> <?php echo $row["montantCommande"] ; ?></td> 
												      <td> <?php echo $row["etatCommande"] ; ?></td> 
                                                     <td> <?php echo $row["lieuLivraison"] ; ?></td> 
													  <td> <?php echo $row["prixLivraison"] ; ?></td> 


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>