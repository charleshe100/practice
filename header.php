<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="container-fluid">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">首頁</a>
    </li>
    <?php
    if(!isset($_SESSION['login'])){        
    ?>
    <li class="nav-item">
      <a class="nav-link" href="login.php">登入</a>
    </li>
    <?php
    }else{
    ?>       
    <li class="nav-item">
      <a class="nav-link" href="member.php">會員中心</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">登出</a>
    </li> 
    <?php
    }
    ?>
  </ul>
</div>
</nav>
</header>