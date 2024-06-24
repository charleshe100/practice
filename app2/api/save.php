<?php
include_once "db.php";
//處理新增與更新資料的請求
$data = [
    'school_num' => $_POST['school_num'],
    'name' => $_POST['name'],
    'birthday' => $_POST['birthday'],
    'uni_id' => $_POST['uni_id'],
    'addr' => $_POST['addr'],
    'parents' => $_POST['parents'],
    'tel' => $_POST['tel'],
    'dept' => $_POST['dept'],
    'graduate_at' => $_POST['graduate_at'],
    'status_code' => str_pad($_POST['status_code'],3,'0',STR_PAD_LEFT)    
];

$dataCS = [
    'school_num' => $_POST['school_num'],
    'class_code' => str_pad(str_pad($_POST['class_code'],2,'0',STR_PAD_LEFT),3,'1',STR_PAD_LEFT),
    'seat_num' => $_POST['seat_num'],
    'year' => $_POST['year'],
];

$dataSS = [
    'school_num' => $_POST['school_num'],
    'score' => $_POST['score'],
];

$Student->save($data);
$ClassStudent->save($dataCS);
$StudentScores->save($dataSS);

to("../index.html");
?>