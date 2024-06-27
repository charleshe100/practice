<?php
include_once "../include/connect.php";
$user=$_GET['id'];
$sql="DELETE FROM `users` WHERE id='{$user}'";
$res=$pdo->exec($sql);
unset($_SESSION['user']);
if($res>0){
    $_SESSION['del']="帳號已刪除，請重新註冊";
};
header("location:../reg.php");
?>