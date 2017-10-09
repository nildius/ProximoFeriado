# Documentación de la API Próximo Feriado
### PUT: /usuarios/add
	PRE: Deben enviarse por POST los campos ['nombre', 'apellido', 'edad', 'dni']
	POST: JSON con status de la inserción

### GET: /usuarios/{1}
	PRE: {1} : int
	POST: JSON los datos del usuario ['nombre', 'apellido', 'edad', 'dni']
