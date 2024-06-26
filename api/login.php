<?php  
include_once "../include/connect.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];

// echo $acc;
// echo $pw;


$sql="SELECT * FROM users WHERE `acc`='{$acc}' && `pw`='{$pw}'";
// $sql="SELECT count(*) FROM users WHERE `acc`='{$acc}' && `pw`='{$pw}'";

$users=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// $users=$pdo->query($sql)->fetchColumn(0);
// dd($users);
// exit();

if($users['acc']==$acc && $users['pw']==$pw){
    $_SESSION['users']=$acc;
    header("location:../index.php");
}else{
    header('location:../login_form.php?error=帳號或密碼錯誤');
}
?>