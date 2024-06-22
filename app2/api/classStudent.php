<?php
include_once "db.php";
$classStudents=$ClassStudent->all($other='GROUP BY `seat_num`');
$options="";
foreach($classStudents as $classStudent){
    $options.="<option value='{$classStudent['id']}'>{$classStudent['seat_num']}</option>";
};

// $classStudents=$ClassStudent->all($other='GROUP BY `seat_num`');
// $options='';
// $studentSeat='';
// if(isset($_GET['id'])){
//     $studentSeat=$ClassStudent->q("SELECT * FROM `class_student` WHERE `id`='{$_GET['id']}'"); 
//     $studentSeat=$studentSeat['0']['seat_num'];
// };
// foreach($classStudents as $classStudent){
//     $selected = (isset($studentSeat) && $classStudent['seat_num'] == $studentSeat) ? "selected" : "";
//     $options.="<option value='{$classStudent['id']}'>{$classStudent['seat_num']}</option>";   
// };
dd($classStudent);


echo $options;

?>