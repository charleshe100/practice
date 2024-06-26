<?php
session_start();
unset($_SESSION['users']);
header("location:../login_form.php");
?>
<a href="../login_form.php"></a>