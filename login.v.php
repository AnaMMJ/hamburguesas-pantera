<!DOCTYPE html>
<html lang="en">
		<head>
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
		</head>
<body>
<section class="main">	
	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión</h1>
		<hr class="border">
		<form method="get" name="login" class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>
			
			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder=" Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			
		</form>
		<p class="texto-registrate">
			¿Aún no tienes cuenta?
			<a href="registrate.php">Registrate</a>
		</section>
		</p>
	</div>
	<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HAMBURGUESAS "PANTERA"</a>
  </div>
</nav>
<!-- ================================================= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>