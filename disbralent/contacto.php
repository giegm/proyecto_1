<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>DISBRALENT C.A. | Contacto</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery.min.js"></script>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="css/formulario.css" />	
	<link rel="shortcut icon" href="images/iconos/favicon.ico" />
	<script type="text/javascript" src="js/form.js"></script>

	<!--[if lt IE 9]>
	    	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body oncontextmenu="return false" onkeydown="return false">
	<section>
		<h2>Contacto</h2>
		<form action="enviar-form.php" method="post" class="contact-form"  onsubmit="return validar(this);">				
			<div class="formulario">
				<div class="column">
					<label for="nombre">Nombre <span>(requerido)</span></label>
					<input type="text" name="nombre" id="nombre" maxlength="30" placeholder="Ingrese su nombre" class="form-input" onblur="revisar(this);"/>
					
					<label for="email">Email <span>(requerido)</span></label>
					<input type="email" name="email" id="email" maxlength="30" placeholder="Ingrese su correo" class="form-input" onblur="revisar(this); revisaremail(this);"/>
					
					<label for="asunto">Asunto <span>(requerido)</span></label>
					<input type="text" name="asunto" id="asunto" maxlength="30" placeholder="Ingrese un asunto" class="form-input" onblur="revisar(this);"/>

					<label for="adjunto">Adjunte su archivo</label>
					<input type="file" name="adjunto" id="adjunto"/>
					<?php

					?>
				</div>
				
				<div class="column">
					<label for="mensaje">Mensaje </label>
					<textarea name="mensaje" id="mensaje" maxlength="100" placeholder="Ingrese un mensaje" class="form-input" onblur="revisar(this);"></textarea>
				</div>				
				<input class="btn btn-danger" type="button" value="Cancelar" onclick="window.close()"/>
				<input class="btn btn-primary" type="submit" value="Enviar Mensaje"/>
			</div>		
		</form>
		<br><a href="index.php"><img width="213" heigth="142" src="images/iconos/Disbralent-C-A-_44862.jpg" title="logo empresa"/></a>
	</section>
</body>
</html>