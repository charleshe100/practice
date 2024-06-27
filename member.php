<?php include_once "./include/connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
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
    <h2 class="text-center">會員中心</h2>
<?php
$sql="SELECT * FROM `users` WHERE `acc`='{$_SESSION['user']}'";
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if(isset($_SESSION['msg'])){
    echo "<div class='alert alert-warning fs-3'>";
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    echo "</div>";
};
?>
    <form action="./api/update.php" method="post" class="col-4 m-auto">
        <div class="input-group my-2">
            <label class="col-4 input-group-text">帳號：</label>
            <input class="form-control"  type="text" name="acc" id="acc" value="<?=$user['acc'];?>" readonly>
        </div>
        <div class="input-group my-2">
            <label class="col-4 input-group-text">密碼：</label>
            <input class="form-control" type="password" name="pw" id="pw" value="<?=$user['pw'];?>">
        </div>
        <div class="input-group my-2">
            <label class="col-4 input-group-text">姓名：</label>
            <input class="form-control" type="text" name="name" id="name" value="<?=$user['name'];?>">
        </div>
        <div class="input-group my-2">
            <label class="col-4 input-group-text">電子郵件：</label>
            <input class="form-control" type="text" name="email" id="email" value="<?=$user['email'];?>">
        </div>
        <div class="input-group my-2">
            <label class="col-4 input-group-text">居住地：</label>
            <input class="form-control" type="text" name="address" id="address" value="<?=$user['address'];?>">
        </div>
        <div class="text-center mt-2">
            <input class="btn btn-primary mx-2" type="submit" value="更新">
            <input class="btn btn-warning mx-2" type="reset" value="重置">
            <input class="btn btn-secondary mx-2" id="delBtn" type="button" value="永久刪除帳號">
        </div>    
    </form>
</div>
</div>

<script>
const delBtn = document.getElementById('delBtn');
delBtn.addEventListener('click', function() {
    let result=confirm('你確定要刪除嗎？');
    if(result){
        location.href='./api/delete.php?id=<?=$user['id'];?>';
    }
});

</script>
</body>
</html>