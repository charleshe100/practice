<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Member</title>
    <style>
        a{
            text-decoration:none; 
        }
    </style>
</head>
<body>
<?php
if(isset($_GET['login'])){
    if($_GET['login']==1){
        echo "<h1 class='mt-5 text-center text-primary'>恭喜您登入成功！</h1>";
    }
}
?>
<a href="index.php?login"><h2 class='mt-3 text-center text-secondary'>回到登入頁面</h2></a>
</body>
</html>