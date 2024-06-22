<?php
include_once "db.php";
$statuses=$Status->all();
$options="";
foreach($statuses as $status){
    $options.="<option value='{$status['id']}'>{$status['status']}</option>";
};

$statuses=$Status->all();
$options='';
$studentStatus='';
if(isset($_GET['id'])){
    $studentStatus=$Student->q("SELECT `status`.`id`,`status`.`code`,`status`.`status` FROM `students` INNER JOIN `status` ON `students`.`status_code`=`status`.`code` WHERE `students`.`id`='{$_GET['id']}'"); 
    $studentStatus=$studentStatus['0']['id'];
};
foreach($statuses as $status){
    $selected = (isset($studentStatus) && $status['id'] == $studentStatus) ? "selected" : "";
    $options.="<option value='{$status['id']}'>{$status['status']}</option>";
};

echo $options;

?>