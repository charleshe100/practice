<?php
include_once "db.php";
$depts=$Dept->all();
$options='';
$studentDept='';
if(isset($_GET['id'])){
    $studentDept=$Student->find($_GET['id']); 
};
foreach($depts as $dept){
    $selected = (!empty($studentDept) && $dept['id'] == $studentDept['dept']) ? "selected" : "";
    $options.="<option value='{$dept['id']}' {$selected}>{$dept['name']}</option>";    
};

echo $options;
?>