<?php

require_once 'Classes/PHPExcel.php'; 

function getExcel($fileName, $objectArray){

$document = new PHPExcel();
$document->getProperties()->setCreator("WebSaleParser")
                             ->setLastModifiedBy("WebSaleParser")
                             ->setTitle("WebSaleParser")
                             ->setSubject("WebSaleParser")
                             ->setDescription("WebSaleParser")
                             ->setKeywords("WebSaleParser")
                             ->setCategory("WebSaleParser");
$sheet = $document->setActiveSheetIndex(0); // Выбираем первый лист в документе
$columnPosition = 0; // Начальная координата x
$startLine = 0; // Начальная координата y

// Стилизация
$sheet->getStyle('A1:AE1')->getFont()->setBold(true);
$sheet->getStyle('A1:AE1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet
    ->getStyle('A1:AE1')
    ->getFill()
    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
    ->getStartColor()
    ->setRGB('EEEEEE'); 
$styleArray = array(
  'borders' => array(
      'outline' => array(
            'style'=>PHPExcel_Style_Border::BORDER_THICK,
            'color' => array(
                'rgb'=>'313131'
            )
        ),
    'allborders' => array(
      'style' => PHPExcel_Style_Border::BORDER_THIN
    )
  )
);
//$sheet->getRowDimension('A')->setRowHeight(20);
$sheet->getStyle('A1:AE1')->getFont()->setSize(15);
$sheet->getStyle('A1:AE'.(string)(count($objectArray) + 1))->applyFromArray($styleArray);
$sheet->setTitle('WebSaleParser');
//$sheet->getStyle('A1:AE'.(string)(count($objectArray) + 1))->getAlignment()->setWrapText(true);
/* устанавливаем ширину колонки */
$sheet->getColumnDimension('A')->setAutoSize(true);
$sheet->getColumnDimension('B')->setAutoSize(true);
$sheet->getColumnDimension('C')->setWidth(30);;
$sheet->getColumnDimension('D')->setAutoSize(true);
$sheet->getColumnDimension('E')->setWidth(20);
$sheet->getColumnDimension('F')->setWidth(20);
$sheet->getColumnDimension('G')->setWidth(30);
$sheet->getColumnDimension('H')->setWidth(20);
$sheet->getColumnDimension('I')->setWidth(20);
$sheet->getColumnDimension('J')->setWidth(30);
$sheet->getColumnDimension('K')->setWidth(30);
$sheet->getColumnDimension('L')->setWidth(20);
$sheet->getColumnDimension('M')->setWidth(30);
$sheet->getColumnDimension('N')->setWidth(30);
$sheet->getColumnDimension('O')->setWidth(20);;
$sheet->getColumnDimension('P')->setWidth(30);
$sheet->getColumnDimension('Q')->setWidth(30);
$sheet->getColumnDimension('R')->setWidth(30);
$sheet->getColumnDimension('S')->setAutoSize(true);
$sheet->getColumnDimension('T')->setAutoSize(true);
$sheet->getColumnDimension('U')->setAutoSize(true);
$sheet->getColumnDimension('V')->setAutoSize(true);
$sheet->getColumnDimension('W')->setAutoSize(true);
$sheet->getColumnDimension('X')->setAutoSize(true);
$sheet->getColumnDimension('Y')->setAutoSize(true);
$sheet->getColumnDimension('Z')->setAutoSize(true);
$sheet->getColumnDimension('AA')->setAutoSize(true);
$sheet->getColumnDimension('AB')->setAutoSize(true);
$sheet->getColumnDimension('AC')->setAutoSize(true);
$sheet->getColumnDimension('AD')->setAutoSize(true);
$sheet->getColumnDimension('AE')->setAutoSize(true);

// Массив с названиями столбцов
$columns = array('Адрес', 'Заголовок', 'Объявление от', 'Цена', 'Комиссия', 'Тип объекта', 'Тип дома', 'Этаж', 'Этажность', 'Общая площадь', 'Площадь кухни', 'Тип стен', 'Количество комнат', 'Планировка', 'Санузел', 'Отопление', 'Ремонт', 'Меблирование', 'Бытовая техника', 'Мультимедиа', 'Комфорт', 'Коммуникации', 'Инфраструктура', 'Ландшафт', 'Описание', 'Расстояние к ближайшему городу', 'Площадь участка', 'Кадастровый номер', 'Внешнее утепление стен', 'Тип кровли', 'Год постройки');
// Указатель на первый столбец
$currentColumn = $columnPosition;
// Формируем шапку
$i = 0;
foreach ($columns as $val) {
    
    $sheet->setCellValueByColumnAndRow($currentColumn, 1, $val);
    // Смещаемся вправо
    $currentColumn++;
}
$startLine++;

// Формируем список
foreach ($objectArray as $cell) {
    // Перекидываем указатель на следующую строку
    $startLine++;
    // Указатель на первый столбец
    $currentColumn = $columnPosition;
    // Вставляем порядковый номер
    $sheet->setCellValueByColumnAndRow(0, $startLine, utf8_encode($cell->URL));
    $sheet->setCellValueByColumnAndRow(1, $startLine, $cell->headline);
    $sheet->setCellValueByColumnAndRow(2, $startLine, $cell->typeSell);
    $sheet->setCellValueByColumnAndRow(3, $startLine, $cell->price);
    $sheet->setCellValueByColumnAndRow(4, $startLine, $cell->lessPrice);
    $sheet->setCellValueByColumnAndRow(5, $startLine, $cell->buildingType);
    $sheet->setCellValueByColumnAndRow(6, $startLine, $cell->houseType);
    $sheet->setCellValueByColumnAndRow(7, $startLine, $cell->floorNumber);
    $sheet->setCellValueByColumnAndRow(8, $startLine, $cell->floorCount);
    $sheet->setCellValueByColumnAndRow(9, $startLine, $cell->commonSquare);
    $sheet->setCellValueByColumnAndRow(10, $startLine, $cell->kitchenSquare);
    $sheet->setCellValueByColumnAndRow(11, $startLine, $cell->wallType);
    $sheet->setCellValueByColumnAndRow(12, $startLine, $cell->roomCount);
    $sheet->setCellValueByColumnAndRow(13, $startLine, $cell->layout);
    $sheet->setCellValueByColumnAndRow(14, $startLine, $cell->tuilet);
    $sheet->setCellValueByColumnAndRow(15, $startLine, $cell->heating);
    $sheet->setCellValueByColumnAndRow(16, $startLine, $cell->repear);
    $sheet->setCellValueByColumnAndRow(17, $startLine, $cell->furniture);
    $sheet->setCellValueByColumnAndRow(18, $startLine, $cell->devices);
    $sheet->setCellValueByColumnAndRow(19, $startLine, $cell->multimedia);
    $sheet->setCellValueByColumnAndRow(20, $startLine, $cell->comfort);
    $sheet->setCellValueByColumnAndRow(21, $startLine, $cell->communication);
    $sheet->setCellValueByColumnAndRow(22, $startLine, $cell->infrastructure);
    $sheet->setCellValueByColumnAndRow(23, $startLine, $cell->landshaft);
    $sheet->setCellValueByColumnAndRow(24, $startLine, $cell->notation);
    $sheet->setCellValueByColumnAndRow(25, $startLine, $cell->lengthsToCity);
    $sheet->setCellValueByColumnAndRow(26, $startLine, $cell->landSquare);
    $sheet->setCellValueByColumnAndRow(27, $startLine, $cell->cadastralNumber);
    $sheet->setCellValueByColumnAndRow(28, $startLine, $cell->outHeatingWall);
    $sheet->setCellValueByColumnAndRow(29, $startLine, $cell->roofType);
    $sheet->setCellValueByColumnAndRow(30, $startLine, $cell->builtYear);
}
/*
// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
// It will be called file.xls
header('Content-Disposition: attachment; filename="file.xls"');
$objWriter = PHPExcel_IOFactory::createWriter($document, 'Excel5');
$objWriter->save("BuildingList.xls");
$objWriter->save('php://output');*/


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="WebSaleParser.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($document, 'Excel5');
$objWriter->save('php://output');
//----------------------------------
}

?>