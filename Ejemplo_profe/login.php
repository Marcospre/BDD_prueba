
<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

$mysqli = new mysqli("localhost", "root", "", "test");

if($user=="plaiaundi" && $pass=="1234"){
    echo "user y pass correctos";
    session_start();
    $_SESSION['user']=$user;
    header("Location: dashboard.php");
}else{
    header("Location: loginform.php");
}