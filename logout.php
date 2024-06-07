<?php
date_default_timezone_set("Asia/Taipei");
setcookie("login","$acc",time()-60);
header("location:index.php");
?>