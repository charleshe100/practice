<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        <?php
        if(!isset($_SESSION['user'])){
          echo "<a class='nav-link' href='../reg.php'>會員註冊</a>";
          echo "<a class='nav-link' href='../login_form.php'>會員登入</a>";
        }else{
          echo "<a class='nav-link' href='../member.php'>會員中心</a>";
          echo "<a class='nav-link' href='../api/logout.php'>會員登出</a>";
        };
        ?>    
      </div>
    </div>
  </div>
</nav>