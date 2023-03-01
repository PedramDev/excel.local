<?php

namespace EXCEL_TABLE;

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

function IMEI_ReadExcelFile($xlsxPath){
    
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $spreadsheet = $reader->load($xlsxPath);
    
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    
    $i=1;
    
    // unset($sheetData[0]);
    // \Logger\Log('XML reader');
    $data_array = array();
    
    foreach ($sheetData as $row) {

        // process element here;
        // access column by index
	    $col1 = $row[0];
	    $col2 = $row[1];
	    $col3 = $row[2];
	    $col4 = $row[3];
	    $col5 = $row[4];
	    $col6 = $row[5];
	    $col7 = $row[6];

        // \Logger\Log('imei1 :' . $imei1);
        // \Logger\Log('imei2 :' . $imei2);
        // \Logger\Log('secret :' . $secret);
        
        array_push($data_array,[
	        'col1'=> $col1 ,
	        'col2'=> $col2 ,
	        'col3'=> $col3 ,
	        'col4'=> $col4 ,
	        'col5'=> $col5 ,
	        'col6'=> $col6 ,
	        'col7'=> $col7
        ]);
        
        $i++;
    }

    return $data_array;
}
    
?>