<?php
include_once "db.php";
$classStudents=$ClassStudent->all();
$options="";
$studentSeat="";
if(isset($_GET['id'])){
    $studentSeat=$Student->find($_GET['id']);
};
foreach($classStudents as $classStudent){
    $selected = ($classStudent['id'] == $studentSeat['id']) ? "selected" : "";
    $options.="<option value='{$classStudent['id']}' {$selected}>{$classStudent['seat_num']}</option>";
};

echo $options;
?>