<?php
include_once "../include/connect.php";
$acc=$_SESSION['user']; 
$pw=htmlspecialchars(trim($_POST['pw']));
$name=htmlspecialchars(trim($_POST['name']));
$email=htmlspecialchars(trim($_POST['email']));
$address=htmlspecialchars(trim($_POST['address']));

$sql="UPDATE `users` SET `pw`='{$pw}',`name`='{$name}',`email`='{$email}',`address`='{$address}' WHERE `acc`='{$acc}'";

$res=$pdo->exec($sql);

if($res>0){
    $_SESSION['msg']="資料更新成功";
}else{
    $_SESSION['msg']="資料無異動";   
}; 

header("location:../member.php");
?>