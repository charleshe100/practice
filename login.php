<?php include_once "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- 建立一個可以輸入帳號和密碼的表單畫面 -->
    <!-- 建立form表單 -->
    <!-- 建立 acc與pw的input -->
<!-- 輸入帳號密碼，按下"登入"按鈕後，在另一個頁面顯示帳號密碼是否正確。 -->
    <!-- 建立登入的submit按鈕 -->
    <!-- 到check.php確認帳號密碼是否正確 -->
    <!-- 如果正確，有什麼動作；如果不正確，有什麼動作 -->
<?php include_once("header.php"); 

if(isset($_SESSION['error1'])){     
    echo "<h1 class='mt-5 text-center text-danger'>".$_SESSION['error1']."</h1>";
    unset($_SESSION['error1']);
}else if(isset($_SESSION['error2'])){
    echo "<h1 class='mt-5 text-center text-danger'>".$_SESSION['error2']."</h1>";
    unset($_SESSION['error2']);
}else if(isset($_SESSION['error3'])){
    echo "<h1 class='mt-5 text-center text-danger'>".$_SESSION['error3']."</h1>";
    unset($_SESSION['error3']);
}
if(!isset($_SESSION['login'])){ 
?>
<div class="container mt-5 mx-auto>
    <div class="row">
        <div class="col">
        <form action="check.php" method="post">
            <div class="mt-2 mx-auto text-center">
                <label for="acc">帳號：</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="mt-2 mx-auto text-center">
                <label for="pw">密碼：</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div class="mt-2 mx-auto text-center">
                <input type="submit" value="登入" class="btn btn-primary">
                <input type="reset" value="重置" class="btn btn-secondary">
            </div>
        </form>
        </div>
    </div>
</div>
<?PHP
}
?>

</body>
</html>