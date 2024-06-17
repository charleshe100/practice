<?php
include_once "db.php";
$depts=$Dept->all();
$options="";
foreach($depts as $dept){
    $options.="<option value='{$dept['id']}'>{$dept['name']}</option>";
};
echo $options;

?>