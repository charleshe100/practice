<?php
$acc=$_POST['acc'];
$pw=$_POST['pw'];
if (!empty($acc) && !empty($pw)) {
    if($acc=="admin" && $pw==1234){
        header("location:member.php?login=1");
    }else{
        header("location:index.php?error=2");
    }
}else{
    header("location:index.php?error=1");
}
?>