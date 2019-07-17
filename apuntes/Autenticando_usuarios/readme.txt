Autenticando usuarios
Prepararemos el controlador AuthController y la ruta /auth.

Utilizaremos Eloquent para acceder a la tabla User de la base de datos y obtener el password, para después compararlo y ejecutar la validación.

Las validaciones de password las haremos con la función password_verify()
