<?php
include_once "db.php";
//處理新增資料的請求
// dd($_POST);
$Student->save($_POST);
to("../index.html");
?>