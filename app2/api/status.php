<?php
include_once "db.php";
$statuses=$Status->all();
$options="";
foreach($statuses as $status){
    $options.="<option value='{$status['id']}'>{$status['status']}</option>";
};
echo $options;

?>