<?php
include_once "db.php";
$graduateSchools=$GraduateSchool->all();
$options='';
$studentGS='';
if(isset($_GET['id'])){
    $studentGS=$Student->find($_GET['id']); 
};
foreach($graduateSchools as $graduateSchool){
    $selected = (!empty($studentGS) && $graduateSchool['id'] == $studentGS['id']) ? "selected" : "";
    $options.="<option value='{$graduateSchool['id']}' {$selected}>{$graduateSchool['name']}</option>";    
};

echo $options;

?>