<?php  
include_once "../include/connect.php";

$acc=htmlspecialchars(trim($_POST['acc'])); 
$pw=htmlspecialchars(trim($_POST['pw']));

// $sql="SELECT * FROM users WHERE `acc`='{$acc}' && `pw`='{$pw}'";
$sql="SELECT count(*) FROM users WHERE `acc`='{$acc}' && `pw`='{$pw}'";

// $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// 會直接拿到那個值，如果fetchColumn()沒寫索引值，就是0
// 值如果是1，就表示有這筆資料；0，就表示沒有這些資料
$user=$pdo->query($sql)->fetchColumn();

// 因為已經在資料庫比對過資料，所以才撈得到資料，
// 所以若再判斷一次($users['acc']==$acc && $users['pw']==$pw)，就顯得多此一舉
// if($users['acc']==$acc && $users['pw']==$pw){
// 判斷式裡如果直接是1，就表示true，所以 if($user==1) 可以直接寫成 if($user)
// 但還是要看所用的程式語言的定義
if($user){
    $_SESSION['user']=$acc;
    header("location:../member.php");
}else{
    $_SESSION['error']="帳號或密碼錯誤";
    header("location:../login_form.php");
}
?>