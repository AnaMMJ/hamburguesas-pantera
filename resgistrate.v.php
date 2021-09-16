<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/estilos.css">
			<link rel = "preconnect" href = "https://fonts.googleapis.com">
			<link rel="stylesheet" type="text/css" href="./style.css">
	<!-- Bootstrap CSS -->
    	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   		 <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Teko:wght@500&display=swap" rel="stylesheet">
   		 <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
   		 <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
			<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
			<link href = "https: //fonts.googleapis.com/css2? family = Roboto: ital, wght @ 1300 & display = swap "rel =" stylesheet ">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<title>INICIAR SESION</title>
	<title>REGISTRO</title>
</head>
<body>
	<section class="main">
	<div class="contenedor">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">
		<form method="get" name="login" class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario" >
			</div>
			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
			</div>
			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder=" Repetir Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			<?php
			if (!empty($errores)): ?>
				<div class="error">
				<ul>
					<?php echo $errores; ?>
				</ul>
				</div>
			<?php endif; ?>
		</form>
		<p class="texto-registrate">
			¿Ya tienes cuenta?
			<a href="login.v.php">Iniciar Sesión</a>
		</p>
		</section>
		<div class="container">
		<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HAMBURGUESAS "PANTERA"</a>
    </div>
	</div>
	
</body>
</html>