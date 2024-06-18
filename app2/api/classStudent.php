<?php
include_once "db.php";
$classStudents=$ClassStudent->all($other='GROUP BY `seat_num`');
$options="";
foreach($classStudents as $classStudent){
    $options.="<option value='{$classStudent['id']}'>{$classStudent['seat_num']}</option>";
};
echo $options;

?>