<!DOCTYPE html>
<html>
	<head>
		<title>Menu Web</title>
		<meta charset="utf-8">
		<link href="main.css" rel="stylesheet" />
		<script type="text/javascript" src="script.js"></script>
	</head>
<body>
	<center>
		<div class="container">
			<center>
				<div class="cabecera">
					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Logo_Instituto_Polit%C3%A9cnico_Nacional.png/300px-Logo_Instituto_Polit%C3%A9cnico_Nacional.png" alt="IPN" id="ipn_logo">
					<h1>Ejercicios de tecnologias para la Web  </h1>
					<img src="http://www.escom.ipn.mx/images/logoESCOM2x.png" alt="ESCOM" id="escom_logo">
				</div>
				<div class="menu" id="titulo">Menu</div>
			</center>
			<div class="central">
				<div class = "temas">
					<ol type="1">
						<li>HTML</li>
						<ul type="o">
							<?php 
								foreach ($html_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
						<li>Listas</li>
						<ul type="o">
							<?php 
								foreach ($li_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
						<li>CSS</li>
						<ul type="o">
							<?php 
								foreach ($css_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
						<li>Formularios</li>
						<ul type="o">
							<?php 
								foreach ($form_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
						<li>Tablas</li>
						<ul type="o">
							<?php 
								foreach ($tb_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
						<li>JavaScript</li>
						<ul type="o">
							<?php 
								foreach ($js_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
						<li>PHP</li>
						<ul type="o">
							<?php 
								foreach ($php_temas as $key => $value) {
									echo "<li onclick="."nombre('".$key."','".$value."');".">".$key."</li>";
								}?>
						</ul>
					</ol>
				</div>
				<div class="derecha">
					<iframe class="principal" width="100%" height="90%" id="contenido"></iframe>
					<div class="datos">
						Numero de boleta: 2013010275<br>
						Nombre: Rivera Ortiz Jesús<br>
						Correo electronico: <a href="mailto:jesusrivera55.jr@gmail.com">jesusrivera55.jr@gmail.com</a> <br>
					</div>
				</div>
			</div>
		</div>
	</center>
</body>
</html>