# Documentación de la API Próximo Feriado
### JSON Format:
	{
		'status': {
			'ok' : 'ok' OR 'error',
			'msg' : 'Mensaje del error'
		}
		'content' : {
		
		}
	}

### GET: /show/{country}/{date}
	PRE: 
	{country} : Pais en estandar ISO 3166-1 (AR, ES, UY, CL, BR, etc)
	{date} : Fecha en formato yyyy-mm-dd
	POST: JSON con la fecha del proximo feriado, el nombre y la descripción.

### GET: /showAll/{country}/{mes}
	PRE: 
	{country} : Pais en estandar ISO 3166-1 (AR, ES, UY, CL, BR, etc)
	{mes} : Fecha en formato mm (01, 04, 09)
	POST: JSON diccionario donde clave es el numero del dia, y descripcion mismo JSON que punto anterior.
