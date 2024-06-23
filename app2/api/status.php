<?php
include_once "db.php";
// $statuses=$Status->all();
// $options="";
// foreach($statuses as $status){
//     $options.="<option value='{$status['id']}'>{$status['status']}</option>";
// };

$statuses=$Status->all();
$options='';
$studentStatusCode='';
if(isset($_GET['id'])){
    $studentStatus=$Student->q("SELECT `status_code` FROM `students` WHERE `id`='{$_GET['id']}'"); 
    $studentStatusCode=$studentStatus[0]['status_code'];
};
foreach($statuses as $status){
    $selected = (isset($studentStatusCode) && $status['code'] == $studentStatusCode) ? "selected" : "";
    $options.="<option value='{$status['code']}' $selected>{$status['status']}</option>";
};

echo $options;
?>