<?php 
session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['usuario'])) {
    header('Location:index.php');
    die();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $usuario = filter_var(strtolower($_GET['usuario']), FILTER_SANITIZE_STRING);
    $password = $_GET['password'];
    $conexion = mysqli_connect('localhost','root', 'mysql123','local_pantera');
        $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$password'";
if ($resultado = $conexion->query($sql)) {
            if ($fila = $resultado->fetch_array()) {
                $_SESSION['usuario']= $usuario;
                header('Location:index.php');
            }else{
                $errores= '<li> Datos incorrectos </li>';
            }
        }
    }
    require 'login.v.php';

    ?>