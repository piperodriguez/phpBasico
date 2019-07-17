Ingresamos al papa de los paquete en php

https://packagist.org/
y buscamos doteny

seleccionamos el siguiente paquete xd !

https://packagist.org/packages/vlucas/phpdotenv

laravel lo utiliza jejejejdj!

jaaaaaaaaaaaaa!
el mismimo .env
en mi aplicacion jajaja !

Loads environment variables
from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.


creemos el .env


agregamos este codigo en public/index.php

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();


en el archivo .env

DB_HOST=localhost

declaramos una variable

y donde la queramos recuperar escribimos esto
echo getenv('DB_HOST');
