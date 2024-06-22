<?php
include_once "db.php";
$depts=$Dept->all();
$options='';
$studentDept='';
if(isset($_GET['id'])){
    $studentDept=$Student->q("SELECT `dept`.`id`,`dept`.`code`,`dept`.`name` FROM `students` INNER JOIN `dept` ON `students`.`dept`=`dept`.`id` WHERE `students`.`id`='{$_GET['id']}'"); 
    $studentDept=$studentDept['0']['id'];
};
foreach($depts as $dept){
    $selected = (isset($studentDept) && $dept['id'] == $studentDept) ? "selected" : "";
    $options.="<option value='{$dept['id']}' {$selected}>{$dept['name']}</option>";    
};

// 原本只會出現一個選項的程式碼
// 最後就只有定義了一個$options，所以會覆蓋掉剛才foreach產生的所有$options，而造成只剩下一個選項的現象
// if(isset($_GET['id'])){
//     $studentDept=$Student->q("SELECT dept.id,dept.code,dept.name FROM students INNER JOIN dept ON students.dept=dept.id WHERE students.id='{$_GET['id']}'"); 
//     $studentDeptId=$studentDept['0']['id'];
//     $studentDeptName=$studentDept['0']['name'];
// };
// foreach($depts as $dept){
//     $options.="<option value='{$dept['id']}'>{$dept['name']}</option>";    
// };

// if(isset($_GET['id'])){
// $options="<option value='{$studentDeptId}' selected>{$studentDeptName}</option>";
// };

echo $options;
?>