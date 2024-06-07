<?php
date_default_timezone_set("Asia/Taipei");
$acc=$_POST['acc'];
$pw=$_POST['pw'];
if (!empty($acc) && !empty($pw)) {
    if($acc=="admin" && $pw==1234){
        setcookie("login","$acc",time()+60);
        header("location:member.php");
    }else{
        setcookie("error2","帳號或密碼錯誤，請重新填寫",time()+1);
        // time()+1 是因為如果只有time()，就會產生後就馬上失效，所以給它1秒的時間顯示;
        header("location:index.php");
    }
}else{
    setcookie("error1","兩個欄位都需填寫，請重新填寫",time()+1);
    header("location:index.php");
}
?>