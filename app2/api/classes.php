<?php
include_once "db.php";
// $classes=$Classes->all();
// $options="";
// foreach($classes as $class){
//     $options.="<option value='{$class['id']}'>{$class['name']}</option>";
// };

$classes=$Classes->all();
$options='';
$studentClass='';
if(isset($_GET['id'])){
    $studentClass=$ClassStudent->q("SELECT `classes`.`id`,`classes`.`code`,`classes`.`name` FROM `class_student` INNER JOIN `classes` ON `class_student`.`class_code`=`classes`.`code` WHERE `class_student`.`id`='{$_GET['id']}'"); 
    $studentClass=$studentClass['0']['id'];
};
foreach($classes as $class){
    $selected = (isset($studentClass) && $class['id'] == $studentClass) ? "selected" : "";
    $options.="<option value='{$class['id']}' {$selected}>{$class['name']}</option>";    
};
echo $options;
?>