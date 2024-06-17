<?php
include_once "db.php";
$graduateSchools=$GraduateSchool->all();

// 可分成兩個select，但正常來說，縣市與國中是一組的，不會分開選，若分開選，反而麻煩
// $options1="";
// $options2="";
// foreach($graduateSchools as $graduateSchool){
//     $options1.="
//           <option value='{$graduateSchool['id']}'>{$graduateSchool['county']}</option>
//         </select>";
// };
// foreach($graduateSchools as $graduateSchool){
//     $options2.="<option value='{$graduateSchool['id']}'>{$graduateSchool['name']}</option>";
// };
// echo $options1 . "," . $options2;

$options="";
foreach($graduateSchools as $graduateSchool){
    $options.="
          <option value='{$graduateSchool['id']}'>{$graduateSchool['county']} {$graduateSchool['name']}</option>
        </select>";
};

echo $options;

?>