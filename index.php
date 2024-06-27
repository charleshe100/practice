<?php include_once "./include/connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超好買商城</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    a{
        text-decoration: none;
    }
</style>
<body >
<?php include_once "./include/navbar.php";?>
<div class="container text-center mt-5">
<?php 
    if(isset($_SESSION['user'])){
        echo "<h1>".$_SESSION['user']."歡迎來到首頁！</h1>";
    }else{
        echo "<h1>首頁</h1>";
    };
?>
</div>


</body>
</html>