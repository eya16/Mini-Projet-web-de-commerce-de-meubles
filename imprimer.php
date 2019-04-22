<?php
include "../core/ProduitC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Tous les produits  </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">id produit</th>
													      <th scope="col">nom produit </th>
													      <th scope="col">description </th>
													      <th scope="col">prix</th>
													      <th scope="col">categorie</th>
													      <th scope="col">quantite </th>
													  
													      
													    
													      <th scope="col">action</th>
													</tr>
													
		<?php
	$produitss=new ProduitC();
$listproduits=$produitss->recupererProduit();
		foreach($listproduits as $row) {
			?>
		  <tr>
												      <td> <?php echo $row["idproduit"] ; ?></td> 
												      <td> <?php echo $row["nomproduit"] ; ?></td> 
												       <td> <?php echo $row["description"] ; ?></td> 
												      <td> <?php echo $row["prix"] ; ?></td> 
                                                     <td> <?php echo $row["qt"] ; ?></td> 
													  <td> <?php echo $row["categorie"] ; ?></td>
													   <td> <?php echo $row["image"] ; ?></td> 

 												      
												   
												              
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