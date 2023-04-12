<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$server_inputFileName = $_FILES['inputFileName']['tmp_name'];

$pc_FileName = $_FILES['inputFileName']['name'];
$file_type = pathinfo($pc_FileName, PATHINFO_EXTENSION);

if ($server_inputFileName) {

  /** Create a new Excel File Reader  **/
  if ($file_type == 'xls') {
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
  } elseif ($file_type == 'xlsx') {
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
  } else {
    echo '처리할 수 있는 엑셀 파일이 아닙니다';
    exit;
  }

  //    확장자에 따른 설정 구분
  //    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xml();
  //    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Ods();
  //    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Slk();
  //    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Gnumeric();
  //    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();

  /** Load $server_inputFileName to a Spreadsheet Object  **/
  $spreadsheet = $reader->load($server_inputFileName);

  $spreadData = $spreadsheet->getActiveSheet()->toArray();

  $rows = count($spreadData);
  $cols = (count($spreadData, 1) / count($spreadData)) - 1;

  echo '<table border="1" style="width:100%">';
  for ($i = 0; $i < $rows; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $cols; $j++) {
      if ($j == 1 and $i > 0) {
        echo '<td nowrap>' . $spreadData[$i][$j] . '</td>';
      } else {
        echo '<td nowrap align="center">' . $spreadData[$i][$j] . '</td>';
      }
    }
    echo '</tr>';
  }
  echo '</table>';

  //	print_r($spreadData);

}
session_destroy();
