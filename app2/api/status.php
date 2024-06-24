<?php
include_once "db.php";
$statuses=$Status->all();
$options='';
$studentStatus='';
if(isset($_GET['id'])){
    $studentStatus=$Student->find($_GET['id']); 
};
foreach($statuses as $status){
    $selected = (!empty($studentStatus) && $status['code'] == $studentStatus['status_code']) ? "selected" : "";
    $options.="<option value='{$status['code']}' $selected>{$status['status']}</option>";
};

echo $options;
?>