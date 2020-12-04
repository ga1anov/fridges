<?require_once 'excel_php/Classes/PHPExcel.php';?>
<?require_once 'excel_php/Classes/PHPExcel/Writer/Excel5.php';?>
<?require_once 'excel_php/Classes/PHPExcel/IOFactory.php';?>
<?
ob_end_clean();
$title = 'Таблица';

$xls = new PHPExcel();
$xls->getProperties()->setTitle("request");
$xls->getProperties()->setSubject("Иван");
$xls->getProperties()->setCreator("Галанов");
$xls->getProperties()->setCompany("УГАТУ");
$xls->getProperties()->setCategory("ПИ-320");
$xls->getProperties()->setKeywords("request");
$xls->getProperties()->setCreated("04.12.2020");

$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('Заявки');
$sheet->getPageSetup()->SetPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
$sheet->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$sheet->getPageMargins()->setTop(1);
$sheet->getPageMargins()->setRight(0.75);
$sheet->getPageMargins()->setLeft(0.75);
$sheet->getPageMargins()->setBottom(1);

$sheet->getDefaultStyle()->getFont()->setName('Arial');
$sheet->getDefaultStyle()->getFont()->setSize(14);

$sheet->getColumnDimension("A")->setWidth(8);
$sheet->getColumnDimension("B")->setWidth(30);
$sheet->getColumnDimension("C")->setWidth(11);
$sheet->getColumnDimension("D")->setWidth(20);
$sheet->getColumnDimension("E")->setWidth(16);
$sheet->getColumnDimension("F")->setWidth(22);
$sheet->getColumnDimension("G")->setWidth(22);
$sheet->getColumnDimension("H")->setWidth(22);
$sheet->getColumnDimension("I")->setWidth(22);
$sheet->getColumnDimension("J")->setWidth(22);
$sheet->getColumnDimension("K")->setWidth(22);
$sheet->getRowDimension("1")->setRowHeight(40);
$sheet->getRowDimension("2")->setRowHeight(30);
$sheet->getStyle("2")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("1")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle("1")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$border = array(
	'borders'=>array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('rgb' => '000000')
		)
	)
);


$sheet->setCellValueExplicit('A1', 'Заявки', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->getStyle('A1')->getFill()->getStartColor()->setRGB('DCDCDC');
$sheet->mergeCells('A1:K1');
$sheet->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('A2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('A2', '№', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('A2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("A2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('B2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('B2', 'Марка', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('B2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("B2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('C2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('C2', 'Модель', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('C2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("C2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('D2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('D2', 'Тип разморозки', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('D2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("D2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('E2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('E2', 'Гарантия', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('E2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("E2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('F2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('F2', 'Сервисный центр', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('F2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("F2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('G2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('G2', 'Адрес', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('G2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("G2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('H2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('H2', 'Дата начала', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('H2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("H2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('I2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('I2', 'Дата окончания', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('I2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("I2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('J2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('J2', 'ФИО клиента', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('J2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("J2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('K2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('K2', 'Стоимость', PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('K2')->getFill()->getStartColor()->setRGB('FAF0E6');
$sheet->getStyle("K2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


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

$c = 3;
$check = true;

foreach($number as $i)
  {

if ($check) {
	$color = 'FFFFFF';
}else {
	$color = 'FFFFFF';
}

$sheet->getStyle('A'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValue("A".$c, $number[$i-1]);
$sheet->getStyle('A'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("A".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$sheet->getStyle('B'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('B'.$c, $brand[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('B'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("B".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$sheet->getStyle('C'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('C'.$c, $model[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('C'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("C".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$sheet->getStyle('D'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('D'.$c, $typez[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('D'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("D".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$sheet->getStyle('E'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('E'.$c, $term[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('E'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("E".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('F'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('F'.$c, $name[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('F'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("F".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('G'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('G'.$c, $address[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('G'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("G".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('G'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('H'.$c, $daten[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('G'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("G".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$sheet->getStyle('G'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('I'.$c, $dateo[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('G'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("G".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$sheet->getStyle('G'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('J'.$c, $fio[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('G'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("G".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$sheet->getStyle('G'.$c)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->setCellValueExplicit('K'.$c, $cost[$i-1], PHPExcel_Cell_DataType::TYPE_STRING);
$sheet->getStyle('G'.$c)->getFill()->getStartColor()->setRGB($color);
$sheet->getStyle("G".$c)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	$check =! $check;
	$c++;
}


$sheet->getStyle("A1:K".($c-1))->applyFromArray($border);


ob_end_clean();
header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
ob_end_clean();
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=app.xls");

$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

$objWriter->save('php://output');
ob_end_clean();
?>