<?php
include_once "db.php";
//處理刪除資料的請求
// if(isset($_POST['id'])){
//     echo ($_POST['id']);
// }else{
//     echo "找不到id！";
// };
// exit();
if(isset($_POST['id'])){
    //這個 $schoolnum 出來的結果是個陣列，即使只有一個值，也是陣列
    $schoolnum=$Student->q("SELECT `student_scores`.`school_num` FROM `students` INNER JOIN `student_scores` ON `students`.`school_num` = `student_scores`.`school_num` WHERE `students`.`id`='{$_POST['id']}'");

    if(!empty($schoolnum)){
        // 將 $schoolnum 重新定義為一個值，
        // 因為是二維陣列，所以先取第一維的 [0]，再取第二維的 ['school_num']
        $schoolnum=$schoolnum[0]['school_num'];
        $StudentScores->q("DELETE FROM `student_scores` WHERE `school_num`='{$schoolnum}'");
    }

    $Student->del($_POST['id']);
    $ClassStudent->del($_POST['id']);
}
?>