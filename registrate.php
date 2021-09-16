<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('Location:index.php');
}
if ($_SERVER['REQUEST_METHOD']=='GET') {
	$usuario = strtolower($_GET['usuario']);
	$password = $_GET['password'];
	$password2 = $_GET['password2'];
	//echo "$usuario .  $password . $password2";
	$errores='';
	if ( empty($usuario) or empty($password) or empty($password2)) {
		$errores = "<li> Por favor rellena los campos </li>";
	}else{
		$conexion = mysqli_connect('localhost','root', 'mysql123', 'local_pantera' );
		$sql = "SELECT * FROM  usuario where usuario='$usuario'";
		if($resultado = $conexion->query($sql)){
			while ($fila = $resultado->fetch_array()) {
				$errores = '<li> El usuario ya existe </li>';
			}
		}
		if($password != $password2){
			$errores ='<li> Las contraseñas no son iguales</li>';
		}
	/*	$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		echo "$usuario .  $password . $password2";*/
		
	}
	if($errores==''){
		$sql = "INSERT INTO usuario (id, usuario, contraseña) VALUES (NULL, '$usuario','$password');";
		$resultado = mysqli_query($conexion, $sql);
		//Redireccionamiento a otra pagina
		header('Location:login.v.php');
	}
}
require 'resgistrate.v.php';

?>
