<?php
include_once "session.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];
if (!empty($acc) && !empty($pw)) {
    if($acc=="admin" && $pw==1234){
        $_SESSION['login']=$acc;
        // unset($_SESSION['error1']);
        // unset($_SESSION['error2']);
        header("location:member.php");
    }else{
        $_SESSION['error2']="帳號或密碼錯誤，請重新填寫";
        header("location:login.php");
    }
}else{
    $_SESSION['error1']="兩個欄位都需填寫，請重新填寫";
    header("location:login.php");
}
?>