<?php
include_once "db.php";
//處理刪除資料的請求
if(isset($_POST['id'])){
    $Student->del($_POST['id']);
}
?>