<?php
include_once "../include/connect.php";

//每一筆都要做檢查
$acc=htmlspecialchars(trim($_POST['acc'])); 
$pw=htmlspecialchars(trim($_POST['pw']));
$name=htmlspecialchars(trim($_POST['name']));
$email=htmlspecialchars(trim($_POST['email']));
$address=htmlspecialchars(trim($_POST['address']));

$sql="INSERT INTO `users`(`acc`,`pw`,`name`,`email`,`address`)
      VALUES('{$acc}','{$pw}','{$name}','{$email}','{$address}')";
// echo $sql;
// exit();
$res=$pdo->exec($sql);
if($res>0){
      $_SESSION['reg']="註冊成功，請輸入帳號密碼登入";
}
header("location:../login_form.php");
?>