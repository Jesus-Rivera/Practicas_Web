<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Practica JS</title>
</head>
<body>
	<ol type="I">
		<li>Introduccion</li>
		<ul type="o">
			<li>Conceptos basicos de la WWW</li>
			<li>Evolucion historica de Internet y la WWW</li>
			<li>Historia y diferencia entre navegadires</li>
			<li>¿Que es la Web 2.0?</li>
			<li>Entornos de desarrollo para Aplicaciones Web</li>
		</ul>
		<li>Creación de páginas Web con XHTML</li>
		<li>Lenguaje de Marcaje extensible (XML)</li>
		<li>Hojas de Estilo</li>
		<li>JavaScript(Creacion de guines para páginas Web)</li>
		<li>Bibliotecas de JavaScript y Ajax (Comunicacion asincrona con el servidor)</li>
	</ol>
	<!--<center>
	<h2>Conversión</h2>
	<h3>Escribe un numero</h3>
	<form>
		<input type="text" id="num" required pattern="[0-9]{0,6}" maxlength="6"><br><br>
		<input type="submit" onclick="Convert()">
		</center>
	</form>
	<script lenguage="javascript">
		function Convert() 
		{
			var valor = document.getElementById("num").value;
			numero = Number(valor);

			var aux = numero;
			if(aux == 0)
			{
				document.write("CERO");
			}
			else
			{
				aux = Math.floor(numero/100000);
				if (aux > 1)
				{
					switch(aux)
					{
						case 2:
							document.write("DOS");
						break;
						case 3:
							document.write("TRES");
						break;
						case 4:
							document.write("CUATRO");
						break;
						case 5:
							document.write("CINCO");
						break;
						case 6:
							document.write("SEIS");
						break;
						case 7:
							document.write("SIETE");
						break;
						case 8:
							document.write("OCHO");
						break;
						case 9:
							document.write("NOVE");
						break;
					}
					document.write("CIENTOS ");
				}else if (aux == 1)
				{
					document.write("CIENTO ");
				}
				numero = numero - (aux*100000);
				aux = Math.floor(numero/10000);
				switch(aux)
				{
					case 1:
						document.write("DIEZ");
					break;
					case 2:
						document.write("VEINTE");
					break;
					case 3:
						document.write("TREINTA");
					break;
					case 4:
						document.write("CUARENTA");
					break;
					case 5:
						document.write("CINCUENTA");
					break;
					case 6:
						document.write("SESENTA");
					break;
					case 7:
						document.write("SETENTA");
					break;
					case 8:
						document.write("OCHENTA");
					break;
					case 9:
						document.write("NOVENTA");
					break;
				}
				document.write(" ");
				numero = numero - (aux*10000);
				aux = Math.floor(numero/1000);
				if(aux > 0)
				{
					switch(aux)
					{
						case 1:
							document.write("UN");
						break;
						case 2:
							document.write("DOS");
						break;
						case 3:
							document.write("TRES");
						break;
						case 4:
							document.write("CUATRO");
						break;
						case 5:
							document.write("CINCO");
						break;
						case 6:
							document.write("SEIS");
						break;
						case 7:
							document.write("SIETE");
						break;
						case 8:
							document.write("OCHO");
						break;
						case 9:
							document.write("NUEVE");
						break;
					}
					document.write(" MIL ");
				}
				numero = numero - (aux*1000);
				aux = Math.floor(numero/100);
				if (aux > 1)
				{
					switch(aux)
					{
						case 2:
							document.write("DOS");
						break;
						case 3:
							document.write("TRES");
						break;
						case 4:
							document.write("CUATRO");
						break;
						case 5:
							document.write("CINCO");
						break;
						case 6:
							document.write("SEIS");
						break;
						case 7:
							document.write("SIETE");
						break;
						case 8:
							document.write("OCHO");
						break;
						case 9:
							document.write("NOVE");
						break;
					}
					document.write("CIENTOS ");
				}else if (aux == 1)
				{
					document.write("CIENTO ");
				}
				numero = numero - (aux*100);
				aux = Math.floor(numero/10);
				switch(aux)
				{
					case 1:
						document.write("DIEZ");
					break;
					case 2:
						document.write("VEINTE");
					break;
					case 3:
						document.write("TREINTA");
					break;
					case 4:
						document.write("CUARENTA");
					break;
					case 5:
						document.write("CINCUENTA");
					break;
					case 6:
						document.write("SESENTA");
					break;
					case 7:
						document.write("SETENTA");
					break;
					case 8:
						document.write("OCHENTA");
					break;
					case 9:
						document.write("NOVENTA");
					break;
				}
				document.write(" ");
				numero = numero - (aux*10);
				aux = Math.floor(numero);
				switch(aux)
				{
					case 1:
						document.write("UN");
					break;
					case 2:
						document.write("DOS");
					break;
					case 3:
						document.write("TRES");
					break;
					case 4:
						document.write("CUATRO");
					break;
					case 5:
						document.write("CINCO");
					break;
					case 6:
						document.write("SEIS");
					break;
					case 7:
						document.write("SIETE");
					break;
					case 8:
						document.write("OCHO");
					break;
					case 9:
						document.write("NUEVE");
					break;
				}
			}
		}
	</script>-->
</body>
</html>