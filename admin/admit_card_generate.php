<?php
require_once('fpdf/fpdf.php');
include_once('../cls/student.php');
$cu_std = new Student();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $std_class               = $_POST['std_class'];
    $exam_name               = $_POST['exam_name'];
    $stdInfo = $cu_std->getStudentByClass($std_class);
  
}



$pdf = new FPDF('L','mm',array(127,90));
$pdf->AddPage();
//set font to Times, bold, 14pt


//Cell(width , height , text , border , end line , [align])
//$pdf->Image('img/logo.jpg',5,10,20,20);

if ($stdInfo) {
    $i=0;
    while ($result = $stdInfo->fetch_assoc()) {
$pdf->SetFont('Times','',22);
$pdf->Cell(0, 5, "St. Paul's High School", 0, 1, "C");


$pdf->SetFont('Times','',12);
$pdf->Cell(0, 8, "Shalabunia, Mongla, Bagerhat-9350", 0, 1, "C");


$pdf->SetFont('Times','',11);
$pdf->Cell(110, 8, "Admit Card", 0, 1, "C");

$pdf->SetFont('Times','',18);
$pdf->Cell(110, 8, $exam_name, 1, 1, "C");


$pdf->SetFont('Times','',12);
$pdf->Cell(10, 6, "ID : ", 0, 0, "L");
$pdf->Cell(20, 5, $result['std_id'], 0, 0, "L");

$pdf->Cell(30, 6, "Student Name : ", 0, 0, "L");
$pdf->Cell(55, 6, $result['std_name'], 0, 1, "L");

$pdf->Cell(20, 6, "Class : ", 0, 0, "L");
$pdf->Cell(20, 6, $result['std_class'], 0, 0, "L");

$pdf->Cell(20, 6, "Section : ", 0, 0, "L");
$pdf->Cell(20, 6, $result['std_section'], 0, 0, "L");

$pdf->Cell(15, 6, "Roll : ", 0, 0, "L");
$pdf->Cell(10, 6, $result['std_roll'], 0, 1, "L");


$pdf->Cell(30, 12, "", 0, 1, "C");
$pdf->Cell(0, 6, "Signature", 0, 1, "R");


} }else{

        
$pdf = new FPDF('L','mm',array(127,90));
$pdf->AddPage();
//set font to Times, bold, 14pt
$pdf->SetFont('Times','',22);

//Cell(width , height , text , border , end line , [align])
//$pdf->Image('img/logo.jpg',5,10,20,20);
$pdf->Cell(0, 5, "Data Not Found", 0, 1, "C");

    }

    $pdf->Output();
?>