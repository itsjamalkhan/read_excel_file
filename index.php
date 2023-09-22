<?php

require 'Excel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load("test_data.xlsx");
// $d=$spreadsheet->getSheet(0)->toArray();

// echo count($d);

$sheetData = $spreadsheet->getActiveSheet()->toArray();

$i=1;

unset($sheetData[0]);
$arr=array();
foreach ($sheetData as $t) {
 // process element here;
// access column by index
	//echo $i."---".$t[0].",".$t[1]." <br>";
    $arr[]=array(
        'name'=>$t[0],
        'age'=>$t[1],
        'gender'=>$t[2],
        'marital'=>$t[3],
        'kids'=>$t[4],
        'weight'=>$t[5],
        'height'=>$t[6],
        'hobbies'=>$t[7],
        'city'=>$t[8],
        'ethnicity'=>$t[9],
        'nationality'=>$t[10],
        'language'=>$t[11],
        'education'=>str_replace(array("’","'"),"",$t[12]),
        'working'=>$t[13],
        'religion'=>$t[14],
        'disabilities'=>$t[15]
    );
	$i++;
}
echo "<pre>";print_r(json_encode($arr));exit();

// foreach ($sheetData as $t) {

//     $arr[]='("'.$t[1].'","'.$t[0].'",3804)';
// }
// $sql='INSERT INTO `cities`(`city_name`,`city_name_ar`,`state_id`) VALUES '.implode(",",$arr);
// echo $sql;

?>