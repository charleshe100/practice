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
        if($_GET['value']==1){
            echo json_encode($Student->q("SELECT * FROM students WHERE SUBSTRING(uni_id, 2, 1) = '1';"));
        }else if($_GET['value']==2){
            echo json_encode($Student->q("SELECT * FROM students WHERE SUBSTRING(uni_id, 2, 1) = '2';"));
        };
    break;
    case 'class':
        header('Content-Type:application/json; charset=utf-8');
        if($_GET['value']==101){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '101';"));
        }else if($_GET['value']==102){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '102';"));
        }else if($_GET['value']==103){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '103';"));
        }else if($_GET['value']==104){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '104';"));
        }else if($_GET['value']==105){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '105';"));
        }else if($_GET['value']==106){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '106';"));
        }else if($_GET['value']==107){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '107';"));
        }else if($_GET['value']==108){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '108';"));
        }else if($_GET['value']==109){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '109';"));
        }else if($_GET['value']==110){
            echo json_encode($Student->q("SELECT * FROM students,class_student WHERE students.school_num=class_student.school_num AND class_student.class_code = '110';"));
        };
    break;
}


?>