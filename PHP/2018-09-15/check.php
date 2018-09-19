<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_14";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = 'SELECT * FROM users 
    WHERE email= ' . '"' .$_POST["email"]. '"'. ' AND password ='. '"'. $_POST["password"]. '";'  ;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo 'dang nhap thanh cong';
} else echo 'tai khoan khong ton tai';






// include'./0-index.php';
// echo $_POST['email'];
// echo $_post['password'];
// $email =$_post['email'];
// $password=$_post['password'];
