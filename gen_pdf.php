<?php

require('pdf/tfpdf.php');

  $connect = mysqli_connect("localhost", "root", "root", "galanov")or die("Невозможно подключиться к серверу");
  mysqli_query($connect, "SET NAMES utf8");

$result = mysqli_query($connect, "SELECT f.brand, f.model, f.typez, f.term, s.name, s.address, r.daten, r.dateo, r.fio, r.cost FROM request r INNER JOIN  service s ON r.id_c = s.id JOIN fridge f ON r.id_f=f.id");

  $i = 0;
  while ($row = mysqli_fetch_array($result)){

    $number[$i] = $i+1;
    $brand[$i] = $row['brand'];
    $model[$i] = $row['model'];
    $typez[$i] = $row['typez'];
    $term[$i] = $row['term'];
 $name[$i] = $row['name'];
 $address[$i] = $row['address'];
 $daten[$i] = $row['daten'];
 $dateo[$i] = $row['dateo'];
 $fio[$i] = $row['fio'];
$cost[$i] = $row['cost'];
    $i++;
  }

$pdf = new tFPDF('L');
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',8);


$txt = "Заявки";

$pdf->SetFont('DejaVu','','28');
$pdf->Cell(35, 10, $txt, 15,0,'C');
$pdf->Ln();
$pdf->Ln();
 
 $pdf->SetFont('DejaVu','','9');
 $pdf->SetFillColor(211, 211, 211);
 $pdf->SetTextColor(0);
 $pdf->SetDrawColor(0, 0, 139);
 $pdf->SetLineWidth(.2);
 
 $pdf->Cell(6,12,"№",1,0,'C',true);
 $pdf->Cell(15,12,"Марка",1,0,'C',true);
 $pdf->Cell(15,12,"Модель",1,0,'C',true);
 $pdf->Cell(29,12,"Тип разморозки",1,0,'C',true);
 $pdf->Cell(18,12,"Гарантия",1,0,'C',true);
 $pdf->Cell(32,12,"Сервисный центр",1,0,'C',true);
 $pdf->Cell(30,12,"Адрес",1,0,'C',true);
 $pdf->Cell(26,12,"Дата начала",1,0,'C',true);
 $pdf->Cell(33,12,"Дата окончания",1,0,'C',true);
 $pdf->Cell(40,12,"ФИО",1,0,'C',true);
 $pdf->Cell(30,12,"Стоимость",1,0,'C',true);
 $pdf->Ln();
 
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
 
$fill = true;
 
foreach($number as $i)
  {
    $pdf->SetFont('DejaVu','','8');
        $pdf->Cell(6,6, $i, 1, 0,'C',$fill);
        $pdf->Cell(15,6, $brand[$i-1], 1, 0,'L',$fill);
        $pdf->Cell(15,6, $model[$i-1], 1, 0,'C',$fill);
        $pdf->Cell(29,6, $typez[$i-1], 1, 0,'C',$fill);
        $pdf->Cell(18,6, $term[$i-1], 1, 0,'C',$fill);
$pdf->Cell(32,6, $name[$i-1], 1, 0,'C',$fill);
$pdf->Cell(30,6, $address[$i-1], 1, 0,'C',$fill);
$pdf->Cell(26,6, $daten[$i-1], 1, 0,'C',$fill);
$pdf->Cell(33,6, $dateo[$i-1], 1, 0,'C',$fill);
$pdf->Cell(40,6, $fio[$i-1], 1, 0,'C',$fill);
$pdf->Cell(30,6, $cost[$i-1], 1, 0,'C',$fill);
        $pdf->Ln();
        $fill =! $fill;
    }
    $pdf->Cell(180,0,'','T');

$pdf->Output();
?>