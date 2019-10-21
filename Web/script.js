function nombre($nombre,$archivo) { 
	document.getElementById('titulo').innerHTML = $nombre;
	var frame = document.getElementById('contenido')
	frame.src = $archivo;
}