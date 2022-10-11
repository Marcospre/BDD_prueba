
<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

$existe = false;

$mysqli = new mysqli("localhost", "root", "", "test");

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT * FROM login");

while($row = $resultado->fetch_assoc()){
    if($user==$row['usuario'] && $pass==$row['contrasenia']){
        $existe = true;
        break;
    }
}

if($existe){
     echo "user y pass correctos";
    session_start();
    $_SESSION['user']=$user;
    header("Location: dashboard.php");
}else{
    header("Location: loginform.php");
}

$mysqli->close();

?>
