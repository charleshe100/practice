<?php
include_once "db.php";
$input=$_GET['input'];

$res=$Student->q("SELECT `id`, `name` FROM `students` WHERE `name` LIKE '%$input%' LIMIT 6");
foreach($res as $r){
    echo "<div class='m-1 p-1 border-bottom' data-id='{$r['id']}'>";
    echo $r['name'];
    echo "</div>";
}
?>