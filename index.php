<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
    <style>
    *{
        font-family: 'Courier New', Courier, monospace;
        line-height: 10px;              
    }
</style>
</head>
<body>
<?php
// 正直角三角形   
$amount=10; 
for($i=1;$i<=$amount;$i++){
    for($j=1;$j<=$i;$j++){
    echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>