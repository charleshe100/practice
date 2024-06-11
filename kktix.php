<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XMLHttpRequest</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="header">XMLHttpRequest</h1>
<?php
$json=file_get_contents("kktix.json"); //用來讀取一個文件的內容並將其作為字符串返回
$kktix=json_decode($json); //用來將 JSON 格式的字符串轉換為 PHP 的資料結構（物件）
echo "<h4 class='title'>".$kktix->title."</h4>"; // -> 存取物件屬性
echo "<div class='updated'>".$kktix->updated."</div>";
echo "<ul class='list-group'>";
foreach($kktix->entry as $event){
    echo "<li class='list-group-item list-group-item-action'>";
    echo "<div>".$event->title."</div>";
    echo "<div>".$event->summary."</div>";
    echo "<div>".$event->content."</div>";
    echo "</li>";
}
echo "</ul>";

// 若是要轉為陣列，而非物件，則
// $kktix = json_decode($json, true); //第二個參數加上 true，就會變成陣列
// echo "<h4 class='title'>" . $kktix['title'] . "</h4>";
// echo "<div class='updated'>" . $kktix['updated'] . "</div>";

// echo "<ul class='list-group'>";
// foreach ($kktix['entry'] as $event) {
//     echo "<li class='list-group-item list-group-item-action'>";
//     echo "<div>" . $event['title'] . "</div>";
//     echo "<div>" . $event['summary'] . "</div>";
//     echo "<div>" . $event['content'] . "</div>";
//     echo "</li>";
// }
// echo "</ul>";
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>    
</body>
</html>