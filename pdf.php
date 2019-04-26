<?php
require('fpdf/fpdf.php');
include "../core/clientC.php";
$client1C=new clientC();
$liste=$client1C->afficher();

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',30);
$pdf->Cell(60	,5,'',0,0);
$pdf->Cell(100	,5,' ',0,0);

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,20,'',0,1);//end of line
$pdf->Cell(50	,10,'Gestions des Clients ',5,5);

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,' ',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$date= date('Y-m-d');
$pdf->Cell(5	,5,$date,0,1);//end of line

$pdf->Cell(130	,5,'Phone : 93815181      ',0,0);
$pdf->Cell(130	,5,'Fax         ',0,0);


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,30,'',0,1);//end of line


//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50	,5,'id ',1,0);
$pdf->Cell(50	,5,'nom',1,0);
$pdf->Cell(50	,5,'email ',1,0);
$pdf->Cell(50	,5,'date ',1,0);
$pdf->Cell(50	,5,'Adresse ',1,0);
$pdf->Cell(30	,5,'etat',1,1);//end of line

foreach ($liste as $row) {
	$id=$row['id'];
	$nom=$row['nom'];
	$email=$row['email'];
	$date=$row['datee'];
    	$Adresse=$row['adresse'];
    	$etat=$row['etat'];

	$pdf->Cell(50 ,5,$id,1,0);
	$pdf->Cell(50 ,5,$nom ,1,0);
	$pdf->Cell(50 ,5,$email ,1,0);
    	$pdf->Cell(50 ,5,$date ,1,0);
	$pdf->Cell(50 ,5,$Adresse ,1,0);
	$pdf->Cell(30 ,5,$etat ,1,1,'R');
}
$pdf->Output();
?>