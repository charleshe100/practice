<?php 
session_start();
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>