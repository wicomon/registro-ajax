<?php  session_start();
require_once 'includes/bd.php';
// require_once '../includes/funciones.php';
require_once 'Classes/PHPExcel.php';
if (!isset($_SESSION['usuario'])) {
	header('Location: ../registro.php');
}

$conexion = conexion();
$usuario = usuario_logeado($conexion, $_SESSION['usuario']);

if (($usuario['rol'] !== 'admin')) {
	header('Location: ../index.php');
}

$row = obtener_alumnos($conexion);

// $conexion = conexion();

// $row = obtener_alumnos($conexion);


// die(json_encode($row));

$objPHPExcel = new PHPExcel();

// Set document properties

    $objSheet = $objPHPExcel->setActiveSheetIndex(0);

    $objSheet->setCellValueExplicitByColumnAndRow(0, 1, 'Codigo', PHPExcel_Cell_DataType::TYPE_STRING);
    $objSheet->setCellValueExplicitByColumnAndRow(1, 1, 'Nombres', PHPExcel_Cell_DataType::TYPE_STRING);
    $objSheet->setCellValueExplicitByColumnAndRow(2, 1, 'Apellidos', PHPExcel_Cell_DataType::TYPE_STRING);
    $objSheet->setCellValueExplicitByColumnAndRow(3, 1, 'DNI', PHPExcel_Cell_DataType::TYPE_STRING);
    $objSheet->setCellValueExplicitByColumnAndRow(4, 1, 'Teléfono', PHPExcel_Cell_DataType::TYPE_STRING);
    $objSheet->setCellValueExplicitByColumnAndRow(5, 1, 'Correo', PHPExcel_Cell_DataType::TYPE_STRING);
    $objSheet->setCellValueExplicitByColumnAndRow(6, 1, 'Fecha Registro', PHPExcel_Cell_DataType::TYPE_STRING); 
$i =2;

foreach ($row as $row) {
        $objSheet->setCellValueExplicitByColumnAndRow(0,$i, $i-1, PHPExcel_Cell_DataType::TYPE_STRING);
        $objSheet->setCellValueExplicitByColumnAndRow(1,$i, $row['nombres'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objSheet->setCellValueExplicitByColumnAndRow(2,$i, $row['apellidos'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objSheet->setCellValueExplicitByColumnAndRow(3,$i, $row['dni'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objSheet->setCellValueExplicitByColumnAndRow(4,$i, $row['telefono'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objSheet->setCellValueExplicitByColumnAndRow(5,$i, $row['email'], PHPExcel_Cell_DataType::TYPE_STRING);
        $objSheet->setCellValueExplicitByColumnAndRow(6,$i, $row['f_registro'], PHPExcel_Cell_DataType::TYPE_STRING);
$i++;
}

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setTitle('Informe de Datos');
$objPHPExcel->setActiveSheetIndex(0);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Datos.xls"');
    header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

?>