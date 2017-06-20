<?php 

//variables blobales
date_default_timezone_set('America/Lima');
$fecha_descarga = date('d-m-Y H:i:s');
$fecha_archivo = date('d-m-Y');

//ajuntar la libreria excel
require_once ROOT.DS.'vendor'.DS.'phpexcel'.DS.'PHPExcel.php';
 
$objPHPExcel = new PHPExcel(); //nueva instancia
 
$objPHPExcel->getProperties()->setCreator("ECI Norte Verano 2017"); //autor
$objPHPExcel->getProperties()->setTitle("Reporte Asistentes ECI Norte Verano 2017"); //titulo
 
//inicio estilos
$titulo = new PHPExcel_Style(); //nuevo estilo
$titulo->applyFromArray(
  array('alignment' => array( //alineacion
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
    ),
    'font' => array( //fuente
      'bold' => true,
      'size' => 20
    )
));
 
$subtitulo = new PHPExcel_Style(); //nuevo estilo
 
$subtitulo->applyFromArray(
  array('fill' => array( //relleno de color
      'type' => PHPExcel_Style_Fill::FILL_SOLID,
      'color' => array('argb' => 'FFCCFFCC')
    ),
    'borders' => array( //bordes
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));
 
$bordes = new PHPExcel_Style(); //nuevo estilo
 
$bordes->applyFromArray(
  array('borders' => array(
      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
    )
));
//fin estilos
 
$objPHPExcel->createSheet(0); //crear hoja
$objPHPExcel->setActiveSheetIndex(0); //seleccionar hora
$objPHPExcel->getActiveSheet()->setTitle("LISTA PARTICIPANTES"); //establecer titulo de hoja
 
//orientacion hoja
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
 
//tipo papel
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_LETTER);
 
//establecer impresion a pagina completa
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
//fin: establecer impresion a pagina completa
 
//establecer margenes
$margin = 0.5 / 2.54; // 0.5 centimetros
$marginBottom = 1.2 / 2.54; //1.2 centimetros
$objPHPExcel->getActiveSheet()->getPageMargins()->setTop($margin);
$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom($marginBottom);
$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft($margin);
$objPHPExcel->getActiveSheet()->getPageMargins()->setRight($margin);
//fin: establecer margenes
 
//establecer titulos de impresion en cada hoja
$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1, 6);
 
$fila=2;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", "REPORTE PARTICIPANTES - IX ECI 2017");
$objPHPExcel->getActiveSheet()->mergeCells("A$fila:N$fila"); //unir celdas
$objPHPExcel->getActiveSheet()->setSharedStyle($titulo, "A$fila:N$fila"); //establecer estilo
 
//titulos de columnas
$fila+=2;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", 'ID');
$objPHPExcel->getActiveSheet()->SetCellValue("B$fila", 'NOMBRES');
$objPHPExcel->getActiveSheet()->SetCellValue("C$fila", 'APELLIDOS');
$objPHPExcel->getActiveSheet()->SetCellValue("D$fila", 'CORREO');
$objPHPExcel->getActiveSheet()->SetCellValue("E$fila", 'TELEFONO');
$objPHPExcel->getActiveSheet()->SetCellValue("F$fila", 'CENTRO DE ESTUDIOS O LABORAL');
$objPHPExcel->getActiveSheet()->SetCellValue("G$fila", 'GRADO ACADEMICO');
$objPHPExcel->getActiveSheet()->SetCellValue("H$fila", 'NACIONALIDAD');
$objPHPExcel->getActiveSheet()->SetCellValue("I$fila", 'TITULO DEL ARTICULO');
$objPHPExcel->getActiveSheet()->SetCellValue("J$fila", 'AUTOR PRINCIPAL');
$objPHPExcel->getActiveSheet()->SetCellValue("K$fila", 'COAUTORES');
$objPHPExcel->getActiveSheet()->SetCellValue("L$fila", 'AREA DE INVESTIGACION');
$objPHPExcel->getActiveSheet()->SetCellValue("M$fila", 'NOMBRE DE ARCHIVO');
$objPHPExcel->getActiveSheet()->SetCellValue("N$fila", 'F. REGISTRO');

$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, "A$fila:N$fila"); //establecer estilo
$objPHPExcel->getActiveSheet()->getStyle("A$fila:N$fila")->getFont()->setBold(true); //establecer en negrita
 
//rellenar con contenido
foreach ($participants as $participant):
    $fila+=1;
    $objPHPExcel->getActiveSheet()->SetCellValue("A$fila", $this->Number->format($participant->id));
    $objPHPExcel->getActiveSheet()->SetCellValue("B$fila", $participant->first_name);
    $objPHPExcel->getActiveSheet()->SetCellValue("C$fila", $participant->last_name);
    $objPHPExcel->getActiveSheet()->SetCellValue("D$fila", $participant->email);
    $objPHPExcel->getActiveSheet()->SetCellValue("E$fila", $participant->phone);
    $objPHPExcel->getActiveSheet()->SetCellValue("F$fila", $participant->study_center);
    $objPHPExcel->getActiveSheet()->SetCellValue("G$fila", $participant->grade);
    $objPHPExcel->getActiveSheet()->SetCellValue("H$fila", $participant->country->name);
    $objPHPExcel->getActiveSheet()->SetCellValue("I$fila", $participant->title_article);
    $objPHPExcel->getActiveSheet()->SetCellValue("J$fila", $participant->author);
    $objPHPExcel->getActiveSheet()->SetCellValue("K$fila", $participant->co_authors);
    $objPHPExcel->getActiveSheet()->SetCellValue("L$fila", $participant->area);
    $objPHPExcel->getActiveSheet()->SetCellValue("M$fila", $participant->file);
	  $objPHPExcel->getActiveSheet()->SetCellValue("N$fila", $participant->created->format('d/m/Y H:i:s'));

    $objPHPExcel->getActiveSheet()->setSharedStyle($bordes, "A$fila:N$fila");
    
endforeach;

//insertar fecha
$fila+=2;
$objPHPExcel->getActiveSheet()->SetCellValue("A$fila", 'FECHA DE DESCARGA');
$objPHPExcel->getActiveSheet()->SetCellValue("B$fila", $fecha_descarga);

//recorrer las columnas
foreach (range('A', 'N') as $columnID) {
  //autodimensionar las columnas
  $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
}
 
//establecer pie de impresion en cada hoja
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&R&F página &P / &N');
 
 
//****************Guardar como excel 2007*******************************
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); //Escribir archivo
 
//// nombre del archivo
header('Content-Disposition: attachment; filename="REPORTE-PARTICIPANTES-IX-ECI-2017-'.$fecha_archivo.'.xlsx"');
//**********************************************************************
 
//forzar a descarga por el navegador
$objWriter->save('php://output');