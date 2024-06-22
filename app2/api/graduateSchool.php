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

// $options="";
// foreach($graduateSchools as $graduateSchool){
//     $options.="
//           <option value='{$graduateSchool['id']}'>{$graduateSchool['county']} {$graduateSchool['name']}</option>
//         </select>";
// };

$options='';
$studentGS='';
if(isset($_GET['id'])){
    $studentGS=$Student->q("SELECT `graduate_school`.`id`,`graduate_school`.`county`,`graduate_school`.`name` FROM `students` INNER JOIN `graduate_school` ON `students`.`graduate_at`=`graduate_school`.`id` WHERE `students`.`id`='{$_GET['id']}'"); 
    $studentGS=$studentGS['0']['id'];
};
foreach($graduateSchools as $graduateSchool){
    $selected = (isset($studentGS) && $graduateSchool['id'] == $studentGS) ? "selected" : "";
    $options.="<option value='{$graduateSchool['id']}' {$selected}>{$graduateSchool['name']}</option>";    
};

echo $options;

?>