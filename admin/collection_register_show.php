<?php
require_once('fpdf/fpdf.php');

include('../cls/accounts.php');
include('../cls/Student.php');
$acc = new accounts();
$std = new Student();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date               = $_POST['date'];
   $getdata = $acc->getAccountInfobyDate($date);
  
}


$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();


//set font to Times, bold, 14pt

$pdf->SetFont('Times','B',18);
//Cell(width , height , text , border , end line , [align])  275
$pdf->Cell(0, 10, 'Name Of School', 0, 1, 'C');

$pdf->SetFont('Times','',12);
$pdf->Cell(0, 10, 'Collection Register of : '.$date, 0, 1, 'C');


$pdf->Cell(15, 10, 'Sl No', 1, 0, 'C');
$pdf->Cell(15, 10, 'Inv No', 1, 0, 'C');
$pdf->Cell(15, 10, 'Class', 1, 0, 'C');
$pdf->Cell(15, 10, 'Section', 1, 0, 'C');
$pdf->Cell(15, 10, 'Roll', 1, 0, 'C');
$pdf->Cell(85, 10, 'Fee Type', 1, 0, 'C');
$pdf->Cell(25, 10, 'Amount', 1, 1, 'C');
//std_id, inv_no, type_of_payment, amount,

if ($getdata) {
    $i=1;
    $total = 0;
    while ($result = $getdata->fetch_assoc()) {
//Account Body

$std_id = $result['std_id'];
$stdinfo = $std ->getStudentnameById($std_id);
$rows =$stdinfo->fetch_assoc();
$std_class = $rows['std_class'];
$std_section = $rows['std_section'];
$std_roll = $rows['std_roll'];




$pdf->Cell(15, 10, $i++, 1, 0, 'C');
$pdf->Cell(15, 10, $result['inv_no'], 1, 0, 'C');
$pdf->Cell(15, 10, $std_class, 1, 0, 'C');
$pdf->Cell(15, 10, $std_section, 1, 0, 'C');
$pdf->Cell(15, 10, $std_roll, 1, 0, 'C');
$pdf->Cell(85, 10, $result['type_of_payment'], 1, 0, 'L');
$pdf->Cell(25, 10, $result['amount'], 1, 1, 'C');

$total = $total + $result['amount'];

//Get Total
$pdf->Cell(160, 10, 'Total', 1, 0, 'R');
$pdf->Cell(25, 10, $total, 1, 1, 'C');
$pdf->Cell(35, 10, 'Total(In Word)', 1, 0, 'R');
$pdf->Cell(150, 10, $acc->convertNumber($total), 1, 1, 'L');
    }
}else{
    $pdf->Cell(0, 10, 'Data Not Found', 0, 1, 'C');
}




/*        
$pdf = new FPDF('L','mm',A4);
$pdf->AddPage();
//set font to Times, bold, 14pt
$pdf->SetFont('Times','',22);

//Cell(width , height , text , border , end line , [align])
//$pdf->Image('img/logo.jpg',5,10,20,20);
$pdf->Cell(0, 5, "Data Not Found", 0, 1, "C");
*/
$pdf->Cell(0	,10,'',0,1,'C');//end of line
$pdf->Cell(0	,10,'',0,1,'C');//end of line
$pdf->Cell(0	,10,'',0,1,'C');//end of line
$pdf->Cell(155	,10,'',0,0);//end of line
$pdf->Cell(34	,5,'Signature',0,1,'C');//end of line

    $pdf->Output();
?>