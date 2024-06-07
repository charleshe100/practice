<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once("header.php"); 

if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
    echo "<h1 class='mt-5 text-center text-primary'>".$_SESSION['login']."您好，目前所在為會員中心</h1>";
}else{
    $_SESSION['error3']="沒有登入相關驗證，非法登入";
    header("location:login.php");
}
?>
</body>
</html>