<?php
include_once "db.php";
$classes=$Classes->all();
$options="";
foreach($classes as $class){
    $options.="<option value='{$class['id']}'>{$class['name']}</option>";
};
echo $options;

?>