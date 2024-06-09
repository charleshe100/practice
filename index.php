<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Students Score</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// $dsn="mysql:host=localhost;charset=utf8;dbname=school";
// $pdo=new PDO($dsn,'root','',[]);

// $sql="select count(*) from `students` where `students`.`graduate_at`=1";
// $sql="select * from `students`";
// $rows=$pdo->query($sql)->fetchAll(); //全部資料
// $source=$pdo->query($sql);
// $rows=$source->fetch(); //第一筆資料
// $rows=$source->fetch(); //第二筆資料
// $rows=$source->fetch(); //第三筆資料

// $sql="select count(*) from `dept` where `code`='801' && `name`='會計科'";
// $rows=$pdo->query($sql)->fetchAll();
// $sql="insert into `dept`(`code`,`name`)values('901','幼保科')";
// $pdo->query($sql);

// try {
    // $sql = "INSERT INTO `dept` (`code`, `name`) VALUES ('705', '板金科')";
    // $pdo->query($sql);
    // echo "資料已成功插入";
// } catch (PDOException $e) {
    // echo "資料插入失敗: " . $e->getMessage();
// }

function dd($rows){
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
}

// 1. 撈出某班的學生成績
// 2. 按照成績由高到低排序
// 3. 增加一個欄位：名次

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','',[]);
$sql="SELECT `A`.`name` as `姓名`,`B`.`score` as `分數`, ROW_NUMBER() OVER (ORDER BY `B`.`score` DESC) AS `名次`
FROM 
    (SELECT  `students`.`name`,`class_student`.`school_num` 
     FROM `students` 
     INNER JOIN `class_student` 
     ON `students`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101')A, 
    (SELECT `class_student`.`school_num`, `student_scores`.`score` 
     FROM `student_scores` 
     INNER JOIN `class_student` 
     ON `student_scores`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101')B 
WHERE `A`.`school_num`=`B`.`school_num` 
ORDER BY `B`.`score` DESC";
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// dd($rows);

if (!empty($rows)) {
    echo "<div class='contaioner w-25 mx-auto my-3 text-center'>";
    echo "<table class='table table-bordered table-primary table-striped table-hover'>
            <tr>
                <th>姓名</th>
                <th>分數</th>
                <th>名次</th>
            </tr>";
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>" . $row['姓名'] . "</td>";
        echo "<td>" . $row['分數'] . "</td>";
        echo "<td>" . $row['名次'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</div>
</body>
</html>