<?php
include_once "db.php";
//處理查詢資料的請求
switch($_GET['do']){
    case "all":
        // json_encode()把query的結果轉成json的字串格式，丟到前端去
        // 因為使用了物件導向，就不用$pdo的方式
        // echo json_encode(($pdo->query('select * from `students`')->fetchALL(PDO::FETCH_ASSOC)));
        //直接在這裡用header以下的語法，丟到前端的就是JS可直接拿來用的json
        header('Content-Type:application/json; charset=utf-8');
        //echo 就會把這些JSON數據回傳給前端
        echo json_encode($Student->all());
    break;
    case 'sex';
        header('Content-Type:application/json; charset=utf-8');
        echo json_encode($Student->q("SELECT `name`, `uni_id`, `school_num`, `birthday` FROM `students` WHERE substr(uni_id, 2, 1) = '{$_GET['value']}';"));
    break;
    case 'class':
        header('Content-Type:application/json; charset=utf-8');
        echo json_encode($Student->q("SELECT `name`, `uni_id`, `students`.`school_num`, `birthday` FROM `students` INNER JOIN `class_student` ON `students`.`school_num`=`class_student`.`school_num` WHERE `class_student`.`class_code` = '{$_GET['value']}';")); 
    break; 
    case 'classes':
        $classes=$Classes->q("SELECT `code`, `name` FROM `classes`");
        foreach($classes as $class){
            echo "<button data-type='class' class='classbtn btn btn-success mx-2 my-2' onclick='query(&#39;class&#39;,&#39;{$class['code']}&#39;)'>{$class['name']}</button>";
        };
    break;      
}


?>