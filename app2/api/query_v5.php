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
        // 這裡的=>是"等於"的意思
        // sql語法相當於是
        // SELECT * FROM `class_student` WHERE `class_code` = $_GET['value'];
        // 先篩選出同班級的學生，如果$_GET['value']是101,，就是101班
        $stnums=$ClassStudent->all(['class_code'=>$_GET['value']]);
        $nums=[];
        foreach($stnums as $st){
            // 找出student資料表裡，跟class_code相同學號的學生資料
            $s=$Student->find(['school_num'=>$st['school_num']]);
            if(!empty($s)){
                //把找出來的學生id放進$nums[]空陣列裡
                $nums[]=$s['id'];
            }
        }
        //將找出來的學生id之間，用,隔開
        $in=join(',',$nums);
        //從student資料表，依id找出學生資料中的四筆資料
        $users=$Student->q("SELECT `name`, `uni_id`, `school_num`, `birthday` FROM `students` WHERE `id` in($in)");
        echo json_encode($users); 
    break; 
    case 'classes':
        header('Content-Type:application/json; charset=utf-8');
        echo json_encode($Classes->q("SELECT `code`, `name` FROM `classes`"));       
    break;      
}


?>