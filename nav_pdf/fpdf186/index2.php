<?php
require('fpdf.php');

class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(92,47,32);
    $this->SetTextColor(255);
    $this->SetDrawColor(0,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B','7');
    // Header
    $w = array(15, 25, 25, 25, 25, 25, 25, 25);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->MultiCell($w[0],10,$row[0],'1','L',$fill);
        $this->MultiCell($w[1],10,$row[1],'1','L',$fill);
        $this->MultiCell($w[2],10,$row[2],'1','L',$fill);
        $this->MultiCell($w[3],10,$row[3],'1','L',$fill);
        $this->MultiCell($w[4],10,$row[4],'1','L',$fill);
        $this->MultiCell($w[5],10,$row[5],'1','L',$fill);
        $this->MultiCell($w[6],10,$row[6],'1','L',$fill);
        $this->MultiCell($w[7],10,$row[7],'1','L',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array(' ', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
// Data loading
$data = $pdf->LoadData('food.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>