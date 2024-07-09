<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nine</title>
</head>
<style>
    table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
        margin: auto;
        margin-top: 100px;
    }
</style>
<body>
<table>
<?php    
for($row=1;$row<=9;$row++){
    echo "<tr>"; 
    for($col=1;$col<=9;$col++){
        echo "<td>"; 
        echo $row."x".$col."=".$row*$col;
        echo "</td>";
    }
    if($col==9){
        echo "</tr>"; 
    }     
}
?>
</table>
</body>
</html>