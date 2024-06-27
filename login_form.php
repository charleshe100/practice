<?php include_once "./include/connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php include_once "./include/navbar.php";?>
   <div class="container mt-5">
      <h2 class="text-center">會員登入</h2>
        <form action="./api/login.php" method="post" class="col-4 m-auto">
            <?php
                if(isset($_SESSION['error'])){
                    echo "<h3 class='text-danger text-center'>";
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    echo "</h3>";
                }
                if(isset($_SESSION['reg'])){
                    echo "<h3 class='text-success text-center'>";
                    echo $_SESSION['reg'];
                    unset($_SESSION['reg']);
                    echo "</h3>";
                }
            ?>
            <div class="input-group my-2">
            <label class="col-4  input-group-text">帳號：</label>
                <input class="form-control"  type="text" name="acc" id="acc">
            </div>
            <div class="input-group my-2">
                <label class="col-4  input-group-text">密碼：</label>
                <input class="form-control" type="password" name="pw" id="pw">
            </div>
            <div class="text-center mt-2">
                <input type="submit" value="送出" class="btn btn-primary mx-2">
                <input type="reset" value="重置" class="btn btn-warning mx-2">
            </div>
        </form>
    </div>
   </div> 
</body>
</html>