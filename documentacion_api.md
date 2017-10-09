# Documentación de la API Próximo Feriado
		
		<div class="funcion">
			<h4>/usuarios/add</h4>
			<p>Método: PUT</p>
			<p>PRE: Deben enviarse por POST los campos ['nombre', 'apellido', 'edad', 'dni']</p>
			<p>POST: JSON con status de la inserción</p>
		</div>
		<div class="funcion">
			<h4>/usuarios/{1}</h4>
			<p>Método: GET</p>
			<p>PRE: {1} : int</p>
			<p>POST: JSON los datos del usuario ['nombre', 'apellido', 'edad', 'dni']</p>
		</div>
